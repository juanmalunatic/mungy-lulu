<header class="banner header">
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <!-- Logo  -->
      <div class="header__logo">
        <div class="header__logo__image">
          <a class="navbar-brand" href="{{ home_url('/') }}" title="{{ get_bloginfo('name', 'display') }}">
            <h1 class="sr-only">
                {{ get_bloginfo('name', 'display') }}
            </h1>
          </a>
        </div>
        <div class="header__logo__triangle"></div>
      </div>
      <!-- Actual menu -->
      <div class="header__menu">
        <div class="collapse navbar-collapse" id="navbarNav">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu([
              'theme_location'  => 'primary_navigation',
              'menu_class'      => 'navbar-nav',
              'walker'          => new \App\wp_bootstrap4_navwalker(),
              ]) !!}
          @endif
        </div>
      </div>
      <!-- Toggler (uses both BS and hamburguers) -->
      <div class="header__toggler">
        <button class="navbar-toggler hamburger hamburger--spin" type="button"
          data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
        >
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>
    </nav>
  </div>
</header>
