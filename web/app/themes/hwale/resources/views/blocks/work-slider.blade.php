<div class="{{ $block->classes }} relative overflow-x-hidden">
  <div class="absolute top-0 left-0 right-0 hidden w-full md:block lg:left-unset h-1/2-screen lg:w-1/2 lg:h-full -z-10 bg-red-dark animate-slide-in-right"></div>
  <div class="container">
    <div class="flex-col hidden w-full md:flex lg:flex-row">
      <div class="lg:order-2 relative flex items-center justify-end w-full h-1/3-screen md:h-1/2-screen lg:h-screen lg:w-1/2 animate-slide-in-right lg:flex-row px-3.75 md:px-7.5 lg:pl-7.5 lg:pr-0 xl:pl-15">
        <x-laptop-image :laptopImage="$laptopImage"
          :imageSlides="$work['images']"
        />
      </div>

      <div class="relative flex flex-wrap items-center w-full lg:order-1 swiper lg:w-1/2 md:pr-15 h-1/2-screen lg:h-screen md:pt-11 lg:pr-15 lg:pl-0 lg:pt-5 xl:pt-0 2xl:pr-40 animate-slide-in-left"
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
