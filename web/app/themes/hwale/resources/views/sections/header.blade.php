<header class="fixed top-0 left-0 w-full"
  x-data="{ open: false }"
>
  <div class="container flex items-center justify-between pt-6">
    <a class="relative z-10 group" href="{{ home_url('/') }}">
      {!! get_svg('images.logo') !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <div class="absolute top-0 left-0 block w-screen h-screen transition-transform pt-28 lg:pt-0 bg-black-light lg:static lg:inline lg:w-auto lg:h-auto lg:bg-transparent lg:translate-x-0"
        :class="open ? 'translate-x-0' : 'translate-x-full'"
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
