@extends('layouts.app')

@section('content')
<!-- Must be placed before the gallery for it to load properly -->
<script src="/wp-includes/js/jquery/jquery.js"></script>

<div class="gallery content-wide" id="gallery">

  <div class="gallery__area__title">
    @include('partials.page-header')
    <h2 class="title-secondary"> Meet our friends </h2>
  </div>

  <div class="gallery__area__content">
    @while (have_posts()) @php the_post() @endphp
      @include ('partials.content-page')
    @endwhile
  </div>

@endsection