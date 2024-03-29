@extends('layouts.app')

@section('content')
<!-- Actual content -->
<div class="contact content-wide" id="contact">

  <div class="contact__area__title">
    @include('partials.page-header')
  </div>

  <!-- Banner images -->
  <div class="contact__area__banner">
    <div class="banner-img banner-img__1"></div>
    <div class="banner-img banner-img__2"></div>
    <div class="banner-img banner-img__3"></div>
  </div>

  <div class="contact__area__form container">

    <!-- Chat -->
    <div class="ca-form ca-form__first">
      <div class="contact-instructions hidden-md-up">
        <h2>For bookings or questions</h2>
        <span>
          Please fill out the form
        </span>
      </div>
      <div>
        @php(dynamic_sidebar('sidebar-contact'))
      </div>
    </div>

    <!-- Info -->
    <div class="ca-form ca-form__last">
      <div class="ca-form__last__text contact-instructions">
        <h2>For bookings or questions</h2>
        <span>
          Please fill out the form
        </span>
      </div>
      <div class="ca-form__last__address">
        <address>
          <span class="add-item phone">413.464.9200</span>
          <span class="add-item mail">luludogdaycare@gmail.com</span>
          <span class="add-item addr">1525 West Housatonic St Pittsfield MA 01201</span>
        </address>
      </div>
      <div class="ca-form__last__social">
        <a class="social facebook"  href="https://www.facebook.com/loveusandleaveus/"></a>
        <a class="social instagram" href="https://www.instagram.com/loveusandleaveus/"></a>
      </div>
    </div>
  </div>
</div>
<!-- Allow bg customization -->
<style>
.contact__area__banner .banner-img__2 {
  background-image: url(<?php echo $image_middle->url; ?>);
}
</style>
@endsection

