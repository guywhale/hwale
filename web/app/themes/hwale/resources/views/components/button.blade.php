<{{ $type }}
  {{ $url }}
  class="button group relative inline-block min-w-35.5 min-h-11 border border-white transition-all bg-black-light shadow-0 hover:shadow-button-hover opacity-0 animate-slide-in-left {{ $classes }}"
  {{ $target }}
  data-swup-preload
>
  <span class="absolute -inset-px block px-4 py-2.5 text-center uppercase text-button bg-red border border-red translate-x-0.75 -translate-y-0.75 group-hover:translate-x-0 group-hover:translate-y-0 transition-all">
    {!! $label ?? $slot !!}
  </span>
</{{ $type }}>
