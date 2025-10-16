<div class="popular-category-section mb-110">
        <div class="container">
            <div class="section-title3">
                <h3>Popular <span>Category</span> </h3>
                <div class="view-all">
                    <a href="category.html">View All Category
                        <svg width="33" height="13" viewBox="0 0 33 13" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.5083 7.28L0.491206 7.25429C0.36093 7.25429 0.23599 7.18821 0.143871 7.0706C0.0517519 6.95299 0 6.79347 0 6.62714C0 6.46081 0.0517519 6.3013 0.143871 6.18369C0.23599 6.06607 0.36093 6 0.491206 6L25.5088 6.02571C25.6391 6.02571 25.764 6.09179 25.8561 6.2094C25.9482 6.32701 26 6.48653 26 6.65286C26 6.81919 25.9482 6.9787 25.8561 7.09631C25.764 7.21393 25.6386 7.28 25.5083 7.28Z" />
                            <path
                                d="M33.0001 6.50854C29.2204 7.9435 24.5298 10.398 21.623 13L23.9157 6.50034L21.6317 0C24.5358 2.60547 29.2224 5.06539 33.0001 6.50854Z" />
                        </svg>
                    </a>  
                </div>
            </div>
            <div class="row g-4">
                @foreach($category as $cat)
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="category-card style-2">
                        <div class="category-card-img">
                           <a href="shop-list.html">
                            <img src="{{asset('uploads/products/categories/' . $cat->picture)}}" alt="{{$cat->name}}">
                           </a>
                        </div>
                        <div class="category-card-content">
                           <a href="shop-list.html">{{$cat->name}}</a>
                        </div>
                   </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>