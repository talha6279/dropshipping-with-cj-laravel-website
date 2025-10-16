@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

    <h2 style="text-align:center; padding-top:70px;">Update Product</h2>
    <form action="{{ route('product.update', $product->product_id) }}" style="margin-left:300px; padding:50px;" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Product Name Field -->
        <div class="row mb-3">
        <div class="mb-3 col-md-6">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="itemname" value="{{ $product->itemname }}"
                placeholder="Enter product name" />
            @error('itemname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- sku field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">SKU</label>
            <input class="form-control" type="text" name="sku" value="{{ $product->sku }}"
                placeholder="Enter SKU of product" />
            @error('sku')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- size field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Size</label>
            <input class="form-control" type="text" name="size" value="{{ $product->size }}"
                placeholder="Enter size of product" />
            @error('size')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- formulation field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Formulation</label>
            <input class="form-control" type="text" name="formulation" value="{{ $product->formulation }}"
                placeholder="Enter formulation of product" />
            @error('formulation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- is_featured field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Featured</label>
            <input class="form-control" type="text" name="is_featured" value="{{ $product->is_featured }}"
                placeholder="Featured product or not" />
            @error('is_featured')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- is_new_arrival field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">New Arrival</label>
            <input class="form-control" type="text" name="is_new_arrival" value="{{ $product->is_new_arrival }}"
                placeholder="New Arrival product or not" />
            @error('is_new_arrival')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- is_best_seller field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Best Seller</label>
            <input class="form-control" type="text" name="is_best_seller" value="{{ $product->is_best_seller }}"
                placeholder="Best Seller product or not" />
            @error('is_best_seller')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- is_limited_edition field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Limited Edition</label>
            <input class="form-control" type="text" name="is_limited_edition" value="{{ $product->is_limited_edition }}"
                placeholder="Limited Edition product or not" />
            @error('is_limited_edition')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
</div>

        <!-- Detail Field -->
        <div class="mb-3">
            <label class="form-label">Short Product Detail</label>
            <input class="form-control" name="detail" placeholder="Enter product details" value="{{ $product->detail }}">
            @error('detail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- ingredients Field -->
        <div class="mb-3">
            <label class="form-label">Ingredients</label>
            <input class="form-control" name="ingredients" placeholder="Enter ingredients detail" value="{{ $product->ingredients }}">
            @error('ingredients')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- warnings Field -->
        <div class="mb-3">
            <label class="form-label">Warnings</label>
            <input class="form-control" name="warnings" placeholder="Enter warnings detail" value="{{ $product->warnings }}">
            @error('warnings')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- fragrance Field -->
        <div class="mb-3">
            <label class="form-label">Fragrance</label>
            <input class="form-control" name="fragrance" placeholder="Enter fragrance detail" value="{{ $product->fragrance }}">
            @error('fragrance')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- skintype Field -->
        <div class="mb-3">
            <label class="form-label">Skin Type</label>
            <input class="form-control" name="skintype" placeholder="Enter skintype detail" value="{{ $product->skintype }}">
            @error('skintype')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- hairtype Field -->
        <div class="mb-3">
            <label class="form-label">Hair Type</label>
            <input class="form-control" name="hairtype" placeholder="Enter hairtype detail" value="{{ $product->hairtype }}">
            @error('hairtype')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row mb-3">
            <div class="mb-3 col-md-6">
                <!-- price tab -->
                <label class="form-label">Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input class="form-control" type="number" step="0.01" name="price"
                        value="{{ old('price', $product->price) }}" placeholder="Enter price" />
                </div>
                @error('price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- stock quantity -->
            <div class="mb-3 col-md-6">
                <label class="form-label">Stock Quantity</label>
                <div class="input-group">
                    <span class="input-group-text"></span>
                    <input class="form-control" type="number" step="5" name="stock_quantity"
                        value="{{ old('stock_quantity', $product->stock_quantity) }}" placeholder="Enter stock quantity" />
                </div>
                @error('stock_quantity')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label class="form-label">Discounted Price</label>
                <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input class="form-control" type="number" step="0.01" name="discounted_price"
                        value="{{ old('discounted_price', $product->discounted_price) }}" placeholder="Enter discounted price" />
                </div>
                @error('discounted_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Category Field -->
        <div class="row mb-3">
        <div class="mb-3 col-md-6">
            <label class="form-label">Product Category</label>
            <select class="form-control" name="category_id">
                <option value="">Select Product Category</option>
                @foreach ($categories as $category)
                    <option value="{{ $product->category_id }}" {{ (old('category_id') ?? $category->category_id) == $category->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Sub Category Field -->
        <div class="mb-3 col-md-6">
            <label class="form-label">Product Sub Category</label>
            <select class="form-control" name="subcategory_id">
                <option value="">Select Sub Category of Product</option>
                @foreach ($subcategories as $category)
                    <option value="{{ $product->subcategory_id }}" {{ (old('subcategory_id') ?? $category->subcategory_id) == $category->subcategory_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
            @error('subcategory_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Color Field -->
        <div class="mb-3">
            <label class="form-label">Color</label>
            <input class="form-control" type="text" name="color" value="{{ $product->color }}"
                placeholder="Enter product color" />
            @error('color')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="4" placeholder="Enter product description">{{ $product->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- benefits Field -->
        <div class="mb-3">
            <label class="form-label">Benefits</label>
            <textarea class="form-control" name="benefits" rows="4" placeholder="Enter product benefits">{{ $product->benefits }}</textarea>
            @error('benefits')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- how_to_use Field -->
        <div class="mb-3">
            <label class="form-label">How to Use</label>
            <textarea class="form-control" name="how_to_use" rows="4" placeholder="How to Use the Product">{{ $product->how_to_use }}</textarea>
            @error('how_to_use')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="row">
            <!-- Existing Pictures -->
            <div class="col-md-3">
                <p>Existing Pictures</p>
                <img src="{{ asset('uploads/products/images/' .$product->picture) }}" alt="Product Picture" width="100" height="100"
                    style="border-radius: 50%" />
                <img src="{{ asset('uploads/products/images/' .$product->picture1) }}" alt="Product Picture 1" width="100" height="100"
                    style="border-radius: 50%" />
                <img src="{{ asset('uploads/products/images/' .$product->picture2) }}" alt="Product Picture 2" width="100" height="100"
                    style="border-radius: 50%" />
                <img src="{{ asset('uploads/products/images/' .$product->picture3) }}" alt="Product Picture 3" width="100" height="100"
                    style="border-radius: 50%" />
            </div>
            <!-- Picture Upload Fields -->
            <div class="mb-3 col-md-9">
                <label class="form-label">Update Product Pictures</label>
                <input class="form-control mb-2" type="file" name="picture" />
                <input class="form-control mb-2" type="file" name="picture1" />
                <input class="form-control mb-2" type="file" name="picture2" />
                <input class="form-control mb-2" type="file" name="picture3" />
                @error('picture')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('picture1')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('picture2')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @error('picture3')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Update Product</button>
        </div>
    </form>
@endsection
