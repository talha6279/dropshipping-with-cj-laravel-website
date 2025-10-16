@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

<div class="container">
    <div class="row mb-3"  style="text-align:center; padding-top:70px;">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Product SubCategories</h3>
            <a href="{{ route('product.subcategory.add') }}" class="btn btn-primary">Add Product SubCategory</a>
        </div>
    </div>
</div>
<div style="overflow-x: auto;">
<table  style="margin-left:300px; padding:50px;" class="table table-bordered table-striped table-responsive col-9">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">SubCategory Name</th>
            <th scope="col">SubCategory Picture</th>
            <th scope="col">Category Name</th>
            <th scope="col">Created At</th>
            <th colspan="2">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $cat)
            <tr>
                <td>{{ $cat->subcategory_id }}</td>
                <td>{{ $cat->name }}</td>
                <td><img src="{{ asset('uploads/products/subcategories/'.$cat->picture) }}" style="border-radius: 50%" height="90px" width="100px" alt="{{ $cat->name }}"></td>
                <td>{{ $cat->category->name }}</td>
                <td>{{ $cat->created_at }}</td>
                <td>
                    <a href="{{ route('product.subcategory.edit', $cat->subcategory_id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <a href="{{ route('product.subcategory.delete', $cat->subcategory_id) }}" class="btn btn-sm btn-danger delete-confirmation" data-id="{{ $cat->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection