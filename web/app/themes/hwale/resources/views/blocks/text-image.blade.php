<section class="{{ $block->classes }} md:h-screen pt-25 pb-28 md:pb-0 lg:pt-32">
  <div class="container">
    <div class="flex flex-col lg:flex-row">
        <div class="order-2 pt-11 md:pt-16 lg:pt-0 xl:pt-10 2xl:pt-24 lg:w-2/3 xl:w-1/2 lg:order-1">
          @if ($text)
            <div class="relative z-10 cms animate-slide-in-left">
              {!! $text !!}
            </div>
          @endif
          @if ($button)
            <x-button type="link"
              :url="$button['url']"
              classes="mt-10 animate-delay-300"
              :target="$button['target']"
              :label="$button['title']"
            />
          @endif
        </div>
        @if ($image)
          <picture class="order-1 opacity-0 animate-picture-in lg:order-2 lg:w-1/3 xl:w-1/2 xl:pl-[8%]"
            x-data
            @scroll.window="$el.style.transform = `translateY(${window.scrollY * 0.2}px)`;"
          >
            <source media="(max-width: 1023px)"
              srcset="
                {{ $image['sizes']['medium'] }} {{ $image['sizes']['medium-width'] }}w,
                {{ $image['url'] }} {{ $image['width'] }}w
              "
              sizes="
                (max-width: 1023px) {{ $image['sizes']['medium-width'] }}px,
                {{ $image['width'] }}px
              "
            >
            <img src="{{ $image['url'] }}"
              alt="{{ $image['alt'] }}"
              width="{{ $image['width'] }}"
              height="{{ $image['height'] }}"
              class="ml-auto max-w-300 lg:max-w-full drop-shadow-main"
            >
          </picture>
        @endif
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</section>
