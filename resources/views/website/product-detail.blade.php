@extends('website/layout')
@section('content')

 <!-- Start Breadcrumb Section -->
 <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    <li class="breadcrumb-item active" aria-current="page">Product Default</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Breadcrumb Section section -->

    <!-- Start Shop Details top section -->
    <div class="shop-details-top-section mt-110 mb-110"> 
        <div class="container-xl container-fluid-lg container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="shop-details-img">  
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-img1" role="tabpanel"
                               >
                                <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{asset('uploads/products/images/' .$product->picture)}}" height="910" width="648">
                                    <img src="{{asset('uploads/products/images/' .$product->picture)}}" height="910" width="648" alt="">
                                </div> 
                            </div>
                            <div class="tab-pane fade" id="v-pills-img2" role="tabpanel"
                                >
                                <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{asset('uploads/products/images/' .$product->picture1)}}" height="910" width="648">
                                    <img src="{{asset('uploads/products/images/' .$product->picture1)}}" height="910" width="648" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-img3" role="tabpanel"
                                aria-labelledby="v-pills-img3-tab">
                                <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{asset('uploads/products/images/' .$product->picture2)}}" height="910" width="648">
                                    <img src="{{asset('uploads/products/images/' .$product->picture2)}}" height="910" width="648" alt="">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-img4" role="tabpanel"
                                aria-labelledby="v-pills-img4-tab">
                                <div class="shop-details-tab-img product-img--main" data-scale="1.4" data-image="{{asset('uploads/products/images/' .$product->picture3)}}" height="910" width="648">
                                    <img src="{{asset('uploads/products/images/' .$product->picture3)}}" height="910" width="648" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <button class="nav-link active" id="v-pills-img1-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-img1" type="button" role="tab" aria-controls="v-pills-img1" aria-selected="true">
                                <img src="{{asset('uploads/products/images/' .$product->picture)}}" height="90" width="90" alt="">
                            </button>
                            <button class="nav-link" id="v-pills-img2-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-img2" type="button" role="tab" aria-controls="v-pills-img2"
                                aria-selected="false">
                                <img src="{{asset('uploads/products/images/' .$product->picture1)}}" height="90" width="90" alt="">
                            </button>
                            <button class="nav-link" id="v-pills-img3-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-img3" type="button" role="tab" aria-controls="v-pills-img3"
                                aria-selected="false">
                                <img src="{{asset('uploads/products/images/' .$product->picture2)}}" height="90" width="90" alt="">
                            </button>
                            <button class="nav-link" id="v-pills-img4-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-img4" type="button" role="tab" aria-controls="v-pills-img4"
                                aria-selected="false">
                                <img src="{{asset('uploads/products/images/' .$product->picture3)}}" height="90" width="90" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shop-details-content">
                        <h1>{{$product->itemname}}</h1>
                        <div class="rating-review">
                            <div class="rating">
                                
                                @php
                                    $averageRating = $product->reviews_avg_rating; // Keep original decimal value
                                @endphp

                               @for ($i = 1; $i <= 5; $i++)
                               @if ($i <= floor($averageRating))
                                 <i class="bi bi-star-fill" style="color: #FFD700;"></i> <!-- Full star -->
                               @elseif ($i == ceil($averageRating) && ($averageRating - floor($averageRating)) >= 0.5)
                                 <i class="bi bi-star-half" style="color: #FFD700;"></i> <!-- Half star -->
                               @else
                                 <i class="bi bi-star" style="color: #ccc;"></i> <!-- Empty star -->
                               @endif
                               @endfor

                               <p>{{ number_format($product->reviews_avg_rating, 1) }}</p><br><br>
                               <p><a href="#">({{$product->reviews_count}} reviews)</a></p>

                            </div>
                        </div>
                        <p>{{$product->detail}}</p>
                        <div class="price-area">
                            <p class="price">${{$product->discounted_price}} <del>${{$product->price}}</del>   <b class="h6 fw-bold text-danger">  (10% off)</h6></b>
                        </div>
                        <div class="quantity-color-area">
                            <div class="quantity-color">
                                <h6 class="widget-title">Quantity</h6>
                                <div class="quantity-counter">
                                    <a href="#" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                    <input name="quantity" type="text" class="quantity__input" value="01">
                                    <a href="#" class="quantity__plus"><i class='bx bx-plus' ></i></a>
                                </div>
                            </div>
                            <div class="quantity-color">
                                <h6 class="widget-title">Colors Available</h6>
                                {{$product->color}}
                            </div>
                        </div>
                        <div class="shop-details-btn">
                            <a href="{{route('add-cart', $product->product_id)}}" class="primary-btn1 hover-btn3">*Add to Cart*</a>
                            <a href="checkout.html" class="primary-btn1 style-3 hover-btn4">*Buy Now*</a>
                        </div>
                        <div class="product-info">
                            <ul class="product-info-list">
                                <li> <span>SKU:</span> {{$product->sku}}</li>
                                <li> <span>In Stock:</span> <a href="shop-4-columns.html">{{$product->stock_quantity}} left </a></li>
                                <li> <span>Category:</span> <a href="shop-slider.html">{{$product->category->name}}</a></li>
                            </ul>
                        </div>
                        <div class="products-info-btn">
                        <ul class="product-info-list">
                        <li data-bs-toggle="modal" data-bs-target="#productsShippingModal"><i class='bx bxs-truck' ></i><a style="color:grey" href="#"> Shipping</a>
                                <i class='bx bx-envelope'></i><a style="color:grey" href="contact.html"> Ask about this products</a>
                                </div>
                        <div class="compare-wishlist-area">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span>
                                            <svg width="11" height="11" viewBox="0 0 11 11" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_529_317)">
                                                    <path
                                                        d="M2.11516 6.51849L10.5773 6.51849C10.6609 6.51857 10.7426 6.54421 10.8121 6.59218C10.8816 6.64015 10.9358 6.7083 10.9678 6.78801C10.9998 6.86772 11.0082 6.95543 10.9919 7.04006C10.9756 7.12468 10.9354 7.20242 10.8763 7.26347L8.05556 10.1735C8.01682 10.2164 7.97011 10.2508 7.91821 10.2747C7.86631 10.2985 7.81028 10.3114 7.75347 10.3124C7.69666 10.3134 7.64023 10.3027 7.58755 10.2807C7.53486 10.2587 7.48701 10.2261 7.44683 10.1846C7.40665 10.1432 7.37498 10.0938 7.3537 10.0394C7.33242 9.98509 7.32197 9.92687 7.32297 9.86826C7.32397 9.80965 7.33641 9.75185 7.35953 9.6983C7.38266 9.64476 7.416 9.59657 7.45757 9.5566L9.55561 7.39151L2.11516 7.39151C2.00294 7.39151 1.89532 7.34552 1.81598 7.26366C1.73663 7.1818 1.69205 7.07077 1.69205 6.955C1.69205 6.83923 1.73663 6.72821 1.81598 6.64634C1.89532 6.56448 2.00294 6.51849 2.11516 6.51849ZM2.94444 0.826402L0.123739 3.73647C0.0646414 3.79751 0.0244043 3.87526 0.00810944 3.95988C-0.00818542 4.04451 0.000192853 4.13222 0.0321861 4.21193C0.0641793 4.29164 0.118352 4.35979 0.187863 4.40776C0.257374 4.45573 0.339105 4.48137 0.422733 4.48145L8.88485 4.48145C8.99706 4.48145 9.10468 4.43546 9.18403 4.35359C9.26337 4.27173 9.30795 4.16071 9.30795 4.04494C9.30795 3.92917 9.26337 3.81814 9.18403 3.73628C9.10468 3.65442 8.99706 3.60843 8.88485 3.60843L1.44439 3.60843L3.54243 1.44334C3.584 1.40337 3.61734 1.35518 3.64047 1.30164C3.66359 1.24809 3.67603 1.19029 3.67703 1.13168C3.67803 1.07307 3.66758 1.01485 3.6463 0.9605C3.62502 0.906147 3.59335 0.856772 3.55317 0.815322C3.51299 0.773871 3.46514 0.741194 3.41245 0.71924C3.35977 0.697286 3.30334 0.686504 3.24653 0.687539C3.18972 0.688573 3.13369 0.701401 3.08179 0.725259C3.02989 0.749117 2.98318 0.783515 2.94444 0.826402Z" />
                                                </g>
                                            </svg>
                                        </span>
                                        Compare
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span>
                                            <svg width="11" height="11" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_168_378)">
                                                    <path
                                                        d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                </g>
                                            </svg>
                                        </span>
                                        Add to wishlist
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Details top section -->

    <!-- Start Shop Details description section -->
    <div class="shop-details-description mb-110" id="reviews">
        <div class="container-xl container-lg-fluid container">
            <div class="row">
                <div class="col-12">
                    <div class="shop-details-description-nav mb-50">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                              <button class="nav-link" id="nav-add-info-tab" data-bs-toggle="tab" data-bs-target="#nav-add-info" type="button" role="tab" aria-controls="nav-add-info" aria-selected="false">Additional Information</button>
                              <button class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" type="button" role="tab" aria-controls="nav-reviews" aria-selected="false">Reviews ({{$product->reviews_count}})</button>
                            </div>
                          </nav>
                    </div>
                    <div class="shop-details-description-tab">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                <div class="row gy-5">
                                    <h6>{{$product->itemname}} Overview: <p style="padding-left:100px">{{$product->description}}</p></h6>
                                    <h6>Benefits of Using: {{$product->itemname}}: <p style="padding-left:100px">{{$product->benefits}}</p></h6>
                                    
                                    <div class="col-lg-3">
                                        <div class="description-content">
                                            <div class="description-left-content1">
                                                <h6>How to Use {{$product->itemname}}</h6>
                                                <p>{{$product->how_to_use}}</p>
                                            </div>
                                            <div class="description-left-content2">
                                                <h6>Skin Type for {{$product->itemname}} </h6>
                                                <p>{{$product->skintype}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                        <div class="description-tab-img">
                                            <img src="{{asset('uploads/products/images/' .$product->picture2)}}" height="586" width="657"  alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="description-content">
                                            <div class="description-right-content1">
                                                <h6>Hair Type for {{$product->itemname}}</h6>
                                                <p>{{$product->hairtype}}</p>
                                            </div>
                                            <div class="description-right-content2">
                                                <h6>Beware before using {{$product->itemname}}</h6>
                                                <p>{{$product->warnings}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-add-info" role="tabpanel" aria-labelledby="nav-add-info-tab">
                                <div class="addithonal-information">
                                    <table class="table total-table2">
                                        <tbody>
                                            <tr>
                                                <td>SKU</td>
                                                <td>{{$product->sku}}</td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td>{{$product->category->name}}</td>
                                            </tr>
                                            <tr>
                                                <td>Size</td>
                                                <td>{{$product->size}}</td>
                                            </tr>
                                            <tr>
                                                <td>Formulation</td>
                                                <td>{{$product->formulation}}</td>
                                            </tr>
                                            <tr>
                                                <td>Fragrance</td>
                                                <td>{{$product->fragrance}}</td>
                                            </tr>
                                            <tr>
                                                <td>Ingredients</td>
                                                <td>{{$product->ingredients}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                               <div class="review-area">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="comment-section style-2">
                                                <div class="comment-title">
                                                    <h3>Review ({{$product->reviews_count}}) :</h3>
                                                </div>
                                                <ul class="author-comment mb-100">
                                                    @foreach($reviews as $review)
                                                    <li>
                                                        <div class="author-img">
                                                            <img src="{{asset('assets/img/user.png')}}" alt="">
                                                        </div>
                                                        <div class="comment-content">
                                                            <div class="author-post style-2">
                                                                <div class="author-info">
                                                                    <h5> {{$review->user->name}} <span> {{\Carbon\Carbon::parse($review->created_at)->format('d M Y')}} </span></h5>
                                                                </div>
                                                                <ul class="rating">
                                                                @php
                                    $averageRating = $review->rating; // Keep original decimal value
                                @endphp

                               @for ($i = 1; $i <= 5; $i++)
                               @if ($i <= floor($averageRating))
                                 <i class="bi bi-star-fill" style="color: #FFD700;"></i> <!-- Full star -->
                               @else
                                 <i class="bi bi-star" style="color: #ccc;"></i> <!-- Empty star -->
                               @endif
                               @endfor
                                                                </ul>
                                                            </div>
                                                            <p>{{$review->review}}</p>
                                                            
                                                        </div>
                                                    </li>
                                                        @endforeach
                                                        
                                                </ul>
                                                
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="comment-section style-3">
                                                <div class="comment-title">
                                                    <h3>Write Your Review</h3>
                                                </div>
                                                <p>Your email adress will be save & secure, Also not published.</p>
                                                @if(auth()->check())
                                                <form action="{{ route('review.store') }}" method="POST" class="contact-form" id="review-form">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                                    <input type="hidden" name="rating" id="rating-value">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-20">
                                                            <div class="form-inner2 mb-10">
                                                                <div class="review-rate-area">
                                                                    <p>Your Rating:</p>
                                                                    <div class="rate">
                                                                        <input type="radio" id="star5" name="rating"
                                                                            value="5">
                                                                        <label for="star5" title="text">5 stars</label>
                                                                        <input type="radio" id="star4" name="rating"
                                                                            value="4">
                                                                        <label for="star4" title="text">4 stars</label>
                                                                        <input type="radio" id="star3" name="rating"
                                                                            value="3">
                                                                        <label for="star3" title="text">3 stars</label>
                                                                        <input type="radio" id="star2" name="rating"
                                                                            value="2">
                                                                        <label for="star2" title="text">2 stars</label>
                                                                        <input type="radio" id="star1" name="rating"
                                                                            value="1">
                                                                        <label for="star1" title="text">1 star</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-inner mb-20">
                                                                <textarea rows="5" name ="review" placeholder="Your Reviews *" required></textarea>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-12 pt-30">
                                                            <button type="submit" class="primary-btn1 hover-btn3 reviewBtn">Leave Your Review</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                @else
                                                <br><br>
                                                <h6>You must <a href="{{route('login')}}">LogIn</a> to leave a review.</h6>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Details description section -->

    <!-- Start Related product section -->
    <div class="newest-product-section mb-110">
        <div class="container">
            <div class="section-title2 style-2">
                <h3>Related Products</h3>
                <div class="slider-btn">
                    <div class="prev-btn">
                        <i class="bi bi-chevron-left"></i>
                    </div>
                    <div class="next-btn">
                        <i class="bi bi-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="swiper newest-slider">
                        <div class="swiper-wrapper">
                            @foreach($relatedProducts as $product)
                            <div class="swiper-slide">
                                <div class="product-card hover-btn">
                                    <div class="product-card-img double-img">
                                       <a href="product-default.html">
                                       <img src="{{asset('uploads/products/images/' .$product->picture)}}" height="563" width="648"  alt="" class="img1">
                                       <img src="{{asset('uploads/products/images/' .$product->picture1)}}" height="563" width="648"  alt="" class="img2">
                                        <div class="batch">
                                            <span>New</span>
                                        </div>
                                       </a>
                                        <div class="overlay">
                                            <div class="cart-area">
                                                <a href="{{route('add-cart', $product->product_id)}}" class="hover-btn3 add-cart-btn"><i class="bi bi-bag-check"></i> Add To Cart</a>
                                            </div>
                                        </div>
                                        <div class="view-and-favorite-area">
                                            <ul>
                                                <li>
                                                    <a href="whistlist.html">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                            <g clip-path="url(#clip0_168_378)">
                                                                <path
                                                                    d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                                            <path
                                                                d="M21.8601 10.5721C21.6636 10.3032 16.9807 3.98901 10.9999 3.98901C5.019 3.98901 0.335925 10.3032 0.139601 10.5718C0.0488852 10.6961 0 10.846 0 10.9999C0 11.1537 0.0488852 11.3036 0.139601 11.4279C0.335925 11.6967 5.019 18.011 10.9999 18.011C16.9807 18.011 21.6636 11.6967 21.8601 11.4281C21.951 11.3039 21.9999 11.154 21.9999 11.0001C21.9999 10.8462 21.951 10.6963 21.8601 10.5721ZM10.9999 16.5604C6.59432 16.5604 2.77866 12.3696 1.64914 10.9995C2.77719 9.62823 6.58487 5.43955 10.9999 5.43955C15.4052 5.43955 19.2206 9.62969 20.3506 11.0005C19.2225 12.3717 15.4149 16.5604 10.9999 16.5604Z" />
                                                            <path
                                                                d="M10.9999 6.64832C8.60039 6.64832 6.64819 8.60051 6.64819 11C6.64819 13.3994 8.60039 15.3516 10.9999 15.3516C13.3993 15.3516 15.3515 13.3994 15.3515 11C15.3515 8.60051 13.3993 6.64832 10.9999 6.64832ZM10.9999 13.9011C9.40013 13.9011 8.09878 12.5997 8.09878 11C8.09878 9.40029 9.40017 8.0989 10.9999 8.0989C12.5995 8.0989 13.9009 9.40029 13.9009 11C13.9009 12.5997 12.5996 13.9011 10.9999 13.9011Z" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        
                                        </div>
                                    </div>
                                    <div class="product-card-content">
                                        <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a></h6>
                                        <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                        <p class="price">${{$product->discounted_price}} <del>${{$product->price}}</del></p>
                                        <div class="rating">
                                            <ul>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                                <li><i class="bi bi-star-fill"></i></li>
                                            </ul>
                                            <span>(50)</span>
                                        </div>
                                    </div>
                                    <span class="for-border"></span>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <!-- Start Shipping Modal Area -->
<div class="modal fade productsShippingModal" id="productsShippingModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content border-0 shadow">
            <div class="modal-header border-0">
                <h5 class="modal-title">Shipping & Returns</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <h6 class="fw-bold">Shipping</h6>
                <ul class="list-unstyled ms-3">
                    <li class="mb-2"><i class='bx bx-truck'></i> Complimentary ground shipping within 1 to 7 business days</li>
                    <li class="mb-2"><i class='bx bx-store'></i> In-store collection available within 1 to 7 business days</li>
                    <li class="mb-2"><i class='bx bx-rocket'></i> Next-day and Express delivery options also available</li>
                    <li class="mb-2"><i class='bx bx-gift'></i> Purchases are delivered in an orange box tied with a Bolduc ribbon, with the exception of certain items</li>
                    <li class="mb-2"><i class='bx bx-info-circle'></i> See the delivery FAQs for details on shipping methods, costs, and delivery times</li>
                </ul>

                <h6 class="fw-bold mt-4">Returns and Exchanges</h6>
                <ul class="list-unstyled ms-3">
                    <li class="mb-2"><i class='bx bx-refresh'></i> Easy and complimentary, within 14 days</li>
                    <li class="mb-2"><i class='bx bx-help-circle'></i> See conditions and procedure in our return FAQs</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Shipping Modal Area -->

     <!-- product view modal  -->
     <div class="modal product-view-modal" id="product-view">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn" data-bs-dismiss="modal">
                    </div>
                    <div class="shop-details-top-section">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <div class="shop-details-img">
                                    <div class="tab-content" id="view-tabContent">
                                        <div class="tab-pane fade show active" id="view-pills-img1" role="tabpanel">
                                            <div class="shop-details-tab-img">
                                                <img src="{{asset('assets/img/inner-page/shop-details-tab-img1.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img2" role="tabpanel"
                                            >
                                            <div class="shop-details-tab-img">
                                                <img src="{{asset('assets/img/inner-page/shop-details-tab-img2.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img3" role="tabpanel">
                                            <div class="shop-details-tab-img">
                                                <img src="{{asset('assets/img/inner-page/shop-details-tab-img3.png')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img4" role="tabpanel">
                                            <div class="shop-details-tab-img">
                                                <img src="{{asset('assets/img/inner-page/shop-details-tab-img4.png')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav nav-pills" id="view-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="view-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#view-pills-img1" type="button"
                                            role="tab" aria-controls="view-pills-img1" aria-selected="true">
                                            <img src="{{asset('assets/img/inner-page/shop-details-nav-img1.png')}}" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img2-tab" data-bs-toggle="pill" data-bs-target="#view-pills-img2" type="button"
                                            role="tab" aria-controls="view-pills-img2" aria-selected="false">
                                            <img src="{{asset('assets/img/inner-page/shop-details-nav-img2.png')}}" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img3-tab" data-bs-toggle="pill"
                                            data-bs-target="#view-pills-img3" type="button" role="tab"
                                            aria-controls="view-pills-img3" aria-selected="false">
                                            <img src="{{asset('assets/img/inner-page/shop-details-nav-img3.png')}}" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img4-tab" data-bs-toggle="pill"
                                            data-bs-target="#view-pills-img4" type="button" role="tab"
                                            aria-controls="view-pills-img4" aria-selected="false">
                                            <img src="{{asset('assets/img/inner-page/shop-details-nav-img4.png')}}" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="shop-details-content">
                                    <h1>Poutsicle Hydrating Lip Stain.</h1>
                                    <div class="rating-review">
                                        <div class="rating">
                                            <div class="star">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                            </div>
                                            <p>(50 reviews)</p>
                                        </div>
                                    </div>
                                    <p>Aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos only
                                        placerat felis non aliquam.Mauris nec justo vitae ante auctor tol euismod sit amet
                                        Praesent commodo at massa eget suscipit. Utani vitae enim velit.</p>
                                    <div class="price-area">
                                        <p class="price">$150.00 <del>$200.00</del></p>
                                    </div>
                                    <div class="quantity-color-area">
                                        <div class="quantity-color">
                                            <h6 class="widget-title">Quantity</h6>
                                            <div class="quantity-counter">
                                                <a href="#" class="quantity__minus"><i class='bx bx-minus'></i></a>
                                                <input name="quantity" type="text" class="quantity__input" value="01">
                                                <a href="#" class="quantity__plus"><i class='bx bx-plus'></i></a>
                                            </div>
                                        </div>
                                        <div class="quantity-color">
                                            <h6 class="widget-title">Color</h6>
                                            <ul class="color-list">
                                                <li class="select-wrap selected"><span></span></li>
                                                <li class="select-wrap"><span></span></li>
                                                <li class="select-wrap"><span></span></li>
                                                <li class="select-wrap"><span></span></li>
                                                <li class="select-wrap"><span></span></li>
                                                <li class="select-wrap"><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="shop-details-btn">
                                        <a href="shop-list.html" class="primary-btn1 hover-btn3">*Buy Now*</a>
                                        <a href="{{route('add-cart', $product->product_id)}}" class="primary-btn1 style-3 hover-btn4">*Add to Cart*</a>
                                    </div>
                                    <div class="product-info">
                                        <ul class="product-info-list">
                                            <li> <span>SKU:</span> 9852410</li>
                                            <li> <span>Brand:</span> <a href="shop-4-columns.html">Chanel</a></li>
                                            <li> <span>Category:</span> <a href="shop-slider.html">Body</a>, <a
                                                    href="shop-slider.html">Face</a></li>
                                        </ul>
                                    </div>
                                    <div class="payment-method">
                                        <h6>Guaranted Safe Checkout</h6>
                                        <ul class="payment-card-list">
                                            <li><img src="{{asset('assets/img/inner-page/payment-img1.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img2.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img3.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img4.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img5.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img6.svg')}}" alt=""></li>
                                            <li><img src="{{asset('assets/img/inner-page/payment-img7.svg')}}" alt=""></li>
                                        </ul>
                                    </div>
                                    <ul class="product-shipping-delivers">
                                        <li class="product-shipping">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                viewBox="0 0 55 32">
                                                <path
                                                    d="M14.9999 27.4286H10.4285C10.1254 27.4286 9.83471 27.3082 9.62038 27.0938C9.40605 26.8795 9.28564 26.5888 9.28564 26.2857C9.28564 25.9826 9.40605 25.6919 9.62038 25.4776C9.83471 25.2633 10.1254 25.1429 10.4285 25.1429H14.9999C15.303 25.1429 15.5937 25.2633 15.8081 25.4776C16.0224 25.6919 16.1428 25.9826 16.1428 26.2857C16.1428 26.5888 16.0224 26.8795 15.8081 27.0938C15.5937 27.3082 15.303 27.4286 14.9999 27.4286ZM52.1428 27.4286H49.2857C48.9825 27.4286 48.6919 27.3082 48.4775 27.0938C48.2632 26.8795 48.1428 26.5888 48.1428 26.2857C48.1428 25.9826 48.2632 25.6919 48.4775 25.4776C48.6919 25.2633 48.9825 25.1429 49.2857 25.1429H51.1942L52.7348 16.9326C52.7142 12.7314 49.1256 9.14286 44.7142 9.14286H37.2102L33.5736 25.1429H40.1428C40.4459 25.1429 40.7366 25.2633 40.9509 25.4776C41.1652 25.6919 41.2856 25.9826 41.2856 26.2857C41.2856 26.5888 41.1652 26.8795 40.9509 27.0938C40.7366 27.3082 40.4459 27.4286 40.1428 27.4286H32.1428C31.9713 27.4287 31.802 27.3902 31.6474 27.3159C31.4928 27.2417 31.3569 27.1336 31.2498 26.9997C31.1427 26.8657 31.067 26.7094 31.0285 26.5423C30.99 26.3752 30.9896 26.2016 31.0274 26.0343L35.1828 7.74858C35.2399 7.49542 35.3814 7.26924 35.5842 7.10723C35.7869 6.94521 36.0387 6.85702 36.2982 6.85715H44.7142C50.3851 6.85715 54.9999 11.472 54.9999 17.1429L53.2651 26.496C53.2165 26.7581 53.0776 26.9949 52.8726 27.1652C52.6676 27.3356 52.4094 27.4288 52.1428 27.4286Z"
                                                    fill="#222222"></path>
                                                <path
                                                    d="M44.7142 32C41.5645 32 39 29.4377 39 26.2857C39 23.1337 41.5645 20.5714 44.7142 20.5714C47.864 20.5714 50.4285 23.1337 50.4285 26.2857C50.4285 29.4377 47.864 32 44.7142 32ZM44.7142 22.8572C42.824 22.8572 41.2857 24.3954 41.2857 26.2857C41.2857 28.176 42.824 29.7143 44.7142 29.7143C46.6045 29.7143 48.1428 28.176 48.1428 26.2857C48.1428 24.3954 46.6045 22.8572 44.7142 22.8572ZM19.5714 32C16.4217 32 13.8571 29.4377 13.8571 26.2857C13.8571 23.1337 16.4217 20.5714 19.5714 20.5714C22.7211 20.5714 25.2857 23.1337 25.2857 26.2857C25.2857 29.4377 22.7211 32 19.5714 32ZM19.5714 22.8572C17.6811 22.8572 16.1428 24.3954 16.1428 26.2857C16.1428 28.176 17.6811 29.7143 19.5714 29.7143C21.4617 29.7143 23 28.176 23 26.2857C23 24.3954 21.4617 22.8572 19.5714 22.8572ZM15 6.85716H5.85711C5.554 6.85716 5.26331 6.73675 5.04899 6.52242C4.83466 6.30809 4.71425 6.0174 4.71425 5.7143C4.71425 5.41119 4.83466 5.1205 5.04899 4.90618C5.26331 4.69185 5.554 4.57144 5.85711 4.57144H15C15.3031 4.57144 15.5938 4.69185 15.8081 4.90618C16.0224 5.1205 16.1428 5.41119 16.1428 5.7143C16.1428 6.0174 16.0224 6.30809 15.8081 6.52242C15.5938 6.73675 15.3031 6.85716 15 6.85716ZM15 13.7143H3.57139C3.26829 13.7143 2.9776 13.5939 2.76327 13.3796C2.54894 13.1652 2.42854 12.8745 2.42854 12.5714C2.42854 12.2683 2.54894 11.9776 2.76327 11.7633C2.9776 11.549 3.26829 11.4286 3.57139 11.4286H15C15.3031 11.4286 15.5938 11.549 15.8081 11.7633C16.0224 11.9776 16.1428 12.2683 16.1428 12.5714C16.1428 12.8745 16.0224 13.1652 15.8081 13.3796C15.5938 13.5939 15.3031 13.7143 15 13.7143ZM15 20.5714H1.28568C0.982575 20.5714 0.691885 20.451 0.477557 20.2367C0.26323 20.0224 0.142822 19.7317 0.142822 19.4286C0.142822 19.1255 0.26323 18.8348 0.477557 18.6205C0.691885 18.4061 0.982575 18.2857 1.28568 18.2857H15C15.3031 18.2857 15.5938 18.4061 15.8081 18.6205C16.0224 18.8348 16.1428 19.1255 16.1428 19.4286C16.1428 19.7317 16.0224 20.0224 15.8081 20.2367C15.5938 20.451 15.3031 20.5714 15 20.5714Z">
                                                </path>
                                                <path
                                                    d="M32.1428 27.4286H24.1428C23.8397 27.4286 23.549 27.3082 23.3347 27.0938C23.1203 26.8795 22.9999 26.5888 22.9999 26.2857C22.9999 25.9826 23.1203 25.6919 23.3347 25.4776C23.549 25.2633 23.8397 25.1429 24.1428 25.1429H31.2308L36.4239 2.28571H10.4285C10.1254 2.28571 9.83471 2.16531 9.62038 1.95098C9.40605 1.73665 9.28564 1.44596 9.28564 1.14286C9.28564 0.839753 9.40605 0.549063 9.62038 0.334735C9.83471 0.120408 10.1254 1.4297e-07 10.4285 1.4297e-07H37.8571C38.0286 -8.56294e-05 38.1979 0.0384228 38.3525 0.112672C38.507 0.186921 38.6429 0.295008 38.7501 0.42892C38.8572 0.562832 38.9328 0.719137 38.9713 0.886249C39.0098 1.05336 39.0102 1.227 38.9725 1.39429L33.2582 26.5371C33.2011 26.7903 33.0596 27.0165 32.8569 27.1785C32.6541 27.3405 32.4023 27.4287 32.1428 27.4286Z">
                                                </path>
                                            </svg>
                                            Free worldwide shipping on all orders over $100
                                        </li>
                                        <li class="product-delivers">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20"
                                                viewBox="0 0 40 40">
                                                <g clip-path="url(#clip0_1190_20361)">
                                                    <path
                                                        d="M38.6593 8.87148L38.662 7.15148C38.6386 6.55948 38.75 5.78082 38.4873 5.21082C38.31 4.59815 37.6713 4.10148 37.2633 3.65548L36.038 2.44882L34.7853 1.22348C33.8306 0.334817 32.4386 -0.0358499 31.174 0.0541501C30.096 0.0594834 27.1206 0.0888167 26.0146 0.0934834C23.5433 0.108817 11.0073 0.212817 8.8173 0.22415C7.75197 0.263483 6.24064 0.0961501 5.2573 0.603483C4.19464 0.995484 3.33664 2.18015 2.53264 2.91148L1.3253 4.13615C0.85597 4.56815 0.417304 5.11148 0.33197 5.76748L0.418637 33.3448C0.40797 34.6082 1.31464 35.8115 2.53797 36.1335C3.03997 36.3075 3.81064 36.2202 4.3153 36.2448C11.5406 36.2215 19.384 36.2455 26.5873 36.2868C27.0313 36.7815 27.4806 37.2715 27.9373 37.7508L28.6673 38.4808C29.2053 39.1922 30.4013 39.4048 31.0973 38.7242C35.184 34.7582 39.554 29.9882 39.93 23.9995C39.9793 22.1542 39.4766 20.4335 38.6 18.9535C38.6666 15.6988 38.6413 12.1282 38.6586 8.87082L38.6593 8.87148ZM19.156 14.4008L15.8266 16.4768C15.938 12.8995 16.0846 9.32015 15.94 5.74348C17.1346 5.70682 18.2786 5.67482 19.336 5.65348C20.476 5.63482 21.616 5.62482 22.756 5.61548C22.8826 7.33348 22.944 9.66148 23.0006 11.3335C23.058 13.1688 23.066 15.0042 23.0706 16.8395L19.51 14.4008C19.4576 14.3651 19.3957 14.346 19.3323 14.346C19.2689 14.346 19.207 14.3651 19.1546 14.4008H19.156ZM15.938 4.24415C16.0526 3.11215 16.9726 2.25082 17.19 1.17282L21.6966 1.20748C22.0686 1.77615 22.2626 2.41148 22.36 3.08815C22.4566 3.73082 22.3653 4.43748 22.5633 5.06082C20.3305 5.02501 18.098 4.97234 15.866 4.90282C15.872 4.67815 15.8993 4.45948 15.938 4.24415ZM23.6653 11.3335C23.7093 9.66282 23.794 7.31415 23.912 5.60282C28.3753 5.58015 32.8373 5.65482 37.2973 5.90682C37.3726 6.31348 37.3253 6.77282 37.338 7.15215L37.3406 8.87215C37.3366 11.5875 37.348 14.5248 37.3793 17.3148C35.12 14.8488 31.6506 13.5102 28.1446 14.2675C26.3713 14.6082 24.8353 15.4295 23.5966 16.5495C23.6013 14.8108 23.6106 13.0722 23.6653 11.3335ZM29.454 1.26682C30.324 1.30948 31.9193 1.17215 32.6873 1.44882C33.6006 1.67282 34.4726 2.73948 35.1146 3.37148C35.404 3.66215 36.056 4.33015 36.528 4.80548C33.878 4.94282 31.228 5.01282 28.578 5.05148C27.0493 5.08748 25.4813 5.08682 23.8993 5.07415C23.8646 4.27282 23.2806 3.62482 22.9733 2.91282C22.732 2.36348 22.5686 1.80215 22.5413 1.21415L29.454 1.26682ZM4.31397 2.26082C5.0553 1.47815 6.02664 1.06748 7.0973 1.09748L8.8173 1.11015L15.8366 1.16282C15.7173 1.72882 15.7786 2.34548 15.6933 2.91282C15.5913 3.62282 15.38 4.28748 14.9693 4.87748C10.5113 4.74548 6.05864 4.62548 1.82064 4.72082C2.60864 3.90948 3.62397 2.96815 4.31397 2.26082ZM4.3153 35.7555H3.4553C2.10997 35.8388 0.896637 34.6842 0.916637 33.3428L0.93797 19.5855C0.955303 17.3242 0.994637 11.4555 1.01197 9.26682L1.02397 7.54682C1.0633 7.04882 0.97997 6.45815 1.06064 5.93682C5.00197 6.09482 10.1393 5.92415 14.72 5.78015C14.6386 7.63082 14.6513 9.48149 14.698 11.3328C14.74 13.3328 14.7926 15.3328 14.8673 17.3328C14.8473 17.6988 15.2966 17.9442 15.5926 17.7208L19.342 15.0528L22.8346 17.3182C20.452 20.0128 19.5693 23.9715 20.9786 27.5482C22.0893 30.6282 23.9646 33.2802 26.084 35.7162C19.012 35.7708 11.3833 35.7588 4.31597 35.7548L4.3153 35.7555ZM36.5646 30.9608C36.4806 30.6693 36.3722 30.3855 36.2406 30.1122C36.0546 29.7122 35.826 29.3008 35.62 28.9982C35.414 28.6948 35.23 28.5002 35.134 28.5342C35.0877 28.5436 35.0471 28.571 35.021 28.6104C34.9949 28.6498 34.9854 28.6978 34.9946 28.7442C35.1778 29.4733 35.4787 30.1678 35.8853 30.8002C36.0146 31.0015 36.1573 31.1955 36.3086 31.3848C36.1426 31.6602 35.9713 31.9328 35.7933 32.2028C35.7347 32.0585 35.6668 31.9183 35.59 31.7828C35.5166 31.6508 35.44 31.5128 35.358 31.3795C35.2013 31.1248 35.0466 30.8868 34.9606 30.7482C34.8006 30.4888 34.6133 30.2535 34.442 30.0342C34.236 29.7702 34.0406 29.5482 33.8613 29.4242C33.8444 29.4123 33.8248 29.4049 33.8043 29.4027C33.7838 29.4005 33.763 29.4035 33.744 29.4115C33.674 29.4408 33.63 29.5042 33.634 29.5715C33.6357 29.6036 33.6422 29.6353 33.6533 29.6655C33.8593 30.1942 34.1144 30.7024 34.4153 31.1835C34.7139 31.6692 35.0534 32.1287 35.43 32.5568C35.4653 32.5802 35.494 32.5922 35.524 32.6075C35.3453 32.8682 35.162 33.1248 34.9753 33.3802C34.9127 33.2669 34.846 33.1559 34.7753 33.0475C34.6731 32.8896 34.5678 32.7338 34.4593 32.5802C34.2246 32.2508 34.006 31.9562 33.9326 31.8468C33.728 31.5422 33.4786 31.2728 33.248 31.0035C32.9993 30.7122 32.7526 30.4455 32.4993 30.2395C32.4771 30.2213 32.45 30.2101 32.4214 30.2073C32.3928 30.2044 32.364 30.2101 32.3386 30.2235C32.2626 30.2628 32.226 30.3482 32.2533 30.4228C32.2653 30.4555 32.2793 30.4895 32.2966 30.5228C32.6369 31.1752 33.0298 31.7988 33.4713 32.3875C33.7954 32.825 34.1447 33.2432 34.5173 33.6402C34.584 33.6948 34.6366 33.7288 34.6913 33.7668C34.5046 34.0135 34.3153 34.2582 34.1226 34.4982C34.07 34.4182 34.0157 34.3393 33.96 34.2615C33.54 33.6742 32.9773 33.0175 32.904 32.8955C32.6226 32.5695 32.344 32.2408 32.0533 31.9222C31.764 31.6002 31.458 31.2935 31.1366 31.0035C31.1059 30.9751 31.0659 30.9588 31.0241 30.9576C30.9822 30.9563 30.9413 30.9703 30.909 30.9969C30.8767 31.0235 30.855 31.0608 30.8481 31.1021C30.8412 31.1434 30.8494 31.1858 30.8713 31.2215C31.5626 32.3176 32.3561 33.3457 33.2413 34.2922C33.4266 34.4902 33.6233 34.6788 33.8166 34.8695C33.568 35.1708 33.3166 35.4668 33.062 35.7575C32.9814 35.6345 32.8965 35.5144 32.8073 35.3975C32.5542 35.0695 32.2916 34.749 32.02 34.4362C31.8773 34.2695 31.7646 34.1322 31.7026 34.0608C31.4186 33.7315 31.1166 33.4182 30.826 33.1148C30.7495 33.0347 30.6721 32.9553 30.594 32.8768C30.3709 32.6509 30.1397 32.4332 29.9006 32.2242C29.838 32.1702 29.7666 32.1548 29.7113 32.1722C29.6106 32.2035 29.56 32.2748 29.5906 32.3495C29.79 32.8395 30.3146 33.4675 30.8646 34.1102C31.3022 34.6226 31.7592 35.118 32.2346 35.5955C32.4286 35.7882 32.6026 35.9522 32.7626 36.0995C32.5 36.3928 32.236 36.6822 31.9706 36.9635C31.8718 36.8161 31.7666 36.6731 31.6553 36.5348C31.3925 36.212 31.1197 35.8974 30.8373 35.5915C30.708 35.4495 30.5926 35.3208 30.5026 35.2262C30.1336 34.8372 29.7561 34.4562 29.3706 34.0835C29.0973 33.8222 28.8526 33.6002 28.666 33.4448C28.596 33.3862 28.5306 33.3535 28.4913 33.3608C28.37 33.3835 28.302 33.4082 28.3106 33.4775C28.3573 33.8368 28.9686 34.5388 29.6373 35.2662C30.1018 35.7713 30.5818 36.262 31.0766 36.7375C31.3086 36.9575 31.51 37.1402 31.6686 37.2782C31.394 37.5648 31.12 37.8442 30.8473 38.1168C30.604 37.7608 30.1553 37.2615 29.6546 36.7475C29.1513 36.2315 28.596 35.7015 28.146 35.2908C27.696 34.8802 27.352 34.5888 27.2713 34.5502C26.6033 34.4115 27.4026 35.3895 28.4093 36.4222C28.8986 36.9216 29.4017 37.4073 29.918 37.8788C30.1686 38.1075 30.3793 38.2922 30.5373 38.4242C30.01 38.7322 29.4753 38.5635 29.0566 38.0828L28.3286 37.3695C25.5026 34.5048 22.8993 31.1688 21.5846 27.3502C19.7066 22.1688 22.8873 16.3188 28.36 15.4095C33.56 14.3875 38.74 18.7282 38.736 24.0042C38.684 26.4115 37.828 28.7662 36.564 30.9648L36.5646 30.9608Z">
                                                    </path>
                                                    <path
                                                        d="M15.3333 23.4033L4.552 23.7007C3.71733 23.7613 3.02667 24.5213 3.054 25.3513L3.05933 26.024C3.07333 27.5887 3.076 29.8167 3.04333 31.404C2.89333 32.5133 3.43067 33.6213 4.668 33.6533L15.4687 33.9067C16.1153 33.8773 16.7293 33.4867 17.0427 32.9147C17.3307 32.4573 17.2787 31.8187 17.2967 31.31C17.34 29.2833 17.3653 27.2487 17.302 25.2213C17.2553 24.2167 16.332 23.3693 15.3347 23.4033H15.3333ZM15.3867 32.7507L4.66667 33.0133C4.14267 33.0367 3.65733 32.586 3.634 32.0593L3.624 31.404C3.61267 29.8247 3.57333 27.58 3.60733 26.024L3.61267 25.3513C3.60067 24.8107 4.05533 24.314 4.594 24.3093L15.3333 24.5973C15.706 24.608 16.0253 24.9247 16.0247 25.294L16.0133 25.93C15.9973 26.8267 15.988 27.7233 15.9967 28.62C15.9967 29.5167 16.0247 30.4133 16.0373 31.31L16.0493 31.9827C16.0581 32.1713 15.9942 32.3561 15.8708 32.4989C15.7474 32.6418 15.5745 32.7319 15.3867 32.7507Z">
                                                    </path>
                                                    <path
                                                        d="M14 28L5.99996 28.1234C5.29929 28.136 5.30263 29.1974 5.99996 29.21L14 29.3334C14.8913 29.33 14.8873 28.0027 14 28ZM30 18.0874C24.9653 18.154 22.438 24.4747 26.0413 27.9587C29.572 31.4994 35.838 29.0654 35.93 24C36.1166 20.7847 33.1946 17.9287 30 18.0874ZM26.4166 27.584C23.32 24.4854 25.6406 19.09 30 19.2467C32.5386 19.2854 34.67 21.5054 34.7366 24.0007C34.918 28.3327 29.4726 30.7434 26.4166 27.584Z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <p>Delivers in: 3-7 Working Days <a href="#">Shipping &amp; Return</a></p>
                                        </li>
                                    </ul>
                                    <div class="compare-wishlist-area">
                                        <ul>
                                            <li>
                                                <a href="whistlist.html">
                                                    <span>
                                                        <svg width="11" height="11" viewBox="0 0 18 18"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g clip-path="url(#clip0_168_378)">
                                                                <path
                                                                    d="M16.528 2.20919C16.0674 1.71411 15.5099 1.31906 14.8902 1.04859C14.2704 0.778112 13.6017 0.637996 12.9255 0.636946C12.2487 0.637725 11.5794 0.777639 10.959 1.048C10.3386 1.31835 9.78042 1.71338 9.31911 2.20854L9.00132 2.54436L8.68352 2.20854C6.83326 0.217151 3.71893 0.102789 1.72758 1.95306C1.63932 2.03507 1.5541 2.12029 1.47209 2.20854C-0.490696 4.32565 -0.490696 7.59753 1.47209 9.71463L8.5343 17.1622C8.77862 17.4201 9.18579 17.4312 9.44373 17.1868C9.45217 17.1788 9.46039 17.1706 9.46838 17.1622L16.528 9.71463C18.4907 7.59776 18.4907 4.32606 16.528 2.20919ZM15.5971 8.82879H15.5965L9.00132 15.7849L2.40553 8.82879C0.90608 7.21113 0.90608 4.7114 2.40553 3.09374C3.76722 1.61789 6.06755 1.52535 7.5434 2.88703C7.61505 2.95314 7.68401 3.0221 7.75012 3.09374L8.5343 3.92104C8.79272 4.17781 9.20995 4.17781 9.46838 3.92104L10.2526 3.09438C11.6142 1.61853 13.9146 1.52599 15.3904 2.88767C15.4621 2.95378 15.531 3.02274 15.5971 3.09438C17.1096 4.71461 17.1207 7.2189 15.5971 8.82879Z" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    Add to wishlist
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <!-- End Related product section -->


    <!-- Star Gift section -->
    <div class="gift-section">
        <img src="{{asset('assets/img/home1/gift-card-img1.png')}}" alt="" class="gift-img1">
        <img src="{{asset('assets/img/home1/gift-card-img2.png')}}" alt="" class="gift-img2">
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
    <!-- End Gift section -->

@endsection
<!-- javascript for review form -->
<script>
    $(document).ready(function(){
        $(".ratings input").click(function(){
            let rating = $(this).data('value');
            $("#rating-value").val(rating);
        });
        $("#review-form").submit(function(e){
            e.preventDefault();
            $(.'reviewBtn').html('<div class="spinner-border"> </div>');
            $(.'reviewBtn').pro("disabled",true);
            var formData = $(this).serialize();
            $.ajax({
                url:"{{route('review.store')}}",
                type:"POST",
                data:formData,
                success:function(res){
                    $(.'reviewBtn').html('Leave Your Review');
                    $(.'reviewBtn').pro("disabled",false);
                    alert(res.message);
                    if(res.success){
                        location.reload();
                    }
                },
                error:function(err){
                    alert(err.responseText);
                }
            });
        });
    });
</script>