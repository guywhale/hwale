@if ($laptopImage)
  <div class="absolute right-0 w-full px-3.75 md:px-7.5 xl:px-15 text-right">
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
        class="lg:max-w-[452px] xl:max-w-[520px] 2xl:max-w-[648px]"
      >
      @if ($imageSlides)
        <div class="swiper"
          data-image-slider
        >
          <div class="h-full swiper-wrapper">
            @foreach ($imageSlides as $slides)
            <div class="w-full h-full swiper-slide">
              <img src="{{ $slides['image'] }}"
                alt=""
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


