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
        @include('partials.content_header',['name' => 'Permission', 'key' => 'Add'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('permissions.store')}}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Chọn tên module</label>
                            <select name="module_parent" class="form-control">
                                <option>Chọn tên module</option>
                                @foreach(config('permissions.table_module') as $moduleItem)
                                    <option value="{{$moduleItem}}">{{$moduleItem}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="row">

                                @foreach(config('permissions.module_childrent') as $moduleChildItem)
                                    <div class="col-md-3">
                                        <label>
                                            <input type="checkbox" value="{{$moduleChildItem}}"
                                                   name="module_childrent[]">
                                            {{$moduleChildItem}}
                                        </label>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



