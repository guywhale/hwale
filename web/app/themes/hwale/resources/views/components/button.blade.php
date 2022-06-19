<{{ $type }}
  {{ $url }}
  class="button group relative inline-block min-w-35.5 border border-white hover:border-red transition-all bg-black-light shadow-none hover:shadow-button-hover {{ $classes }}"
  {{ $target }}
>
  <span class="relative inline-block w-full px-4 py-2.5 h-full text-center uppercase text-button bg-red border border-red translate-x-0.75 -translate-y-0.75 group-hover:translate-x-0 group-hover:translate-y-0 transition-all">
    {!! $label ?? $slot !!}
  </span>
</{{ $type }}>
