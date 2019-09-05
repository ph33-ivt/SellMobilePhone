@extends('layouts.template')

@section('content')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="product-breadcroumb">
                <a href="">Home</a>
                <a href="">Category Name</a>
                <a href="">Sony Smart TV - 2015</a>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h2 class="product-name">Sony Smart TV - 2015</h2>
                    <div class="product-images">
                        <div class="product-main-img">
                            <img src="img/product-2.jpg" alt="">
                        </div>

                        <div class="product-gallery">
                            <img src="img/product-thumb-1.jpg" alt="">
                            <img src="img/product-thumb-2.jpg" alt="">
                            <img src="img/product-thumb-3.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-4" style="position: relative;">
                    <div class="rating-wrap-post">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-inner-price" style="margin-top: 10px;">
                        <ins>$700.00</ins>
                        <del>$100.00</del>
                    </div>
                    <button class="add_to_cart_button" type="submit"
                            style="position: absolute; top: 10px; right: 0;">
                        <i class="fa fa-plus"></i> Thêm vào giỏ hàng
                    </button>
                    <div class="product-inner">
                        <h3>Thông số kỹ thuật</h3>
                        <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex.
                            Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis.
                            In malesuada pulvinar neque a consectetur. Nunc aliquam gravida
                            purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Bình Luận</h3>
                    <div class="submit-review">
                        <h4><b>Full Name</b>
                            (Đánh giá:
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>)
                        </h4>
                        <div>
                            <p>jbdsvjnsd ffnsdm,f sbb vjksdb mbssd csdcnkvsd
                                asknksdsmd,nkdsncascjvbdvsdnv
                                ạdvbnkl</p>
                        </div>
                        <h4><b>Full Name</b>
                            (Đánh giá:
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>)
                        </h4>
                        <div>
                            <p>jbdsvjnsd ffnsdm,f sbb vjksdb mbssd csdcnkvsd
                                asknksdsmd,nkdsncascjvbdvsdnv
                                ạdvbnkl</p>
                        </div>
                        <h4><b>Full Name</b>
                            (Đánh giá:
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>)
                        </h4>
                        <div>
                            <p>jbdsvjnsd ffnsdm,f sbb vjksdb mbssd csdcnkvsd
                                asknksdsmd,nkdsncascjvbdvsdnv
                                ạdvbnkl</p>
                        </div>

                    </div>
                    <hr>
                    <form class="submit-review">
                        <div class="rating-post">
                            <span>Đánh giá của bạn:</span>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <textarea name="review" id="" cols="30" rows="10" placeholder="Bình luận về sản phẩm"></textarea>
                        <input type="submit" value="Bình luận">
                    </form>
                </div>
            </div>

            <div role="tabpanel">
                <ul class="product-tab" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#same-brand" aria-controls="same-brand" role="tab" data-toggle="tab">Cùng hãng</a>
                    </li>
                    <li role="presentation">
                        <a href="#same-price" aria-controls="same-price" role="tab" data-toggle="tab">Mức giá tương
                            tự</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="same-brand">
                        <div class="latest-product">
                            <div class="product-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins>
                                        <del>$100.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins>
                                        <del>$999.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
                                        <del>$425.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins>
                                        <del>$225.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins>
                                        <del>$225.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add
                                                to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins>
                                        <del>$225.00</del>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div role="tabpanel" class="tab-pane fade" id="same-price">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-sidebar">
                                    <h3 class="sidebar-title">iPhone</h3>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-sidebar">
                                    <h3 class="sidebar-title">iPhone</h3>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-sidebar">
                                    <h3 class="sidebar-title">iPhone</h3>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="thubmnail-recent" style="position: relative;">
                                        <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                                        <h2><a href="">Sony Smart TV - 2015</a></h2>
                                        <div class="product-sidebar-price">
                                            <ins>$700.00</ins> <del>$100.00</del>
                                        </div>
                                        <button class="add_to_cart_button" type="submit"
                                                style="position: absolute; top: 5px; right: 0;">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
