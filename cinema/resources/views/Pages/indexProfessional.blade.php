@extends('layout')



@section('js')
    @parent
    <script src="{{ asset('js/realtime.js') }}"> </script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
    <script src="http://code.highcharts.com/modules/data.js"></script>
    <script src="http://code.highcharts.com/modules/drilldown.js"></script>
    <script src="{{ asset('js/chart.js') }}"> </script>

@endsection

@section('content')


    <div class="row">
        <div class="pull-right">
            <div class="btn-group">
                <a href="{{ route('home') }}" class="active btn">Simple</a>
                <a href="{{ route('advanced') }}" class="btn">Advanced</a>
                <a href="{{ route('professional') }}" class="btn">Professional</a>
            </div>
        </div>
        <hr class="row" />
    </div>
    <br />
    <br />
    <br />


    <div  ng-app="chartApp" >
        <div ng-controller="StatsCtrl">

        </div>
    </div>

    <div id="container" class="col-md-6" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


    <div id="container2" class="col-md-6" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    <div id="container3" class="col-md-6" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
    <div id="container4" class="col-md-6" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
    <div id="container5" class="col-md-6" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
    <div id="container6" class="col-md-6" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>




@endsection