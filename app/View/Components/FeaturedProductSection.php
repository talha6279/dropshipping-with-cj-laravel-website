<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FeaturedProductSection extends Component
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
        $category =CategoryModel::all();
        $featuredProducts = ProductModel::where('is_featured','yes')->latest()->take(8)->get();
        return view('components.featured-product-section',compact('featuredProducts','category'));
    }
}
