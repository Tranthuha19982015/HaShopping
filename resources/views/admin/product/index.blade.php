@extends('layouts.admin')

@section('title')
    <title>List product</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@10.js') }}"></script>
    <script src="{{ asset('admins/product/index/list.js') }}"></script>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Danh sách', 'key' => 'sản phẩm'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @can('product-add')
                            <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Thêm mới</a>
                        @endcan
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng có</th>
                                <th scope="col" style="width: 200px;">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $productItem)
                                <tr>
                                    <th scope="row">{{$productItem->id}}</th>
                                    <td>{{$productItem->name}}</td>
                                    <td>{{number_format($productItem->price)}}</td>
                                    <td>{{$productItem->quantity}}</td>
                                    <td>
                                        <img style="max-width: 40%;" src="{{$productItem->feature_image_path}}"
                                             alt="">
                                    </td>
                                    <td>{{optional($productItem->category)->name}}</td>
                                    <td>

                                        <a href="{{route('product.edit',['id'=>$productItem->id])}}"
                                           class="btn btn-default">Sửa</a>

                                        @can('product-delete')
                                            <a href=""
                                               data-url="{{route('product.delete',['id'=>$productItem->id])}}"
                                               class="btn btn-danger action_delete">Xóa</a>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



