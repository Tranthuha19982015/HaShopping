@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/slider/index/index.css')}}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('admins/slider/index/index.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Danh sách', 'key' => 'tài khoản'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('user-add')
                            <a href="{{route('users.create')}}" class="btn btn-success float-right m-2">Thêm mới</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên người dùng</th>
                                <th scope="col">Email</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>

                                    <td>
                                        @can('user-edit')
                                            <a href="{{route('users.edit',['id'=>$user->id])}}"
                                               class="btn btn-default">Sửa</a>
                                        @endcan
                                        @can('user-delete')
                                            <a href=""
                                               data-url="{{route('users.delete',['id'=>$user->id])}}"
                                               class="btn btn-danger action_delete">Xóa</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




