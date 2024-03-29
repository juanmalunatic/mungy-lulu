@extends('layouts.app')

@section('content')

  @include('partials.page-header', ['hide_title' => true])

  <div id="home" class="home">
    <!-- Hero -->
    <div class="hero content-wide">
      <div class="hero__text">
          {!!$home_title!!}
      </div>
    </div>

    <!-- Marquee -->
    <div class="home__marquee__holder">
      <div class="marquee"></div>
    </div>

    <!-- Box sections -->
    <div class="row home__box__holder">

        <div class="home__box home__box__services col-12 col-md-6">
            <div class="home__box__image">
                <div class="home__box__textcorner">
                    <!-- -->
                </div>
                <div class="home__box__title">
                  <h2>
                    <a href="/services">
                      {{$home_services_title}}
                    </a>
                  </h2>
                </div>
                <div class="home__box__subtitle">
                  {{$home_services_text}}
                </div>
            </div>
            <div class="home__box__link">
              <a href="{{$home_services_link->url}}" target="{{$home_services_link->target}}">
                {{$home_services_link->title}}
              </a>
          </div>
        </div>

        <div class="home__box home__box__about col-12 col-md-6">
            <div class="home__box__image">
                <div class="home__box__textcorner">
                    {{$home_about_text}}
                </div>
                <div class="home__box__title">
                  <h2>
                    <a href="/about">
                      {{$home_about_title}}
                    </a>
                  </h2>
                </div>
                <div class="home__box__subtitle">
                  <span class="text-invisible">Learn about our services</span>
                </div>
            </div>
            <div class="home__box__link">
              <a href="{{$home_about_link->url}}" target="{{$home_about_link->target}}">
                {{$home_about_link->title}}
              </a>
          </div>
        </div>

    </div>

  <!-- Contact -->
  <div class="home__contact row">
    <div class=" col-12 col-md-7 col-lg-6">
      <div class="home__contact__form">
        <div class="home__contact__form__title">
          <h3 class="sr-only">
            Contact
          </h3>
        </div>
        <div class="home__contact__form__gf">
          @php(dynamic_sidebar('sidebar-contact'))
        </div>
      </div>
    </div>
    <div class="col-12 col-md-5 col-lg-6">
      <div class="home__contact__image"></div>
    </div>
  </div>

@endsection

