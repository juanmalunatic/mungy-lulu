@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php //@include('partials.content-page') ?>
  @endwhile
  <pre style="background:#9f0; white-space: pre-wrap;">
    {{$services_svc1_title}}
    {{$service_svc1_content}}
    {{$services_svc2_title}}
    {{$service_svc2_content}}
    {{$services_svc3_title}}
    {{$service_svc3_content}}
    {{$services_svc4_title}}
    {{$service_svc4_content}}

    @debug
  </pre>

  TO-DO implement testimonial w/ global data

@endsection

