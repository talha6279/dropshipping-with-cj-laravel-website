@extends('website/layout')
@section('content')

    <!-- Start Banner2 section -->
    <div class="banner-2-section mb-110 ">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-xxl-3 col-xl-4">
                    <div class="banner-2-left">
                        <div class="banner-2-left-img">
                            <img src="assets/img/home2/banner-2-left-img.png" alt="">
                        </div>
                        <div class="banner-2-left-content">
                            <h2>Up to <strong>40%</strong> off All Makeup</h2>
                            <a href="shop-list.html" class="primary-btn3 hover-btn5">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-9 col-xl-8">
                    <div class="banner-2-right">
                        <div class="swiper banner2-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="banner-2-right-img-bg" style="background-image: url(assets/img/home2/banner-right-bg-img1.png);">
                                        <div class="banner-2-right-content">
                                            <h1>Makeup Package <span>Under</span><strong>$25</strong></h1>
                                            <p>Whatever your summer looks like, bring yourown heat with up to 25% off Lumin Brand.</p>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-2-right-img-bg" style="background-image: url(assets/img/home2/banner-right-bg-img2.png);">
                                        <div class="banner-2-right-content">
                                            <h2>Face Accessories <span>Under</span><strong>$25</strong></h2>
                                            <p>Whatever your summer looks like, bring yourown heat with up to 25% off Lumin Brand.</p>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-2-right-img-bg" style="background-image: url(assets/img/home2/banner-right-bg-img3.png);">
                                        <div class="banner-2-right-content">
                                            <h2>Beauty Product <span>Under</span><strong>$25</strong></h2>
                                            <p>Whatever your summer looks like, bring yourown heat with up to 25% off Lumin Brand.</p>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="banner-2-right-img-bg" style="background-image: url(assets/img/home2/banner-right-bg-img4.png);">
                                        <div class="banner-2-right-content">
                                            <h2>Makeup Package <span>Under</span><strong>$25</strong></h2>
                                            <p>Whatever your summer looks like, bring yourown heat with up to 25% off Lumin Brand.</p>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner2 section -->
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
                                                <img src="assets/img/inner-page/shop-details-tab-img1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img2" role="tabpanel"
                                            >
                                            <div class="shop-details-tab-img">
                                                <img src="assets/img/inner-page/shop-details-tab-img2.png" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img3" role="tabpanel">
                                            <div class="shop-details-tab-img">
                                                <img src="assets/img/inner-page/shop-details-tab-img3.png" alt="">
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="view-pills-img4" role="tabpanel">
                                            <div class="shop-details-tab-img">
                                                <img src="assets/img/inner-page/shop-details-tab-img4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav nav-pills" id="view-tab" role="tablist" aria-orientation="vertical">
                                        <button class="nav-link active" id="view-pills-img1-tab" data-bs-toggle="pill" data-bs-target="#view-pills-img1" type="button"
                                            role="tab" aria-controls="view-pills-img1" aria-selected="true">
                                            <img src="assets/img/inner-page/shop-details-nav-img1.png" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img2-tab" data-bs-toggle="pill" data-bs-target="#view-pills-img2" type="button"
                                            role="tab" aria-controls="view-pills-img2" aria-selected="false">
                                            <img src="assets/img/inner-page/shop-details-nav-img2.png" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img3-tab" data-bs-toggle="pill"
                                            data-bs-target="#view-pills-img3" type="button" role="tab"
                                            aria-controls="view-pills-img3" aria-selected="false">
                                            <img src="assets/img/inner-page/shop-details-nav-img3.png" alt="">
                                        </button>
                                        <button class="nav-link" id="view-pills-img4-tab" data-bs-toggle="pill"
                                            data-bs-target="#view-pills-img4" type="button" role="tab"
                                            aria-controls="view-pills-img4" aria-selected="false">
                                            <img src="assets/img/inner-page/shop-details-nav-img4.png" alt="">
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
                                            <p>(50 customer review)</p>
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
                                        <a href="#" class="primary-btn1 style-3 hover-btn4">*Add to Cart*</a>
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
                                            <li><img src="assets/img/inner-page/payment-img1.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img2.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img3.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img4.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img5.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img6.svg" alt=""></li>
                                            <li><img src="assets/img/inner-page/payment-img7.svg" alt=""></li>
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
    <!-- Start Home2 category section -->
    <x-popular-category></x-popular-category>
    <!-- End Home2 category section -->

    <!-- Start Home2 Feature product section -->
    <x-featured-product-section></x-featured-product-section>
    <!-- End Home2 Feature product section -->

    <!-- Star Product Banner section -->
    <div class="product-banner-section mb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-banner-bg">
                        <div class="swiper product-banner-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product-banner-wrapper">
                                        <div class="product-banner-left-img">
                                            <img src="assets/img/home2/product-banner-img1.png" alt="">
                                        </div>
                                        <div class="product-banner-content"> 
                                            <h2>Try fresh product for your face.</h2>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                        <div class="product-banner-right-img">
                                            <img src="assets/img/home2/product-banner-img2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-banner-wrapper">
                                        <div class="product-banner-left-img">
                                            <img src="assets/img/home2/product-banner-img4.png" alt="">
                                        </div>
                                        <div class="product-banner-content"> 
                                            <h2>Refreshing Skin Revival Elixir</h2>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                        <div class="product-banner-right-img">
                                            <img src="assets/img/home2/product-banner-img3.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product-banner-wrapper">
                                        <div class="product-banner-left-img">
                                            <img src="assets/img/home2/product-banner-img5.png" alt="">
                                        </div>
                                        <div class="product-banner-content"> 
                                            <h2>Renewing Facial Awakening Serum</h2>
                                            <a href="shop-list.html" class="primary-btn3 black-bg hover-btn5 hover-white">Shop Now</a>
                                        </div>
                                        <div class="product-banner-right-img">
                                            <img src="assets/img/home2/product-banner-img6.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-banner-slider-btn">
                            <div class="pd-banner-prev-btn slider-btn-bg">
                                <i class='bx bxs-chevron-left'></i>
                            </div>
                            <div class="pd-banner-next-btn slider-btn-bg two">
                                <i class='bx bxs-chevron-right'></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Banner section -->
     
    <!-- Start Suggest section -->
    <x-suggest-for-you></x-suggest-for-you>
    <!-- End Suggest section -->

    <!-- Start Offer-banner-2 section -->
    <div class="offer-banner two mb-110">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="offer-banner-left hover-img">
                        <img src="assets/img/home2/offer-banner-left-img1.png" alt="">
                        <div class="offer-banner-left-content">
                            <h3>Up to <span>40%</span> Off All Accessory.</h3>
                            <a href="shop-list.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="offer-banner-right hover-img">
                        <img src="assets/img/home2/offer-banner-right-img1.png" alt="">
                        <div class="offer-banner-right-content">
                            <h3>Organic <span>product</span> for your face.</h3>
                            <a href="shop-list.html" class="primary-btn3 hover-btn5">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Offer-banner-2 section -->

    <!-- Start Top selling section -->
    <x-top-selling-product></x-top-selling-product>
    <!-- End Top section -->

    <!-- Start Brand section -->
    <div class="brand-section mb-110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-2 d-flex align-items-center">
                    <div class="section-title3">
                        <h3>Our <span>Brand</span></h3>
                    </div>
                </div>
                <div class="col-xl-10">
                    <div class="row g-md-0 g-4 justify-content-center row-cols-xl-5 row-cols-lg-5 row-cols-md-5 row-cols-sm-4 row-cols-2 brand-border-bottom">
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pb-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img1.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pb-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pb-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img3.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pb-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img4.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="brand-img pb-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img5.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pt-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img6.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pt-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img7.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pt-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img8.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center brand-divider">
                            <div class="brand-img pt-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img9.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col d-flex justify-content-center">
                            <div class="brand-img pt-35">
                                <a href="shop-list.html">
                                    <img src="assets/img/home2/brand-img10.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand section section -->

    <!-- Start Testimonial section -->
    <x-reviews></x-reviews>
    <!-- End Testimonial section -->

    <!-- Start Home 2 Newsletter section -->
    <div class="newsletter-section style-2 mb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newsletter-banner">
                        <img src="assets/img/home2/newsletter-top-left-vector.png" alt="" class="top-left">
                        <img src="assets/img/home2/newsletter-bottom-left-vector.png" alt="" class="bottom-left">
                        <img src="assets/img/home2/newsletter-top-right-vector.png" alt="" class="top-right">
                        <img src="assets/img/home2/newsletter-bottom-right-vector.png" alt="" class="bottom-right">
                        <div class="newsletter-content">
                            <h2>Sign up to our newsletter for all the latest Offer & discounts.</h2>
                            <form>
                                <div class="from-inner">
                                    <input type="email" placeholder="Email Address">
                                    <div class="from-arrow">
                                        <i class="bi bi-arrow-right"></i>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Home 2 Newsletter section -->

    <!-- Start Home 2 Article section -->
   <x-articles></x-articles>
    <!-- End Home 2 Article section -->

    <div class="banner-footer style-2">
        <div class="container-fluid p-0">
            <div class="banner-footer-wrapper">
                <div class="row g-lg-4 gy-4">
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-lg-start justify-content-sm-center divider">
                        <div class="banner-footer-item">
                            <div class="banner-footer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g clip-path="url(#clip0_1190_20361)">
                                        <path
                                            d="M38.6593 8.87148L38.662 7.15148C38.6386 6.55948 38.75 5.78082 38.4873 5.21082C38.31 4.59815 37.6713 4.10148 37.2633 3.65548L36.038 2.44882L34.7853 1.22348C33.8306 0.334817 32.4386 -0.0358499 31.174 0.0541501C30.096 0.0594834 27.1206 0.0888167 26.0146 0.0934834C23.5433 0.108817 11.0073 0.212817 8.8173 0.22415C7.75197 0.263483 6.24064 0.0961501 5.2573 0.603483C4.19464 0.995484 3.33664 2.18015 2.53264 2.91148L1.3253 4.13615C0.85597 4.56815 0.417304 5.11148 0.33197 5.76748L0.418637 33.3448C0.40797 34.6082 1.31464 35.8115 2.53797 36.1335C3.03997 36.3075 3.81064 36.2202 4.3153 36.2448C11.5406 36.2215 19.384 36.2455 26.5873 36.2868C27.0313 36.7815 27.4806 37.2715 27.9373 37.7508L28.6673 38.4808C29.2053 39.1922 30.4013 39.4048 31.0973 38.7242C35.184 34.7582 39.554 29.9882 39.93 23.9995C39.9793 22.1542 39.4766 20.4335 38.6 18.9535C38.6666 15.6988 38.6413 12.1282 38.6586 8.87082L38.6593 8.87148ZM19.156 14.4008L15.8266 16.4768C15.938 12.8995 16.0846 9.32015 15.94 5.74348C17.1346 5.70682 18.2786 5.67482 19.336 5.65348C20.476 5.63482 21.616 5.62482 22.756 5.61548C22.8826 7.33348 22.944 9.66148 23.0006 11.3335C23.058 13.1688 23.066 15.0042 23.0706 16.8395L19.51 14.4008C19.4576 14.3651 19.3957 14.346 19.3323 14.346C19.2689 14.346 19.207 14.3651 19.1546 14.4008H19.156ZM15.938 4.24415C16.0526 3.11215 16.9726 2.25082 17.19 1.17282L21.6966 1.20748C22.0686 1.77615 22.2626 2.41148 22.36 3.08815C22.4566 3.73082 22.3653 4.43748 22.5633 5.06082C20.3305 5.02501 18.098 4.97234 15.866 4.90282C15.872 4.67815 15.8993 4.45948 15.938 4.24415ZM23.6653 11.3335C23.7093 9.66282 23.794 7.31415 23.912 5.60282C28.3753 5.58015 32.8373 5.65482 37.2973 5.90682C37.3726 6.31348 37.3253 6.77282 37.338 7.15215L37.3406 8.87215C37.3366 11.5875 37.348 14.5248 37.3793 17.3148C35.12 14.8488 31.6506 13.5102 28.1446 14.2675C26.3713 14.6082 24.8353 15.4295 23.5966 16.5495C23.6013 14.8108 23.6106 13.0722 23.6653 11.3335ZM29.454 1.26682C30.324 1.30948 31.9193 1.17215 32.6873 1.44882C33.6006 1.67282 34.4726 2.73948 35.1146 3.37148C35.404 3.66215 36.056 4.33015 36.528 4.80548C33.878 4.94282 31.228 5.01282 28.578 5.05148C27.0493 5.08748 25.4813 5.08682 23.8993 5.07415C23.8646 4.27282 23.2806 3.62482 22.9733 2.91282C22.732 2.36348 22.5686 1.80215 22.5413 1.21415L29.454 1.26682ZM4.31397 2.26082C5.0553 1.47815 6.02664 1.06748 7.0973 1.09748L8.8173 1.11015L15.8366 1.16282C15.7173 1.72882 15.7786 2.34548 15.6933 2.91282C15.5913 3.62282 15.38 4.28748 14.9693 4.87748C10.5113 4.74548 6.05864 4.62548 1.82064 4.72082C2.60864 3.90948 3.62397 2.96815 4.31397 2.26082ZM4.3153 35.7555H3.4553C2.10997 35.8388 0.896637 34.6842 0.916637 33.3428L0.93797 19.5855C0.955303 17.3242 0.994637 11.4555 1.01197 9.26682L1.02397 7.54682C1.0633 7.04882 0.97997 6.45815 1.06064 5.93682C5.00197 6.09482 10.1393 5.92415 14.72 5.78015C14.6386 7.63082 14.6513 9.48149 14.698 11.3328C14.74 13.3328 14.7926 15.3328 14.8673 17.3328C14.8473 17.6988 15.2966 17.9442 15.5926 17.7208L19.342 15.0528L22.8346 17.3182C20.452 20.0128 19.5693 23.9715 20.9786 27.5482C22.0893 30.6282 23.9646 33.2802 26.084 35.7162C19.012 35.7708 11.3833 35.7588 4.31597 35.7548L4.3153 35.7555ZM36.5646 30.9608C36.4806 30.6693 36.3722 30.3855 36.2406 30.1122C36.0546 29.7122 35.826 29.3008 35.62 28.9982C35.414 28.6948 35.23 28.5002 35.134 28.5342C35.0877 28.5436 35.0471 28.571 35.021 28.6104C34.9949 28.6498 34.9854 28.6978 34.9946 28.7442C35.1778 29.4733 35.4787 30.1678 35.8853 30.8002C36.0146 31.0015 36.1573 31.1955 36.3086 31.3848C36.1426 31.6602 35.9713 31.9328 35.7933 32.2028C35.7347 32.0585 35.6668 31.9183 35.59 31.7828C35.5166 31.6508 35.44 31.5128 35.358 31.3795C35.2013 31.1248 35.0466 30.8868 34.9606 30.7482C34.8006 30.4888 34.6133 30.2535 34.442 30.0342C34.236 29.7702 34.0406 29.5482 33.8613 29.4242C33.8444 29.4123 33.8248 29.4049 33.8043 29.4027C33.7838 29.4005 33.763 29.4035 33.744 29.4115C33.674 29.4408 33.63 29.5042 33.634 29.5715C33.6357 29.6036 33.6422 29.6353 33.6533 29.6655C33.8593 30.1942 34.1144 30.7024 34.4153 31.1835C34.7139 31.6692 35.0534 32.1287 35.43 32.5568C35.4653 32.5802 35.494 32.5922 35.524 32.6075C35.3453 32.8682 35.162 33.1248 34.9753 33.3802C34.9127 33.2669 34.846 33.1559 34.7753 33.0475C34.6731 32.8896 34.5678 32.7338 34.4593 32.5802C34.2246 32.2508 34.006 31.9562 33.9326 31.8468C33.728 31.5422 33.4786 31.2728 33.248 31.0035C32.9993 30.7122 32.7526 30.4455 32.4993 30.2395C32.4771 30.2213 32.45 30.2101 32.4214 30.2073C32.3928 30.2044 32.364 30.2101 32.3386 30.2235C32.2626 30.2628 32.226 30.3482 32.2533 30.4228C32.2653 30.4555 32.2793 30.4895 32.2966 30.5228C32.6369 31.1752 33.0298 31.7988 33.4713 32.3875C33.7954 32.825 34.1447 33.2432 34.5173 33.6402C34.584 33.6948 34.6366 33.7288 34.6913 33.7668C34.5046 34.0135 34.3153 34.2582 34.1226 34.4982C34.07 34.4182 34.0157 34.3393 33.96 34.2615C33.54 33.6742 32.9773 33.0175 32.904 32.8955C32.6226 32.5695 32.344 32.2408 32.0533 31.9222C31.764 31.6002 31.458 31.2935 31.1366 31.0035C31.1059 30.9751 31.0659 30.9588 31.0241 30.9576C30.9822 30.9563 30.9413 30.9703 30.909 30.9969C30.8767 31.0235 30.855 31.0608 30.8481 31.1021C30.8412 31.1434 30.8494 31.1858 30.8713 31.2215C31.5626 32.3176 32.3561 33.3457 33.2413 34.2922C33.4266 34.4902 33.6233 34.6788 33.8166 34.8695C33.568 35.1708 33.3166 35.4668 33.062 35.7575C32.9814 35.6345 32.8965 35.5144 32.8073 35.3975C32.5542 35.0695 32.2916 34.749 32.02 34.4362C31.8773 34.2695 31.7646 34.1322 31.7026 34.0608C31.4186 33.7315 31.1166 33.4182 30.826 33.1148C30.7495 33.0347 30.6721 32.9553 30.594 32.8768C30.3709 32.6509 30.1397 32.4332 29.9006 32.2242C29.838 32.1702 29.7666 32.1548 29.7113 32.1722C29.6106 32.2035 29.56 32.2748 29.5906 32.3495C29.79 32.8395 30.3146 33.4675 30.8646 34.1102C31.3022 34.6226 31.7592 35.118 32.2346 35.5955C32.4286 35.7882 32.6026 35.9522 32.7626 36.0995C32.5 36.3928 32.236 36.6822 31.9706 36.9635C31.8718 36.8161 31.7666 36.6731 31.6553 36.5348C31.3925 36.212 31.1197 35.8974 30.8373 35.5915C30.708 35.4495 30.5926 35.3208 30.5026 35.2262C30.1336 34.8372 29.7561 34.4562 29.3706 34.0835C29.0973 33.8222 28.8526 33.6002 28.666 33.4448C28.596 33.3862 28.5306 33.3535 28.4913 33.3608C28.37 33.3835 28.302 33.4082 28.3106 33.4775C28.3573 33.8368 28.9686 34.5388 29.6373 35.2662C30.1018 35.7713 30.5818 36.262 31.0766 36.7375C31.3086 36.9575 31.51 37.1402 31.6686 37.2782C31.394 37.5648 31.12 37.8442 30.8473 38.1168C30.604 37.7608 30.1553 37.2615 29.6546 36.7475C29.1513 36.2315 28.596 35.7015 28.146 35.2908C27.696 34.8802 27.352 34.5888 27.2713 34.5502C26.6033 34.4115 27.4026 35.3895 28.4093 36.4222C28.8986 36.9216 29.4017 37.4073 29.918 37.8788C30.1686 38.1075 30.3793 38.2922 30.5373 38.4242C30.01 38.7322 29.4753 38.5635 29.0566 38.0828L28.3286 37.3695C25.5026 34.5048 22.8993 31.1688 21.5846 27.3502C19.7066 22.1688 22.8873 16.3188 28.36 15.4095C33.56 14.3875 38.74 18.7282 38.736 24.0042C38.684 26.4115 37.828 28.7662 36.564 30.9648L36.5646 30.9608Z" />
                                        <path
                                            d="M15.3333 23.4033L4.552 23.7007C3.71733 23.7613 3.02667 24.5213 3.054 25.3513L3.05933 26.024C3.07333 27.5887 3.076 29.8167 3.04333 31.404C2.89333 32.5133 3.43067 33.6213 4.668 33.6533L15.4687 33.9067C16.1153 33.8773 16.7293 33.4867 17.0427 32.9147C17.3307 32.4573 17.2787 31.8187 17.2967 31.31C17.34 29.2833 17.3653 27.2487 17.302 25.2213C17.2553 24.2167 16.332 23.3693 15.3347 23.4033H15.3333ZM15.3867 32.7507L4.66667 33.0133C4.14267 33.0367 3.65733 32.586 3.634 32.0593L3.624 31.404C3.61267 29.8247 3.57333 27.58 3.60733 26.024L3.61267 25.3513C3.60067 24.8107 4.05533 24.314 4.594 24.3093L15.3333 24.5973C15.706 24.608 16.0253 24.9247 16.0247 25.294L16.0133 25.93C15.9973 26.8267 15.988 27.7233 15.9967 28.62C15.9967 29.5167 16.0247 30.4133 16.0373 31.31L16.0493 31.9827C16.0581 32.1713 15.9942 32.3561 15.8708 32.4989C15.7474 32.6418 15.5745 32.7319 15.3867 32.7507Z" />
                                        <path
                                            d="M14 28L5.99996 28.1234C5.29929 28.136 5.30263 29.1974 5.99996 29.21L14 29.3334C14.8913 29.33 14.8873 28.0027 14 28ZM30 18.0874C24.9653 18.154 22.438 24.4747 26.0413 27.9587C29.572 31.4994 35.838 29.0654 35.93 24C36.1166 20.7847 33.1946 17.9287 30 18.0874ZM26.4166 27.584C23.32 24.4854 25.6406 19.09 30 19.2467C32.5386 19.2854 34.67 21.5054 34.7366 24.0007C34.918 28.3327 29.4726 30.7434 26.4166 27.584Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="banner-footer-content">
                                <h5>Fast Delivery</h5>
                                <p>Delivery in 24 hours max!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-sm-center divider"> 
                        <div class="banner-footer-item">
                            <div class="banner-footer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <path
                                        d="M11.4112 21.5625C11.6875 21.5625 11.9638 21.5617 12.2397 21.5601C13.1084 21.5546 13.8246 20.8406 13.8359 19.9685C13.8489 18.9125 13.8748 17.7459 13.888 16.7016C13.8998 15.8035 13.175 15.0718 12.2767 15.0718H6.85225C5.98185 15.0718 5.25919 15.7796 5.24091 16.6498L5.17253 19.9063C5.15433 20.7969 5.85574 21.5378 6.79814 21.5494C8.30293 21.5405 9.88051 21.5625 11.4112 21.5625ZM13.0027 19.9577C12.997 20.379 12.6527 20.7241 12.2349 20.7267C11.931 20.7287 11.6258 20.7252 11.3213 20.725L13.0192 18.8795C13.0128 19.2465 13.0069 19.61 13.0027 19.9577ZM13.0297 18.2524L10.756 20.724C10.2626 20.7223 9.91058 20.7246 9.22376 20.7206L13.049 17.0725C13.0432 17.4587 13.0366 17.8534 13.0297 18.2524ZM12.538 15.9528C12.8016 16.0464 12.9769 16.2552 13.0341 16.5111L8.62281 20.7181C7.70855 20.7139 7.90745 20.7135 7.21454 20.7149L12.538 15.9528ZM6.07428 16.6672V16.667C6.08286 16.2469 6.43192 15.9051 6.85225 15.9051H7.55374L6.06715 17.0047L6.07428 16.6672ZM6.05616 17.5308L8.25394 15.9051H8.99912L6.04245 18.1854L6.05616 17.5308ZM6.03115 18.7205L9.68169 15.9051H10.5828L6.01207 19.6305L6.03115 18.7205ZM6.03748 20.147L11.242 15.9051H11.9667L6.61246 20.6947C6.34061 20.6332 6.11846 20.4384 6.03748 20.147ZM6.46327 27.5039H6.45918C6.3496 27.5048 6.24478 27.5488 6.16743 27.6264C6.09007 27.7041 6.0464 27.809 6.04588 27.9186C6.04535 28.0282 6.08801 28.1336 6.16461 28.2119C6.24122 28.2903 6.3456 28.3353 6.45517 28.3373L9.61395 28.3682H9.61804C9.72761 28.3673 9.83243 28.3233 9.90978 28.2457C9.98714 28.1681 10.0308 28.0631 10.0313 27.9535C10.0319 27.8439 9.98921 27.7385 9.9126 27.6602C9.836 27.5818 9.73161 27.5368 9.62204 27.5348L6.46327 27.5039ZM12.3662 27.4188C12.2566 27.4197 12.1518 27.4638 12.0744 27.5414C11.9971 27.619 11.9534 27.724 11.9529 27.8335C11.9524 27.9431 11.995 28.0485 12.0716 28.1269C12.1482 28.2052 12.2526 28.2503 12.3622 28.2522L15.521 28.2833H15.525C15.6348 28.2833 15.7402 28.2399 15.8182 28.1626C15.8962 28.0854 15.9406 27.9805 15.9417 27.8707C15.9422 27.8159 15.932 27.7616 15.9116 27.7109C15.8911 27.6601 15.8609 27.6139 15.8226 27.5748C15.7842 27.5357 15.7386 27.5046 15.6882 27.4832C15.6379 27.4617 15.5838 27.4504 15.529 27.4499L12.3703 27.4188H12.3662ZM18.2692 28.1671L21.4276 28.1982H21.4316C21.5412 28.1974 21.646 28.1533 21.7234 28.0757C21.8007 27.9981 21.8444 27.8931 21.8449 27.7835C21.8455 27.674 21.8028 27.5686 21.7262 27.4902C21.6496 27.4119 21.5452 27.3668 21.4356 27.3649L18.2773 27.3338H18.2732C18.1636 27.3347 18.0588 27.3787 17.9814 27.4563C17.9041 27.5339 17.8604 27.6389 17.8599 27.7485C17.8594 27.8581 17.902 27.9634 17.9786 28.0418C18.0552 28.1202 18.1596 28.1652 18.2692 28.1671ZM24.1758 28.0821L27.3346 28.1132H27.3386C27.4482 28.1123 27.553 28.0683 27.6304 27.9906C27.7078 27.913 27.7514 27.8081 27.7519 27.6985C27.7525 27.5889 27.7098 27.4835 27.6332 27.4052C27.5566 27.3268 27.4522 27.2818 27.3427 27.2798L24.1839 27.2487C23.9706 27.2499 23.7656 27.4312 23.7631 27.6614C23.7626 27.7161 23.7728 27.7704 23.7933 27.8212C23.8137 27.8719 23.8439 27.9182 23.8823 27.9572C23.9206 27.9963 23.9662 28.0275 24.0166 28.0489C24.067 28.0703 24.1211 28.0816 24.1758 28.0821ZM33.2497 27.1948L30.091 27.1639H30.0869C29.9773 27.1648 29.8725 27.2088 29.7951 27.2864C29.7178 27.3641 29.6741 27.469 29.6736 27.5786C29.673 27.6882 29.7157 27.7936 29.7923 27.8719C29.8689 27.9503 29.9733 27.9953 30.0829 27.9973L33.2416 28.0282H33.2457C33.3553 28.0273 33.4601 27.9833 33.5375 27.9057C33.6148 27.828 33.6585 27.7231 33.659 27.6135C33.6596 27.5039 33.6169 27.3985 33.5403 27.3202C33.4637 27.2418 33.3593 27.1968 33.2497 27.1948ZM32.8363 31.814H6.24841C6.01808 31.814 5.83177 32.0006 5.83177 32.2306C5.83177 32.4607 6.01816 32.6473 6.24841 32.6473H32.8363C33.0666 32.6473 33.2529 32.4607 33.2529 32.2306C33.2529 32.0006 33.0666 31.814 32.8363 31.814Z" />
                                    <path
                                        d="M39.5087 6.5395C37.1096 4.45291 33.9175 3.22158 30.7346 3.16113C27.5685 3.22158 24.3764 4.45283 21.9765 6.53982C21.6001 6.86715 21.4203 7.37968 21.5065 7.87673C21.6154 8.50831 21.7526 9.13428 21.9087 9.75503C15.5751 9.7697 9.1464 9.78141 4.60332 9.7778C2.05344 9.7778 -0.0109397 11.8425 4.36241e-05 14.3972C0.0245756 20.3713 0.0600909 26.773 0.081817 32.26C0.0928003 34.8497 2.22668 36.9042 4.79581 36.8372C14.0626 36.6171 23.5475 36.9426 32.8172 36.7217C35.352 36.659 37.3792 34.5447 37.2997 31.976C37.1731 27.8411 36.9779 21.7691 36.8178 16.551C38.3566 13.9253 39.4403 10.9882 39.9787 7.87753C40.065 7.37936 39.8851 6.86667 39.5087 6.5395ZM36.4663 32.0019C36.5316 34.083 34.8947 35.8363 32.7973 35.8888C23.5105 36.1091 14.0527 35.7833 4.77585 36.0044C2.64734 36.0575 0.923522 34.3572 0.915184 32.2566C0.890652 26.2829 0.855137 19.8804 0.833411 14.3937C0.824993 12.305 2.51137 10.6112 4.603 10.6112C9.19859 10.6162 15.7229 10.603 22.1259 10.588C22.1674 10.733 22.214 10.8763 22.258 11.0205C22.2686 11.0551 22.2789 11.0896 22.2897 11.1241C23.7712 15.9091 26.5313 19.9212 29.7742 22.6871L29.7814 22.6936C30.3379 23.1676 31.1458 23.1692 31.7045 22.6929C33.2204 21.3994 34.7541 19.7173 36.0233 17.8241C36.1525 22.0141 36.3126 26.9763 36.4665 32.0017V32.0019H36.4663ZM39.1575 7.73515V7.73539C38.1574 13.5125 35.1324 18.6703 31.1672 22.0554C31.0491 22.1568 30.8988 22.2126 30.7432 22.2128C30.5876 22.213 30.4371 22.1576 30.3188 22.0566C26.2908 18.6207 23.3107 13.4392 22.3276 7.73475C22.291 7.52254 22.3659 7.30544 22.5233 7.16835C24.7779 5.20811 27.7769 4.0511 30.7346 3.9945C33.7091 4.05102 36.708 5.20787 38.9618 7.16811C39.1193 7.30528 39.1946 7.52254 39.1575 7.73515Z" />
                                    <path
                                        d="M30.1328 14.4261L33.928 9.44563C33.9949 9.35777 34.0243 9.24692 34.0096 9.13743C33.9948 9.02794 33.9372 8.92879 33.8494 8.86176C33.8059 8.82853 33.7563 8.80422 33.7034 8.79021C33.6505 8.77619 33.5953 8.77276 33.5411 8.78009C33.4868 8.78743 33.4346 8.80539 33.3873 8.83295C33.34 8.86052 33.2986 8.89714 33.2655 8.94072L29.7348 13.5741C29.2124 13.1118 28.7541 12.5818 28.3721 11.998C28.2456 11.8058 27.9876 11.7512 27.7951 11.8778C27.7027 11.9383 27.6381 12.0331 27.6155 12.1412C27.593 12.2494 27.6143 12.3621 27.6747 12.4546C28.1839 13.2319 28.8145 13.9225 29.5424 14.5001C29.5858 14.5345 29.6357 14.56 29.689 14.5749C29.7424 14.5898 29.7982 14.594 29.8532 14.5871C29.9081 14.5802 29.9612 14.5624 30.0092 14.5348C30.0572 14.5071 30.0992 14.4702 30.1328 14.4261ZM32.5779 6.01276H32.5844C32.6386 6.01272 32.6906 5.99162 32.7295 5.95392C32.7684 5.91621 32.7911 5.86486 32.7928 5.81073C32.7944 5.75554 32.774 5.70196 32.7362 5.66174C32.6984 5.62151 32.6462 5.59791 32.591 5.59611C29.6885 5.51009 26.7581 6.1003 24.1189 7.31159C24.071 7.33357 24.0332 7.37286 24.0131 7.42155C23.9931 7.47025 23.9922 7.52474 24.0106 7.57407L24.8993 9.94469C24.9187 9.99644 24.9578 10.0384 25.0081 10.0613C25.0584 10.0842 25.1157 10.0862 25.1675 10.0668C25.2192 10.0474 25.261 10.0082 25.2839 9.9579C25.3067 9.90761 25.3086 9.85032 25.2892 9.79862L24.4697 7.61046C27.0046 6.4795 29.8089 5.92545 32.5779 6.01276ZM25.3249 10.5646C25.2776 10.4594 25.1547 10.412 25.0498 10.4587C24.9449 10.5055 24.8972 10.6286 24.944 10.7338L25.1454 11.1869C25.1678 11.2374 25.2094 11.2769 25.261 11.2968C25.3126 11.3166 25.3699 11.3152 25.4204 11.2927C25.4709 11.2703 25.5104 11.2287 25.5302 11.1771C25.5501 11.1255 25.5486 11.0682 25.5262 11.0177L25.3249 10.5646ZM34.5408 14.9095L30.462 19.8681L29.5578 18.8537C29.521 18.8124 29.4694 18.7875 29.4142 18.7843C29.3591 18.7811 29.3049 18.7999 29.2636 18.8366C29.2224 18.8734 29.1975 18.9251 29.1944 18.9802C29.1913 19.0354 29.2102 19.0896 29.2469 19.1308L30.313 20.3271C30.333 20.3495 30.3577 20.3674 30.3852 20.3794C30.4128 20.3914 30.4426 20.3973 30.4726 20.3966C30.5027 20.396 30.5322 20.3889 30.5593 20.3758C30.5863 20.3627 30.6102 20.3438 30.6292 20.3206L34.8623 15.1745C34.8797 15.1534 34.8928 15.129 34.9008 15.1029C34.9088 15.0767 34.9116 15.0492 34.9089 15.0219C34.9063 14.9947 34.8983 14.9682 34.8854 14.9441C34.8725 14.9199 34.855 14.8985 34.8338 14.8812C34.8127 14.8638 34.7884 14.8507 34.7623 14.8427C34.7361 14.8347 34.7086 14.8319 34.6814 14.8346C34.6542 14.8372 34.6278 14.8452 34.6036 14.8581C34.5795 14.8709 34.5582 14.8884 34.5408 14.9095ZM12.8956 12.8428C12.8907 12.7281 12.7964 12.6353 12.6788 12.6431L5.02165 12.9513C3.41528 13.016 2.97259 13.5608 2.9782 15.0076L2.99688 20.4719C2.99703 20.527 3.01905 20.5799 3.05811 20.6188C3.09717 20.6578 3.15008 20.6796 3.20524 20.6796H3.20604C3.26125 20.6794 3.31412 20.6572 3.35303 20.6181C3.39195 20.5789 3.41373 20.5259 3.4136 20.4707L3.39492 15.0061C3.39075 13.7916 3.65259 13.4237 5.03881 13.3675L12.6959 13.0593C12.7511 13.057 12.8031 13.0329 12.8405 12.9923C12.8779 12.9518 12.8978 12.898 12.8956 12.8428ZM13.4311 13.0585L13.9926 13.1077C14.1029 13.1188 14.2083 13.0359 14.2184 12.9185C14.2209 12.8913 14.2179 12.8638 14.2097 12.8377C14.2015 12.8116 14.1882 12.7874 14.1706 12.7664C14.1531 12.7454 14.1315 12.7281 14.1073 12.7155C14.083 12.7028 14.0565 12.6951 14.0292 12.6927L13.4669 12.6435C13.3583 12.6321 13.2517 12.7183 13.2415 12.8329C13.2391 12.8602 13.2421 12.8876 13.2503 12.9137C13.2586 12.9399 13.2719 12.9641 13.2895 12.985C13.3071 13.006 13.3287 13.0233 13.353 13.0359C13.3773 13.0485 13.4038 13.0562 13.4311 13.0585Z" />
                                </svg>
                            </div>
                            <div class="banner-footer-content">
                                <h5>Safe Payment</h5>
                                <p>100% secure payment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-sm-center divider">
                        <div class="banner-footer-item">
                            <div class="banner-footer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g clip-path="url(#clip0_1188_20342)">
                                        <path
                                            d="M39.6594 20.9248C40.0994 20.4327 40.0255 20.2917 39.917 20.1526C39.8568 20.0756 39.7901 20.0092 39.642 20.0195C39.4 19.4173 36.1003 18.478 36.5051 10.9781C36.5456 10.346 36.5752 9.91313 36.5706 9.61531C36.5681 9.41729 36.5497 9.28257 36.521 9.18465C36.7034 9.04744 36.7907 8.92987 36.8285 8.84692C36.8746 8.73715 36.8388 8.66168 36.7957 8.58559C36.7084 8.4253 36.6064 8.32613 35.9986 8.4752C31.3378 9.47841 28.4064 7.33134 27.2254 3.42857C27.0648 2.87691 26.9872 2.51205 26.8961 2.49615C27.1762 2.12817 27.0829 2.00343 26.9856 1.8974C26.8631 1.76299 26.7415 1.68815 26.1829 1.98378C22.2664 3.92222 18.7005 3.95466 15.3877 1.12994C15.0671 0.857075 14.841 0.643459 14.7085 0.561443C14.6836 0.345333 14.5972 0.291695 14.484 0.247101C14.3293 0.185355 14.1462 0.140137 13.8316 0.783167C12.9428 2.60436 13.5191 5.69851 7.69256 6.89257C6.39995 7.15515 5.06088 7.28332 4.55444 7.45327C4.50329 7.4093 4.464 7.38903 4.44342 7.40026C4.42159 7.4118 4.4166 7.45171 4.42377 7.51346C4.40163 7.52905 4.38635 7.54464 4.38697 7.56024C4.3876 7.57864 4.40849 7.5961 4.44092 7.61325C5.34029 11.7774 5.90224 15.9817 2.05654 18.425C1.44376 18.8042 0.978792 18.9642 0.666632 19.0886C0.351666 19.2093 0.18015 19.2841 0.0912736 19.3662C0.00239711 19.4488 -0.00290429 19.533 0.000837878 19.6203C0.00458005 19.7076 0.0133118 19.7912 0.121211 19.8598C0.148342 19.877 0.182333 19.8938 0.224121 19.9091C0.333579 20.0107 0.59366 20.1639 0.928272 20.3962C3.47919 22.1862 4.60495 25.2635 3.31328 29.0057C3.09187 29.6253 2.89852 30.0335 2.78657 30.3223C2.55269 30.897 2.64842 31.0096 2.79499 31.1144C2.89634 31.1877 3.00705 31.2535 3.24312 31.082C3.99779 31.1144 5.27854 30.989 6.57677 31.1964C9.59701 31.6545 11.2055 34.7193 12.0316 37.4365C12.2499 38.1846 12.3581 38.7041 12.4538 39.0553C12.6303 39.7604 12.7735 39.7931 12.954 39.7856C13.0604 39.7813 13.1698 39.7669 13.2481 39.5633C13.8275 39.0996 14.6408 38.251 15.6575 37.5556C16.4299 37.0192 17.3723 36.6054 18.2745 36.5062C19.5895 36.3565 20.3514 36.8159 22.181 37.7474C22.6394 37.9822 23.0199 38.1933 23.3379 38.3842C23.9744 38.7653 24.3633 39.0618 24.639 39.2564C24.9134 39.4523 25.0728 39.5477 25.19 39.5723C25.3079 39.597 25.3793 39.5527 25.4488 39.4993C25.5184 39.4457 25.5808 39.3902 25.5767 39.2648C25.5751 39.2012 25.5567 39.1186 25.51 39.0122C25.9905 37.8946 26.6785 34.8871 28.0437 33.2817C29.1009 32.0144 30.1047 32.0131 31.7341 31.9698C33.148 31.9511 34.1578 32.0094 34.7697 31.9854C34.9817 31.9791 35.1314 31.9607 35.2446 31.9355C35.2677 31.9604 35.2889 31.9754 35.306 31.9717C35.3247 31.9676 35.3388 31.9436 35.3497 31.9074C35.5296 31.8441 35.5583 31.7496 35.5742 31.6433C35.5917 31.5276 35.5911 31.4125 35.37 31.2856C35.3653 31.1833 35.3596 31.081 35.3528 30.9787C34.9346 24.3501 36.6011 24.3676 39.6594 20.9248ZM34.8676 31.0723L34.8744 31.0929C33.9588 30.8362 32.6943 30.743 31.7357 30.7255C29.8362 30.7261 28.4039 30.8147 27.1241 32.5579C26.4299 33.4953 26.0326 34.603 25.7622 35.6047C25.5363 36.4557 25.3778 37.3233 25.2882 38.1993C25.2739 38.3452 25.2636 38.4768 25.2564 38.5975C24.343 37.3775 20.6193 34.8959 18.0998 35.349C16.9569 35.5504 15.8951 36.1535 15.108 36.8452C14.3159 37.5356 13.7514 38.2697 13.3716 38.8099L13.3504 38.841C13.3566 38.454 13.3242 37.9077 13.1664 37.1505C12.485 34.0451 10.356 30.4857 6.66814 30.303C5.56264 30.2524 4.60745 30.4327 3.93479 30.5924C3.84333 30.615 3.75216 30.6388 3.6613 30.6638C3.87118 30.4049 4.12814 30.026 4.39508 29.4526C6.29735 25.2395 4.19612 21.0735 1.15561 19.9571C1.14002 19.9515 1.1263 19.9478 1.11133 19.9425C1.49459 19.8913 2.00446 19.7653 2.63127 19.4444C6.4539 17.458 7.18923 11.9358 5.1379 8.27655C5.02879 8.07717 4.9067 7.88518 4.77242 7.70182C4.93395 7.72926 5.13977 7.75389 5.3852 7.77479C6.00141 7.825 6.85774 7.85587 7.81698 7.78227C12.713 7.3962 14.2454 4.96878 14.6942 1.03233C14.6982 0.99803 14.6995 0.971211 14.7023 0.940026C14.7961 1.1221 14.9033 1.297 15.0228 1.46331C17.6442 5.17429 23.9554 5.57689 26.7265 2.69822C26.763 2.65862 26.7898 2.62494 26.8194 2.58939C26.7652 2.73907 26.7227 3.05841 26.7377 3.50778C26.7648 4.13553 26.9189 5.01618 27.3252 5.9115C28.5523 8.76179 31.5352 10.5253 34.7846 9.89722C35.0673 9.84077 35.345 9.76172 35.6151 9.66084C35.5243 9.94057 35.4286 10.322 35.3422 10.8465C34.5171 16.2327 37.3287 19.6911 39.4056 20.0794C39.3017 20.1194 39.2007 20.1663 39.1031 20.2197C35.3042 22.2804 33.2809 26.2134 34.8676 31.0723Z" />
                                        <path
                                            d="M26.1028 9.17533C26.6217 8.10258 26.511 7.97877 26.3616 7.8874C26.2116 7.79603 26.0513 7.75393 25.3356 8.70881C24.6224 9.66556 23.3454 11.6152 21.0212 15.5408C19.747 17.6916 17.8263 21.1244 16.2874 24.053C14.7462 26.9806 13.5793 29.3996 13.7318 29.4844C13.8855 29.5705 15.3285 27.3077 17.0673 24.4986C18.8037 21.6876 20.8428 18.334 22.1143 16.1872C24.4341 12.2692 25.587 10.2503 26.1028 9.17533ZM28.7195 24.0972C28.6178 23.9426 28.5221 23.8556 28.4482 23.8053C28.296 23.7074 28.223 23.7492 28.151 23.7988C28.0786 23.8481 28.0178 23.9083 28.0256 24.0617C27.9336 27.9648 26.157 29.0859 24.029 28.6462C23.5681 28.5464 23.1137 28.3237 22.8094 27.8781C21.6608 26.2901 22.3238 21.1734 25.4994 21.9929C26.0735 22.1313 26.5578 22.4426 26.9329 22.7398C27.6845 23.3491 28.0696 23.8609 28.151 23.7988C28.1859 23.7738 28.1345 23.621 27.9963 23.3678C27.7948 23.0095 27.5506 22.6769 27.2691 22.3774C26.912 21.9963 26.41 21.5653 25.7064 21.3137C22.8571 20.2606 20.4577 23.6532 21.2704 27.356C21.3717 27.7802 21.5274 28.203 21.7781 28.5747C22.0179 28.9385 22.3346 29.2453 22.7058 29.4735C23.0601 29.6905 23.4206 29.8093 23.7592 29.8873C24.3836 30.0192 24.9664 29.994 25.49 29.8963C26.0145 29.7972 26.4864 29.6272 26.9064 29.3946C27.7565 28.924 28.2823 28.218 28.5711 27.6049C28.8601 26.9865 28.9927 26.4635 29.0594 25.9839C29.1227 25.5096 29.0884 25.1033 29.0136 24.7895C28.9369 24.4739 28.8233 24.2504 28.7195 24.0972ZM14.783 19.5012C15.3076 19.4024 15.7797 19.2321 16.1994 18.9998C17.0495 18.5292 17.5753 17.8232 17.8647 17.2101C18.1535 16.5917 18.286 16.0687 18.3527 15.5888C18.4157 15.1148 18.3814 14.7081 18.3066 14.3944C18.2302 14.0794 18.1167 13.8555 18.0128 13.7021C17.9109 13.5477 17.8154 13.4607 17.7415 13.4102C17.589 13.3126 17.5164 13.3544 17.444 13.404C17.3717 13.4533 17.3109 13.5134 17.319 13.6669C17.3152 13.8234 17.4032 14.066 17.4185 14.5266C17.4219 14.7574 17.4044 15.0443 17.3155 15.4045C17.2047 15.8475 17.0392 16.275 16.8228 16.6771C16.574 17.1343 16.1969 17.5927 15.6051 17.9067C15.0179 18.2152 14.155 18.4235 13.3223 18.2513C12.8611 18.1515 12.4071 17.9286 12.1024 17.4833C11.9443 17.2647 11.828 16.9837 11.7413 16.6712C11.6991 16.5077 11.666 16.3419 11.6421 16.1747C11.6168 15.9939 11.5935 15.8033 11.5763 15.619C11.504 14.8775 11.5351 14.1434 11.7949 13.4972C12.0537 12.8692 12.5377 12.2296 13.0588 11.8619C13.3286 11.6717 13.588 11.5631 13.8899 11.5388C14.2017 11.4995 14.5074 11.5245 14.7924 11.5981C15.3668 11.7362 15.8511 12.0478 16.2263 12.3449C16.9778 12.9543 17.3629 13.4664 17.444 13.404C17.4793 13.3797 17.4278 13.2259 17.2897 12.9727C17.0882 12.6145 16.844 12.282 16.5624 11.9826C16.2054 11.6015 15.7033 11.1702 14.9995 10.9186C14.6296 10.7827 14.2369 10.7195 13.8431 10.7324C13.6454 10.7233 13.4006 10.7692 13.1882 10.8291C12.974 10.8963 12.7685 10.9887 12.5761 11.1044C12.1913 11.3311 11.8651 11.6296 11.5744 11.9576C11.2882 12.2904 11.0299 12.6456 10.8291 13.0775C10.4312 13.9232 10.3613 14.8706 10.4091 15.702C10.4203 15.9131 10.4371 16.1142 10.458 16.3201C10.4798 16.534 10.517 16.7485 10.5634 16.9612C10.6651 17.3853 10.8207 17.8082 11.0717 18.1796C11.3114 18.5433 11.6278 18.8501 11.9989 19.0784C12.3531 19.2954 12.7139 19.4145 13.0526 19.4925C13.6769 19.6241 14.2594 19.5988 14.783 19.5012Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="banner-footer-content">
                                <h5>Online Discount</h5>
                                <p>Add multi-buy discount </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-flex justify-content-sm-center">
                        <div class="banner-footer-item">
                            <div class="banner-footer-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                                    <g clip-path="url(#clip0_1188_20333)">
                                        <path
                                            d="M26.4563 37.2865C24.272 39.2896 21.2069 39.4811 18.4225 38.581C13.9482 37.1338 7.07958 31.4771 3.0071 23.4499C1.94504 21.3567 0.731428 18.9136 0.368713 16.4762C-0.347403 14.1708 -0.131262 12.062 2.01088 9.90744C3.10089 8.78386 4.8449 6.88535 6.32434 7.39738C8.34598 8.10095 9.40991 9.74031 10.5943 11.5099C11.0862 12.2435 11.4446 12.9395 11.6899 13.6394C12.5855 16.1907 11.5067 17.1228 10.1161 17.9972C9.2919 18.5168 8.37517 18.7496 7.58825 18.9092C7.54749 18.9175 7.50893 18.9344 7.47509 18.9587C7.44126 18.9831 7.41291 19.0144 7.39192 19.0506C7.37092 19.0867 7.35775 19.127 7.35327 19.1686C7.34878 19.2103 7.35309 19.2524 7.3659 19.2923C8.9472 24.5315 13.0874 28.992 18.1716 30.9306C18.2107 30.9465 18.2527 30.9538 18.2948 30.9518C18.337 30.9498 18.3781 30.9386 18.4155 30.919C18.453 30.8994 18.4857 30.8719 18.5116 30.8384C18.5375 30.8048 18.5558 30.766 18.5654 30.7247C18.8722 29.4227 19.3188 28.08 20.4939 27.0892C21.7982 25.9919 23.8887 26.0175 25.5868 27.8065C26.7681 29.0521 28.727 31.1209 28.9326 32.8172C29.1307 34.4572 27.924 36.2218 26.4563 37.2865ZM10.8117 13.9523C10.5931 13.3289 10.2695 12.7023 9.82169 12.0357C8.75093 10.4345 7.78141 8.89778 6.02063 8.28498C5.38401 8.06652 4.38281 8.87963 3.61515 9.617C5.54301 11.528 7.74601 14.2209 9.7484 17.1196C10.8813 16.3954 11.4719 15.8339 10.8117 13.9523ZM18.8561 31.745C18.7014 31.8279 18.5309 31.8766 18.3561 31.8876C18.1813 31.8986 18.0061 31.8717 17.8424 31.8088C12.4936 29.7695 8.13854 25.078 6.47464 19.564C6.42484 19.3982 6.40979 19.2238 6.43042 19.0518C6.45106 18.8798 6.50694 18.714 6.59451 18.565C7.02679 17.837 7.59571 18.0905 8.91304 17.554C6.95847 14.736 4.82192 12.1289 2.95493 10.2793L2.94251 10.293C2.64004 10.6404 1.16371 11.9005 0.950676 13.8171C0.789192 15.2787 1.41649 16.756 1.96926 18.0598C2.98474 20.4497 4.03314 22.9216 5.38339 25.1681C8.89937 31.0226 14.6376 35.5051 21.1255 37.4662C21.9373 37.7122 22.7074 37.7666 23.4148 37.6289C24.4955 37.4173 25.5141 36.8922 26.3905 36.1266C24.1875 33.0131 22.1404 30.6896 20.1392 29.0227C19.3573 30.5056 19.6958 31.2949 18.8561 31.745ZM28.0084 32.9311C27.8389 31.5334 25.898 29.4947 24.9135 28.4556C24.3297 27.8409 23.749 27.4966 23.031 27.3402C22.0826 27.1317 21.3063 27.4904 20.6647 28.2415C22.7223 29.9416 24.8166 32.3039 27.0569 35.4531C27.6376 34.732 28.1084 33.7674 28.0084 32.9311Z" />
                                        <path
                                            d="M35.3516 21.4182C33.41 22.6776 31.0878 22.9918 28.7953 22.8153C27.6563 22.7277 26.8482 22.4203 25.552 22.1881C25.1526 22.1161 24.8098 21.9503 24.4347 21.8958C23.5664 22.9724 23.0596 23.5345 21.6541 23.6967C21.5176 23.7765 21.3646 23.8233 21.2072 23.8333C21.0497 23.8433 20.8921 23.8163 20.7468 23.7544C20.6015 23.6925 20.4725 23.5973 20.37 23.4765C20.2674 23.3557 20.1942 23.2125 20.156 23.0582C19.8541 21.8745 19.6436 20.6251 19.5212 19.3413C16.217 17.327 14.5475 13.3322 15.4581 9.52639C15.6351 9.10387 15.904 5.32626 19.7187 2.97331C20.7186 2.35293 21.8306 1.93866 22.9905 1.7545C24.1503 1.57033 25.3349 1.61994 26.4756 1.90043L32.7368 3.42149C34.6763 3.89298 36.4019 5.00891 37.6353 6.58943C41.8512 11.4687 40.0234 18.3867 35.3516 21.4182ZM26.2569 2.81369C25.2352 2.56229 24.1741 2.51776 23.1351 2.68269C22.0962 2.84763 21.1 3.21874 20.2044 3.77453C16.7946 5.8771 16.5307 9.34549 16.3642 9.7461C15.5307 13.2283 17.104 16.8926 20.1901 18.6559C20.6529 18.9188 20.2361 19.5973 21.0584 22.8247C21.0789 22.9061 21.1764 22.9211 21.2199 22.8623C23.5043 19.894 23.5037 19.7863 23.8757 19.8784L28.5301 21.0094C32.825 22.0535 37.1546 19.3782 38.1906 15.0491L38.4235 14.0764C39.4588 9.74735 36.8105 5.37696 32.5181 4.33413L26.2569 2.81369Z" />
                                        <path
                                            d="M34.9012 10.2228C34.8435 10.4657 34.6012 10.6297 34.3391 10.569C30.5681 9.65325 26.8955 8.36595 23.3744 6.72565C23.2623 6.67344 23.1753 6.57846 23.1326 6.4616C23.0899 6.34474 23.095 6.21557 23.1468 6.10252C23.1986 5.98946 23.2929 5.90178 23.4088 5.85876C23.5248 5.81573 23.6529 5.8209 23.7651 5.87311C27.2309 7.48766 30.8458 8.75464 34.5578 9.65573C34.6779 9.68509 34.7815 9.76132 34.8459 9.86765C34.9103 9.97399 34.9302 10.1017 34.9012 10.2228ZM33.8752 14.9538C33.9332 14.9735 33.9868 15.0045 34.0329 15.045C34.079 15.0856 34.1167 15.1349 34.1439 15.1901C34.1711 15.2454 34.1872 15.3055 34.1913 15.367C34.1955 15.4285 34.1876 15.4903 34.168 15.5487C34.1485 15.6072 34.1177 15.6612 34.0775 15.7076C34.0373 15.7541 33.9883 15.7921 33.9335 15.8195C33.8787 15.8469 33.8191 15.8632 33.758 15.8674C33.697 15.8715 33.6357 15.8636 33.5777 15.8439C28.5612 14.145 25.2607 13.4978 21.305 10.7123C21.2037 10.6409 21.1346 10.5319 21.1131 10.4093C21.0915 10.2866 21.1192 10.1603 21.1901 10.0582C21.2609 9.95611 21.3691 9.88655 21.4908 9.86484C21.6125 9.84312 21.7378 9.87103 21.8391 9.94241C25.67 12.6403 28.7487 13.2199 33.8752 14.9538ZM25.211 16.0917L27.8239 17.1571C28.3866 17.3862 28.055 18.2613 27.4742 18.0272L24.8613 16.9631C24.8046 16.9399 24.7529 16.9057 24.7092 16.8625C24.6655 16.8192 24.6308 16.7677 24.6069 16.7109C24.583 16.6541 24.5704 16.593 24.5699 16.5313C24.5694 16.4696 24.5809 16.4084 24.6039 16.3512C24.6268 16.294 24.6608 16.2419 24.7037 16.1979C24.7466 16.1539 24.7977 16.1188 24.8541 16.0948C24.9105 16.0707 24.971 16.058 25.0323 16.0575C25.0935 16.057 25.1542 16.0686 25.211 16.0917ZM14.9301 3.40999C14.9893 3.42584 15.0447 3.45328 15.0933 3.49073C15.142 3.52819 15.1828 3.57494 15.2135 3.6283C15.2441 3.68167 15.2641 3.7406 15.2722 3.80174C15.2802 3.86288 15.2763 3.92502 15.2605 3.98461L14.3245 7.53062C14.3104 7.59187 14.2842 7.64962 14.2475 7.70047C14.2108 7.75131 14.1643 7.7942 14.1108 7.82659C14.0574 7.85899 13.998 7.88023 13.9362 7.88905C13.8744 7.89787 13.8115 7.8941 13.7512 7.87795C13.6909 7.86181 13.6345 7.83362 13.5852 7.79505C13.5359 7.75649 13.4948 7.70835 13.4643 7.65348C13.4339 7.5986 13.4147 7.53812 13.4078 7.47562C13.401 7.41312 13.4067 7.34987 13.4246 7.28963L14.3606 3.74362C14.3761 3.68395 14.4031 3.62797 14.4402 3.57889C14.4773 3.5298 14.5236 3.4886 14.5766 3.45765C14.6295 3.42669 14.688 3.4066 14.7487 3.39853C14.8093 3.39046 14.871 3.39394 14.9301 3.40999ZM11.1495 1.41321C11.3449 3.05066 11.719 4.66138 12.265 6.21613C12.2866 6.27451 12.2964 6.33664 12.2939 6.39889C12.2914 6.46113 12.2766 6.52226 12.2504 6.57869C12.2242 6.63513 12.1872 6.68575 12.1414 6.7276C12.0956 6.76945 12.042 6.8017 11.9837 6.82247C11.9255 6.84324 11.8637 6.85211 11.802 6.84857C11.7402 6.84503 11.6798 6.82914 11.6243 6.80183C11.5687 6.77453 11.5191 6.73635 11.4783 6.68953C11.4376 6.6427 11.4064 6.58817 11.3868 6.5291C10.8178 4.90954 10.4279 3.23164 10.2241 1.52588C10.2094 1.40222 10.244 1.27772 10.3202 1.17973C10.3965 1.08173 10.5082 1.01825 10.6309 1.00321C10.7536 0.988711 10.8769 1.02368 10.9741 1.10049C11.0712 1.1773 11.1343 1.28971 11.1495 1.41321ZM6.62552 3.53831L9.94214 6.45399C10.0324 6.53662 10.0869 6.65161 10.0939 6.77429C10.101 6.89696 10.0601 7.01753 9.97989 7.11012C9.89973 7.20271 9.78675 7.25993 9.66519 7.2695C9.54364 7.27907 9.4232 7.24023 9.32975 7.16131L6.01313 4.24626C5.91998 4.16442 5.8629 4.04863 5.85446 3.92438C5.84601 3.80012 5.88689 3.67757 5.9681 3.58369C6.04931 3.48981 6.16419 3.43229 6.28749 3.42378C6.41078 3.41527 6.53237 3.45647 6.62552 3.53831Z" />
                                    </g>
                                </svg>
                            </div>
                            <div class="banner-footer-content">
                                <h5>Help Center</h5>
                                <p>Dedicated 24/7 Support</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>
   


@endsection