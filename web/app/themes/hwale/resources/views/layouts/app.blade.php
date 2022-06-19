<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>


<div id="swup">
  @include('sections.header')
  <main id="main" class="h-screen main swup-transition-fade">
    @yield('content')
  </main>
</div>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

@include('sections.footer')
