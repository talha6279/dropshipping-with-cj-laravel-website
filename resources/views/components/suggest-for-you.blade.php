<div class="suggest-section mb-110">
        <div class="container">
            <div class="section-title3">
                <h3>Suggest <span>For you</span> </h3>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="sg-skin-tab" data-bs-toggle="pill" data-bs-target="#sg-skin" type="button"
                            role="tab" aria-controls="sg-skin" aria-selected="true">Skin Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sg-fragrance-tab" data-bs-toggle="pill" data-bs-target="#sg-fragrance"
                            type="button" role="tab" aria-controls="sg-fragrance" aria-selected="false">Fragrance</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sg-accessories-tab" data-bs-toggle="pill" data-bs-target="#sg-accessories"
                            type="button" role="tab" aria-controls="sg-accessories" aria-selected="false">Hair Care</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sg-makeup-tab" data-bs-toggle="pill" data-bs-target="#sg-makeup" type="button"
                            role="tab" aria-controls="sg-makeup" aria-selected="false">Makeup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sg-care-tab" data-bs-toggle="pill" data-bs-target="#sg-care" type="button"
                            role="tab" aria-controls="sg-care" aria-selected="false">Body Care</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content mb-60" id="pills-tabContent">
                <div class="tab-pane fade show active" id="sg-skin" role="tabpanel" aria-labelledby="sg-skin-tab">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4"> 
                                @foreach($suggestedProducts as $product)
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                            <img src="{{asset('uploads/products/images/' . $product->picture)}}" alt="{{$product->itemname}}" class="img1">
                                            <img src="{{asset('uploads/products/images/' . $product->picture1)}}" alt="{{$product->itemname}}" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="{{route('add-cart', $product->product_id)}}" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                               <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a></h6>
                                            <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="sg-slider-wrapper">
                                <div class="swiper sg-slider">
                                    <div class="swiper-wrapper">
                                        @foreach($latestProducts as $product)
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('uploads/products/images/' .$product->picture)}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="whistlist.html">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                          <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a>
                                                    </h6>
                                                    <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                                        <ul data-countdown="2025-6-23 12:00:00">
                                                            <li data-days="30">30</li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                                    <path
                                                                        d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                                                </svg>
                                                            </li>
                                                            <li data-hours="24">24</li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                                    <path
                                                                        d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                                                </svg>
                                                            </li>
                                                            <li data-minutes="60">60</li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                                    <path
                                                                        d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                                                </svg>
                                                            </li>
                                                            <li data-seconds="60">60</li>
                                                        </ul>
                                                    </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <div class="sg-slider-btn">
                                    <div class="sg-prev-btn">
                                        <i class='bx bxs-chevron-left'></i>
                                    </div>
                                    <div class="sg-next-btn">
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row g-4">
                                @foreach($suggestedProduct as $product)
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                            <img src="{{asset('uploads/products/images/' . $product->picture)}}" alt="{{$product->itemname}}" class="img1">
                                            <img src="{{asset('uploads/products/images/' . $product->picture1)}}" alt="{{$product->itemname}}" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a></h6>
                                            <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sg-fragrance" role="tabpanel" aria-labelledby="sg-fragrance-tab">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                            @foreach($fragrance as $product)
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('uploads/products/images/' . $product->picture)}}" alt="" class="img1">
                                                <img src="{{asset('uploads/products/images/' . $product->picture1)}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a></h6>
                                            <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="sg-slider-wrapper">
                                <div class="swiper sg-slider">
                                    <div class="swiper-wrapper">
                                        @foreach($fragrance2 as $product)
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('uploads/products/images/' . $product->picture)}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a>
                                                    </h6>
                                                    <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2026-10-23 12:00:00">
                                        <li data-days="24">24</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="60">60</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="60">60</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="60">60</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        
                                    </div>
                                </div>
                                <div class="sg-slider-btn">
                                    <div class="sg-prev-btn">
                                        <i class='bx bxs-chevron-left'></i>
                                    </div>
                                    <div class="sg-next-btn">
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row g-4">
                                @foreach($fragrance1 as $product)
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('uploads/products/images/' . $product->picture)}}" alt="" class="img1">
                                                <img src="{{asset('uploads/products/images/' . $product->picture1)}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">{{$product->subcategory->name}}</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">{{$product->itemname}}</a></h6>
                                            <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
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
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sg-accessories" role="tabpanel" aria-labelledby="sg-accessories-tab">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-9.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Crystal Gleam</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Crystal-Infused Highlighter</a></h6>
                                            <span>$150.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-10.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-13.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Enchanted</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Magical Eyelash Extensions</a></h6>
                                            <span>$172.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="sg-slider-wrapper">
                                <div class="swiper sg-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-1.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Harmony</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Nourishing Hand Cream</a>
                                                    </h6>
                                                    <span>$229.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-2.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Sea Breeze</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Timeless Amber Essence</a>
                                                    </h6>
                                                    <span>$220.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-3.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiance</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Mystic Woods Aroma</a></h6>
                                                    <span>$225.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-4.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiant</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Metallic Magic Hues</a></h6>
                                                    <span>$210.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-slider-btn">
                                    <div class="sg-prev-btn">
                                        <i class='bx bxs-chevron-left'></i>
                                    </div>
                                    <div class="sg-next-btn">
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-11.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-8.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Pure Bliss</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Lip Stain & Makeup box</a></h6>
                                            <span>$190.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-12.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Whispering</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Floral new Perfume Mist</a></h6>
                                            <span>$165.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sg-makeup" role="tabpanel" aria-labelledby="sg-makeup-tab">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-9.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Crystal Gleam</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Crystal-Infused Highlighter</a></h6>
                                            <span>$150.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-10.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-13.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Enchanted</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Magical Eyelash Extensions</a></h6>
                                            <span>$172.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="sg-slider-wrapper">
                                <div class="swiper sg-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-1.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Harmony</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Nourishing Hand Cream</a>
                                                    </h6>
                                                    <span>$229.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-2.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Sea Breeze</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Timeless Amber Essence</a>
                                                    </h6>
                                                    <span>$220.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-3.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiance</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Mystic Woods Aroma</a></h6>
                                                    <span>$225.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-4.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiant</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Metallic Magic Hues</a></h6>
                                                    <span>$210.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-slider-btn">
                                    <div class="sg-prev-btn">
                                        <i class='bx bxs-chevron-left'></i>
                                    </div>
                                    <div class="sg-next-btn">
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-11.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-8.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Pure Bliss</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Lip Stain & Makeup box</a></h6>
                                            <span>$190.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-12.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Whispering</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Floral new Perfume Mist</a></h6>
                                            <span>$165.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sg-care" role="tabpanel" aria-labelledby="sg-care-tab">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-9.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Crystal Gleam</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Crystal-Infused Highlighter</a></h6>
                                            <span>$150.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-10.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-13.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Enchanted</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Magical Eyelash Extensions</a></h6>
                                            <span>$172.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 position-relative">
                            <div class="sg-slider-wrapper">
                                <div class="swiper sg-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-1.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Harmony</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Nourishing Hand Cream</a>
                                                    </h6>
                                                    <span>$229.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>NEW</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-2.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Sea Breeze</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Timeless Amber Essence</a>
                                                    </h6>
                                                    <span>$220.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-3.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiance</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Mystic Woods Aroma</a></h6>
                                                    <span>$225.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="product-card2 style-2">
                                                <div class="batch">
                                                    <span>Hot</span>
                                                </div>
                                                <div class="product-card-img">
                                                    <a href="shop-list.html">
                                                        <img src="{{asset('assets/img/home2/suggest-slider-img-4.png')}}" alt="">
                                                    </a>
                                                    <div class="view-and-favorite-area">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                                                                        viewBox="0 0 13 13">
                                                                        <g clip-path="url(#clip0_1106_270)">
                                                                            <path
                                                                                d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                        viewBox="0 0 16 16">
                                                                        <g clip-path="url(#clip0_1106_264)">
                                                                            <path
                                                                                d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                            <path
                                                                                d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                        </g>
                                                                    </svg>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-card-content">
                                                    <p><a href="shop-list.html">Radiant</a></p>
                                                    <h6><a href="product-default.html" class="hover-underline">Metallic Magic Hues</a></h6>
                                                    <span>$210.00 <del>$250.00</del></span>
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
                                                <div class="offer-timer">
                                                    <p>Offer Will Be End:</p>
                                                    <div class="countdown-timer">
                                    <ul data-countdown="2023-10-23 12:00:00">
                                        <li data-days="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-hours="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-minutes="00">00</li>
                                        <li>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="4" height="13" viewBox="0 0 4 13">
                                                <path
                                                    d="M0 11.0633C0 11.5798 0.186992 12.0317 0.560976 12.419C0.95122 12.8063 1.43089 13 2 13C2.58537 13 3.06504 12.8063 3.43903 12.419C3.81301 12.0317 4 11.5798 4 11.0633C4 10.5146 3.81301 10.0546 3.43903 9.68343C3.06504 9.29609 2.58537 9.10242 2 9.10242C1.43089 9.10242 0.95122 9.29609 0.560976 9.68343C0.186992 10.0546 0 10.5146 0 11.0633ZM0 1.96089C0 2.49348 0.186992 2.95345 0.560976 3.34078C0.95122 3.72812 1.43089 3.92179 2 3.92179C2.58537 3.92179 3.06504 3.72812 3.43903 3.34078C3.81301 2.95345 4 2.49348 4 1.96089C4 1.42831 3.81301 0.968343 3.43903 0.581006C3.06504 0.193669 2.58537 0 2 0C1.43089 0 0.95122 0.193669 0.560976 0.581006C0.186992 0.968343 0 1.42831 0 1.96089Z" />
                                            </svg>
                                        </li>
                                        <li data-seconds="00">00</li>
                                    </ul>
                                </div>
                                                    <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sg-slider-btn">
                                    <div class="sg-prev-btn">
                                        <i class='bx bxs-chevron-left'></i>
                                    </div>
                                    <div class="sg-next-btn">
                                        <i class='bx bxs-chevron-right'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img double-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-11.png')}}" alt="" class="img1">
                                                <img src="{{asset('assets/img/home2/product-img-8.png')}}" alt="" class="img2">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Pure Bliss</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Lip Stain & Makeup box</a></h6>
                                            <span>$190.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-6">
                                    <div class="product-card2">
                                        <div class="batch">
                                            <span>NEW</span>
                                        </div>
                                        <div class="product-card-img">
                                            <a href="shop-list.html">
                                                <img src="{{asset('assets/img/home2/product-img-12.png')}}" alt="">
                                            </a>
                                            <div class="cart-btn-area">
                               <div class="cart-btn">
                                   <a href="cart.html" class="add-cart-btn2 round hover-btn5"><i class="bi bi-bag-check"></i> Add To Cart</a>
                               </div>
                           </div>
                                            <div class="view-and-favorite-area">
                                                <ul>
                                                    <li>
                                                        <a href="whistlist.html">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 13 13">
                                                <g clip-path="url(#clip0_1106_270)">
                                                  <path d="M11.1281 2.35735C10.8248 2.03132 10.4577 1.77117 10.0496 1.59305C9.64144 1.41493 9.20104 1.32266 8.75574 1.32197C8.31008 1.32248 7.86929 1.41462 7.46073 1.59266C7.05218 1.7707 6.6846 2.03084 6.38081 2.35692L6.17153 2.57807L5.96225 2.35692C4.74378 1.04552 2.69289 0.970207 1.38151 2.18868C1.32339 2.24269 1.26727 2.29881 1.21326 2.35692C-0.0793057 3.75111 -0.0793057 5.90577 1.21326 7.29996L5.86398 12.2044C6.02488 12.3743 6.29301 12.3816 6.46288 12.2207C6.46844 12.2154 6.47385 12.21 6.47911 12.2044L11.1281 7.29996C12.4206 5.90592 12.4206 3.75139 11.1281 2.35735ZM10.5151 6.7166H10.5147L6.17153 11.2974L1.82797 6.7166C0.840522 5.65131 0.840522 4.00515 1.82797 2.93986C2.72468 1.96795 4.23954 1.90701 5.21144 2.80373C5.25862 2.84726 5.30404 2.89268 5.34757 2.93986L5.86398 3.48467C6.03416 3.65376 6.30893 3.65376 6.47911 3.48467L6.99552 2.94028C7.89224 1.96838 9.40709 1.90744 10.379 2.80415C10.4262 2.84769 10.4716 2.8931 10.5151 2.94028C11.5112 4.00726 11.5185 5.65642 10.5151 6.7166Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                                    </li>
                                                    <li>
                                                        <a data-bs-toggle="modal" data-bs-target="#product-view">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                viewBox="0 0 16 16">
                                                                <g clip-path="url(#clip0_1106_264)">
                                                                    <path
                                                                        d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z" />
                                                                    <path
                                                                        d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-card-content">
                                            <p><a href="shop-list.html">Whispering</a></p>
                                            <h6><a href="product-default.html" class="hover-underline">Floral new Perfume Mist</a></h6>
                                            <span>$165.00 <del>$200.00</del></span>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-product-btn text-center">
                <a href="shop-list.html" class="primary-btn3 hover-btn5">view All Product</a>
            </div>
        </div>
    </div>