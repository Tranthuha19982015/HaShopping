@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('css')
    <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet"/>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'category', 'key' => 'Add'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{ route('categories.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" name="name" class="form-control
                                   @error('name') is-invalid @enderror"
                                   placeholder="Nhập tên danh mục">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control select2_init @error('parent_id') is-invalid @enderror"
                                    name="parent_id">
                                <option value="">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
                            @error('parent_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



