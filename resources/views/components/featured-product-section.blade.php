<div class="feature-product-section mb-110">
         <div class="container">
            <div class="section-title3">
                <h3>Featured <span>Product</span> </h3>
                <div class="view-all">
                    <a href="shop-list.html">View All Product
                        <svg width="33" height="13" viewBox="0 0 33 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.5083 7.28L0.491206 7.25429C0.36093 7.25429 0.23599 7.18821 0.143871 7.0706C0.0517519 6.95299 0 6.79347 0 6.62714C0 6.46081 0.0517519 6.3013 0.143871 6.18369C0.23599 6.06607 0.36093 6 0.491206 6L25.5088 6.02571C25.6391 6.02571 25.764 6.09179 25.8561 6.2094C25.9482 6.32701 26 6.48653 26 6.65286C26 6.81919 25.9482 6.9787 25.8561 7.09631C25.764 7.21393 25.6386 7.28 25.5083 7.28Z" />
                            <path
                                d="M33.0001 6.50854C29.2204 7.9435 24.5298 10.398 21.623 13L23.9157 6.50034L21.6317 0C24.5358 2.60547 29.2224 5.06539 33.0001 6.50854Z" />
                        </svg>
                    </a> 
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($featuredProducts as $product)
                <div class="col-xl-3 col-lg-4 col-sm-6">
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
                                        <a  data-bs-toggle="modal" data-bs-target="#product-view">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                                <g clip-path="url(#clip0_1106_264)">
                                                  <path d="M15.3226 7.54747C15.1932 7.37042 12.1093 3.21228 8.17072 3.21228C4.23211 3.21228 1.14813 7.37042 1.01884 7.5473C0.959103 7.62915 0.92691 7.72785 0.92691 7.82918C0.92691 7.9305 0.959103 8.02921 1.01884 8.11105C1.14813 8.28811 4.23211 12.4462 8.17072 12.4462C12.1093 12.4462 15.1932 8.28808 15.3226 8.1112C15.3824 8.02939 15.4147 7.93068 15.4147 7.82933C15.4147 7.72799 15.3824 7.62928 15.3226 7.54747ZM8.17072 11.491C5.26951 11.491 2.75676 8.73117 2.01293 7.82894C2.75579 6.92591 5.26329 4.16751 8.17072 4.16751C11.0718 4.16751 13.5844 6.92687 14.3285 7.82959C13.5857 8.73259 11.0782 11.491 8.17072 11.491Z"/>
                                                  <path d="M8.17073 4.9635C6.5906 4.9635 5.30501 6.2491 5.30501 7.82923C5.30501 9.40936 6.5906 10.695 8.17073 10.695C9.75087 10.695 11.0365 9.40936 11.0365 7.82923C11.0365 6.2491 9.75087 4.9635 8.17073 4.9635ZM8.17073 9.73969C7.11726 9.73969 6.26027 8.88268 6.26027 7.82923C6.26027 6.77578 7.11728 5.91876 8.17073 5.91876C9.22418 5.91876 10.0812 6.77578 10.0812 7.82923C10.0812 8.88268 9.22421 9.73969 8.17073 9.73969Z"/>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                           </div>
                        </div>
                        <div class="product-card-content">
                            <p><a href="shop-list.html">{{$product->category->name}}</a></p>
                            <h6><a href="{{route('product-detail', $product->product_id) }}" class="hover-underline">{{$product->itemname}}</a></h6>
                            <span>${{$product->discounted_price}} <del>${{$product->price}}</del></span>
                            <div class="rating">
                                <p>In Stock: {{$product->stock_quantity}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
         </div>
    </div>