@extends('layouts.admin')

@section('title')
    <title>List order</title>
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
        @include('partials.content_header',['name' => 'Danh sách', 'key' => 'đơn hàng'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class="btn btn-success float-right m-2">Thêm mới</a>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tổng tiền đơn hàng</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            @foreach($products as $productItem)--}}
                            {{--                                <tr>--}}
                            {{--                                    <th scope="row">{{$productItem->id}}</th>--}}
                            {{--                                    <td>{{$productItem->name}}</td>--}}
                            {{--                                    <td>{{number_format($productItem->price)}}</td>--}}
                            {{--                                    <td>{{$productItem->quantity}}</td>--}}
                            {{--                                    <td>--}}
                            {{--                                        <img class="product_image_150_100" src="{{$productItem->feature_image_path}}"--}}
                            {{--                                             alt="">--}}
                            {{--                                    </td>--}}
                            {{--                                    <td>{{optional($productItem->category)->name}}</td>--}}
                            {{--                                    <td>--}}

                            {{--                                        <a href=""--}}
                            {{--                                           class="btn btn-default">Sửa</a>--}}

                            {{--                                        @can('product-delete')--}}
                            {{--                                            <a href=""--}}
                            {{--                                               data-url="{{route('product.delete',['id'=>$productItem->id])}}"--}}
                            {{--                                               class="btn btn-danger action_delete">Xóa</a>--}}
                            {{--                                        @endcan--}}
                            {{--                                    </td>--}}
                            {{--                                </tr>--}}
                            {{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




