
<style>
  .h1-wrapper {
    --x-adjust: 33.333vh;
  }

  @media (max-width: 1023px) {
    .h1-wrapper {
      --x-adjust: 10rem;
    }
  }

</style>
<span class="h1-wrapper fixed {{ $position }} z-10 pointer-events-none block"
  x-data
  @scroll.window="$el.style.top = `calc(${window.scrollY * -0.25}px + var(--x-adjust))`;"
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
