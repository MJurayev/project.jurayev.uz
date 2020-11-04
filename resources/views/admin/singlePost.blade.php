<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 15.10.2020
 * Time: 15:37
 */
?>
@extends('layouts.adminLayout')
@section('content')
    @if(isset($post))

<div class="col">
    <div class="card card-chart">
        <div class="card-header">

            <h4 class="card-title text-center text_bold">{{$post->post_title}}</h4>
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
            <div >
                {!! $post->post_text !!}
            </div>
        </div>
        <div class="card-footer">
            <div class="stats">
                <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:{{$post->created_at}} <div></div>
                <i class="now-ui-icons arrows-1_refresh-69"></i> created_at:{{$post->updated_at}}
            </div>
        </div>
        <h5 class="card-category">{{$post->added_user_id}} tomonidan qo'shilgan</h5>
    </div>
</div>
        @else
        topilmadi
    @endif

    @endsection
