@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

<h3 style="text-align:center; padding-top:70px;">Update Product Sub Category</h3>
    <form action="{{ route('product.subcategory.update', $cate->subcategory_id  ) }}" style="margin-left:300px; padding:50px;" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Product Sub Category</label>
            <input class="form-control" type="text" name="name" value="{{ $cate->name }}"
                placeholder="Enter product sub category " />
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Category Field -->
        <div class="mb-3">
            <label class="form-label">Product Category</label>
            <select class="form-control" name="category_id">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $cate->category_id }}" {{ (old('category_id') ?? $category->category_id) == $category->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- picture field -->
        <p>Existing Picture</p>
        <img src="{{ asset('uploads/products/subcategories/' . $cate->picture) }}" height="150" width="150" alt="{{ $cate->name }}">
        <div class="mb-3">
            <label class="form-label">Update Product Sub Category Picture</label>
            <input class="form-control" type="file" name="picture" />
            @error('picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Product Sub Category</button>
        </div>
    </form>
@endsection