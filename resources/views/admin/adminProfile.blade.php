<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 15.10.2020
 * Time: 16:23
 */
?>
@extends('layouts.adminLayout')
@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="title">@lang('admin.adminProfile.adminProfile')</h5>
            </div>
            <div class="card-body">
                <form method="post" action="/admin/user/edit/{{Auth::user()->id}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>@lang('admin.adminProfile.name')</label>
                                <input type="text" class="form-control" name="name" placeholder="@lang('admin.adminProfile.name')" value="{{Auth::user()->name}}">
                            </div>
                        </div>
                        <div class="col-md-7 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">@lang('admin.adminProfile.email')</label>
                                <input type="email" name="email" class="form-control" placeholder="@lang('admin.adminProfile.email')" value="{{Auth::user()->email}}">
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">--}}
                    {{--<div class="col-md-6 pr-1">--}}
                    {{--<div class="form-group">--}}
                    {{--<label>First Name</label>--}}
                    {{--<input type="text" class="form-control" placeholder="Company" value="Mike">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-6 pl-1">--}}
                    {{--<div class="form-group">--}}
                    {{--<label>Last Name</label>--}}
                    {{--<input type="text" class="form-control" placeholder="Last Name" value="Andrew">--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>@lang('admin.adminProfile.role')</label>
                                <select name="role" disabled="" class="form-control">
                                    <option  value="0" {{Auth::user()->role == 0 ? 'selected' :''}}>@lang('admin.adminProfile.client')</option>
                                    <option value="1" {{Auth::user()->role == 1 ? 'selected' :''}}>@lang('admin.adminProfile.admin')</option>
                                    <option value="10" {{Auth::user()->role == 10 ? 'selected' :''}} >@lang('admin.adminProfile.owner')</option>

                                </select>
                            </div>
                        </div>
                        {{--<div class="col-md-8 pl-1">--}}
                        {{--<div class="form-group">--}}
                        {{--<label for="exampleInputEmail1">password</label>--}}
                        {{--<input type="password" class="form-control" placeholder="password" value="">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <div class="row">
                        <div class="col">

                            <input type="submit" class="btn btn-sm float-right btn-success" value="@lang('admin.adminProfile.save')">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="/adminAssets/img/bg5.jpg" alt="...">
            </div>
            <div class="card-body">
                <div class="author">

                    <img class="avatar border-gray" src="/adminAssets/img/mike.jpg" alt="...">
                    <h5 class="title">{{Auth::user()->name}}</h5>

                    <p class="description">
                        {{Auth::user()->email}}
                    </p>
                </div>
                <p class="description text-center">
                    role:{{Auth::user()->role == 10 ? 'owner' : (Auth::user()->role == 1 ? 'admin': 'client')}}
                </p>
            </div>

        </div>
    </div>
@endsection

