@extends('layouts.app')

@section('content')
<div class="services" id="services">

  <div class="services__header">
    @include('partials.page-header')
  </div>

  <div class="services__main">
    <div class="block block__selector">
      <ul>
        <li>
          <a data-service="daycare" href="#" class="service-toggle">
            Daycare
          </a>
        </li>
        <li>
          <a data-service="dog-spa" href="#" class="service-toggle">
            Dog spa
          </a>
        </li>
        <li>
          <a data-service="hikes" href="#" class="service-toggle">
            Hikes
          </a>
        </li>
        <li>
          <a data-service="overnight" href="#" class="service-toggle">
            Overnight
          </a>
        </li>
      </ul>
    </div>
    <div class="block block__picture">
      <div class="picture picture__daycare active"></div>
      <div class="picture picture__dog-spa"></div>
      <div class="picture picture__hikes"></div>
      <div class="picture picture__overnight"></div>
    </div>
    <div class="block block__description">

      <div class="service active service__daycare">
        <h2> {{$services_svc1_title}} </h2>
        <p>
          {!!$service_svc1_content!!}
        </p>
      </div>

      <div class="service service__dog-spa">
        <h2> {{$services_svc2_title}} </h2>
        <p>
          {!!$service_svc2_content!!}
        </p>
      </div>

      <div class="service service__hikes">
        <h2> {{$services_svc3_title}} </h2>
        <p>
          {!!$service_svc3_content!!}
        </p>
      </div>

      <div class="service service__overnight">
        <h2> {{$services_svc4_title}} </h2>
        <p>
          {!!$service_svc4_content!!}
        </p>
      </div>

      <div class="book-now">
        <a href="#">
          Book now
        </a>
      </div>

    </div>
  </div>

  <div class="services__testimonials">
    @include('partials.testimonials')
  </div>

</div>
@endsection
