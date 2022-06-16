<header class="banner">
  <div class="container relative flex items-center justify-between pt-6">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="flex nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'menu_class' => 'flex',
          'echo' => false,
          'walker' => new App\MainNavWalker(),
        ]) !!}
        <x-nav-search />
      </nav>
    @endif
  </div>
</header>
