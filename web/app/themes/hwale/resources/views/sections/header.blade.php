<header class="fixed top-0 left-0 z-20 w-full py-6
  {{ $cookieStatus ? '' : 'opacity-0 animate-fade-in animate-delay-8s' }}"
  x-data="{ open: false }"
>
  <div class="container flex items-center justify-between">
    <a class="relative z-10 group" href="{{ home_url('/') }}" aria-label="click to go to homepage">
      {!! get_svg('images.logo') !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <div class="absolute top-0 left-0 block w-screen min-h-screen transition-transform pt-28 lg:pt-0 bg-black-light lg:static lg:inline lg:w-auto lg:min-h-0 lg:bg-transparent lg:translate-x-0 lg:opacity-100"
        :class="open ? 'translate-x-0 opacity-100' : 'translate-x-full opacity-0'"
      >
        <nav class="container flex flex-col lg:px-0 lg:mx-0 lg:flex-row"
          aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}"
        >
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'flex flex-col lg:flex-row',
            'echo' => false,
            'walker' => new App\MainNavWalker(),
          ]) !!}
          <x-nav-search />
        </nav>
      </div>
    @endif

    <x-nav-menu-btn />
  </div>
</header>
