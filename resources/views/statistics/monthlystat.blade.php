@extends('layouts.app')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
{{-- <script src="{{ asset('js/chart.js') }}"></script> --}}
<script>
    var g1M1=0;
    var g1M2=0;
    var g1M3=0;
    var g1M4=0;
    var g1M5=0;
    var g1M6=0;
    var g1M7=0;
    var g1M8=0;
    var g1M9=0;
    var g1M10=0;
    var g1M11=0;
    var g1M12=0;

    var g2M1=0;
    var g2M2=0;
    var g2M3=0;
    var g2M4=0;
    var g2M5=0;
    var g2M6=0;
    var g2M7=0;
    var g2M8=0;
    var g2M9=0;
    var g2M10=0;
    var g2M11=0;
    var g2M12=0;

    var g3M1=0;
    var g3M2=0;
    var g3M3=0;
    var g3M4=0;
    var g3M5=0;
    var g3M6=0;
    var g3M7=0;
    var g3M8=0;
    var g3M9=0;
    var g3M10=0;
    var g3M11=0;
    var g3M12=0;

    var g4M1=0;
    var g4M2=0;
    var g4M3=0;
    var g4M4=0;
    var g4M5=0;
    var g4M6=0;
    var g4M7=0;
    var g4M8=0;
    var g4M9=0;
    var g4M10=0;
    var g4M11=0;
    var g4M12=0;

    var g5M1=0;
    var g5M2=0;
    var g5M3=0;
    var g5M4=0;
    var g5M5=0;
    var g5M6=0;
    var g5M7=0;
    var g5M8=0;
    var g5M9=0;
    var g5M10=0;
    var g5M11=0;
    var g5M12=0;

    var g6M1=0;
    var g6M2=0;
    var g6M3=0;
    var g6M4=0;
    var g6M5=0;
    var g6M6=0;
    var g6M7=0;
    var g6M8=0;
    var g6M9=0;
    var g6M10=0;
    var g6M11=0;
    var g6M12=0;

    function g1Data(d) {
            if(d==1)
                g1M1++;
            else if(d==2)
                g1M2++;
            else if(d==3)
                g1M3++;
            else if(d==4)
                g1M4++;
            else if(d==5)
                g1M5++;
            else if(d==6)
                g1M6++;
            else if(d==7)
                g1M7++;
            else if(d==8)
                g1M8++;
            else if(d==9)
                g1M9++;
            else if(d==10)
                g1M10++;
            else if(d==11)
                g1M11++;
            else if(d==12)
                g1M12++;
        }

    function g2Data(d) {
            if(d==1)
                g2M1++;
            else if(d==2)
                g2M2++;
            else if(d==3)
                g2M3++;
            else if(d==4)
                g2M4++;
            else if(d==5)
                g2M5++;
            else if(d==6)
                g2M6++;
            else if(d==7)
                g2M7++;
            else if(d==8)
                g2M8++;
            else if(d==9)
                g2M9++;
            else if(d==10)
                g2M10++;
            else if(d==11)
                g2M11++;
            else if(d==12)
                g2M12++;
        }

    function g3Data(d) {
            if(d==1)
                g3M1++;
            else if(d==2)
                g3M2++;
            else if(d==3)
                g3M3++;
            else if(d==4)
                g3M4++;
            else if(d==5)
                g3M5++;
            else if(d==6)
                g3M6++;
            else if(d==7)
                g3M7++;
            else if(d==8)
                g3M8++;
            else if(d==9)
                g3M9++;
            else if(d==10)
                g3M10++;
            else if(d==11)
                g3M11++;
            else if(d==12)
                g3M12++;
        }

    function g4Data(d) {
            if(d==1)
                g4M1++;
            else if(d==2)
                g4M2++;
            else if(d==3)
                g4M3++;
            else if(d==4)
                g4M4++;
            else if(d==5)
                g4M5++;
            else if(d==6)
                g4M6++;
            else if(d==7)
                g4M7++;
            else if(d==8)
                g4M8++;
            else if(d==9)
                g4M9++;
            else if(d==10)
                g4M10++;
            else if(d==11)
                g4M11++;
            else if(d==12)
                g4M12++;
        }

    function g5Data(d) {
            if(d==1)
                g5M1++;
            else if(d==2)
                g5M2++;
            else if(d==3)
                g5M3++;
            else if(d==4)
                g5M4++;
            else if(d==5)
                g5M5++;
            else if(d==6)
                g5M6++;
            else if(d==7)
                g5M7++;
            else if(d==8)
                g5M8++;
            else if(d==9)
                g5M9++;
            else if(d==10)
                g5M10++;
            else if(d==11)
                g5M11++;
            else if(d==12)
                g5M12++;
        }

    function g6Data(d) {
            if(d==1)
                g6M1++;
            else if(d==2)
                g6M2++;
            else if(d==3)
                g6M3++;
            else if(d==4)
                g6M4++;
            else if(d==5)
                g6M5++;
            else if(d==6)
                g6M6++;
            else if(d==7)
                g6M7++;
            else if(d==8)
                g6M8++;
            else if(d==9)
                g6M9++;
            else if(d==10)
                g6M10++;
            else if(d==11)
                g6M11++;
            else if(d==12)
                g6M12++;
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
        @if(date('Y',strtotime($count['created_at'])) >= date('Y',strtotime('-1 year')))
            @if (($count['grade_level']==1) && date('m', strtotime($count['created_at']))==1)
                <script>g1Data(1);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==2)
                <script>g1Data(2);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==3)
                <script>g1Data(3);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==4)
                <script>g1Data(4);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==5)
                <script>g1Data(5);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==6)
                <script>g1Data(6);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==7)
                <script>g1Data(7);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==8)
                <script>g1Data(8);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==9)
                <script>g1Data(9);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==10)
                <script>g1Data(10);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==11)
                <script>g1Data(11);</script>
            @elseif(($count['grade_level']==1) && date('m', strtotime($count['created_at']))==12)
                <script>g1Data(12);</script>    
            @endif

            @if (($count['grade_level']==2) && date('m', strtotime($count['created_at']))==1)
                <script>g2Data(1);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==2)
                <script>g2Data(2);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==3)
                <script>g2Data(3);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==4)
                <script>g2Data(4);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==5)
                <script>g2Data(5);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==6)
                <script>g2Data(6);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==7)
                <script>g2Data(7);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==8)
                <script>g2Data(8);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==9)
                <script>g2Data(9);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==10)
                <script>g2Data(10);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==11)
                <script>g2Data(11);</script>
            @elseif(($count['grade_level']==2) && date('m', strtotime($count['created_at']))==12)
                <script>g2Data(12);</script>    
            @endif

            @if (($count['grade_level']==3) && date('m', strtotime($count['created_at']))==1)
                <script>g3Data(1);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==2)
                <script>g3Data(2);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==3)
                <script>g3Data(3);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==4)
                <script>g3Data(4);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==5)
                <script>g3Data(5);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==6)
                <script>g3Data(6);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==7)
                <script>g3Data(7);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==8)
                <script>g3Data(8);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==9)
                <script>g3Data(9);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==10)
                <script>g3Data(10);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==11)
                <script>g3Data(11);</script>
            @elseif(($count['grade_level']==3) && date('m', strtotime($count['created_at']))==12)
                <script>g3Data(12);</script>    
            @endif

            @if (($count['grade_level']==4) && date('m', strtotime($count['created_at']))==1)
                <script>g4Data(1);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==2)
                <script>g4Data(2);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==3)
                <script>g4Data(3);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==4)
                <script>g4Data(4);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==5)
                <script>g4Data(5);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==6)
                <script>g4Data(6);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==7)
                <script>g4Data(7);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==8)
                <script>g4Data(8);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==9)
                <script>g4Data(9);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==10)
                <script>g4Data(10);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==11)
                <script>g4Data(11);</script>
            @elseif(($count['grade_level']==4) && date('m', strtotime($count['created_at']))==12)
                <script>g4Data(12);</script>    
            @endif

            @if (($count['grade_level']==5) && date('m', strtotime($count['created_at']))==1)
                <script>g5Data(1);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==2)
                <script>g5Data(2);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==3)
                <script>g5Data(3);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==4)
                <script>g5Data(4);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==5)
                <script>g5Data(5);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==6)
                <script>g5Data(6);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==7)
                <script>g5Data(7);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==8)
                <script>g5Data(8);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==9)
                <script>g5Data(9);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==10)
                <script>g5Data(10);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==11)
                <script>g5Data(11);</script>
            @elseif(($count['grade_level']==5) && date('m', strtotime($count['created_at']))==12)
                <script>g5Data(12);</script>    
            @endif

            @if (($count['grade_level']==6) && date('m', strtotime($count['created_at']))==1)
                <script>g6Data(1);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==2)
                <script>g6Data(2);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==3)
                <script>g6Data(3);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==4)
                <script>g6Data(4);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==5)
                <script>g6Data(5);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==6)
                <script>g6Data(6);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==7)
                <script>g6Data(7);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==8)
                <script>g6Data(8);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==9)
                <script>g6Data(9);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==10)
                <script>g6Data(10);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==11)
                <script>g6Data(11);</script>
            @elseif(($count['grade_level']==6) && date('m', strtotime($count['created_at']))==12)
                <script>g6Data(12);</script>    
            @endif
        @endif
    @endforeach
    <span id="test"></span>
    <script>
        
        var config = {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
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
                g1M1,
                g1M2,
                g1M3,
                g1M4,
                g1M5,
                g1M6,
                g1M7,
                g1M8,
                g1M9,
                g1M10,
                g1M11,
                g1M12
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
                g2M1,
                g2M2,
                g2M3,
                g2M4,
                g2M5,
                g2M6,
                g2M7,
                g2M8,
                g2M9,
                g2M10,
                g2M11,
                g2M12
            ],
        }, {
            label: "Grade 3",
            backgroundColor: window.chartColors.yellow,
            borderColor: window.chartColors.yellow,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [
                g3M1,
                g3M2,
                g3M3,
                g3M4,
                g3M5,
                g3M6,
                g3M7,
                g3M8,
                g3M9,
                g3M10,
                g3M11,
                g3M12
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
                g4M1,
                g4M2,
                g4M3,
                g4M4,
                g4M5,
                g4M6,
                g4M7,
                g4M8,
                g4M9,
                g4M10,
                g4M11,
                g4M12
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
                g5M1,
                g5M2,
                g5M3,
                g5M4,
                g5M5,
                g5M6,
                g5M7,
                g5M8,
                g5M9,
                g5M10,
                g5M11,
                g5M12
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
                g6M1,
                g6M2,
                g6M3,
                g6M4,
                g6M5,
                g6M6,
                g6M7,
                g6M8,
                g6M9,
                g6M10,
                g6M11,
                g6M12
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