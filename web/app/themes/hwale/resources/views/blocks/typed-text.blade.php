<section class="{{ $block->classes }} lg:pt-1/3-screen">
  <div class="container">
    @if ($textLine1)
      <h2>{{ $textLine1 }}</h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($textLine2)
      <h2>
        <span>{{ $textLine2 }}</span><span class="typed-text"></span>
      </h2>
    @else
      <p>{{ $block->preview ? 'Add some text...' : 'No text found!' }}</p>
    @endif
    @if ($textLine1)
      <x-button type='link' :url="$button['url']" classes="mt-14" :target="$button['target']" :label="$button['title']"/>
    @endif
  </div>
  <div>
    <InnerBlocks />
  </div>
</section>

