@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('content')
    <div class="content-wrapper">
        @include('partials.content_header',['name' => 'category', 'key' => 'Edit'])

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{ route('categories.update',['id'=>$category->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" name="name" value="{{$category->name}}"
                                   class="form-control" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Sửa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection



