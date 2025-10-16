<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\CategoryModel;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = CategoryModel::all();
        return view('admin/subcategory/add',compact('category'));
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
        $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'required|image|mimes:jpeg,webp,png,jpg,gif|max:4048',
            'category_id' => 'required',
        ]);
        $category = new SubCategory;
        $category->name = $request->name;
        $category->category_id = $request->category_id;

        if($request->hasFile('picture')) {
            // Get the uploaded file
            $file = $request->file('picture');
            $filename = time(). '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/products/subcategories'), $filename);

            // Save the filename in the subcategory model
            $category->picture = $filename;
    }
    $category->save();

        return redirect()->back()->with('success', 'SubCategory added successfully!');
}

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $category = SubCategory::all();
        return view('admin/subcategory/show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cate = SubCategory::find($id);
        $categories = CategoryModel::all();
        return view('admin/subcategory/edit', compact('cate','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Validate the incoming request data
         $request->validate([
            'name' => 'required|string|max:255',
            'picture' => 'nullable|image|mimes:jpeg,webp,png,jpg,gif|max:4048',
            'category_id' => 'required',
        ]);

        // Find the subcategory by its ID
        $category = SubCategory::find($id);

        // Update the subcategory name
        $category->name = $request->name;
        $category->category_id = $request->category_id;

        // Check if a new image has been uploaded
        if ($request->hasFile('picture')) {

            // Delete the old image if it exists
            if ($category->picture && file_exists(public_path('uploads/products/subcategories/' . $category->picture))) {
                unlink(public_path('uploads/products/subcategories/' . $category->picture));
            }

            // Upload the new image
            $file = $request->file('picture');
            $filename = time(). '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/products/subcategories'), $filename);

            // Update the subcategory_pic field with the new image filename
            $category->picture = $filename;
        }

        // Save the updated category details to the database
        $category->save();

        // Redirect to the index page with a success message
        return redirect()->route('product.subcategory.show')->with('success', 'SubCategory updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = SubCategory::find($id);

        // Check if there are any products associated with this subcategory
        // $menusWithCategory = ProductModel::where('product_id', $id)->exists();

        // if ($menusWithCategory) {
        //     return redirect()->back()->with('failure' ,'This subcategory cannot be deleted because it is associated with one or more product items');
        // }

        if ($cat->picture && file_exists(public_path('uploads/products/subcategories/' . $cat->picture))) {
            unlink(public_path('uploads/products/subcategories/' . $cat->picture));
        }
        $cat->delete();

        return redirect()->back()->with('success', 'SubCategory Deleted successfully!');
    }
}
