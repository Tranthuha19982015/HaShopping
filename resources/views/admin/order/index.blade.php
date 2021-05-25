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
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $orderItem)
                                <tr>
                                    <th scope="row">{{$orderItem->id}}</th>
                                    <td>{{optional($orderItem->customer)->name}}</td>
                                    <td>{{number_format($orderItem->total_cost)}} VND</td>

                                    <td>
                                        <a href="" class="btn btn-danger">Xem chi tiết</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




