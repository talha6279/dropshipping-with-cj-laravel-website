<?php

namespace App\Http\Controllers;

use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                'product_id' => 'required|exists:product_models,product_id',
                'rating' => 'nullable|integer|min:1|max:5',
                'review' => 'required|string|max:1024'
            ]);
            if(!Auth::check()){
                return response()->json([
                    'success' =>false,
                    'message' => 'Unauthorized. Please LogIn yourself to submit review'
                ]);
            }
            $review =ReviewModel::create([
                'user_id' => Auth::id(),
                'product_id' => $request->product_id,
                'rating' => $request->rating?$request->rating:5,
                'review' => $request->review
            ]);
            $review->save();
            return redirect()->back();

    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
