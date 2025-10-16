<?php

namespace App\View\Components;

use Closure;
use App\Models\CheckoutModel;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdminRecentOrderHistory extends Component
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
        $orders = CheckoutModel::all();
        return view('components.admin-recent-order-history',compact('orders'));
    }
}
