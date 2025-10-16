<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class SuggestForYou extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $suggestedProducts=ProductModel::where('category_id','2')->latest()->take(2)->get();
        $suggestedProduct=ProductModel::where('category_id','2')->first()->take(2)->get();
        $latestProducts=ProductModel::where('category_id','2')->inRandomOrder()->take(4)->get();
        $fragrance2=ProductModel::where('category_id','4')->inRandomOrder()->take(4)->get();
        $fragrance=ProductModel::where('category_id','4')->latest()->take(2)->get();
        $fragrance1=ProductModel::where('category_id','4')->take(2)->get();
        return view('components.suggest-for-you',compact('fragrance1','fragrance2','suggestedProducts','fragrance','suggestedProduct','latestProducts'));
    }
}
