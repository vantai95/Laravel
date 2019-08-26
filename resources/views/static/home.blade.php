@extends('layouts.app', ['layout_class' => 'home-1', 'title' => trans('app.home.title')])

@section('content')
<div class="banner banner-image-fit-screen">
    <div class="rev_slider slider-home-1" id="slider_1">
        <ul>
            <li>
                <img class="rev-slidebg" src="{{asset('images/app/slider/home.jpg')}}" alt="" data-bgposition="center center"
                    data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
            </li>
        </ul>
    </div>
</div>
<section class="boxed-sm">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 product-category-grid-style-1">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-sm-4">
                        <a href="#">
                            <figure class="product-category-item">
                                <div class="thumbnail">
                                    <img src="{{$product['image']}}" alt="">
                                </div>
                                <figcaption>
                                    <h3>{{$product['title']}}</h3>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="boxed-sm">
    <div class="container">
        <div class="heading-wrapper text-center">
        <h3 class="heading">{{ trans('app.home.our_products') }}</h3>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="row js-product-masonry-layout-1 product-masonry-layout-1"
                    style="position: relative; height: 600px;">
                    <div class="grid-sizer"></div>
                    @foreach ($data as $item)
                        @if($item["main"])
                        <figure class="item item-size-2" style="{{ $item["style"] }}">
                        @else
                        <figure class="item" style="{{ $item["style"] }}">
                        @endif
                            <div class="product product-style-2">
                                <div class="img-wrapper">
                                    <a  href="#" type="button" data-toggle="modal"
                                data-target="#quick-view-product-{{$item["key"]}}">
                                <img class="img-responsive" src="{{ asset($item["image"]) }}"
                                            alt="product thumbnail">
                                    </a>
                                    <figcaption class="desc">
                                        <h3>
                                            <a class="product-name" href="#" type="button" data-toggle="modal"
                                        data-target="#quick-view-product-{{$item["key"]}}">{{$item["title"]}}</a>
                                        </h3>
                                    </figcaption>
                                </div>
                            </div>
                        </figure>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<div class="call-to-action-style-1">
    <div class="overlay-call-to-action"></div>
    <div class="container">
        <div></div>
        <div class="row no-margin">
        <p class="home h3">{{ trans('app.home.why_choose_organic_and_clean_food') }}</p>
            @foreach ($data1 as $item)
                <div class="col-md-4 mT-10 col-sm-12 text-left text-span">
                    <h4 style="margin-left:25px;text-shadow:none">•&nbsp;&nbsp;{{$item["title"]}} </h4>
                    <p></p>
                    {!!$item["content"]!!}
                </div>
            @endforeach
           
        </div>
    </div>
</div>

<div class="call-to-action-style-2">
    <div class="wrapper-carousel-background">
        <img src="images/app/call-to-action/1-1.jpg" alt="">
        <img src="images/app/call-to-action/1-1.jpg" alt="">
        <img src="images/app/call-to-action/1-1.jpg" alt="">
        <img src="images/app/call-to-action/1-1.jpg" alt="">
    </div>
    <div class="overlay-call-to-action"></div>
    <a class="btn btn-brand pill icon-left" href="#">
        <i class="fa fa-facebook-square"></i>{{ trans('app.home.like_us') }}
    </a>
</div>
<div class="modal fade" id="quick-view-product-1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel-product-quick-view">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">Sald</h2>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>Sald </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">{{ trans('app.home.categories') }}:
                                    <a href="#" rel="tag">Food</a>
                                </p>
                            </div>
                            {{-- <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="http://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="http://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="http://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quick-view-product-2" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel-product-quick-view">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">Bean</h2>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>Bean</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">{{ trans('app.home.categories') }}:
                                    <a href="#" rel="tag">Food</a>
                                </p>
                            </div>
                            {{-- <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="http://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="http://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="http://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quick-view-product-3" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel-product-quick-view">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">Spinach</h2>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>Spinach </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">{{ trans('app.home.categories') }}:
                                    <a href="#" rel="tag">Food</a>
                                </p>
                            </div>
                            {{-- <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="http://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="http://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="http://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quick-view-product-4" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel-product-quick-view">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{ asset('images/app/product/01.jpg') }}" alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">Lemon</h2>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>Lemon</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">{{ trans('app.home.categories') }}:
                                    <a href="#" rel="tag">Food</a>
                                </p>
                            </div>
                            {{-- <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="http://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="http://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="http://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="quick-view-product-5" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-quickview woocommerce" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="woocommerce-product-gallery">
                            <div class="main-carousel-product-quick-view">
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset('images/app/product/01.jpg')}}" alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">Onion</h2>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>Onion </p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">{{ trans('app.home.categories') }}:
                                    <a href="#" rel="tag">Food</a>
                                </p>
                            </div>
                            {{-- <div class="widget-social align-left">
                                <ul>
                                    <li>
                                        <a class="facebook" data-toggle="tooltip" title="Facebook"
                                            href="http://www.facebook.com/authemes">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="pinterest" data-toggle="tooltip" title="Pinterest"
                                            href="http://www.pinterest.com/authemes">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="twitter" data-toggle="tooltip" title="Twitter"
                                            href="http://www.twitter.com/authemes">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="google-plus" data-toggle="tooltip" title="Google Plus"
                                            href="https://plus.google.com/authemes">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="instagram" data-toggle="tooltip" title="Instagram"
                                            href="https://instagram.com/authemes">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
