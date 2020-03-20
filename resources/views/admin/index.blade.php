@extends('layouts.app')

@section('header', 'Dashboard')


@section('content')
<script>
    var g1D=0;
    var g2D=0;
    var g3D=0;
    var g4D=0;
    var g5D=0;
    var g6D=0;

    var ind;

    var g1M=new Array();
    for(ind=0;ind<12;ind++){
        g1M[ind]=0;
    }

    var g2M=new Array();
    for(ind=0;ind<12;ind++){
        g2M[ind]=0;
    }

    var g3M=new Array();
    for(ind=0;ind<12;ind++){
        g3M[ind]=0;
    }

    var g4M=new Array();
    for(ind=0;ind<12;ind++){
        g4M[ind]=0;
    }

    var g5M=new Array();
    for(ind=0;ind<12;ind++){
        g5M[ind]=0;
    }

    var g6M=new Array();
    for(ind=0;ind<12;ind++){
        g6M[ind]=0;
    }

    function g1Data(d) {
            g1M[d-1]++;
        }

    function g2Data(d) {
            g2M[d-1]++;
        }

    function g3Data(d) {
            g3M[d-1]++;
        }

    function g4Data(d) {
            g4M[d-1]++;
        }

    function g5Data(d) {
            g5M[d-1]++;
        }

    function g6Data(d) {
            g6M[d-1]++;
        }
</script>
<div class="container-fluid">
    {{-- <div class="block-header">
        <h4>DASHBOARD</h4><br>
    </div> --}}
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">Daily Total</div>
                    <div class="number count-to" data-from="0" data-to="125">
                        {{ $daily }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">Weekly AVG</div>
                    <div class="number count-to" data-from="0" data-to="257">
                        {{ $yearly }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">Monthly AVG</div>
                    <div class="number count-to" data-from="0" data-to="243">
                        {{ $monthly }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">Yearly AVG</div>
                    <div class="number count-to" data-from="0" data-to="1225">
                        {{ $yearly }}
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row clearfix mb-4">
        <div class="col-md-4 col-lg-4 col-sm-6">
            <div class="card history-chart py-4">
                <div class="container-fluid header">
                    <div class="row clearfix">
                        <div class="offset-1">
                            <h6>Grade level statistics</h6>
                        </div>
                    </div>
                </div>
                <div class="body isResizable">
                    <div class="container-fluid chart-containter">
                        <canvas id="myPieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-8 col-lg-8 col-sm-6">
            <div class="container-fluid ">
                <div class="calendar mt-xs-4 mt-sm-0" id="calendar">
                    <div class="month">      
                    <ul>
                        <li class="prev">&#10094;</li>
                        <li class="next">&#10095;</li>
                        <li>
                            <p id="month">January</p>
                            <span id="year" style="font-size:18px">2020</span>
                        </li>
                    </ul>
                </div>

                <ul class="weekdays">
                    <li>Mo</li>
                    <li>Tu</li>
                    <li>We</li>
                    <li>Th</li>
                    <li>Fr</li>
                    <li>Sa</li>
                    <li>Su</li>
                </ul>

                <ul class="days" id="days">
                </ul>
                </div>
            </div>
        </div>
    </div>

    {{--  <script>
        var day = 0;
        function getDay() {
            var i;
            for(i=0; i<32; i++) {
                
            }
        }
    </script>  --}}







    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card history-chart py-4">
                <div class="container-fluid header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h6>History</h6>
                        </div>
                    </div>
                </div>
                <div class="body isResizable">
                    <div class="container-fluid chart-containter">
                        <canvas id="chart" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix py-4">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card mb-4">
                <div class="body trend bg-pink">
                    <div class="today date">
                        <div class="grade-level">
                            <h6>Total number of students visited library</h6>
                            <hr>
                            <h6>Today</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>34</li>
                            </ul>
                        </div>
                    </div>
                    <div class="yesterday date">
                        <div class="grade-level">
                            <h6>Yesterday</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>85</li>
                            </ul>
                        </div>
                    </div>
                    <div class="last-week date">
                        <div class="grade-level">
                            <h6>Last Week</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>453</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card mb-4 ">
                <div class="body trend bg-cyan">
                    <div class="today date">
                        <div class="grade-level">
                            <h6>Grade level that has most visited</h6>
                            <hr>
                            <h6>Today</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Grade 4</li>
                                <li>Grade 3</li>
                                <li>Grade 6</li>
                                <li>Grade 2</li>
                                <li>Grade 1</li>
                                <li>Grade 5</li>
                            </ul>
                        </div>
                    </div>
                    <div class="yesterday date">
                        <div class="grade-level">
                            <h6>Yesterday</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Grade 1</li>
                                <li>Grade 2</li>
                                <li>Grade 3</li>
                                <li>Grade 4</li>
                                <li>Grade 5</li>
                                <li>Grade 6</li>
                            </ul>
                        </div>
                    </div>
                    <div class="last-week date">
                        <div class="grade-level">
                            <h6>Last Week</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Grade 4</li>
                                <li>Grade 2</li>
                                <li>Grade 5</li>
                                <li>Grade 1</li>
                                <li>Grade 6</li>
                                <li>Grade 3</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card mb-4">
                <div class="body trend bg-teal">
                    <div class="today date">
                        <div class="grade-level">
                            <h6>Sections the visited the library the most</h6>
                            <hr>
                            <h6>Today</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Section D</li>
                                <li>Section C</li>
                                <li>Section B</li>
                                <li>Section A</li>
                            </ul>
                        </div>
                    </div>
                    <div class="yesterday date">
                        <div class="grade-level">
                            <h6>Yesterday</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Section A</li>
                                <li>Section B</li>
                                <li>Section D</li>
                                <li>Section C</li>
                            </ul>
                        </div>
                    </div>
                    <div class="last-week date">
                        <div class="grade-level">
                            <h6>Last Week</h6>
                        </div>
                        <div class="student-total number">
                            <ul>
                                <li>Section B</li>
                                <li>Section A</li>
                                <li>Section D</li>
                                <li>Section C</li>
                            </ul>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- @foreach ($counter as $count)
        <script>addData();</script>
    @endforeach  --}}
</div>
{{-- for monthly data --}}
@foreach ($counter as $count)
        @if(date('Y',strtotime($count['created_at'])) == date('Y'))
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

    {{-- for daily data (pie chart) --}}
    @foreach ($counter as $count)
         @if (($count['grade_level']==1) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g1D++;</script>

        @elseif (($count['grade_level']==2) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g2D++;</script>

        @elseif (($count['grade_level']==3) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g3D++</script>

        @elseif (($count['grade_level']==4) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g4D++</script>

        @elseif (($count['grade_level']==5) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g5D++</script>

        @elseif (($count['grade_level']==6) && date('Y-m-d',strtotime($count['created_at']))==date('Y-m-d'))
            <script>g6D++</script>

        @endif
    @endforeach
<script>
    var ctx = document.getElementById("chart").getContext("2d");
    var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [],
        //labels: ["jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
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
            data: [],
        }, {
            label: "Grade 2",
            fill: false,
            backgroundColor: window.chartColors.orange,
            borderColor: window.chartColors.orange,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [4, 1],
            data: [],
        }, {
            label: "Grade 3",
            backgroundColor: window.chartColors.yellow,
            borderColor: window.chartColors.yellow,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [],
            fill: false,
        }, {
            label: "Grade 4",
            backgroundColor: window.chartColors.green,
            borderColor: window.chartColors.green,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [],
            fill: false,
        }, {
            label: "Grade 5",
            backgroundColor: window.chartColors.blue,
            borderColor: window.chartColors.blue,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [],
            fill: false,
        }, {
            label: "Grade 6",
            backgroundColor: window.chartColors.purple,
            borderColor: window.chartColors.purple,
            lineTension: 0,
            borderWidth: 1,
            borderDash: [8, 1],
            data: [],
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
            // text: 'Statistics'
            text: 'HELLO'
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
});



// Doughnut and Pie Chart
var ctx = document.getElementById('myPieChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6'],
        datasets: [{
            label: '# of Votes',
            data: [g1D, g2D, g3D, g4D, g5D, g6D],
            backgroundColor: [
              '#0088FF',
              '#FFAA00',
              '#FF7700',
              '#FF0033',
              '#9911AA',
              '#AADD22'
            ],
            borderWidth: 1
        }]
    }
});

/* 0088FF */
/* FFAA00 */
/* FF7700 */
/* FF0033 */
/* 9911AA */
/* AADD22 */










// calendar
//////////////
var d = new Date();
var months = ["January", "February", "March", "April", "June", "July", "August", "September", "October", "November", "December"];

document.getElementById('month').innerHTML = months[d.getMonth()];
document.getElementById('year').innerHTML = d.getFullYear();


//////////////////////////////////////////////////////////////////////////
var numDays = lastday(d.getFullYear(), d.getMonth());

var nd = new Date(d.getFullYear(), d.getMonth(), 1);
var dayStart = nd.getDay();

function lastday(y,m){
  return  new Date(y, m +1, 0).getDate();
}

for(var i = 0; i < numDays; i++) {
  var spc=0;
  if(i==0) {
    switch(dayStart) {
      case 0: spc=6; break;
      case 1: spc=0; break;
      case 2: spc=1; break;
      case 3: spc=2; break;
      case 4: spc=3; break;
      case 5: spc=4; break;
      case 6: spc=5; break;
    }
    for(var j=0; j<spc; j++) {
      var currnode = document.createElement("LI");
      var subtextnode = document.createTextNode(" ");
      currnode.appendChild(subtextnode);
      document.getElementById("days").appendChild(currnode);
    }
  }
  if(i == d.getDate()) {
    node.classList.add('active');
  }
  var node = document.createElement("LI");
  var textnode = document.createTextNode(i+1);
  node.appendChild(textnode);
  document.getElementById("days").appendChild(node);
  
  
}

var i;
for(i=0;i<12;i++){
    addData(myLineChart,months[i],g1M[i],0);
    addData(myLineChart,months[i],g2M[i],1);
    addData(myLineChart,months[i],g3M[i],2);
    addData(myLineChart,months[i],g4M[i],3);
    addData(myLineChart,months[i],g5M[i],4);
    addData(myLineChart,months[i],g6M[i],5);
}

function addData(chart, label, data, i) {
    var j;
    var labelExist=false;
    for(j=0;j<chart.data.labels.length;j++){
        if(label==chart.data.labels[j])
            labelExist=true;
    }
    if(!labelExist)
        chart.data.labels.push(label);
    chart.data.datasets[i].data.push(data);
    // chart.data.datasets.forEach(('Grade 1',1,dataset) => {
    //     dataset.data.push(data);
    // });
    chart.update();
}
// document.getElementById("test").innerHTML = d.getDate();
</script>

@endsection
