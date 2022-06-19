<section class="{{ $block->classes }} relative overflow-hidden h-full lg:pt-1/3-screen">
  <x-text-explosion />
  <div class="container">
    @if ($textLine1)
      <h2 class="opacity-0">{{ $textLine1 }}</h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($textLine2)
      <h2 class="opacity-0">
        <span>{{ $textLine2 }}</span><span class="typed-text"></span>
      </h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($button)
      <x-button type="link" :url="$button['url']" classes="mt-14 opacity-0" :target="$button['target']" :label="$button['title']"/>
    @endif
  </div>
  <div>
    <InnerBlocks />
  </div>
</section>

