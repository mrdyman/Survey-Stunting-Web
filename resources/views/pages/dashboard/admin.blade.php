
@extends('templates/dashboard')

@section('title-tab')Dashboard
@endsection

@section('title')
Dashboard
@endsection

@section('subTitle')
Dashboard
@endsection

@push('style')
    
@endpush

@section('content')

<section>
    <div class="row">
        <div class="col-lg col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i class="fas fa-chart-pie text-primary"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Keseluruhan Survey</p>
                                <h4 class="card-title">{{$totalSurvey}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i class="fas fa-tasks text-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Keseluruhan Survey Pre</p>
                                <h4 class="card-title">{{$totalSurveyPre}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i class="fas fa-tasks text-success"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Keseluruhan Survey Post</p>
                                <h4 class="card-title">{{$totalSurveyPost}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg col-md-6">
            <div class="card card-stats card-round">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-4">
                            <div class="icon-big text-center">
                                <i class="fas fa-users text-danger"></i>
                            </div>
                        </div>
                        <div class="col-8 col-stats">
                            <div class="numbers">
                                <p class="card-category">Keseluruhan Surveyor</p>
                                <h4 class="card-title">{{$totalSurveyor}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Statistik Keseluruhan Survey</div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-container" style="min-height: 375px">
                        <canvas id="statisticsChart"></canvas>
                    </div>
                    <div id="myChartLegend"></div>
                    <ul class="0-legend html-legend my-0">
                        <li><span style="background-color:#34CE39"></span>Pre</li>
                        <li><span style="background-color:#FFAD46"></span>Post</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <div class="card-head-row">
                        <div class="card-title">Riwayat Survey</div>
                        <div class="card-tools">
                            <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab" role="tablist">
                                <li class="nav-item" style="float: right">
                                    <a href="#v-pills-today" class="nav-link active show" id="pills-today" data-toggle="pill" href="#pills-today" role="tab" aria-selected="true">Hari Ini</a>
                                </li>
                                <li class="nav-item" style="float: right">
                                    <a href="#v-pills-weeks" class="nav-link" id="pills-week" data-toggle="pill" href="#pills-week" role="tab" aria-selected="false">Seminggu Terakhir</a>
                                </li>
                                <li class="nav-item" style="float: right">
                                    <a href="#v-pills-month" class="nav-link" id="pills-month" data-toggle="pill" href="#pills-month" role="tab" aria-selected="false">Sebulan Terakhir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="height: 430px; overflow: auto">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade active show" id="v-pills-today" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="d-flex">
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase mb-1">Surveyor: Zenetsu</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: 7206090709970001 <span class="text-success pl-3">Post</span></h6>
                                    <span class="text-muted">Judul: Demam Berdarah (DHF)</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">17:00</small>
                                    <div>
                                        <a href="#" class="badge badge-primary float-right text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase mb-1">Surveyor: Inosuke</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: 2806090709971021 <span class="text-warning pl-3">Pre</span></h6>
                                    <span class="text-muted">Judul:  Malaria</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">15:30</small>
                                    <div>
                                        <a href="#" class="badge badge-primary float-right text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase mb-1">Surveyor: Tanjuro</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: 8866090709973301 <span class="text-success pl-3">Post</span></h6>
                                    <span class="text-muted">Judul: Campak</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">14:40</small>
                                    <div>
                                        <a href="#" class="badge badge-primary float-right text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase mb-1">Surveyor: Akaza</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: 7206090709970001 <span class="text-success pl-3">Post</span></h6>
                                    <span class="text-muted">Judul: Demam Berdarah (DHF)</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">13:20</small>
                                    <div>
                                        <a href="#" class="badge badge-primary float-right text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="flex-1 ml-3 pt-1">
                                    <h6 class="text-uppercase mb-1">Surveyor: Muzan</h6>
                                    <h6 class="text-uppercase fw-bold mb-0">Responden: 2806090709971021 <span class="text-warning pl-3">Pre</span></h6>
                                    <span class="text-muted">Judul:  Malaria</span>
                                </div>
                                <div class="float-right pt-1">
                                    <small class="text-muted">12:20</small>
                                    <div>
                                        <a href="#" class="badge badge-primary float-right text-white">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-weeks" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h1>Seminggu Terakhir</h1>
                        </div>
                        <div class="tab-pane fade" id="v-pills-month" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h1>Sebulan Terakhir</h1>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('script')


<script>
var ctx = document.getElementById('statisticsChart').getContext('2d');

var statisticsChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
		datasets: [{
			label: "New Visitors",
			borderColor: '#fdaf4b',
			pointBackgroundColor: 'rgba(253, 175, 75, 0.6)',
			pointRadius: 0,
			backgroundColor: 'rgba(255, 173, 70, 0.5)',
			legendColor: '#fdaf4b',
			fill: true,
			borderWidth: 2,
			data: [256, 230, 245, 287, 240, 250, 230, 295, 331, 431, 456, 521]
		}, {
			label: "Active Users",
			borderColor: '#34CE39',
			pointBackgroundColor: 'rgba(23, 125, 255, 0.6)',
			pointRadius: 0,
			backgroundColor: 'rgba(52, 206, 57, 0.5)',
			legendColor: '#34CE39',
			fill: true,
			borderWidth: 2,
			data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 900]
		}]
	},
	options : {
		responsive: true, 
		maintainAspectRatio: false,
		legend: {
			display: false
		},
		tooltips: {
			bodySpacing: 4,
			mode:"nearest",
			intersect: 0,
			position:"nearest",
			xPadding:10,
			yPadding:10,
			caretPadding:10
		},
		layout:{
			padding:{left:5,right:5,top:15,bottom:15}
		},
		scales: {
			yAxes: [{
				ticks: {
					fontStyle: "500",
					beginAtZero: false,
					maxTicksLimit: 5,
					padding: 10
				},
				gridLines: {
					drawTicks: false,
					display: false
				}
			}],
			xAxes: [{
				gridLines: {
					zeroLineColor: "transparent"
				},
				ticks: {
					padding: 10,
					fontStyle: "500"
				}
			}]
		}, 
		legendCallback: function(chart) { 
			var text = []; 
			text.push('<ul class="' + chart.id + '-legend html-legend">'); 
			for (var i = 0; i < chart.data.datasets.length; i++) { 
				text.push('<li><span style="background-color:' + chart.data.datasets[i].legendColor + '"></span>'); 
				if (chart.data.datasets[i].label) { 
					text.push(chart.data.datasets[i].label); 
				} 
				text.push('</li>'); 
			} 
			text.push('</ul>'); 
			return text.join(''); 
		}  
	}
});

var myLegendContainer = document.getElementById("myChartLegend");


</script>
@endpush
