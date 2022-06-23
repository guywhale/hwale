<div class="{{ $block->classes }}">
  <div class="flex flex-col w-full lg:flex-row">
    <div class="relative w-full h-1/3-screen md:h-1/2-screen lg:h-screen lg:w-1/2">
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
    <div class="flex flex-wrap items-center justify-center lg:w-1/2 w-full h-2/3-screen md:h-1/2-screen lg:h-screen overflow-y-scroll snap-y snap-mandatory px-7.5">
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
