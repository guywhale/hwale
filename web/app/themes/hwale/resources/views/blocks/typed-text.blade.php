<section class="{{ $block->classes }} relative overflow-hidden h-screen pt-1/3-screen">
  <x-text-explosion />
  <div class="container">
    @if ($textLine1)
      <h2 id="homeText1"
        class="h-10 mb-2 md:h-15.75 lg:h-21"
        data-text="{{ $textLine1 }}"
      >
        {{-- Keep hidden for SEO --}}
        <span class="absolute -top-[9999px] -left-[9999px]">{{ $textLine1 }}</span>
        <span class="typed-text"></span>
      </h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($textLine2)
      <h2 id="homeText2"
        class="h-10 md:h-15.75 lg:h-21"
        data-text="{{ $textLine2 }}"
      >
        {{-- Keep hidden for SEO --}}
        <span class="absolute -top-[9999px] -left-[9999px]">{{ $textLine2 }}</span>
        <span class="typed-text"></span>
      </h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($button)
      <x-button type="link"
        :url="$button['url']"
        classes="mt-14 {{ $cookieStatus ? 'animate-delay-300' : 'animate-delay-10s' }}"
        :target="$button['target']"
        :label="$button['title']"
      />
    @endif
  </div>
  <div>
    <InnerBlocks />
  </div>
</section>

