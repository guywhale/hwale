<div class="flex items-start lg:items-center px-3.75 md:px-0 md:h-full swiper-slide basis-full animate-slide-in-left md:animate-none">
  <div class="lg:pr-3.75 xl:pr-7.5 2xl:pr-0">
    @if ($title)
      <h2 class="mb-4 xl:mb-6 h3">
        {!! $title !!}<span class="text-red animate-blinking-cursor">_</span>
      </h2>
    @endif

    @if ($content)
      <div class="cms">
        {!! $content !!}
      </div>
    @endif

    @if ($tags)
      <div class="pt-4 font-normal uppercase text-button">
        @foreach ($tags as $tag)
          <span class="py-1">{{ $tag->name }}</span><span class="py-1 last:hidden"> |</span>
        @endforeach
      </div>
    @endif

    @if ($button)
      <x-button type="link"
        :url="$button['url']"
        classes="mt-8 xl:mt-11"
        :target="$button['target']"
        label="View Site"
      />
    @endif
  </div>
</div>
