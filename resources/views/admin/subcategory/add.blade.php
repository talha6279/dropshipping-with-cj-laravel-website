@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

<h2 style="text-align:center; padding-top:70px;">Add Product Sub Category</h2>
<form action="{{ route('product.subcategory.add') }}" style="margin-left:300px; padding:50px;" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Product Sub Category</label>
        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Enter product sub category" />
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <!-- Product Category Field -->
    <div class="mb-3 col-md-6">
                <label class="form-label">Product Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Product Category</option>

                    @foreach ($category as $products)
                        <option value="{{ $products->category_id }}" {{ old('category_id') == $products->category_id ? 'selected' : '' }}>
                            {{ $products->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

    <div class="mb-3">
        <label class="form-label"> Product Sub Category Picture</label>
        <input class="form-control" type="file" name="picture" />
        @error('picture')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="text-center mt-3">
        <button type="submit" class="btn btn-lg btn-primary">Add Product Sub Category</button>
    </div>
</form>
@endsection