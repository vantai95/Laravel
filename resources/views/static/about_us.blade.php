@extends('layouts.app', ['layout_class' => 'about', 'title' => trans('app.about_us.title')])

@section('content')
    <section class="sub-header shop-layout-1">
        <img class="rellax bg-overlay" src="{{ asset('images/app/sub-header/about_us.jpg') }}" alt="">
        <div class="overlay-call-to-action"></div>
        <h3 class="heading-style-3">{{ trans('app.about_us.title') }}</h3>
    </section>

    <section class="boxed-sm">
      <div class="container">
        <div class="row blog-v reverse">
          <div class="col-md-12">
            <div class="post">
              <div class="img-wrapper js-set-bg-blog-thumb">
                <img src="{{asset($image)}}" alt="blog-thumb">
              </div>
              <div class="desc">
              <h3 class="title-about">{{$title}}</h3>
                <p class="sapo">{{$conten}}</p>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="post">
              <div class="img-wrapper js-set-bg-blog-thumb">
              <img src="{{asset($image1)}}" alt="blog-thumb">
              </div>
              <div class="desc">
              <h3 class="title-about">{{$title1}}</h3>
              <p class="sapo">{{$conten1}}</p>
                {{-- <p class="sapo">Vestibulum eu nisl vitae tortor feugiat aliquet finibus in libero. Vivamus et enim accumsan, tempus dui non, pretium libero. Vivamus vitae justo non metus malesuada finibus. Pellentesque vehicula porttitor eleifend. Proin eget velit
                  in arcu consectetur tempor. Sed pulvinar, purus sed efficitur elementum, risus risus tincidunt massa, a iaculis risus turpis id sapien diam pellentesque ullamcorper. </p> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="counter-wrapper">
        <img class="rellax bg-overlay" src="{{ asset('images/app/call-to-action/4.jpg') }}" alt="" />
        <div class="overlay-counter"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="couter-wrapper">
                <p class="js-countup" data-count="154">0</p>
                <span>{{ trans('app.about_us.happy_client') }}</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="couter-wrapper">
                <p class="js-countup" data-count="234">0</p>
                <span>{{ trans('app.about_us.products_in_store') }}</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="couter-wrapper">
                <p class="js-countup" data-count="32">0</p>
                <span>{{ trans('app.about_us.year_of_experience') }}</span>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="couter-wrapper">
                <p class="js-countup" data-count="126">0</p>
                <span>{{ trans('app.about_us.runing_projects') }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="boxed-sm">
      <div class="container">
        <div class="heading-wrapper text-center">
          <h3 class="heading">{{ trans('app.about_us.out_team') }}</h3>
        </div>
        <div class="team-wrapper">
          <div class="row">
            <div class="about-carousel">
              @foreach ($arr as $item)
              <div class="item">
                <figure class="item-team">
                  <div class="img-wrapper">
                  <img class="img-responsive" src="{{asset($item['image'])}}" alt="product thumbnail">
                  </div>
                  <figcaption class="desc text-center">
                    <h4 class="name">{{$item['name']}}</h4>
                    <span class="position">{{$item['position']}}</span>
                  </figcaption>
                </figure>
              </div> 
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection


