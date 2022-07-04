@if ($laptopImage)
  <div class="absolute w-full md:pt-6 lg:pt-0 md:px-7.5 xl:px-15 text-center">
    <span class="relative inline-flex items-center justify-center">
      <img src="{{ $laptopImage['url'] }}"
        alt="{{ $laptopImage['alt'] }}"
        srcset="
          {{ $laptopImage['sizes']['medium'] }} {{ $laptopImage['sizes']['medium-width'] }}w,
          {{ $laptopImage['url'] }} 600w,
          {{ $laptopImage['url'] }} 452w,
          {{ $laptopImage['url'] }} 520w,
          {{ $laptopImage['url'] }} 648w
        "
        sizes="
          (max-width: 767px) {{ $laptopImage['sizes']['medium-width'] }}px,
          (max-width: 1023px) 600px,
          (max-width: 1279px) 452px,
          (max-width: 1535px) 520px,
          648px
        "
        class="hidden md:block md:max-w-[600px] lg:max-w-[452px] xl:max-w-[520px] 2xl:max-w-[648px]"
      >
      @if ($imageSlides)
        <div class="swiper" data-image-slider>
          <div class="h-full swiper-wrapper">
            @foreach ($imageSlides as $slide)
            <div class="w-full h-full swiper-slide">
              <img src="{{ $slide['image'] }}"
                alt="{{ $slide['alt'] }}"
                srcset="
                  {{ $slide['image'] }} 767w,
                  {{ $slide['image'] }} 451w,
                  {{ $slide['image'] }} 339w,
                  {{ $slide['image'] }} 391w,
                  {{ $slide['image'] }} 487w
                "
                sizes="
                  (max-width: 767px) 767px,
                  (max-width: 1023px) 451px,
                  (max-width: 1279px) 339px,
                  (max-width: 1535px) 391px,
                  487px
                "
                class="object-cover w-full h-full swiper-slide"
              >
            </div>
            @endforeach
          </div>
        </div>
      @endif
    </span>
  </div>
@endif


