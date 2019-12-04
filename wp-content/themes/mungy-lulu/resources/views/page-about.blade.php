@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php //@include('partials.content-page') ?>
  @endwhile
  <pre style="background:#f90; white-space: pre-wrap;">
    {{$about_intro_text}}

    {{$about_intro_highlight}}

    {{$about_intro_text}}

    {{$about_number_news}}

    {{$about_number_clients}}

    {{$about_number_hikes}}

    {{$about_number_kisses}}

    @debug
  </pre>

  TO-DO implement testimonial w/ global data

@endsection

