@extends('layouts.app')

@section('content')
<div class="contact" id="contact">

  <div class="contact__area__title">
    <h1 class="title">
      {!! get_the_title() !!}
    </h1>
  </div>

  <!-- Banner images -->
  <div class="contact__area__banner">
    <div class="banner-img banner-img__1"></div>
    <div class="banner-img banner-img__2"></div>
    <div class="banner-img banner-img__3"></div>
  </div>

  <div class="contact__area__form">

    <!-- Chat -->
    <div class="ca-form__first">
      @php(dynamic_sidebar('sidebar-contact'))
    </div>

    <!-- Info -->
    <div class="ca-form__last">
      <div class="ca-form__last__text">
        <h2>For bookings or questions</h2>
        <span>
          Please fill out form
        </span>
      </div>
      <div class="ca-form__last__address">
        <address>
          <span class="phone">413.464.9200</span>
          <span class="mail">luludogdaycare@gmail.com</span>
          <span class="addr">1525 West Housatonit St Pittsfield MA 01201</span>
        </address>
      </div>
      <div class="ca-form__last__social">
        <a href="#" class="social facebook">F</a>
        <a href="#" class="social twitter">T</a>
      </div>
    </div>
  </div>

</div>
@endsection

