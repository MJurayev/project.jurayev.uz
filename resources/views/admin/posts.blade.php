<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 14.10.2020
 * Time: 19:13
 */
?>
@extends('layouts.adminLayout')
@section('content')
@if(count($posts) == 0)
    <div class="col">
        <div class="card flex card-chart">
            <div class="card-header mt-5">

            </div>
            <div class="card-body align-items-center text-danger text-center ">
               @lang('admin.posts.hasNoPosts')<br> <a href="{{route('addPost')}}" class="btn   btn-info">@lang('admin.posts.addPost')</a>
            </div>

            <div class="card-footer mb-5 ">

            </div>
        </div>
    </div>
    @endif
@foreach($posts as $post)
    <div class="col-lg-4">
        <div class="card card-chart">
            <div class="card-header">
                <h5 class="card-category">{{$post->added_user_id}}</h5>
                <h4 class="card-title"><a href="/admin/post/show/{{$post->post_title}}">{{$post->post_title}}</a></h4>
                <div class="dropdown">
                    <button type="button" class="btn btn-sm btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                        <i class="now-ui-icons loader_gear"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="/admin/post/edit/{{$post->id}}">edit</a>
                        <a class="dropdown-item text-danger" href="/admin/post/delete/{{$post->id}}">O'chirish</a>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="" style="height: 190px;white-space: normal;  text-overflow:ellipsis; overflow: hidden;      ">
                    {!! $post->post_text !!}
                </div>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:{{$post->created_at}} <div></div>
                    <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:{{$post->updated_at}}
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endsection
