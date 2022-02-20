
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
                                <p class="card-category">Total Survey Anda</p>
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
                                <p class="card-category">Total Survey Pre Anda</p>
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
                                <p class="card-category">Total Survey Post Anda</p>
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
                                <p class="card-category">Total Responden Anda</p>
                                <h4 class="card-title">{{$totalSurveyor}}</h4>
                            </div>
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


</script>
@endpush
