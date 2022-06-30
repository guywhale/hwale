<div class="absolute inset-0 flex items-center justify-center -z-10">
  <div class="w-full px-7.5 md:px-0 m-auto text-sm transition-all duration-300 max-w-code-wrapper animate-text-shadow
    {{ $cookieStatus ? 'animate-picture-in animate-delay-300 opacity-40' : 'opacity-100' }}"
    data-exploding-code
  ></div>
  {{-- Scanlines overlay --}}
  <div class="absolute inset-0 overflow-hidden pointer-events-none bg-scanlines bg-size-scanlines">
    <div class="absolute inset-0 opacity-0 pointer-events-none bg-black-scanline animation-flicker"></div>
  </div>
</div>
