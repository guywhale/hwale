@if ($laptopImage)
  <div class="absolute right-0 w-full px-3.75 md:px-7.5 xl:px-15 text-center lg:text-right">
    <span class="relative inline-flex items-center justify-center">
      <img src="{{ $laptopImage['url'] }}"
        alt="{{ $laptopImage['alt'] }}"
        srcset="
          {{ $laptopImage['sizes']['medium'] }} {{ $laptopImage['sizes']['medium-width'] }}w,
          {{ $laptopImage['url'] }} 452w,
          {{ $laptopImage['url'] }} 520w,
          {{ $laptopImage['url'] }} 648w
        "
        sizes="
          (max-width: 767px) {{ $laptopImage['sizes']['medium-width'] }}px,
          (max-width: 1279px) 452px
          (max-width: 1535px) 520px,
          648px
        "
        class="md:max-w-[600px] lg:max-w-[452px] xl:max-w-[520px] 2xl:max-w-[648px]"
      >
      @if ($imageSlides)
        <div class="swiper"
          data-image-slider
        >
          <div class="h-full swiper-wrapper">
            @foreach ($imageSlides as $slide)
            <div class="w-full h-full pt-28 swiper-slide">
              <img src="{{ $slide['image'] }}"
                alt="{{ $slide['alt'] }}"
                srcset="
                  {{ $slide['image'] }} 768w,
                  {{ $slide['image'] }} 338w,
                  {{ $slide['image'] }} 389w,
                  {{ $slide['image'] }} 485w
                "
                sizes="
                  (max-width: 1023px) 768px,
                  (max-width: 1279px) 338px,
                  (max-width: 1535px) 389px,
                  485px
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


