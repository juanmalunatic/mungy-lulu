@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php //@include('partials.content-page')?>
  @endwhile
  <pre style="background:#a6f; white-space: pre-wrap;">

    TO-DO explode on | and wrap on span
    {{$home_title}}

    {{$home_services_title}}

    {{$home_services_text}}

    {{$home_about_title}}

    {{$home_about_text}}

    <?php var_dump($home_services_link); ?>

    <?php var_dump($home_about_link); ?>

  </pre>

  TO-DO install gravity forms to implement contact form

@endsection

