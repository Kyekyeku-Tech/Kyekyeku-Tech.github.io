@extends($activeTemplate . 'layouts.mobile')
@section('content')
    <style>
        body {
            overflow: hidden;
        }

        #appCapsule {
            padding-top: 56px;
            padding-bottom: 150px;
            height: 100%;
            /* background: rgb(0, 168, 17); */
            background: rgba(255, 255, 255, 0);
        }
        .canvasjs-chart-credit{
            display: none;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script type="text/javascript" src="https://cdn.canvasjs.com/canvasjs.stock.min.js"></script>
    <script type="text/javascript">
        window.onload = function() {
            var dataPoints = [],
                currentDate = new Date(),
                rangeChangedTriggered = false;
            var stockChart = new CanvasJS.StockChart("chartContainer", {
                theme: "light2", //"light2", "dark1", "dark2"
                backgroundColor: "#fff0",
                color: "#00d094",
                title: {
                    // text: ""
                },
                rangeChanged: function(e) {
                    rangeChangedTriggered = true;
                },
                charts: [{
                    axisX: {
                        crosshair: {
                            enabled: true,
                            valueFormatString: "MMM DD, YYYY HH:mm:ss"
                        }
                    },
                    axisY: {
                        // title: "Pageviews Per Second"
                    },
                    toolTip: {
                        shared: true
                    },
                    data: [{
                        type: "line",
                        color: "#00d094",
                        name: "GPT/USDT",
                        xValueFormatString: "MMM DD, YYYY HH:mm:ss",
                        xValueType: "dateTime",
                        dataPoints: dataPoints
                    }]
                }],
                navigator: {
                    slider: {
                        minimum: new Date(currentDate.getTime() - (90 * 1000))
                    },
                    axisX: {
                        labelFontColor: "white"
                    }
                },
                rangeSelector: {
                    enabled: false
                }
            });
            var dataCount = 700,
                ystart = 10,
                interval = 1000,
                xstart = (currentDate.getTime() - (700 * 1000));
            updateChart(xstart, ystart, dataCount, interval);

            function updateChart(xstart, ystart, length, interval) {
                var xVal = xstart,
                    yVal = ystart;
                for (var i = 0; i < length; i++) {
                    // yVal = yVal + Math.round(5 + Math.random() * (-5 - 5));
                    yVal = yVal + (5 + Math.random() * (-5 - 5));
                    yVal = Math.min(Math.max(yVal, 5), 100);
                    dataPoints.push({
                        x: xVal,
                        y: yVal
                    });
                    xVal += interval;
                }
                if (!rangeChangedTriggered) {
                    stockChart.options.navigator.slider.minimum = new Date(xVal - (90 * 1000));
                }
                xstart = xVal;
                dataCount = 1;
                ystart = yVal;
                stockChart.render();
                setTimeout(function() {
                    updateChart(xstart, ystart, dataCount, interval);
                }, 500);
            }
        }
    </script>



    <div id="appCapsule">
        {{-- <canvas id="mixedchartjs"></canvas> --}}

        <div id="chartContainer" class="mt-1" style="height: 100%; width: 100%;"></div>


        <!-- TradingView Widget BEGIN -->
        {{-- <div class="tradingview-widget-container" style="height: 100%; border: none;">
            <div id="tradingview_9ee79" style="height: 100%; border: none;"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget({
                    "autosize": true,
                    "symbol": "BINANCE:BTCUSDT",
                    "interval": "1",
                    "timezone": "Etc/UTC",
                    "theme": "light",
                    "style": "1",
                    "locale": "en",
                    "enable_publishing": false,
                    "backgroundColor": "rgba(242, 242, 242, 1)",
                    "hide_top_toolbar": true,
                    "hide_legend": true,
                    "save_image": false,
                    "hide_volume": true,
                    "container_id": "tradingview_9ee79"
                });
            </script>
        </div> --}}
        <!-- TradingView Widget END -->
    </div>

    <!--bottom-nav-->
    <nav class="navbar2 fixed-bottom2">
        <div class="container">
            <div class="row mt-3">
                <div class="col-6">
                    <div class="border border-secondary border-1 rounded text-center text-primary w-100">
                        <span id="timer">24h</span>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border border-secondary border-1 rounded text-center text-primary w-100">
                        {{ $user->plan_id ? @$user->plan->name : 'No Plan' }}
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <a href="#" class="btn btn-danger btn-sm w-100">Trade</a>
                </div>
                <div class="col-6">
                    @if (\Carbon\Carbon::parse($user->collect_date) >= \Carbon\Carbon::today())
                        <a href="#" id="collectBtn" class="btn btn-success btn-sm w-100 collectProfit">Profit</a>
                    @else
                        <a href="#" id="collectBtn" class="btn btn-success btn-sm w-100 collectProfit">Collect -
                            {{ $general->cur_sym }}{{ $user->plan->daily_profit }}</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>
@endsection
@push('script')
    <script>
        $(document).on('click', '.collectProfit', function(e) {
            e.preventDefault();
            $(this).removeClass('collectProfit');
            let timer = 5;
            $('#collectBtn').html(Spiner);
            $.ajax({
                type: "POST",
                url: "{{ route('user.trading.profit') }}",
                success: function(res) {
                    if (res.cls == 'success') {
                        let myInterval = setInterval(() => {
                            $('#timer').html(timer);
                            timer = timer - 1;
                            console.log(timer);
                            if (timer === 0) {
                                $('#timer').html('Complete');
                                clearInterval(myInterval)
                                $.ajax({
                                    type: "post",
                                    url: "{{ route('user.collect.profit') }}",
                                    success: function(response) {
                                        notifyMsgBig('Collected!', response.msg,
                                            response.cls);
                                        userDataApi()
                                        $('#collectBtn').html('Profit');
                                        $('#collectBtn').addClass('collectProfit');
                                    }
                                });

                            }
                        }, 1000);
                    } else {
                        notifyMsg(res.msg, res.cls);
                        $('#collectBtn').html('Profit');
                        $('#collectBtn').addClass('collectProfit');
                    }
                }
            });
        });

        // $(document).on('click', '.collectProfit2', function(e) {
        //     e.preventDefault();
        //     $(this).removeClass('collectProfit');
        //     let timer = 5;
        //     $('.collectProfit').html(Spiner);
        // });
    </script>

    <script>
        /* Dashboard chart combo line and bar */
        /* sales area chart */

        window.randomScalingFactor = function() {
            return Math.round(Math.random() * 50);
        }

        var areachart = document.getElementById('mixedchartjs').getContext('2d');
        var gradient1 = areachart.createLinearGradient(0, 0, 0, 10000);
        gradient1.addColorStop(0, 'rgb(0 208 148)');
        gradient1.addColorStop(0.5, 'rgba(0, 186, 255, 0)');
        var gradient2 = areachart.createLinearGradient(0, 0, 0, 10000);
        gradient2.addColorStop(0, 'rgb(255, 82, 122)');
        gradient2.addColorStop(1, 'rgba(255, 82, 122, 0)');

        area();

        function area() {

            var configareachart = {
                type: 'bar',
                data: {
                    labels: ['0', 'Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7'],
                    datasets: [{
                        label: 'My First dataset',
                        borderWidth: '1',
                        borderColor: '#00baff',
                        backgroundColor: gradient1,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                    }, {
                        label: 'My First dataset',
                        borderWidth: '1',
                        borderColor: '#ff3f73',
                        backgroundColor: gradient2,
                        data: [
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor(),
                            randomScalingFactor()
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    elements: {
                        point: {
                            radius: '1',
                        }
                    },
                    title: {
                        display: false,
                        text: 'Chart.js Line Chart - Stacked Area'
                    },
                    tooltips: {
                        mode: 'index',
                    },
                    hover: {
                        mode: 'index'
                    },
                    legend: {
                        display: false,
                    },
                    scales: {
                        xAxes: [{
                            ticks: {
                                display: false,
                                fontColor: "#90b5ff",
                            },
                            display: false,
                            stacked: false,
                            scaleLabel: {
                                display: false,
                                labelString: 'Month'
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                display: false,
                                fontColor: "#90b5ff",
                            },
                            display: false,
                            stacked: false,
                            scaleLabel: {
                                display: false,
                                labelString: 'Value'
                            }
                        }]
                    }
                }
            };

            window.salesareachart = new Chart(areachart, configareachart);

            setInterval(function() {
                configareachart.data.datasets.forEach(function(dataset) {
                    dataset.data = dataset.data.map(function() {
                        return randomScalingFactor();
                    });

                });
                window.salesareachart.update();
            }, 1100);

        }
    </script>
@endpush
