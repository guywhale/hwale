@if ($laptopImage)
  <img src="{{ $laptopImage['url'] }}"
    alt="{{ $laptopImage['alt'] }}"
    srcset="
      {{ $laptopImage['sizes']['medium'] }} {{ $laptopImage['sizes']['medium-width'] }}w,
      {{ $laptopImage['url'] }} 452w,
      {{ $laptopImage['url'] }} 580w,
      {{ $laptopImage['url'] }} {{ $laptopImage['width'] }}w
    "
    sizes="
      (max-width: 767px) {{ $laptopImage['sizes']['medium-width'] }}px,
      (max-width: 1279px) 452px
      (max-width: 1535px) 580px,
      {{ $laptopImage['width'] }}px
    "
    class="lg:max-w-[452px] xl:max-w-[580px] 2xl:max-w-[693px]"
  >
@endif
