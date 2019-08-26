@extends('layouts.app', ['layout_class' => 'contact', 'title' => trans('app.contact_us.title')])

@section('content')
    <section class="sub-header shop-layout-1">
        <img class="rellax bg-overlay" src="{{ asset('images/app/sub-header/01.jpg') }}" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">{{ trans('app.contact_us.title') }}</h3>
    </section>

    <section class="boxed-sm">
        <div class="container">
            <div class="row">
                <div class="row icon-box-contact-wrapper">
                    <div class="row main">
                    <div class="col-md-4">
                        <div class="icon-box">
                        <i class="fa fa-map-marker"></i>
                        <p> B3 Building, Villa Riviera Area, 60 Giang Van Minh Street, An Phu Ward, District 2, HCM</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a class="icon-box" href="tel:0123456789 " style="padding : 52px">
                        <i class="fa fa-mobile"></i>(+84) 931 34 34 74</a>
                    </div>
                    <div class="col-md-4">
                        <a class="icon-box" href="tel:0123456789 " style="padding : 52px">
                        <i class="fa fa-envelope-o"></i> kinhdoanh@pmquynhlam.vn </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="map-canvas" id="js-map-canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.059130720985!2d106.74614161411668!3d10.806783261589354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175266aeaa569e7%3A0x7bc2a02c9077ac27!2sVilla+Riviera!5e0!3m2!1svi!2s!4v1561630323195!5m2!1svi!2s" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row form-contact">
                <div class="row main">
                    {!! Form::open(array('route' => 'submit_contact_us', 'class' => '')) !!}
                        <div class="col-md-12">
                            <div class="form-group organic-form xs-radius">
                                {!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder'=>trans('app.contact_us.placeholder_message')]) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group organic-form xs-radius">
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=>trans('app.contact_us.placeholder_name')]) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group organic-form xs-radius">
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder'=>trans('app.contact_us.placeholder_email')]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group organic-form xs-radius">
                                {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder'=>trans('app.contact_us.placeholder_phone')]) !!}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group organic-form xs-radius">
                                <button class="btn btn-brand pill">{{ trans('app.contact_us.send_mail') }}</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection