@extends('layouts.admin')

@section('title')
    <title>Edit product </title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'Sửa thông tin', 'key' => 'sản phẩm'])

        <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm*</label>
                            <input type="text" name="name" class="form-control"
                                   placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                        </div>

                        <div class="form-group">
                            <label>Giá*</label>
                            <input type="text" name="price" class="form-control"
                                   placeholder="Nhập giá sản phẩm" value="{{$product->price}}">
                        </div>

                        <div class="form-group">
                            <label>số lượng*</label>
                            <input type="text" name="quantity" class="form-control"
                                   placeholder="Nhập số lượng sản phẩm" value="{{$product->quantity}}">
                        </div>

                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" name="feature_image_path" class="form-control-file">
                            <div class="col-md-12 container_feature_image">
                                <div class="row">
                                    <img style="max-width: 15%;" src="{{$product->feature_image_path}}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Ảnh chi tiết</label>
                            <input type="file" multiple name="image_path[]" class="form-control-file">
                            <div class="col-md-12 container_image_detail">
                                <div class="row">
                                    @foreach($product->productImages as $productImageItem)
                                        <div class="col-md-3">
                                            <img style="max-width: 68%;" src="{{$productImageItem->image_path}}"
                                                 alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control select2_init" name="category_id">
                                <option value="">Chọn danh mục</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nhập tags cho sản phẩm</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                                @foreach($product->tags as $tagItem)
                                    <option value="{{$tagItem->name}}" selected>{{$tagItem->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Nhập nội dung</label>
                            <textarea name="contents" class="form-control"
                                      rows="4">{{$product->content}}</textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('admins/product/add/add.js') }}"></script>

@endsection



