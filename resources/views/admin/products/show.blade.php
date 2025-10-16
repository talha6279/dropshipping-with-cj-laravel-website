@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

<div class="container">
    <div class="row mb-3" style="text-align:center;margin-left:150px; padding-top:70px;">
        <div class="col d-flex justify-content-between align-items-center">
            <h3 class="mb-0">All Products</h3>
            <a href="{{ route('product.add') }}" class="btn btn-primary">Add Product</a>
        </div>
    </div>
</div>
<div style="overflow-x: auto;">
<table class="table table-bordered table-striped table-responsive col-9"  style="margin-left:300px; padding:50px; text-align:center;">
    <thead>
        <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Picture</th>
                    <th>Discounted Price</th>
                    <th>Featured</th>
                    <th>New Arrival</th>
                    <th>Best Seller</th>
                    <th>Limited Edition</th>
                    <th>Stock Quantity</th>
                    <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product as $products)
        <tr>
            <td>{{ $products->product_id }}</td>
            <td>{{ $products->itemname }}</td>
            <td>
                @if($products->picture)
                <img src="{{ asset('uploads/products/images/'.$products->picture) }}" alt="{{ $products->itemname }}" width="100" height="80" style="border-radius: 50%">
                @else
                No image available
                @endif
            </td>
            <td>${{ number_format($products->discounted_price, 2)  }}</td>
            <td>{{ $products->is_featured }}</td>
            <td>{{ $products->is_new_arrival }}</td>
            <td>{{ $products->is_best_seller }}</td>
            <td>{{ $products->is_limited_edition }}</td>
            <td>{{ $products->stock_quantity }}</td>
            <td>
                <a href="{{ route('product.edit', $products->product_id) }}" class="btn btn-sm btn-primary">Edit</a>
            
                <a href="{{ route('product.delete', $products->product_id) }}" class="btn btn-sm btn-danger">Trash</a>
            </td>
        </tr>

        {{-- <tr>
            <td colspan="6" class="text-center">No menu items found.</td>
        </tr> --}}
        @endforeach
    </tbody>
</table>
{{ $product->links('pagination::bootstrap-5') }}

@endsection
