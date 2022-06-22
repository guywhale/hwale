<section class="{{ $block->classes }} min-h-screen pt-65 pb-24 md:pt-80 lg:pt-37.5">
  <div class="container">
    @if ($text)
      <div class="lg:w-1/2 cms animate-slide-in-left">
        {!! $text !!}
      </div>
    @endif
    @if ($button)
      <x-button type="link"
        :url="$button['url']"
        classes="mt-4 animate-delay-300"
        :target="$button['target']"
        :label="$button['title']"
      />
    @endif
      @if ($skills)
      <div class="flex flex-wrap mt-16 -mx-3.5">
        @foreach ($skills as $skill)
          <x-skill :skill="$skill['skill']" :score="$skill['score']" />
        @endforeach
      </div>
      @endif
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</section>
