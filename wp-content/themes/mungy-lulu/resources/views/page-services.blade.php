@extends('layouts.app')

@section('content')
<div class="services content-wide" id="services">

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
          <a data-service="overnight" href="#" class="service-toggle">
            Overnight
          </a>
        </li>
      </ul>
    </div>
    <div class="block block__picture">
      <div class="picture picture__daycare active"></div>
      <div class="picture picture__dog-spa"></div>
      <div class="picture picture__overnight"></div>
    </div>
    <div class="block block__description">

      <div class="block__description__content">

        <input type="radio" name="radiotabs" id="d-daycare" checked>
        <input type="radio" name="radiotabs" id="d-dog-spa">
        <input type="radio" name="radiotabs" id="d-overnight">

        <div class="services_holder">

          <div class="service active service__daycare">
            <h2> {{$services_svc1_title}} </h2>
            <p>
              {!!$service_svc1_content!!}
            </p>
            @include(
              'partials.page-services-block-extra',
              ['link_obj' => $service_svc1_price]
            )
          </div>

          <div class="service service__dog-spa">
            <h2> {{$services_svc2_title}} </h2>
            <p>
              {!!$service_svc2_content!!}
            </p>
            @include(
              'partials.page-services-block-extra',
              ['link_obj' => $service_svc2_price]
            )
          </div>

          <div class="service service__overnight">
            <h2> {{$services_svc3_title}} </h2>
            <p>
              {!!$service_svc3_content!!}
            </p>
            @include(
              'partials.page-services-block-extra',
              ['link_obj' => $service_svc3_price]
            )
          </div>

        </div>

      </div>

    </div>
  </div>

  <div class="services__reqs">

    <div class="services__reqs__sepa"></div>

    <div class="services__reqs__holder">

      <div class="services__reqs__head">
        <h2> Requirements </h2>
        <h3> Questions? </h3>
      </div>

      <div class="services__reqs__body">
        <h4> Check out our list of requirements </h4>
        {!!$services_requirements!!}
      </div>

    </div>

    <div class="services__reqs__sepa"></div>

  </div>

  <div class="services__testimonials">
    @include('partials.testimonials')
  </div>

  <!-- Background change based on custom fields -->
  <style>
    .services__main .block__picture .picture__daycare {
      background-image: url(<?php echo $services_svc1_image->url; ?>);
    }
    .services__main .block__picture .picture__dog-spa {
      background-image: url(<?php echo $services_svc2_image->url; ?>);
    }
    .services__main .block__picture .picture__overnight {
      background-image: url(<?php echo $services_svc3_image->url; ?>);
    }
  </style>
</div>
@endsection
