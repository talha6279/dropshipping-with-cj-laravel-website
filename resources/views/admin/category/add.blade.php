@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')
<h2 style="text-align:center; padding-top:70px;">Add Product Category</h2>
<form style="margin-left:300px; padding:50px;" action="{{ route('product.category.add') }}"  style="margin-left:300px; padding:50px;" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Product Category</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter product category" />
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label"> Product Category Picture</label>
        <input class="form-control" type="file" name="picture" />
        @error('picture')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Add Product Category</button>
    </div>
</form>
@endsection