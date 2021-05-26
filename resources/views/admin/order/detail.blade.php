@extends('layouts.admin')

@section('title')
    <title>Order Detail</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Chi tiết', 'key' => 'đơn hàng'])

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @php
                        $total=0;
                    @endphp
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tên khách hàng</label>
                            <input type="text" name="name" disabled class="form-control"
                                   value="{{optional($orders->customer)->name}}">
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" name="phone" disabled class="form-control"
                                   value="0{{optional($orders->customer)->phone}}">
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <input type="text" name="address" disabled
                                   class="form-control" value="{{optional($orders->customer)->address}}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng đặt</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($order as $orderDetailItem)
                                @php
                                    $total+=$orderDetailItem->price*$orderDetailItem->order_quantity;
                                @endphp
                                <tr>
                                    <th scope="row">{{$orderDetailItem->id}}</th>
                                    <td>{{$orderDetailItem->name}} </td>
                                    <td>
                                        {{$orderDetailItem->order_quantity}}
                                    </td>
                                    <td>
                                        {{number_format($orderDetailItem->price,0)}} VND
                                    </td>
                                    <td>
                                        {{number_format($orderDetailItem->price*$orderDetailItem->order_quantity,0)}}
                                        VND
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12" style="border-top: 1px solid #dee2e6;">
                        <label style="float: right; margin-right: 113px;">
                            Tạm tính: {{number_format($total,0)}} VND</label>
                    </div>

                    <div class="col-md-12">
                        <label style="float: right; margin-right: 121px;">
                            Phí ship: {{number_format(30000,0)}} VND</label>
                    </div>
                    <div class="col-md-12">
                        <label style="float: right; margin-right: 113px;">
                            Tổng tiền: {{number_format($total+30000,0)}} VND</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
