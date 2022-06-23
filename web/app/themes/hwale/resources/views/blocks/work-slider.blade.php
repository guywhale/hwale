<div class="{{ $block->classes }}">
  <div class="flex w-full">
    <div class="relative h-screen first:w-1/2">
      @if ($work['images'])
        @foreach ($work['images'] as $slideNumber => $image)
          {{-- @dump($slideNumber)
          @dump($image) --}}
        @endforeach
      @endif

      <div class="absolute inset-0 flex items-center justify-center bg-red-dark">
        <x-laptop-image :laptopImage="$laptopImage" />
      </div>
    </div>
    <div class="flex flex-wrap items-center justify-center w-1/2 h-screen overflow-y-scroll snap-y snap-mandatory px-7.5">
      @if ($work['content'])
        @foreach ($work['content'] as $slideNumber => $content)
          {{-- @dump($slideNumber) --}}
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
