<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/resources/assets/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/assets/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/resources/assets/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/resources/assets/template/css/price-range.css" rel="stylesheet">
    <link href="/resources/assets/template/css/animate.css" rel="stylesheet">
    <link href="/resources/assets/template/css/main.css" rel="stylesheet">
    <link href="/resources/assets/template/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/resources/assets/js/html5shiv.js"></script>
    <script src="/resources/assets/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/resources/assets/template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="/resources/assets/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
          href="/resources/assets/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
          href="/resources/assets/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed"
          href="/resources/assets/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<div class="page-wrapper">


    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +38 067 604 93 77</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> vladimirpitbul@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="https://plus.google.com/u/0/115655905235129424624?pageId=none"
                                       target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.facebook.com/profile.php?id=100022253985882" target="_blank"><i
                                                class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="/"><img src="/resources/assets/template/images/home/logo.png" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/cart">
                                        <i class="fa fa-shopping-cart"></i> Корзина
                                        (<span id="cart-count">0</span>)
                                    </a>
                                </li>
                                <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/">Главная</a></li>
                                <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="/catalog/">Каталог товаров</a></li>
                                        <li><a href="/cart/">Корзина</a></li>
                                    </ul>
                                </li>
                                <li><a href="/about/">О магазине</a></li>
                                <li><a href="/contacts/">Контакты</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->

    </header><!--/header-->
    <section>

        <!--{{ print_r(Session::all()) }}-->   <!--Session!!!-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Каталог</h2>
                        <div class="panel-group category-products">

                            @foreach($categories as $cat)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a href="/category/{{ $cat->id }}">{{$cat->name}}</a>
                                        </h4>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    <!--features_items-->

                    <div class="features_items">
                        <h2 class="title text-center">Последние товары</h2>

                        @foreach ($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/resources/assets/upload/images/products/45.jpg" alt=""/>
                                        <h2>${{ $product->price }}</h2>
                                        <p>
                                            <a href="/product/{{$product->id}}">{{$product->name}}</a>
                                        </p>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="{{$product->id}}"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>

                                    @if ($product->is_new)
                                        <img src="/resources/assets/template/images/home/new.png" class="new" alt=""/>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div><!--end features_items-->

                    <div class="recommended_items"><!--recommended_items-->
                        <h2 class="title text-center">Рекомендуемые товары</h2>

                        <div class="cycle-slideshow"
                             data-cycle-fx=carousel
                             data-cycle-timeout=5000
                             data-cycle-carousel-visible=3
                             data-cycle-carousel-fluid=true
                             data-cycle-slides="div.item"
                             data-cycle-prev="#prev"
                             data-cycle-next="#next"
                        >


                            @foreach($sliderProducts as $recomm)
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="/resources/assets/upload/images/products/41.jpg" alt=""/>
                                            <h2>${{$recomm->price}}</h2>
                                            <a href="/product/{{$recomm->id}}">{{$recomm->name}}</a>
                                            <br/><br/>
                                            <a href="#" class="btn btn-default add-to-cart" data-id="{{$recomm->id}}"><i
                                                        class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <img src="/resources/assets/template/images/home/new.png" class="new" alt=""/>
                                    </div>
                                </div>
                            </div>
                            @endforeach



                        <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel"
                           data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" id="next" href="#recommended-item-carousel"
                           data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>

                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>

    </section>

    <div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2018</p>
                <p class="pull-right">Владимир Пичкуров, тренировочный проект</p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->


<script src="/resources/assets/template/js/jquery.js"></script>
<script src="/resources/assets/template/js/jquery.cycle2.min.js"></script>
<script src="/resources/assets/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/resources/assets/template/js/bootstrap.min.js"></script>
<script src="/resources/assets/template/js/jquery.scrollUp.min.js"></script>
<script src="/resources/assets/template/js/price-range.js"></script>
<script src="/resources/assets/template/js/jquery.prettyPhoto.js"></script>
<script src="/resources/assets/template/js/main.js"></script>
<script>
    $(document).ready(function () {
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/" + id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>