@extends('layouts.template')

@section('content')
    <script>
        $(document).ready(function () {
            @foreach($listAllProduct as $product)
            $("button#btnAddToCart{{$product->id}}").click(function (e) {
                e.preventDefault();
                //alert('Its working!');
                var product_id = "{{$product->id}}";
                var url = "{{route('add-product-to-cart', $product->id)}}";
                //alert(product_id);
                //console.log(url);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "GET",
                    cache: false,
                    url: url,
                    data: {product_id: product_id},
                    dataType: "json",
                    success: function (data) {
                        //console.log(data);
                        //console.log((data.num_price_product).length);
                        //console.log(data.num_price_product[0]);
                        //console.log(data.num_price_product[1]);
                        if (data.message == 'The product already exists!') {
                            //alert('Sản phẩm đã có trong giỏ hàng!');
                            $('div.alert-info').css('display', 'block');
                            $('div.alert-info strong').html('Đã có trong giỏ hàng!');
                        } else {
                            //alert('Đã thêm vào giỏ hàng!');
                            $('div.alert-info').css('display', 'block');
                            $('div.alert-info strong').html('Đã thêm vào giỏ hàng!');

                            var num = data.num_price_product[0];
                            var pay = data.num_price_product[1];

                            $('div.cart-info-count a').html(num + ' sản phẩm');
                            $('div.cart-info-value a').html(
                                pay.toFixed(2).replace('.', ',').replace(/\d(?=(\d{3})+,)/g, '$&.') + '<sup>₫</sup>'
                            );
                        }

                        $('div.alert-info span').click(function (e) {
                            e.preventDefault();
                            $('div.alert-info').fadeOut('slow');
                        });

                        setTimeout(function () {
                            $('div.alert-info').fadeOut('slow');
                        }, 1500);
                    },
                    error: function (error) {
                        console.log('Error:', data);
                    }
                });
            });
            @endforeach

        });
    </script>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="product-breadcroumb">
                <a href="">Home</a>
                <a href="">Category Name</a>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h2 class="product-name">{{$product->name}}</h2>
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
                        <span style="color: red;">{{'(-'. ($prd->discount_percent * 100) . '%)'}}</span>
                        <ins>{{number_format((float)($prd->current_price - ($prd->current_price * $prd->discount_percent)),2,",", ".") .' VNĐ'}}</ins>
                        <del>{{number_format((float)$prd->current_price,2,",", ".") . ' VNĐ'}}</del>
                    </div>
                    <button type="submit" class="btn-add-to-cart" id="btnAddToCart{{$prd->id}}"
                            style="margin-bottom: 25px;">
                        <i class="fa fa-shopping-cart"> Thêm vào giỏ hàng</i>
                    </button>
                    <div class="product-inner">
                        <h3>Thông số kỹ thuật</h3>
                        <p>{{$prd->description}}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <h3>Bình Luận</h3>
                    <div class="submit-review">
                        <h4><b>Full Name</b>
                            (Đánh giá:
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
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
                            <i  style="color: #ffc808" class="fa fa-star"></i>
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
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
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
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
                            <i  style="color: #ffc808" class="fa fa-star"></i>
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
                        <a href="#same-brand" aria-controls="same-brand" role="tab" data-toggle="tab">Cùng loại</a>
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
                                @foreach($listProduct as $p)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="img/product-1.jpg" alt="">
                                            <div class="product-hover">
                                                {{--<a href="" class="add-to-cart-link">
                                                    <i class="fa fa-shopping-cart"></i> Add to cart</a>--}}
                                                <button class="btn-add-to-cart" id="btnAddToCart{{$p->id}}">
                                                    <i class="fa fa-shopping-cart"> Thêm vào giỏ hàng</i>
                                                </button>
                                                <a href="{{route('product-detail', $p->id)}}" class="view-details-link">
                                                    <i class="fa fa-link"> Xem chi tiết</i>
                                                </a>
                                            </div>
                                        </div>

                                        <h2><a href="">{{$p->name}}</a></h2>

                                        <div class="product-carousel-price">
                                            <span style="color: red;">{{'(-'. ($p->discount_percent * 100) . '%)'}}</span>
                                            <ins>{{number_format((float)($p->current_price - ($p->current_price * $p->discount_percent)),2,",", ".") .' VNĐ'}}</ins>
                                            <br>
                                            <del>{{number_format((float)$p->current_price,2,",", ".") . ' VNĐ'}}</del>
                                        </div>
                                    </div>
                                @endforeach
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
                                    <h3 class="sidebar-title">Vsmart</h3>
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
                                    <h3 class="sidebar-title">Xiaomi</h3>
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
