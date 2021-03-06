@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/role/add/add.css')}}">
@endsection

@section('js')
    <script src="{{ asset('admins/role/add/add.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Sửa', 'key' => 'vai trò'])
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('roles.update', ['id'=>$role->id])}}" method="post"
                          enctype="multipart/form-data">

                        <div class="col-md-12">
                            @csrf
                            <div class="form-group">
                                <label>Tên vai trò</label>
                                <input type="text" name="name"
                                       class="form-control"
                                       placeholder="Nhập tên vai trò"
                                       value="{{$role->name}}">

                            </div>

                            <div class="form-group">
                                <label>Mô tả vai trò</label>
                                <textarea name="display_name" rows="4"
                                          class="form-control"
                                          placeholder="Nhập mô tả"
                                >{{$role->display_name}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <label>
                                        <input type="checkbox" class="checkall">
                                        Check All
                                    </label>
                                </div>

                                @foreach($permissionsParent as $pmParent)
                                    <div class="card border-primary mb-3 col-md-12">
                                        <div class="card-header">
                                            <label for="">
                                                <input type="checkbox" value="" class="checkbox_wrapper">
                                            </label>
                                            Module {{$pmParent->name}}
                                        </div>
                                        <div class="row">
                                            @foreach($pmParent->permissionsChildrent as $pmChild)
                                                <div class="card-body text-primary col-md-3">
                                                    <h5 class="card-title">
                                                        <label for="">
                                                            <input type="checkbox"
                                                                   {{$permissionsChecked->contains('id',$pmChild->id)?'checked':''}}
                                                                   class="checkbox_childrent"
                                                                   name="permission_id[]"
                                                                   value="{{$pmChild->id}}">
                                                        </label>
                                                        {{$pmChild->name}}
                                                    </h5>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" style="margin-left: 10px;">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



