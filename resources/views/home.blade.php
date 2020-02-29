@extends('layouts.app')



@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>

{{-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<div class="container-fluid blade home">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <canvas id="gradeLevelChart"></canvas>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <canvas id="gradeLevelChart2"></canvas>
        </div>
    </div> 
    </div>

    

<div class="box-container">
            <h2>Box Container</h2>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-md-5">
                <div class="isResizable pie-chart">
                    <div class="chart-container">
                      <canvas id="pieChart" width="10" height="9"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="isResizable line-chart">
                    <div class="chart-container">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <button id="updateChart">Randomize Type of Chart (Line, Bar, Bubble)</button>
            
        </div>
    </div>
</div> --}}




<div class="container-fluid">
    <div class="block-header">
        <h4>DASHBOARD</h4>
    </div>

    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">SECTION A</div>
                    <div class="number count-to" data-from="0" data-to="125">125</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">SECTION B</div>
                    <div class="number count-to" data-from="0" data-to="257">257</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">SECTION C</div>
                    <div class="number count-to" data-from="0" data-to="243">243</div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons"></i>
                </div>
                <div class="content">
                    <div class="text">SECTION D</div>
                    <div class="number count-to" data-from="0" data-to="1225">1225</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="card history-chart py-4">
                <div class="container-fluid header">
                    <div class="row clearfix">
                        <div class="col-xs-12 col-sm-6">
                            <h4>History</h4>
                        </div>
                        {{-- <div class="col-xs-12 col-sm-6 align-right">
                            <div class="switch panel-switch-btn">
                                <span class="m-r-10 font-12">REAL TIME</span>
                                <label>OFF<input type="checkbox" id="realtime" checked><span class="lever switch-col-cyan"></span>ON</label>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <ul class="header-dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </div>
                <div class="body isResizable">
                    {{-- <div id="real_time_chart" class="dashboard-flot-chart"></div> --}}
                    <div class="container-fluid chart-containter">
                        <canvas id="chart" height="256"></canvas>
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

</div>

































<script>
    let myChart = document.getElementById('myChart').getContext('2d');

    let logChart = new Chart('myChart', {
        type: 'line', //bar, horizontal, pie, line, doughnut, radar, polarArea
        data: {
            labels: ['Jan', 'Feb', 'March', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
            datasets: [
                {
                    label: 'Grade 1',
                    backgroundColor: 'rgba(255, 0, 0, 0.06)',
                    borderColor: '#FF6B33',
                    borderWidth: 1,
                    strokeWidth: 6,
                    pointBorderWidth: 4,
                    // lineTension: 0,
                    data: [
                        21, 29, 11, 25, 27, 24, 13, 23, 22, 14, 29, 20
                    ]
                },
                {
                    label: 'Grade 2',
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 255, 0, 0.06)',
                    borderColor: '#E8462E',
                    // lineTension: 0,
                    pointBorderWidth: 4,
                    data: [
                        38, 38, 32, 37, 40, 26, 20, 35, 36, 30, 34, 29
                    ]

                }, 
                {
                    label: 'Grade 3',
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 0, 255, 0.06)',
                    borderColor: '#FF404C',
                    // lineTension: 0,
                    pointBorderWidth: 4,
                    data: [
                        34, 45, 35, 45, 46, 39, 48, 37, 39, 30, 37, 39
                    ]
                },
                {
                    label: 'Grade 4',
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 0, 255, 0.06)',
                    borderColor: '#E82E98',
                    // lineTension: 0,
                    pointBorderWidth: 4,
                    data: [
                        42, 52, 46, 44, 50, 58, 40, 54, 58, 60, 42, 52
                    ]
                },
                {
                    label: 'Grade 5',
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 0, 255, 0.06)',
                    borderColor: '#F833FF',
                    // lineTension: 0,
                    pointBorderWidth: 4,
                    data: [
                        52, 64, 56, 52, 68, 68, 52, 66, 62, 56, 60, 54
                    ]
                },
                {
                    label: 'Grade 6',
                    borderWidth: 1,
                    backgroundColor: 'rgba(0, 0, 255, 0.06)',
                    borderColor: '#FFAB40',
                    // lineTension: 0,
                    pointBorderWidth: 4,
                    data: [
                        60, 80, 65, 74, 80, 71, 70, 66, 62, 80, 61, 74
                    ]
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Statistics',
                fontSize: 16
                
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            }
        }
        
        
    });

    
</script>


<script>
    
    Chart.defaults.global.responsive = true
    let pieChart = document.getElementById('pieChart').getContext('2d');
    
    let totalChart = new Chart('pieChart', {
        type: 'doughnut',
        data: {
            labels: ['Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5', 'Grade 6'],
            datasets: [
                {
                    label: 'Hello',
                    data: [
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        randomScalingFactor(),
                        
                    ],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    // borderWidth: 5,
                    // weight: 88,
                }
            ]
        },
        options: {
            title: {
                display: true,
                text: 'Total of Students Use the Library',
                fontSize: 16,
                maintainAspectRatio: false

            }
        },
        responsive: true


    });
</script>

@endsection
