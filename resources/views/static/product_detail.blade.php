@extends('layouts.app', ['layout_class' => 'shop-layout-1 woocommerce', 'title' => trans('app.meats.title')])

@section('content')
<section class="sub-header shop-layout-1">
    <img class="rellax bg-overlay" src="{{ asset('images/app/sub-header/01.jpg') }}" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3">{{$category['name']}}</h3>
</section>

<section class="box-sm">
    <div class="container">
        <div class="row main">
            <div class="row product-grid-equal-height-wrapper product-equal-height-4-columns flex multi-row">
                @foreach ($category['products'] as $product)
                <figure class="item">
                    <div class="product product-style-1">
                        <div class="img-wrapper">
                            <a href="#" type="button" data-toggle="modal" data-target="#{{$product['id']}}">
                                <img class="img-responsive" src="{{asset($product['image'])}}" alt="product thumbnail">
                            </a>
                        </div>
                        <figcaption class="desc text-center">
                            <h3>
                                <a class="product-name" href="#" type="button" data-toggle="modal"
                                    data-target="#{{$product['id']}}">{{$product["name"]}}</a>
                            </h3>
                            <span class="price">$3.20</span>
                        </figcaption>
                    </div>
                </figure>
                @endforeach
            </div>
        </div>
    </div>
</section>

@foreach ($category['products'] as $product)
<div class="modal fade" id="{{$product['id']}}" tabindex="-1" role="dialog">
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
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                            </div>
                            <div class="thumbnail-carousel-product-quickview">
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                                <div class="item">
                                    <img class="img-responsive" src="{{asset($product['image'])}}"
                                        alt="product thumbnail" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="summary">
                            <div class="desc">
                                <div class="header-desc">
                                    <h2 class="product-title">{!!$product['name']!!}</h2>
                                    <p class="price">$2.00</p>
                                </div>
                                <div class="body-desc">
                                    <div class="woocommerce-product-details-short-description">
                                        <p>{!!$product['description']!!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="product-meta">
                                <p class="posted-in">@lang('app.products.categories'):
                                    <a href="{{ route('product_detail',['id' => $category['id']]) }}" rel="tag">{{$category['name']}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
