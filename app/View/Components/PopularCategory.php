<?php

namespace App\View\Components;

use Closure;
use App\Models\CategoryModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class PopularCategory extends Component
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
        $category = CategoryModel::take(6)->get();
        return view('components.popular-category',compact('category'));
    }
}
