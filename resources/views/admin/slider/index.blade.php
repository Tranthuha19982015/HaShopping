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
        @include('partials.content_header',['name' => 'Slider', 'key' => 'List'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{route('slider.create')}}" class="btn btn-success float-right m-2">Thêm mới</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên slider</th>
                                <th scope="col">Mô tả</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <th scope="row">{{$slider->id}}</th>
                                    <td>{{$slider->name}}</td>
                                    <td>{{$slider->description}}</td>
                                    <td><img class="img_slider" src="{{$slider->image_path}}" alt=""></td>
                                    <td>
                                        <a href="{{route('slider.edit',['id'=>$slider->id])}}"
                                           class="btn btn-default">Sửa</a>
                                        <a href=""
                                           data-url="{{route('slider.delete',['id'=>$slider->id])}}"
                                           class="btn btn-danger action_delete">Xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $sliders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




