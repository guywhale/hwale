<div class="{{ $block->classes }} overflow-x-hidden">
  <div class="flex flex-col w-full lg:flex-row">
    <div class="relative flex items-center justify-end w-full h-1/3-screen bg-red-dark md:h-1/2-screen lg:h-screen lg:w-1/2 animate-slide-in-left lg:flex-row px-3.75 md:px-7.5 xl:px-15">
      <x-laptop-image :laptopImage="$laptopImage"
        :imageSlides="$work['images']"
      />
    </div>
    <div class="swiper relative flex flex-wrap items-center lg:w-1/2 w-full h-2/3-screen md:h-1/2-screen lg:h-screen px-3.75 md:px-7.5 lg:pl-15 lg:pr-7.5 lg:pt-5 xl:pt-0 xl:pl-22.5 xl:pr-15 2xl:pl-40 animate-slide-in-right"
      data-content-slider
    >
      @if ($work['content'])
        <div class="h-full swiper-wrapper">
          @foreach ($work['content'] as $slideNumber => $content)
            <x-slide-text :title="$content['title']"
              :content="$content['content']"
              :tags="$content['tags']"
              :button="$content['button']"
            />
          @endforeach
        </div>
      @endif
      <x-slider-controls />
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
