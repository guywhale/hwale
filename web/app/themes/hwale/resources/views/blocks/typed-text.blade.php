<section class="{{ $block->classes }}">
  <div class="container xl:pt-45">
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
  </div>
  <div>
    <InnerBlocks />
  </div>
</section>

