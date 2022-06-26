
<span class="h1-wrapper fixed {{ $position }} z-10 pointer-events-none block"
  x-data
  @scroll.window="$el.style.transform = `translateY(calc(${window.scrollY * -0.2}px))`;"
>
  <h1 class=" opacity-0 transition-transform animate-rotate-3d-x
    {{ $cookieStatus ? '' : 'animate-delay-8s' }}"
    data-floating-title
    {{-- x-data --}}
    >
    <span class="absolute -top-7 md:-top-8 -left-3 lg:-top-32.5 lg:-left-12 text-xl md:text-h1-number-md lg:text-h1-number">{{ $pageNumber }}</span>
    {{ $pageTitle }}
  </h1>
</span>
