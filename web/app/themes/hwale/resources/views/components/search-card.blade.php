<a href="{{ $link }}" class="block group">
  <article @php(post_class('flex flex-col lg:flex-row lg:items-center py-12 lg:py-7.5 border-t last:border-b border-white'))>
    <div class="transition-all border border-white lg:max-w-300 drop-shadow-none group-hover:border-4 group-hover:drop-shadow-preview-image">
      @if ($previewImage)
        <img src="{{ $previewImage['url']}}"
          alt="{{ $previewImage['alt'] }}"
          srcset="
            {{ $previewImage['sizes']['medium'] }} 300w
            {{ $previewImage['sizes']['medium_large'] }} 706w
            {{ $previewImage['sizes']['medium'] }} 300w
          "
          sizes="
            (max-width: 767px) 300px
            (max-width: 1023px) 706px
            300px
          "
          class="object-cover object-right w-full h-full max-w-full"
        >
      @endif
    </div>
    <div class="mt-5 lg:px-7.5">
      <h3 class="mb-2 lg:mb-3">
        {{ $title }}<span class="transition-opacity opacity-0 group-hover:opacity-100"><span class="animate-blinking-cursor text-red">_</span></span>
      </h3>

      @if ($previewText)
        <p>{{ $previewText }}</p>
      @endif
    </div>
  </article>
</a>
