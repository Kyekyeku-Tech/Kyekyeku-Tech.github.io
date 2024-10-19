@extends('admin.layouts.app')
@section('panel')

<div class="col-md-12 mb-30">
	<div class="card bl--5-primary">
		<div class="card-body">
			<ul class="list">
				<li><strong>@lang('Only Clicked')</strong>: @lang('That means the user only clicks and is not confirmed.')</li>
				<li><strong>@lang('Clicked & Confirm')</strong>: @lang('That means the user click and confirms the ad.')</li>
			</ul>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div id="chart"></div>
	</div>
</div>
    
@endsection

@push('script-lib')
    <script src="{{asset('assets/admin/js/vendor/apexcharts.min.js')}}"></script> 
@endpush

@push('script')
  <script>
	
    (function($){
		'use strict';

		var options = {
			series: [{
				name: 'Only Clicked',
				data: [@foreach($data as $k => $v){{ $v['clicks'] }},@endforeach]
			},
			{
				name: 'Clicked & Confirmed',
				data: [@foreach($data as $k => $v){{ $v['confirms'] }},@endforeach]
			}
			],
			chart: {
				type: 'area',
				height: 500,
				toolbar: {
					show: false
				}
			},
			xaxis: {
				categories: [
					@foreach($data as $k => $v)'{{ $k }} sec',@endforeach
				],
				type: 'category'
			},
			yaxis: {
          		title: {
            		text: '{{ $total }} VIEWS'
          		}
        	},
			fill: {
				opacity: 1
			},
			tooltip: {
				y: {
					formatter: function (val) {
					return val + " Views"
					}
				}
			}
		};

  		var chart = new ApexCharts(document.querySelector("#chart"), options);
  		chart.render();
	})(jQuery);
	
  </script>
@endpush

@push('breadcrumb-plugins')
	<x-back route="{{ route('admin.ptc.index') }}" />
@endpush