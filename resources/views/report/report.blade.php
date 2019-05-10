@extends('layouts.master')

@section('css')
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "Sales Report"
                },
                axisY: {
                    title: "Growth Rate (in %)",
                    suffix: "%",
                    includeZero: false
                },
                axisX: {
                    title: "Products"
                },
                data: [{
                    type: "column",
                    yValueFormatString: "#,##0.0#\"%\"",
                    dataPoints: [
                        { label: "Black Label", y: 7.1 },
                        { label: "Coke Drinks", y: 6.70 },
                        { label: "maheu", y: 5.00 },
                        { label: "Lion Larger", y: 2.50 }

                    ]
                }]
            });
            chart.render();

        }
    </script>
@stop
@section('page_header')
    <li class="breadcrumb-item active"><span>Sales Report</span></li>
@stop



@section('content')
    <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
    @stop
@section('js')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
@stop
