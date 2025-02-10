@extends('layouts.app')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>About Cake shop</span>
                            <h2>Cakes and bakes from the house of Queens!</h2>
                        </div>
                        <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                            Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Class</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="80"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Recipes</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->
    <!-- Categories Section Begin -->
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-029-cupcake-3"></span>
                            <h5>Cupcake</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-034-chocolate-roll"></span>
                            <h5>Butter</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-005-pancake"></span>
                            <h5>Red Velvet</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-030-cupcake-2"></span>
                            <h5>Biscuit</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Donut</h5>
                        </div>
                    </div>
                    <div class="categories__item">
                        <div class="categories__item__icon">
                            <span class="flaticon-006-macarons"></span>
                            <h5>Cupcake</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                @foreach ($cakes as $cake)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg">
                                <img style="" src="{{ $cake['images'] ? Storage::url($cake['images']) : '' }}"
                                    alt="">
                                {{-- <img src="{{ asset('img/shop/product-1.jpg') }}" alt=""> --}}
                                <div class="product__label">
                                    <span>Cupcake</span>
                                </div>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">Dozen Cupcakes</a></h6>
                                <div class="product__item__price">$32.00</div>
                                <div class="cart_add">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
    </section>
    <!-- Product Section End -->
    <!-- Testimonial Section Begin -->
    <section class="testimonial spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonial</span>
                        <h2>Our client say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-1.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Ophelia Nunez</h5>
                                    <span>London</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__pic">
                                    <img src="img/testimonial/ta-2.jpg" alt="">
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Kerry D.Silva</h5>
                                    <span>New york</span>
                                </div>
                            </div>
                            <div class="rating">
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star"></span>
                                <span class="icon_star-half_alt"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->
    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <div class="instagram__text">
                        <div class="section-title">
                            <span>Follow us on instagram</span>
                            <h2>Sweet moments are saved as memories.</h2>
                        </div>
                        <h5><i class="fa fa-instagram"></i> @sweetcake</h5>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic middle__pic">
                                <img src="img/instagram/instagram-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                            <div class="instagram__pic">
                                <img src="img/instagram/instagram-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->
@endsection
