<?php

namespace App\View\Components;

use Closure;
use App\Models\ProductModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TopSellingProduct extends Component
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
        $topsell = ProductModel::where('is_best_seller','yes')->latest()->take(20)->get();
        return view('components.top-selling-product',compact('topsell'));
    }
}
