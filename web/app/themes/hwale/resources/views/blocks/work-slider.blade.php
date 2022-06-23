<div class="{{ $block->classes }}">
  <div class="flex w-full">
    <div class="w-1/2 h-screen bg-red-dark">
      @if ($work['images'])
        @foreach ($work['images'] as $slide => $image)
          @dump($slide)
          @dump($image)
        @endforeach
      @endif
    </div>
    <div class="flex flex-wrap items-center justify-center w-1/2 h-screen">
      @if ($work['content'])
        @foreach ($work['content'] as $slide => $content)
          {{-- @dump($slide) --}}
          <x-slide-text :title="$content['title']"
            :content="$content['content']"
            :tags="$content['tags']"
            :button="$content['button']"
          />
        @endforeach
      @endif
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
