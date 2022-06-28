<span class="h1-wrapper fixed {{ $position }} z-10 pointer-events-none block"
  x-data
  @scroll.window="$el.style.transform = `translateY(${window.scrollY * -0.4}px)`;"
>
  <h1 class="opacity-0 transition-transform animate-rotate-3d-x
    {{ $cookieStatus ? '' : 'animate-delay-8s' }}
    {{ $contactH1Size }}"
    data-floating-title
  >
    <span class="absolute -top-7 md:-top-8 -left-3 {{ $contactNumberPosition }} text-xl md:text-h1-number-md {{ $contactNumberSize }}"
    >
      {{ $pageNumber }}
    </span>
    {{ $pageTitle }}
  </h1>
</span>
