@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/user/add/add.css') }}" rel="stylesheet"/>

@endsection

@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admins/user/add/add.js') }}"></script>

@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Thêm', 'key' => 'tài khoản'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('users.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Tên người dùng</label>
                            <input type="text" name="name"
                                   class="form-control"
                                   placeholder="Nhập tên">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ email</label>
                            <input type="email" name="email"
                                   class="form-control"
                                   placeholder="Nhập email">
                        </div>

                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input type="password" name="password"
                                   class="form-control"
                                   placeholder="Nhập password">
                        </div>

                        <div class="form-group">
                            <label>Vai trò</label>
                            <select name="role_id[]" class="form-control select2_init" multiple>
                                <option value=""></option>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



