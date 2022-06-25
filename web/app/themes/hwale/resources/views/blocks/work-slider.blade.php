<div class="{{ $block->classes }} overflow-x-hidden">
  <div class="flex-col hidden w-full md:flex lg:flex-row">
    <div class="relative order-2 lg:order-1 flex items-center justify-end w-full h-1/3-screen bg-red-dark md:h-1/2-screen lg:h-screen lg:w-1/2 animate-slide-in-left lg:flex-row px-3.75 md:px-7.5 xl:px-15">
      <x-laptop-image :laptopImage="$laptopImage"
        :imageSlides="$work['images']"
      />
    </div>
    <div class="swiper container relative order-1 lg:order-2 flex flex-wrap items-center lg:w-1/2 w-full h-2/3-screen md:h-1/2-screen lg:h-screen px-3.75 md:px-7.5 lg:pl-15 lg:pr-7.5 lg:pt-5 xl:pt-0 xl:pl-22.5 xl:pr-15 2xl:pl-40 animate-slide-in-right"
      data-content-slider
    >
      @if ($work['content'])
        <div class="h-full swiper-wrapper mt-7.5 lg:mt-0">
          @foreach ($work['content'] as $content)
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

  <div class="pt-55 pb-28 md:hidden">
    @if ($work['both'])
      @foreach ($work['both'] as $both)
      <div class="py-12">
        <img src="{{ $both['image'] }}"
          alt="{{ $both['alt']}}"
          width="767px"
          height="363px"
          class="mb-8 animate-slide-in-right"
        >
        <x-slide-text :title="$both['title']"
          :content="$both['content']"
          :tags="$both['tags']"
          :button="$both['button']"
        />
      </div>
      @endforeach
    @endif
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
