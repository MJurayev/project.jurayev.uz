<?php
/**
 * Created by PhpStorm.
 * User: juray
 * Date: 13.10.2020
 * Time: 16:32
 */
?>
@extends('layouts.adminLayout')
@section('content')

    <div class="col-md-12">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">@lang('admin.users.users')</h4>
                {{--<button class="btn d-inline-block float-right btn-sm btn-success">qo'shish</button>--}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped small">
                        <thead class=" text-success bold">
                        <th >
                            id
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            email_verified_at
                        </th>

                        <th class="text-right">
                            created_at
                        </th>
                        <th class="text-right">
                            updated_at
                        </th>
                        <th class="text-center">
                           Edit
                        </th>
                        <th class="text-center">
                            delete
                        </th>

                        </thead>
                        <tbody>
                        @if(count($users)!=0)
                        @foreach($users as $user)
                        <tr>
                            <td>
                               <?=$user->id; ?>
                            </td>
                            <td>
                                <?=$user->name; ?>
                            </td>
                            <td>
                                <?=$user->email; ?>
                            </td>
                            <td class="text-right">
                                <?=$user->email_verified_at; ?>
                            </td>
                            <td class="text-right">
                                <?=$user->created_at; ?>
                            </td>
                            <td class="text-right">
                                <?=$user->updated_at; ?>
                            </td>
                            <td class="text-center">
                                <a href="/admin/user/edit/{{$user->id}}" class="btn btn-sm btn-info">edit</a>
                            </td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-danger"  href="/admin/user/delete/{{$user->id}}">delete</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr><td colspan="8" class="text-center text-gray-500 "><h3>@lang('admin.users.hasNoUsers')</h3></td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection