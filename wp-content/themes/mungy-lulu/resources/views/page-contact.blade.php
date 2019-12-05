@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    <?php //@include('partials.content-page')?>
  @endwhile
  <pre style="background:#f7f; white-space: pre-wrap;">
    @debug
  </pre>

  TO-DO install gravity forms to implement contact form

@endsection

