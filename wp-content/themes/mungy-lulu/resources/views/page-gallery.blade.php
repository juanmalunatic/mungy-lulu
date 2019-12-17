@extends('layouts.app')

@section('content')
<div class="gallery" id="gallery">

  <div class="gallery__area__title">
    @include('partials.page-header')
    <h2 class="title-secondary"> Meet our friends </h2>
  </div>

  @while (have_posts()) @php the_post() @endphp
    @include ('partials.content-page')
  @endwhile

@endsection

