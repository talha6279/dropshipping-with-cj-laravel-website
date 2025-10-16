<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = CategoryModel::all();
        $subcategory = SubCategory::all();
        return view('admin.products.add', compact('product','subcategory'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'itemname' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'fragrance' => 'required|string|max:255',
            'skintype' => 'required|string|max:255',
            'hairtype' => 'required|string|max:255',
            'formulation' => 'required|string|max:255',
            'detail' => 'required',
            'benefits' => 'required',
            'how_to_use' => 'required',
            'ingredients' => 'required',
            'warnings' => 'required',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'required|numeric|min:0',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'description' => 'nullable',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif,webp|max:4048', // Validate the image file
            'picture1' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture2' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture3' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'color' => 'required|string',
            'sku' => 'required|string',
            'stock_quantity' => 'required|numeric|min:0',
        ]);

        // Handle the picture upload if a file is provided
        $picturePath = null;
        if ($request->hasFile('picture')) {
            $picture = $request->file('picture');
            $pictureName = time() .uniqid() . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('uploads/products/images'), $pictureName);
            $picturePath = $pictureName; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath1 = null;
        if ($request->hasFile('picture1')) {
            $picture1 = $request->file('picture1');
            $pictureName1 = time() .uniqid() . '.' . $picture1->getClientOriginalExtension();
            $picture1->move(public_path('uploads/products/images'), $pictureName1);
            $picturePath1 = $pictureName1; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath2 = null;
        if ($request->hasFile('picture2')) {
            $picture2 = $request->file('picture2');
            $pictureName2 = time() .uniqid() . '.' . $picture2->getClientOriginalExtension();
            $picture2->move(public_path('uploads/products/images'), $pictureName2);
            $picturePath2 = $pictureName2; // Store relative path
        }
        // Handle the picture upload if a file is provided
        $picturePath3 = null;
        if ($request->hasFile('picture3')) {
            $picture3 = $request->file('picture3');
            $pictureName3 = time() .uniqid() . '.' . $picture3->getClientOriginalExtension();
            $picture3->move(public_path('uploads/products/images'), $pictureName3);
            $picturePath3 = $pictureName3; // Store relative path
        }



        // Create a new ProductModel instance with validated data
$product = new ProductModel([
    'itemname' => $request->input('itemname'),
    'detail' => $request->input('detail'),
    'price' => $request->input('price'),
    'color' => $request->input('color'),
    'description' => $request->input('description'),
    'category_id' => $request->input('category_id'),
    'subcategory_id' => $request->input('subcategory_id'),
    'benefits' => $request->input('benefits'),
    'formulation' => $request->input('formulation'),
    'hairtype' => $request->input('hairtype'),
    'skintype' => $request->input('skintype'),
    'fragrance' => $request->input('fragrance'),
    'size' => $request->input('size'),
    'warnings' => $request->input('warnings'),
    'ingredients' => $request->input('ingredients'),
    'stock_quantity' => $request->input('stock_quantity'),
    'sku' => $request->input('sku'),
    'how_to_use' => $request->input('how_to_use'),
    'discounted_price' => $request->input('discounted_price'),
    'picture' => $picturePath,        // Ensure this is set correctly earlier
    'picture1' => $picturePath1,      // Ensure this is set correctly earlier
    'picture2' => $picturePath2,      // Ensure this is set correctly earlier
    'picture3' => $picturePath3,      // Ensure this is set correctly earlier
]);

        // Save the instance to the database
        $product->save();
        return redirect()->back()->with('success', 'Product added successfully!');
    }

    public function trashshow()
    {
        $product = ProductModel::onlyTrashed()->get();
        return view('admin.products.trash')->with('product', $product);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = ProductModel::Paginate(30);
        return view('admin.products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the menu item by ID
        if (ProductModel::find($id))
        {
            $product = ProductModel::find($id);

            // Get all categories for dropdown
            $categories = CategoryModel::all();

            // Get all sub categories for dropdown
            $subcategories = SubCategory::all();

            // Return the edit form with the menu item and categories
            return view('admin.products.edit')->with(['product' => $product, 'categories' => $categories, 'subcategories' => $subcategories]);
        } else {
            return redirect()->back()->with('failure', 'Menu item not found.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'itemname' => 'required|string|max:255',
            'size' => 'required|string|max:255',
            'fragrance' => 'required|string|max:255',
            'skintype' => 'required|string|max:255',
            'hairtype' => 'required|string|max:255',
            'formulation' => 'required|string|max:255',
            'is_featured' => 'required|string',
            'is_new_arrival' => 'required|string',
            'is_best_seller' => 'required|string',
            'is_limited_edition' => 'required|string',
            'detail' => 'required',
            'benefits' => 'required',
            'how_to_use' => 'required',
            'ingredients' => 'required',
            'warnings' => 'required',
            'price' => 'required|numeric|min:0',
            'discounted_price' => 'required|numeric|min:0',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'description' => 'nullable',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif,webp|max:4048', // Validate the image file
            'picture1' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture2' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'picture3' => 'required|image|mimes:jpeg,png,webp,jpg,gif,webp|max:4048', // Validate the image file
            'color' => 'required|string',
            'sku' => 'required|string',
            'stock_quantity' => 'required|numeric|min:0',
        ]);
         // Find the product by ID
    $product = ProductModel::findOrFail($id);

    // Update basic fields
    $product->itemname = $request->input('itemname');
    $product->detail = $request->input('detail');
    $product->price = $request->input('price');
    $product->discounted_price = $request->input('discounted_price');
    $product->color = $request->input('color');
    $product->description = $request->input('description');
    $product->category_id = $request->input('category_id');
    $product->subcategory_id = $request->input('subcategory_id');
    $product->benefits = $request->input('benefits');
    $product->is_limited_edition = $request->input('is_limited_edition');
    $product->is_best_seller = $request->input('is_best_seller');
    $product->is_featured = $request->input('is_featured');
    $product->is_new_arrival = $request->input('is_new_arrival');
    $product->formulation = $request->input('formulation');
    $product->hairtype = $request->input('hairtype');
    $product->skintype = $request->input('skintype');
    $product->fragrance = $request->input('fragrance');
    $product->size = $request->input('size');
    $product->warnings = $request->input('warnings');
    $product->ingredients = $request->input('ingredients');
    $product->stock_quantity = $request->input('stock_quantity');
    $product->sku = $request->input('sku');
    $product->how_to_use = $request->input('how_to_use');
    

    // Handle file uploads and update picture paths
    
    if ($request->hasFile('picture')) {
        // Delete the old picture if exists
        if ($product->picture && file_exists(public_path('uploads/products/images/' . $product->picture))) {
            unlink(public_path('uploads/products/images/' . $product->picture));
        }
        // Store the new picture
        
        $picture = $request->file('picture');
        $pictureName = time() .uniqid() . '.' . $picture->getClientOriginalExtension();
        $picture->move(public_path('uploads/products/images'), $pictureName);
        $product->picture = $pictureName; // Store relative path
    }

    
    if ($request->hasFile('picture1')) {
        if ($product->picture1 && file_exists(public_path('uploads/products/images/' . $product->picture1))) {
            unlink(public_path('uploads/products/images/' . $product->picture1));
        }
        
        $picture1 = $request->file('picture1');
        $pictureName1 = time() .uniqid() . '.' . $picture1->getClientOriginalExtension();
        $picture1->move(public_path('uploads/products/images'), $pictureName1);
        $product->picture1 = $pictureName1; // Store relative path
    }

    
    if ($request->hasFile('picture2')) {
        if ($product->picture2 && file_exists('uploads/products/images/' . public_path($product->picture2))) {
            unlink(public_path('uploads/products/images/' . $product->picture2));
        }
        
        $picture2 = $request->file('picture2');
        $pictureName2 = time() .uniqid() . '.' . $picture2->getClientOriginalExtension();
        $picture2->move(public_path('uploads/products/images'), $pictureName2);
        $product->picture2 = $pictureName2; // Store relative path    
    }

    
    if ($request->hasFile('picture3')) {
        if ($product->picture3 && file_exists(public_path('uploads/products/images/' . $product->picture3))) {
            unlink(public_path('uploads/products/images/' . $product->picture3));
        }
        
        $picture3 = $request->file('picture3');
        $pictureName3 = time() .uniqid() . '.' . $picture3->getClientOriginalExtension();
        $picture3->move(public_path('uploads/products/images'), $pictureName3);
        $product->picture3 = $pictureName3; // Store relative path    
    }

    // Save the updated product
    
    $product->save();

    // Redirect back with success message
    return redirect()->back()->with('success', 'Product updated successfully!');
    }
    
    public function restore(string $id)
    {
        // Retrieve the soft-deleted item
        $product = ProductModel::withTrashed()->find($id);
    
        if($product)
        {
            if ($product->restore())
            {
                return redirect()->back()->with('success', 'Product restored successfully!');
            } else {
                return redirect()->back()->with('failure', 'Product to restore the item.');
            }
        } else {
            return redirect()->back()->with('failure', 'Item not found!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the menu item by ID
        if (ProductModel::find($id))
        {
            $product = ProductModel::find($id);

            if ($product->delete())
            {

                return redirect()->back()->with('success', 'Product Trashed successfully!');
            }
        } else {
            return redirect()->back()->with('failure', 'Product not found!');
        }

    }


    public function permdeleted(string $id)
{
    $product = ProductModel::withTrashed()->find($id);

    if ($product) {
        // Delete the pictures if they exist
        $pictures = [$product->picture, $product->picture1, $product->picture2, $product->picture3];

        foreach ($pictures as $picture) {
            if ($picture && file_exists(public_path($picture))) {
                unlink(public_path($picture));
            }
        }

        // Force delete the product
        if ($product->forceDelete()) {
            return redirect()->back()->with('success', 'Product deleted successfully!');
        } else {
            return redirect()->back()->with('failure', 'Failed to delete product!');
        }
    } else {
        return redirect()->back()->with('failure', 'Product not found!');
    }
}

}
