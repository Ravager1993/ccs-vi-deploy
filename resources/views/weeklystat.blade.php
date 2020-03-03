@extends('layouts.app')

@section('content')
<?php
    use Carbon\Carbon;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
{{-- <script src="{{ asset('js/chart.js') }}"></script> --}}
<script>
    var g1W1=0;
    var g1W2=0;
    var g1W3=0;
    var g1W4=0;

    var g2W1=0;
    var g2W2=0;
    var g2W3=0;
    var g2W4=0;

    var g3W1=0;
    var g3W2=0;
    var g3W3=0;
    var g3W4=0;

    var g4W1=0;
    var g4W2=0;
    var g4W3=0;
    var g4W4=0;

    var g5W1=0;
    var g5W2=0;
    var g5W3=0;
    var g5W4=0;

    var g6W1=0;
    var g6W2=0;
    var g6W3=0;
    var g6W4=0;

    function g1Data(d) {
            if(d==1)
                g1W1++;
            else if(d==2)
                g1W2++;
            else if(d==3)
                g1W3++;
            else if(d==4)
                g1W4++;
        }

    function g2Data(d) {
            if(d==1)
                g2W1++;
            else if(d==2)
                g2W2++;
            else if(d==3)
                g2W3++;
            else if(d==4)
                g2W4++;
        }

    function g3Data(d) {
            if(d==1)
                g3W1++;
            else if(d==2)
                g3W2++;
            else if(d==3)
                g3W3++;
            else if(d==4)
                g3W4++;
        }

    function g4Data(d) {
            if(d==1)
                g4W1++;
            else if(d==2)
                g4W2++;
            else if(d==3)
                g4W3++;
            else if(d==4)
                g4W4++;
        }

    function g5Data(d) {
            if(d==1)
                g5W1++;
            else if(d==2)
                g5W2++;
            else if(d==3)
                g5W3++;
            else if(d==4)
                g5W4++;
        }

    function g6Data(d) {
            if(d==1)
                g6W1++;
            else if(d==2)
                g6W2++;
            else if(d==3)
                g6W3++;
            else if(d==4)
                g6W4++;
        }

</script>
    <div class="container">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card history-chart py-4">
                    <div class="container-fluid header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h4>History</h4>
                            </div>
  
                        </div>
   
                    </div>
                    <div class="body isResizable">
                        <div class="container-fluid chart-containter">
                            <canvas id="chart" height="256"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($counter as $count)
        @if (($count['grade_level']==1) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g1Data(1);</script>
        @elseif(($count['grade_level']==1) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g1Data(2);</script>
        @elseif(($count['grade_level']==1) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g1Data(3);</script>
        @elseif(($count['grade_level']==1) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g1Data(4);</script>
        @endif

        @if (($count['grade_level']==2) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g2Data(1);</script>
        @elseif(($count['grade_level']==2) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g2Data(2);</script>
        @elseif(($count['grade_level']==2) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g2Data(3);</script>
        @elseif(($count['grade_level']==2) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g2Data(4);</script>
        @endif

        @if (($count['grade_level']==3) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g3Data(1);</script>
        @elseif(($count['grade_level']==3) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g3Data(2);</script>
        @elseif(($count['grade_level']==3) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g3Data(3);</script>
        @elseif(($count['grade_level']==3) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g3Data(4);</script>
        @endif

        @if (($count['grade_level']==4) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g4Data(1);</script>
        @elseif(($count['grade_level']==4) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g4Data(2);</script>
        @elseif(($count['grade_level']==4) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g4Data(3);</script>
        @elseif(($count['grade_level']=42) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g4Data(4);</script>
        @endif

        @if (($count['grade_level']==5) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g5Data(1);</script>
        @elseif(($count['grade_level']==5) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g5Data(2);</script>
        @elseif(($count['grade_level']==5) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g5Data(3);</script>
        @elseif(($count['grade_level']==5) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g5Data(4);</script>
        @endif

        @if (($count['grade_level']==6) && (date('W', strtotime($count['created_at']))%4)==0)
            <script>g6Data(1);</script>
        @elseif(($count['grade_level']==6) && (date('W', strtotime($count['created_at']))%4)==1)
            <script>g6Data(2);</script>
        @elseif(($count['grade_level']==6) && (date('W', strtotime($count['created_at']))%4)==2)
            <script>g6Data(3);</script>
        @elseif(($count['grade_level']==6) && (date('W', strtotime($count['created_at']))%4)==3)
            <script>g6Data(4);</script>
        @endif

    @endforeach
    <span id="test"></span>
    <script>
        
        var config = {
    type: 'line',
    data: {
        labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
        // labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [
            {
            label: "Grade 1",
            fill: false,
            backgroundColor: window.chartColors.red,
            borderColor: window.chartColors.red,
            lineTension: 0,
            borderWidth: 1,
            // borderDash: [2, 2],
            data: [
                g1W1,
                g1W2,
                g1W3,
                g1W4
            ],
        }, {
            label: "Grade 2",
            fill: false,
            backgroundColor: window.chartColors.orange,
            borderColor: window.chartColors.orange,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [4, 1],
            data: [
                g2W1,
                g2W2,
                g2W3,
                g2W4
            ],
        }, {
            label: "Grade 3",
            backgroundColor: window.chartColors.yellow,
            borderColor: window.chartColors.yellow,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g3W1,
                g3W2,
                g3W3,
                g3W4
            ],
            fill: false,
        }, {
            label: "Grade 4",
            backgroundColor: window.chartColors.green,
            borderColor: window.chartColors.green,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g4W1,
                g4W2,
                g4W3,
                g4W4
            ],
            fill: false,
        }, {
            label: "Grade 5",
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g5W1,
                g5W2,
                g5W3,
                g5W4
            ],
            fill: false,
        }, {
            label: "Grade 6",
            backgroundColor: window.chartColors.purple,
            borderColor: window.chartColors.purple,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g6W1,
                g6W2,
                g6W3,
                g6W4
            ],
            fill: false,
        }
    ]
    },
    options: {
        maintainAspectRatio: false,
        responsive: true,
        // legend: {
        //     position: 'top'
        // },
        title: {
            // position: 'bottom',
            display: true,
            text: 'Statistics'
        },
        tooltips: {
            mode: 'index',
            intersect: false,
        },
        hover: {
            mode: 'nearest',
            intersect: true
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false
                }
            }]
        }
    }
};
    </script>
@endsection