@extends('layouts.app')

@section('content')

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script> --}}
{{-- <script src="{{ asset('js/chart.js') }}"></script> --}}
<script>
    var g1Mon=0;
    var g1Tue=0;
    var g1Wed=0;
    var g1Thu=0;
    var g1Fri=0;
    var g1Sat=0;
    var g1Sun=0;

    var g2Mon=0;
    var g2Tue=0;
    var g2Wed=0;
    var g2Thu=0;
    var g2Fri=0;
    var g2Sat=0;
    var g2Sun=0;

    var g3Mon=0;
    var g3Tue=0;
    var g3Wed=0;
    var g3Thu=0;
    var g3Fri=0;
    var g3Sat=0;
    var g3Sun=0;

    var g4Mon=0;
    var g4Tue=0;
    var g4Wed=0;
    var g4Thu=0;
    var g4Fri=0;
    var g4Sat=0;
    var g4Sun=0;

    var g5Mon=0;
    var g5Tue=0;
    var g5Wed=0;
    var g5Thu=0;
    var g5Fri=0;
    var g5Sat=0;
    var g5Sun=0;

    var g6Mon=0;
    var g6Tue=0;
    var g6Wed=0;
    var g6Thu=0;
    var g6Fri=0;
    var g6Sat=0;
    var g6Sun=0;

    function g1Data(d) {
            if(d==1)
                g1Mon++;
            else if(d==2)
                g1Tue++;
            else if(d==3)
                g1Wed++;
            else if(d==4)
                g1Thu++;
            else if(d==5)
                g1Fri++;
            else if(d==6)
                g1Sat++;
            else if(d==7)
                g1Sun++;
        }

    function g2Data(d) {
            if(d==1)
                g2Mon++;
            else if(d==2)
                g2Tue++;
            else if(d==3)
                g2Wed++;
            else if(d==4)
                g2Thu++;
            else if(d==5)
                g2Fri++;
            else if(d==6)
                g2Sat++;
            else if(d==7)
                g2Sun++;
        }

    function g3Data(d) {
            if(d==1)
                g3Mon++;
            else if(d==2)
                g3Tue++;
            else if(d==3)
                g3Wed++;
            else if(d==4)
                g3Thu++;
            else if(d==5)
                g3Fri++;
            else if(d==6)
                g3Sat++;
            else if(d==7)
                g3Sun++;
        }

    function g4Data(d) {
            if(d==1)
                g4Mon++;
            else if(d==2)
                g4Tue++;
            else if(d==3)
                g4Wed++;
            else if(d==4)
                g4Thu++;
            else if(d==5)
                g4Fri++;
            else if(d==6)
                g4Sat++;
            else if(d==7)
                g4Sun++;
        }

    function g5Data(d) {
            if(d==1)
                g5Mon++;
            else if(d==2)
                g5Tue++;
            else if(d==3)
                g5Wed++;
            else if(d==4)
                g5Thu++;
            else if(d==5)
                g5Fri++;
            else if(d==6)
                g5Sat++;
            else if(d==7)
                g5Sun++;
        }

    function g6Data(d) {
            if(d==1)
                g6Mon++;
            else if(d==2)
                g6Tue++;
            else if(d==3)
                g6Wed++;
            else if(d==4)
                g6Thu++;
            else if(d==5)
                g6Fri++;
            else if(d==6)
                g6Sat++;
            else if(d==7)
                g6Sun++;
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
        @if (($count['grade_level']==1) && date('N', strtotime($count['created_at']))==1)
            <script>g1Data(1);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==2)
            <script>g1Data(2);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==3)
            <script>g1Data(3);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==4)
            <script>g1Data(4);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==5)
            <script>g1Data(5);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==6)
            <script>g1Data(6);</script>
        @elseif(($count['grade_level']==1) && date('N', strtotime($count['created_at']))==7)
            <script>g1Data(7);</script>
        @endif

        @if (($count['grade_level']==2) && date('N', strtotime($count['created_at']))==1)
            <script>g2Data(1);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==2)
            <script>g2Data(2);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==3)
            <script>g2Data(3);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==4)
            <script>g2Data(4);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==5)
            <script>g2Data(5);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==6)
            <script>g2Data(6);</script>
        @elseif(($count['grade_level']==2) && date('N', strtotime($count['created_at']))==7)
            <script>g2Data(7);</script>
        @endif

        @if (($count['grade_level']==3) && date('N', strtotime($count['created_at']))==1)
            <script>g3Data(1);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==2)
            <script>g3Data(2);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==3)
            <script>g3Data(3);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==4)
            <script>g3Data(4);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==5)
            <script>g3Data(5);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==6)
            <script>g3Data(6);</script>
        @elseif(($count['grade_level']==3) && date('N', strtotime($count['created_at']))==7)
            <script>g3Data(7);</script>
        @endif

        @if (($count['grade_level']==4) && date('N', strtotime($count['created_at']))==1)
            <script>g4Data(1);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==2)
            <script>g4Data(2);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==3)
            <script>g4Data(3);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==4)
            <script>g4Data(4);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==5)
            <script>g4Data(5);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==6)
            <script>g4Data(6);</script>
        @elseif(($count['grade_level']==4) && date('N', strtotime($count['created_at']))==7)
            <script>g4Data(7);</script>
        @endif

        @if (($count['grade_level']==5) && date('N', strtotime($count['created_at']))==1)
            <script>g5Data(1);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==2)
            <script>g5Data(2);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==3)
            <script>g5Data(3);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==4)
            <script>g5Data(4);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==5)
            <script>g5Data(5);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==6)
            <script>g5Data(6);</script>
        @elseif(($count['grade_level']==5) && date('N', strtotime($count['created_at']))==7)
            <script>g5Data(7);</script>
        @endif

        @if (($count['grade_level']==6) && date('N', strtotime($count['created_at']))==1)
            <script>g6Data(1);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==2)
            <script>g6Data(2);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==3)
            <script>g6Data(3);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==4)
            <script>g6Data(4);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==5)
            <script>g6Data(5);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==6)
            <script>g6Data(6);</script>
        @elseif(($count['grade_level']==6) && date('N', strtotime($count['created_at']))==7)
            <script>g6Data(7);</script>
        @endif
    @endforeach
    <span id="test"></span>
    <script>
        
        var config = {
    type: 'line',
    data: {
        labels: ["Mon", "Tues", "Wed", "Thurs", "Fri", "Sat", "Sun"],
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
                g1Mon,
                g1Tue,
                g1Wed,
                g1Thu,
                g1Fri,
                g1Sat,
                g1Sun
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
                g2Mon,
                g2Tue,
                g2Wed,
                g2Thu,
                g2Fri,
                g2Sat,
                g2Sun
            ],
        }, {
            label: "Grade 3",
            backgroundColor: window.chartColors.yellow,
            borderColor: window.chartColors.yellow,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g3Mon,
                g3Tue,
                g3Wed,
                g3Thu,
                g3Fri,
                g3Sat,
                g3Sun
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
                g4Mon,
                g4Tue,
                g4Wed,
                g4Thu,
                g4Fri,
                g4Sat,
                g4Sun
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
                g5Mon,
                g5Tue,
                g5Wed,
                g5Thu,
                g5Fri,
                g5Sat,
                g5Sun
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
                g6Mon,
                g6Tue,
                g6Wed,
                g6Thu,
                g6Fri,
                g6Sat,
                g6Sun
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