<header class="banner">
  <div class="fluid-container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light nav-primary">
        <div class="container">
        <a class="narbar-brand" href="{{ home_url('/') }}"><img src="@asset('images/logo.png')" width="150px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              @if (has_nav_menu('primary_navigation'))
              {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
            @endif
          </ul>
        </div>
      </div>
      </nav>
  </div>
</header>


