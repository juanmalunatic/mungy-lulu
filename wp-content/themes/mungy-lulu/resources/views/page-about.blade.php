@extends('layouts.app')

@section('content')
<div class="about" id="about">

  <!-- Intro -->
  <div class="row">
    <div class="about__hero  col-12 col-lg-6">
    </div>
    <div class="about__intro col-12 col-lg-6">
      <h1 class="about__intro__title">
        {!! get_the_title() !!}
      </h1>
      <div class="about__intro__highlight">
          {{$about_intro_highlight}}
      </div>
      <div class="about__intro__text">
        {{$about_intro_text}}
      </div>
    </div>
  </div>

  <!-- Marquee -->
  <div class="marquee"></div>

  <!-- Stats -->
  <div class="about__stats row">

    <div class="about__stats__group">
      <div class="number">
        {{$about_number_news}}
      </div>
      <div class="text">
        in the news
      </div>
    </div>

    <div class="about__stats__group">
      <div class="number">
        {{$about_number_clients}}
      </div>
      <div class="text">
        :) clients
      </div>
    </div>

    <div class="about__stats__group">
      <div class="number">
        {{$about_number_hikes}}
      </div>
      <div class="text">
        hikes
      </div>
    </div>

      <div class="about__stats__group">
        <div class="number">
          {{$about_number_kisses}}
        </div>
        <div class="text">
          dog kisses
        </div>
      </div>

  </div>

  <!-- Testimonials -->
  @include('partials.testimonials')
</div>



@endsection

