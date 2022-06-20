<section class="{{ $block->classes }} h-full pt-25 lg:pt-48">
  <div class="container">
    <div class="flex flex-col lg:flex-row">
        <div class="order-2 lg:w-1/2 lg:order-1">
          @if ($text)
            <div class="cms">
              {!! $text !!}
            </div>
          @endif
          @if ($button)
            <x-button type="link" :url="$button['url']" classes="mt-10" :target="$button['target']" :label="$button['title']" />
          @endif
        </div>
        @if ($image)
          <picture class="order-1 mb-7.5 lg:order-2 lg:mb-0 lg:w-1/2">
            <source media="(max-width: 1023px)"
              srcset="{{ $image['sizes']['medium'] }} {{ $image['sizes']['medium-width'] }}w"
              sizes="(max-width: 1023px) {{ $image['sizes']['medium-width'] }}"
            >
            <img src="{{ $image['url'] }}"
              alt="{{ $image['alt'] }}"
              width="{{ $image['width'] }}"
              height="{{ $image['height'] }}"
              class="mx-auto max-w-300 lg:max-w-full md:ml-auto md:mr-0"
            >
          </picture>
        @endif
    </div>
  </div>

  <div>
    <InnerBlocks />
  </div>
</section>
