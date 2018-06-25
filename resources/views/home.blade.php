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