@extends('website/layout')
@include('admin.alerts')
@section('content')

    <!-- Start Breadcrumb Section -->
    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                  <li class="breadcrumb-item active" aria-current="page">Cart</li>
                </ol>
              </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

    <!-- Star Whistlist section -->
    <div class="whistlist-section cart mt-110 mb-110">
        <div class="container">
            <div class="row mb-50">
                <div class="col-12">
                    <div class="whistlist-table">
                        <table class="eg-table2">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                        $value=0;
                                    ?>
                                    @foreach($carts as $cart)
                                    <td>
                                    <form method="POST" action="{{ route('delete-cart', $cart->cart_id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-icon" title="Remove from cart">
                                    <i class="bi bi-x-lg"></i>
                                    </button>
                                    </form>
                                    </td>
                                    <td data-label="Product" class="table-product">
                                        <div class="product-img">
                                            <img src="{{asset('uploads/products/images/' .$cart->products->picture)}}" alt="">
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="#">{{$cart->products->itemname}}</a></h6>
                                        </div>
                                    </td>
                                    <td data-label="Price">
                                        <p class="price">
                                            <del>${{$cart->products->price}}</del>
                                            ${{$cart->products->discounted_price}}
                                        </p>
                                    </td>
                                    <td data-label="Quantity">
                                        <div class="quantity-counter">
                                            <a href="#" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                            <input name="quantity" type="text" class="quantity__input" value="01">
                                            <a href="#" class="quantity__plus"><i class='bx bx-plus' ></i></a>
                                        </div>
                                    </td>
                                    <td data-label="Total">
                                        $30.00
                                    </td>
                                </tr>
                                <?php
                                    $value=$value+$cart->products->discounted_price
                                ?>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="coupon-area">
                        <div class="cart-coupon-input">
                            <h5>Coupon Code</h5>
                            <form>
                                <div class="form-inner">
                                    <input type="text" placeholder="Coupon Code">
                                    <button type="submit" class="primary-btn1 hover-btn3">Apply Code</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Cart Totals</th>
                                <th></th>
                                <th>${{$value}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Shipping</td>
                                <td>
                                    <ul class="cost-list text-start">
                                        <li>Shipping Fee</li>
                                        <li>Total ( tax excl.)</li>
                                        <li>Total ( tax incl.)</li>
                                        <li>Taxes</li>
                                        <li>Shipping Enter your address to view shipping options. <br> <a href="#">Calculate
                                                shipping</a>
                                        </li>
                                    </ul>
                                </td>
                                <td>
                                    <ul class="single-cost text-center">
                                        <li>Fee</li>
                                        <li>$15</li>
                                        <li></li>
                                        <li>$15</li>
                                        <li>$15</li>
                                        <li>$5</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td></td>
                                <td>$162.70</td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="primary-btn1 hover-btn3">Product Checkout</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Whistlist section -->

   <!-- Star Gift section section -->
    <div class="gift-section">
        <img src="assets/img/home1/gift-card-img1.png" alt="" class="gift-img1">
        <img src="assets/img/home1/gift-card-img2.png" alt="" class="gift-img2">
        <div class="container-lg container-fluid">
            <div class="gift-wrapper">
                <h5>BEAUTICO GIFT CARD</h5>
                <div class="gift-card-content">
                    <p>Whatever your summer looks like, bring your own heat with up to 25% off Lumin Brand.Pellentesque ipsum dui.</p>
                </div>
                <a href="gift-card.html" class="primary-btn1 hover-btn3">*Shop Gift Cards*</a>
            </div>
        </div>
    </div>
    <!-- End Gift section section -->
    @endsection