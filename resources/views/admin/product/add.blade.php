@extends('layouts.admin')

@section('title')
    <title>Add product </title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'product', 'key' => 'Add'])

        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">

                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm*</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                   placeholder="Nhập tên sản phẩm" value="{{old('name')}}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Giá sản phẩm*</label>
                            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror"
                                   placeholder="Nhập giá sản phẩm" value="{{old('price')}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Ảnh đại diện</label>
                            <input type="file" name="feature_image_path" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label>Ảnh chi tiết</label>
                            <input type="file" multiple name="image_path[]" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục*</label>
                            <select class="form-control select2_init @error('category_id') is-invalid @enderror"
                                    name="category_id">
                                <option value="">Chọn danh mục</option>
                                {!! $htmlOption !!}
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Nhập tags cho sản phẩm</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mô tả sản phẩm*</label>
                            <textarea name="contents"
                                      class="form-control @error('contents') is-invalid @enderror"
                                      rows="4">
                                 {{old('contents')}}
                            </textarea>
                            @error('contents')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Thêm</button>
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




