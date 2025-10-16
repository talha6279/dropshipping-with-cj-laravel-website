<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use Stripe\Charge;
use App\Models\User;
use App\Models\CartModel;
use App\Models\ReviewModel;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\CheckoutModel;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $totalusers= User::all()->count();
        $totalproducts= ProductModel::all()->count();
        $totalorders= CheckoutModel::all()->count();
        $shippedorders= CheckoutModel::where('status','Shipped')->get()->count();
        $delieverdorders= CheckoutModel::where('status','Delieverd')->get()->count();
        $totalcarts= CartModel::all()->count();
        return view('admin.index',compact('totalusers','delieverdorders','shippedorders','totalproducts','totalorders','totalcarts'));
    }
    public function home()
    {
        $count = 0; // Default count for guests
        $cartss = collect();
    
        if (Auth::check()) {
            $user = Auth::user();
            $count = CartModel::where('user_id', $user->id)->count();
            $cartss = CartModel::where('user_id', $user->id)->take(2)->get();

        }
    
        return view('website.index', compact('count','cartss'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function dash()
    {
        $user = Auth::user();
        $order = CheckoutModel::where('user_id',$user->id)->get();
        $orders = CheckoutModel::where('user_id',$user->id)->count();
        $pending = CartModel::where('user_id',$user->id)->count();
        return view('admin.dashboard',compact('order','user','orders','pending'));
    }
    public function productdetail(string $id)
    {        
        $product = ProductModel::withCount('reviews')->withAvg('reviews', 'rating')->find($id);
         // Paginate the reviews related to the product, 3 per page
        $reviews = ReviewModel::where('product_id', $id)
        ->with('user') // Eager load the user relationship
        ->latest()->take(3)->get();
        $relatedProducts = ProductModel::where('category_id', $product->category_id)->latest()->take('8')->get(); // Exclude the current product
        $count = 0; // Default count for guests
        $cartss = collect();
    
        if (Auth::check()) {
            $user = Auth::user();
            $count = CartModel::where('user_id', $user->id)->count();
            $cartss = CartModel::where('user_id', $user->id)->take(2)->get();

        }
        return view('website.product-detail', compact('product','relatedProducts','cartss','reviews','count'));
    }
    public function cart(){
        $count = 0; // Default count for guests
        $cartss = collect();
    
        if (Auth::check()) {
            $user = Auth::user();
            $count = CartModel::where('user_id', $user->id)->count();
            $carts = CartModel::where('user_id', $user->id)->get();
            $cartss = CartModel::where('user_id', $user->id)->take(2)->get();
        }
        return view('website.cart',compact('count','carts','cartss'));
    }
    public function checkout(){
        $count = 0; // Default count for guests
        $cartss = collect();
    
        if (Auth::check()) {
            $user = Auth::user();
            $count = CartModel::where('user_id', $user->id)->count();
            $carts = CartModel::where('user_id', $user->id)->get();
            $cartss = CartModel::where('user_id', $user->id)->take(2)->get();
        }
        return view('website.checkout',compact('count','carts','cartss'));
    }
    public function addcart(string $id){
        $product_id = $id;
        $user = Auth::user();
        $user_id = $user->id;
        $cart = new CartModel;
        $cart->user_id = $user_id;
        $cart->product_id = $product_id;
        $cart->save();
        return redirect()->back();
    }
    public function deletecart($id)
{
    $cartItem = CartModel::find($id);

    if ($cartItem) {
        $cartItem->delete(); 
    }

    return redirect()->back();
}

    public function confirmorder(Request $request)
{
    // Validate the request data
    $request->validate([
        'first_name' => 'required|string|max:30',
        'last_name' => 'required|string|max:30',
        'country' => 'required|string|max:30',
        'address' => 'required|string|max:300',
        'city' => 'required|string|max:30',
        'postal_code' => 'required|string|max:30',
        'phone' => 'required|string|max:30',
        'email' => 'required|string|max:50',
        'order_note' => 'nullable|string',
    ]);

    // Check if the user is authenticated
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Please log in to place an order.');
    }

    $userId = Auth::id();

    // Retrieve all cart items for the authenticated user
    $cartItems = CartModel::where('user_id', $userId)->get();

    // Check if the cart is empty
    if ($cartItems->isEmpty()) {
        return redirect()->back()->with('error', 'Your cart is empty.');
    }

    // Prepare an array to hold checkout data
    $checkoutData = [];

    foreach ($cartItems as $item) {
        $checkoutData[] = [
            'user_id' => $userId,
            'product_id' => $item->product_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'country' => $request->country,
            'address' => $request->address,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'phone' => $request->phone,
            'email' => $request->email,
            'order_note' => $request->order_note,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    // Insert multiple records into the checkout table
    CheckoutModel::insert($checkoutData);

    // Delete the cart items for the user
    CartModel::where('user_id', $userId)->delete();

    return redirect()->back()->with('success', 'Your order has been placed successfully.');
}



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    public function stripe($value){
        return view('website.stripe',compact('value'));
    }
    public function stripePost(Request $request,$value)

    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

    

        Charge::create ([

                "amount" => $value * 100,

                "currency" => "usd",

                "source" => $request->stripeToken,

                "description" => "Patyment from Shofy" 

        ]);

      

        Session::flash('success', 'Payment successful!');

              

        return back();

    }
    public function contact(){
        $count = 0; // Default count for guests
        $cartss = collect();
    
        if (Auth::check()) {
            $user = Auth::user();
            $count = CartModel::where('user_id', $user->id)->count();
            $carts = CartModel::where('user_id', $user->id)->get();
            $cartss = CartModel::where('user_id', $user->id)->take(2)->get();
        }
        return view('website.contact',compact('user','count','carts','cartss'));
    }
    public function vieworder(){
        $orders = CheckoutModel::all();
        return view('admin.order',compact('orders'));
    }
    public function shipped($id){
        $orders = CheckoutModel::find($id);
        $orders->status = 'Shipped';
        $orders->save();
        return redirect()->back();
    }
    public function delieverd($id){
        $orders = CheckoutModel::find($id);
        $orders->status = 'Delieverd';
        $orders->save();
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
