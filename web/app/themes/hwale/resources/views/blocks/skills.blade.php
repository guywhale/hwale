<section class="{{ $block->classes }} min-h-screen 2xl:pt-37.5 2xl:pb-15">
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
