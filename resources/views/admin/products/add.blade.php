@extends('admin/layout')
@section('admincontent')
@include('admin/alerts')

    <h2 style="text-align:center; padding-top:70px;">Add Product</h2>
    <form style="margin-left:300px; padding:50px;" action="{{ route('product.add') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Item Name Field -->
        <div class="mb-3">
            <label class="form-label">Item Name</label>
            <input class="form-control" type="text" name="itemname" value="{{ old('itemname') }}"
                placeholder="Enter product name" />
            @error('itemname')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- size Field -->
        <div class="mb-3">
            <label class="form-label">Size</label>
            <input class="form-control" type="text" name="size" value="{{ old('size') }}"
                placeholder="Enter size" />
            @error('size')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- fragrance Field -->
        <div class="mb-3">
            <label class="form-label">Fragrance</label>
            <input class="form-control" type="text" name="fragrance" value="{{ old('fragrance') }}"
                placeholder="Enter fragrance detail" />
            @error('fragrance')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- skintype Field -->
        <div class="mb-3">
            <label class="form-label">Skin Type</label>
            <input class="form-control" type="text" name="skintype" value="{{ old('skintype') }}"
                placeholder="Enter skintype detail" />
            @error('skintype')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- hairtype Field -->
        <div class="mb-3">
            <label class="form-label">Hair Type</label>
            <input class="form-control" type="text" name="hairtype" value="{{ old('hairtype') }}"
                placeholder="Enter hairtype detail" />
            @error('hairtype')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- formulation Field -->
        <div class="mb-3">
            <label class="form-label">Formulation</label>
            <input class="form-control" type="text" name="formulation" value="{{ old('formulation') }}"
                placeholder="Enter formulation detail" />
            @error('formulation')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Detail Field -->
        <div class="mb-3">
            <label class="form-label">Short Product Detail</label>
            <input class="form-control" name="detail" placeholder="Enter product details" value="{{ old('detail') }}"></input>
            @error('detail')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- benefits Field -->
        <div class="mb-3">
            <label class="form-label">Benefits</label>
            <input class="form-control" name="benefits" placeholder="Enter benefits" value="{{ old('benefits') }}"></input>
            @error('benefits')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- how_to_use Field -->
        <div class="mb-3">
            <label class="form-label">How to use</label>
            <input class="form-control" name="how_to_use" placeholder="How to use" value="{{ old('how_to_use') }}"></input>
            @error('how_to_use')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- ingredients Field -->
        <div class="mb-3">
            <label class="form-label">Ingredients Detail</label>
            <input class="form-control" name="ingredients" placeholder="Enter ingredients detail" value="{{ old('ingredients') }}"></input>
            @error('ingredients')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- warnings Field -->
        <div class="mb-3">
            <label class="form-label">Warnings Detail</label>
            <input class="form-control" name="warnings" placeholder="Enter warnings detail" value="{{ old('warnings') }}"></input>
            @error('warnings')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Price Field -->
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input class="form-control" type="number" step="0.1" name="price"
                            value="{{ old('price') }}" placeholder="Enter product price" />
                    </div>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- stock_quantity Field -->
                <div class="mb-3 col-md-6">
                    <label class="form-label">Stock Quantity</label>
                    <div class="input-group">
                        <span class="input-group-text"></span>
                        <input class="form-control" type="number" step="5" name="stock_quantity"
                            value="{{ old('stock_quantity') }}" placeholder="Enter Stock Quantity" />
                    </div>
                    @error('stock_quantity')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>    
        </div>    
        <!-- Discounted Price Field -->
        <div class="row mb-3">
            <div class="row mb-3">
                <div class="mb-3 col-md-6">
                    <label class="form-label">Discounted Price</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input class="form-control" type="number" step="0.1" name="discounted_price"
                            value="{{ old('discounted_price') }}" placeholder="Enter discounted product price" />
                    </div>
                    @error('discounted_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                        <!-- sku Field -->
                        <div class="mb-3 col-md-6">
                    <label class="form-label">SKU</label>
                    <div class="input-group">
                        <span class="input-group-text"></span>
                        <input class="form-control" type="text" name="sku"
                            value="{{ old('sku') }}" placeholder="Enter SKU Number" />
                    </div>
                    @error('sku')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            <!-- Product Category Field -->
            <div class="mb-3 col-md-6">
                <label class="form-label">Product Category</label>
                <select class="form-control" name="category_id">
                    <option value="">Select Product Category</option>

                    @foreach ($product as $products)
                        <option value="{{ $products->category_id }}" {{ old('category_id') == $products->category_id ? 'selected' : '' }}>
                            {{ $products->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Product Sub Category Field -->
            <div class="mb-3 col-md-6">
                <label class="form-label">Sub Category</label>
                <select class="form-control" name="subcategory_id">
                    <option value="">Select Product Sub Category</option>

                    @foreach ($subcategory as $products)
                        <option value="{{ $products->subcategory_id }}" {{ old('subcategory_id') == $products->subcategory_id ? 'selected' : '' }}>
                            {{ $products->name }}
                        </option>
                    @endforeach
                </select>
                @error('subcategory_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <!-- Description Field -->
        <div class="mb-3">
            <label class="form-label">Product Description</label>
            <input class="form-control" name="description" placeholder="Enter product description" value="{{ old('description') }}"></input>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Color Field -->
        <div class="mb-3">
            <label class="form-label">Product Colors</label>
            <input class="form-control" name="color" placeholder="Enter product colors" value="{{ old('color') }}"></input>
            @error('color')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Picture Field -->
        <div class="mb-3">
            <label class="form-label">Product Picture</label>
            <input class="form-control" type="file" name="picture" />
            @error('picture')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field 1 -->
        <div class="mb-3">
            <label class="form-label">Product Picture Nullable</label>
            <input class="form-control" type="file" name="picture1" />
            @error('picture1')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field 2-->
        <div class="mb-3">
            <label class="form-label">Product Picture Nullable</label>
            <input class="form-control" type="file" name="picture2" />
            @error('picture2')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <!-- Picture Field 3 -->
        <div class="mb-3">
            <label class="form-label">Product Picture Nullable</label>
            <input class="form-control" type="file" name="picture3" />
            @error('picture3')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-lg btn-primary">Add Product</button>
        </div>
    </form>
@endsection
