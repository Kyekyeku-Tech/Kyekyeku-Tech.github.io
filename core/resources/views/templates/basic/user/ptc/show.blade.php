<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="image/png" href="{{ getImage(fileManager()->logoIcon()->path . '/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- bootstrap -->
    @php
        $activeTemplateTrue = activeTemplate(true);
    @endphp
    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/global/js/jquery-3.6.0.min.js') }}"></script>
    <title> {{ $general->sitename(__($pageTitle)) }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <script>
        document.addEventListener('visibilitychange', function() {
            if (document.visibilityState === 'hidden') {
                document.body.innerHTML = `
                       <div class="d-flex flex-wrap justify-content-center align-items-center clear-msg">
                              <img src="{{ asset('assets/images/somethingwrong.png') }}" alt="@lang('image')" class="img-fluid mx-auto mb-5">
                        </div>
                    `;
            }
        });
    </script>
    <style>
        /* Header Css Start */
        .bg--gradient {

            background: linear-gradient(to left, rgb(77 0 231), rgb(119 10 159));
        }

        /* Header Css End */



        #myProgress {
            width: 100%;
            background-color: #ffffff42;
            border-radius: 5px;
            overflow: hidden;
        }

        #myBar {
            width: 10%;
            height: 30px;
            background-color: #5FA625;
            text-align: center;
            line-height: 30px;
            color: white;
            background-color: green;
            background-color: #001880;
        }

        .adFram {
            top: 78px !important;
        }

        #confirm {
            color: white;
            font-weight: 600;
        }

        li.active {
            display: flex;
            align-items: center;
            justify-content: end;
        }

        @media (max-width: 767px) {
            li.active {
                display: block;
            }
        }

        .inputcaptcha {
            width: 60px;
        }

        @media (max-width: 575px) {
            .confirm-btn {
                text-align: left;
                margin-top: 10px;
            }

            .inputcaptcha {
                width: 55px;
            }

        }



        #inputcaptchahidden {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 5px;
        }

        .inputcaptcha[readonly] {
            color: #ffffff94;
            background-color: #0018805c;
        }

        input {
            border: 0;
            border-radius: 3px;
            padding: 3px 10px;
            background-color: #ffffff6e;
        }

        input:focus-visible {
            border: 0;
            outline: 0;
        }

        .btn {
            padding: 3px 15px;
            border: 0;
        }

        @media (max-width: 767px) {
            ul.nav.navbar-nav.navbar-right {
                margin-top: 15px;
            }

            .container {
                display: flex !important;
                justify-content: center !important;
            }
        }

        @media (max-width: 320px) {
            .row {
                display: flex;
                justify-content: center;
            }

        }

        .adFram {
            border: 0;
            position: absolute;
            top: 14%;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%
        }

        .adFram {
            top: 86px;
        }

        @media (max-width: 400px) {
            .advertise-wrapper iframe {
                margin-top: unset;
            }
        }

        .adBody {
            position: absolute;
            top: 30%;
            left: 40%;
        }

        .iframe-container {
            position: absolute;
            width: 60%;
            padding-bottom: 56.25%;
            display: flex;
            justify-content: center;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media only screen and (max-width: 767px) {
            .adFram {
                top: 116px !important;
            }
        }

        @media only screen and (max-width: 575px) {
            .adFram {
                top: 156px !important;
            }
        }

        
        /* ======================= Modal Css Start =========================== */
        .btn-primary {
            padding: 0.5rem 1rem; 
            background-color: #fd7e17;  
        }
        .btn-primary:hover, .btn-primary:focus {
            background-color: #df6a0a !important;  
        }
        .btn-primary:active:focus {
            box-shadow: none; 
        }
        .btn:focus, .btn:active {
            box-shadow: none; 
        }
        button.close {
            font-size: 24px;
            line-height: 1;
            padding: 0; 
        }
        button.close:focus {
            box-shadow: none; 
        }
        button.close span {
            line-height: 1; 
        }
        .form-select:focus, .form-control:focus {
            border-color: #fd7e17;
            outline: 0;
            box-shadow: none;
        }
        .modal-title {
            line-height: 1;
        }
        textarea.form-control {
            min-height: 120px;
        }
        /* ======================= Modal Css End =========================== */
        
        
        
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg--gradient py-4">
        <div class="container">
            <div class="row w-100">
                <div class="col-md-4">
                    <div id="myProgress">
                        <div id="myBar">0%</div>
                    </div>
                </div>
                <div class="col-md-8">
                    <form action="" id="confirm-form" method="post">
                        @csrf
                        <ul class="nav navbar-nav text-end mt-md-0 mt-2">
                            <li class="active d-sm-flex justify-content-md-end justify-content-start">
                                <span id="inputcaptchahidden" class="d-none">
                                    <input id="cap_number_1" name="first_number" class="inputcaptcha" value="{{ rand(0, 9) }}" type="text" readonly>
                                    <label class="text-white"> + </label>
                                    <input id="cap_number_2" name="second_number" class="inputcaptcha" value="{{ rand(0, 9) }}" type="text" readonly>
                                    <label class="text-white">=</label>
                                    <input type="number" name="result" class="inputcaptcha" id="cap_result" required>&nbsp;
                                    <input type="hidden" name="engagement_id" value="{{ $engagement->id }}">
                                </span>
                                <div class="confirm-btn">
                                    <button type="button" id="confirm" class="btn btn-danger btn-md mt-sm-0 mt-2" disabled>
                                        @lang('Loading Ads')
                                    </button>
                                    <button type="button" id="report" class="btn btn-danger btn-md">@lang('Report')</button>
                                </div>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">@lang('Report This Ad')</h5>
                    <button type="button" class="close btn" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('user.ptc.report.submit') }}" method="POST">
                    @csrf
                    <input type="hidden" name="ptc_id" value="{{ $ptc->id }}">
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label>@lang("Type")</label>
                            <select name="type" class="form-control form-select" required>
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}">{{ __($type->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang("Description")</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary w-100">@lang("Submit")</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        (function($, document) {
            "use strict";
            $('#cap_result').on('input', function() {
                var val1 = document.getElementById("cap_number_1").value;
                var val2 = document.getElementById("cap_number_2").value;
                var val3 = document.getElementById("cap_result").value;
                var sum = parseInt(+val1 + +val2);
                if (sum == val3) {
                    var confirmButton = document.getElementById("confirm");
                    confirmButton.removeAttribute('disabled');
                    confirmButton.setAttribute('type', 'submit');
                    confirmButton.className = "btn btn-success";
                    document.getElementById('confirm-form').setAttribute('action', '{{ route('user.ptc.confirm', encrypt($ptc->id . '|' . auth()->user()->id)) }}');
                } else {
                    var confirmButton = document.getElementById("confirm");
                    confirmButton.setAttribute('disabled', '');
                    confirmButton.className = "btn btn-danger";
                    confirmButton.removeAttribute('href', '#');
                }
            });

            function move() {
                var elem = document.getElementById("myBar");
                var width = 0;
                var id = setInterval(frame, {{ $ptc->duration * 10 }});

                function frame() {
                    if (width >= 100) {
                        var confirmButton = document.getElementById("confirm");
                        confirmButton.className = "btn btn-danger";
                        confirmButton.innerHTML = "Confirm Earn";
                        var captchaInputHidden = document.getElementById("inputcaptchahidden");
                        captchaInputHidden.classList.remove("d-none");
                        clearInterval(id);
                    } else {
                        width++;
                        elem.style.width = width + '%';
                        elem.innerHTML = width + '%';
                    }
                }
            }
            window.onload = move;

            $('#report').on("click", function(){
                var modal = $('#reportModal');
                modal.modal('show');
            });

            $(window).on('beforeunload', function() {
                $.get("{{ route('user.ptc.engagement', $engagement->id) }}", {},function (data, textStatus, jqXHR) {});
            });

        })(jQuery, document);
    </script>

    <div class="advertise-wrapper">
        @if ($ptc->ads_type == 1)
            <iframe src="{{ $ptc->ads_body }}" class="adFram"></iframe>
        @elseif($ptc->ads_type == 2)
            <div class="container mt-5">
                <img src="{{ getImage(fileManager()->ptc()->path . '/' . $ptc->ads_body) }}" class="w-100">
            </div>
        @elseif($ptc->ads_type == 3)
            <div class="adBody">
                @php echo $ptc->ads_body @endphp
            </div>
        @else
            <div class="d-flex justify-content-center">
                <div class="iframe-container">
                    <iframe src="{{ $ptc->ads_body }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        @endif
    </div>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
