@extends('layouts.admin')

@section('title')
    <title>List order</title>
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
                                <th scope="col">Ngày đặt hàng</th>
                                <th scope="col">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $orderItem)
                                <tr>
                                    <th scope="row">{{$orderItem->id}}</th>
                                    <td>{{optional($orderItem->customer)->name}}</td>
                                    <td>{{number_format($orderItem->total_cost,0)}} VND</td>
                                    <td>{{date('d-m-Y', strtotime($orderItem->created_at))}} </td>
                                    <td>
                                        <a href="{{route('orders.detail',['id'=>$orderItem->id])}}"
                                           class="btn btn-info">Xem chi tiết</a>
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




