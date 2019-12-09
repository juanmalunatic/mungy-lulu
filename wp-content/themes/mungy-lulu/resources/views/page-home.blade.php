@extends('layouts.app')

@section('content')

  @include('partials.page-header', ['hide_title' => true])

  <div id="home" class="home">
    <!-- Hero -->
    <div class="hero">
      <div class="hero__text">
          {!!$home_title!!}
      </div>
    </div>

    <!-- Marquee -->
    <div class="marquee"></div>

    <!-- Box sections -->
    <div class="home__box home__box__services">
      <div class="home__box__image">
          <div class="home__box__title">
            {{$home_services_title}}
          </div>
          <div class="home__box__subtitle">
            {{$home_services_subtitle}}
          </div>
          <div class="home__box__textcorner">
            <!-- -->
          </div>
      </div>
      <div class="home__box__link">
        <a href="#">
          Explore
        </a>
    </div>
  </div>

  <div class="home__box home__box__about">
      <div class="home__box__image">
          <div class="home__box__title">
            {{$home_about_title}}
          </div>
          <div class="home__box__subtitle">
            <!-- -->
          </div>
          <div class="home__box__textcorner">
            {{$home_about_text}}
          </div>
      </div>
      <div class="home__box__link">
        <a href="#">
          Learn more
        </a>
    </div>
  </div>

  <!-- Contact -->
  <div class="home__contact">
    <div class="home__contact__form">
      TO-DO add Gravity Form here.
    </div>
    <div class="home__contact__image">
      Doggies :)
    </div>
  </div>

  <pre style="background:#a6f; white-space: pre-wrap;">

    {{$home_services_title}}

    {{$home_services_text}}

    {{$home_about_title}}

    {{$home_about_text}}

    <?php var_dump($home_services_link); ?>

    <?php var_dump($home_about_link); ?>

  </pre>

@endsection

