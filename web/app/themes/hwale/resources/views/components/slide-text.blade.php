<div class="flex items-center justify-center h-full basis-full snap-start snap-always">
  <div class="xl:w-3/4 2xl:w-2/3">
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
        classes="lg:mt-8 xl:mt-11"
        :target="$button['target']"
        label="View Site"
      />
    @endif
  </div>
</div>
