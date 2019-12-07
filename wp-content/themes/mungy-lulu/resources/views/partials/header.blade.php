<header class="banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- Logo  -->
      <a class="navbar-brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Actual menu -->
      <div class="collapse navbar-collapse" id="navbarNav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location'  => 'primary_navigation',
            'menu_class'      => 'navbar-nav',
            'walker'          => new \App\wp_bootstrap4_navwalker(),
            ]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
