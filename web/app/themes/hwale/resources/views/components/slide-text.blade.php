<div class="flex items-center h-full swiper-slide basis-full">
  <div class="max-w-[500px]">
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
      <div class="font-normal uppercase text-button">
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
