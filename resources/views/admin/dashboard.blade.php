<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 14.10.2020
 * Time: 18:10
 */
?>
@extends('layouts.adminLayout')
@section('content')
    <div class="col ml-2 mr-2">
        <div class="card bg-gradient-light card-chart">
            <div class="card-header">
                <h5 class="card-category small">ismi:Jo'rayev Mansur</h5>
                <h4 class="card-title small"><a href="/admin/post/$post->post_titl}">$post->post_title</a></h4>
                <div class="dropdown">
                    <button type="button" class="btn btn-sm btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/admin/post/edit">edit</a>
                        <a class="dropdown-item text-danger" href="/admin/post/delete/post->id">O'chirish</a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="" style="height: 2vh;white-space: normal;  text-overflow:ellipsis; overflow: hidden;      ">
                    $post->post_text
                </div>
            </div>
            <div class="card-footer">
                <div class="stats small">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:$post->created_at <div></div>
                    <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:$post->updated_at
                </div>
            </div>
        </div>
    </div>


    {{--<div class="col-lg-4">--}}
        {{--<div class="card card-chart">--}}
            {{--<div class="card-header">--}}
                {{--<h5 class="card-category">Global Sales</h5>--}}
                {{--<h4 class="card-title">Shipped Products</h4>--}}
                {{--<div class="dropdown">--}}
                    {{--<button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">--}}
                        {{--<i class="now-ui-icons loader_gear"></i>--}}
                    {{--</button>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--<a class="dropdown-item text-danger" href="#">Remove Data</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div class="chart-area">--}}
                    {{--<canvas id="lineChartExample"></canvas>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-footer">--}}
                {{--<div class="stats">--}}
                    {{--<i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-6">--}}
        {{--<div class="card card-chart">--}}
            {{--<div class="card-header">--}}
                {{--<h5 class="card-category">2018 Sales</h5>--}}
                {{--<h4 class="card-title">All products</h4>--}}
                {{--<div class="dropdown">--}}
                    {{--<button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">--}}
                        {{--<i class="now-ui-icons loader_gear"></i>--}}
                    {{--</button>--}}
                    {{--<div class="dropdown-menu dropdown-menu-right">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--<a class="dropdown-item text-danger" href="#">Remove Data</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div class="chart-area">--}}
                    {{--<canvas id="lineChartExampleWithNumbersAndGrid"></canvas>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-footer">--}}
                {{--<div class="stats">--}}
                    {{--<i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-lg-4 col-md-6">--}}
        {{--<div class="card card-chart">--}}
            {{--<div class="card-header">--}}
                {{--<h5 class="card-category">Email Statistics</h5>--}}
                {{--<h4 class="card-title">24 Hours Performance</h4>--}}
            {{--</div>--}}
            {{--<div class="card-body">--}}
                {{--<div class="chart-area">--}}
                    {{--<canvas id="barChartSimpleGradientsNumbers"></canvas>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="card-footer">--}}
                {{--<div class="stats">--}}
                    {{--<i class="now-ui-icons ui-2_time-alarm"></i> Last 7 days--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@endsection
