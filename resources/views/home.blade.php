@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>

</div>

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$technician}}</h3>

                            <p>Total Technicians</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$bookService}}</h3>
                            <p>New Requests</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$customer}}</h3>

                            <p>Customers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">
                            <div class="ct-chart" id="dailySalesChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Daily Sales</h4>
                            <p class="card-category">
                                <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase
                                in today sales.</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> updated 4 minutes ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-warning">
                            <div class="ct-chart" id="websiteViewsChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Email Subscriptions</h4>
                            <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-chart">
                        <div class="card-header card-header-danger">
                            <div class="ct-chart" id="completedTasksChart"></div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Completed Tasks</h4>
                            <p class="card-category">Last Campaign Performance</p>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">access_time</i> campaign sent 2 days ago
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection


@section('script')
    <script>

        $(function () {
            $('#index').addClass('active');
        })
    </script>
    @endSection
@endsection
{{--@include('inc.header')--}}
{{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
        {{--<div class="banner-bg-agileits">--}}
            {{--<div class="banner-dot">--}}
                {{--<!-- banner-text -->--}}
                {{--<div class="banner-text" style="padding-top: 7rem !important;">--}}
                    {{--<fieldset>--}}
                        {{--<legend>--}}
                            {{--<h2>Services</h2>--}}
                        {{--</legend>--}}
                        {{--<div class="banner-sub-txt">--}}
                            {{--<span class="banner-txt">Home repair, TV & Smart home setup.</span>--}}
                            {{--<span class="banner-txt1">Expert techs come to you Best prices, 7 days a week.</span>--}}
                        {{--</div>--}}
                    {{--</fieldset>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<table class="table table-hover">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--@if(count($categories) > 0)--}}
                    {{--@foreach($categories->all() as $categorie)--}}

                        {{--<th id="category" scope="col">{{ $categorie->name }} </td>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--</tr>--}}
            {{--</thead>--}}

        {{--</table>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
        {{--<div class="packages agile-section" id="plans">--}}
            {{--<div class="container">--}}
                {{--<h3 class="agileits-title text-center">Our Trusted Technicians</h3>--}}
                {{--<div class="package-grids gallery-index">--}}

                    {{--@if(count($technicians) > 0)--}}
                        {{--@foreach($technicians->all() as $technician)--}}
                    {{--<div class="col-md-4 col-sm-4 col-xs-6  text-center pricing">--}}


                            {{--<div class="price-top">--}}
                            {{--<img src="{{asset('storage/upload/'.$technician->image)}}" height="333px" width="333px" >--}}

                        {{--</div>--}}
                        {{--<div class="price-bottom">--}}
                            {{--<ul>--}}
                                {{--<li>{{ $technician->t_name }}</li>--}}
                                {{--<li>{{ $technician->name }}</li>--}}
                            {{--</ul>--}}
                            {{--<div class="tr-button">--}}
                                {{--<a href="#">view details</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}


                        {{--@endforeach--}}
                    {{--@endif--}}
                        {{--<div class="clearfix"></div>--}}
                {{--</div>--}}

            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
{{--<!--</div>-->--}}
{{--@include('inc.footer')--}}