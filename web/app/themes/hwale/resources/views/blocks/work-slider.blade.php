<div class="{{ $block->classes }}">
  <div class="flex w-full">
    <div class="w-1/2 h-screen bg-red-dark">
      @if ($work['images'])
        @foreach ($work['images'] as $slide => $image)
          @dump($slide)
          @dump($image)
        @endforeach
      @endif
    </div>
    <div class="flex flex-wrap items-center justify-center w-1/2 h-screen">
      @if ($work['content'])
        @foreach ($work['content'] as $slide => $content)
          <div class="flex items-center justify-center h-screen basis-full">
            {{-- @dump($slide) --}}
            @dump($content['tags'])
            <div class="w-2/3">
              @if ($content['title'])
                <h2 class="mb-6 h3">
                  {!! $content['title'] !!}
                  <span class="text-red animate-blinking-cursor">_</span>
                </h2>
              @endif

              @if ($content['content'])
                <div class="cms">
                  {!! $content['content'] !!}
                </div>
              @endif

              @if ($content['button'])
                <x-button type="link"
                  :url="$content['button']['url']"
                  classes="mt-11"
                  :target="$content['button']['target']"
                  label="View Site"
                />
              @endif
            </div>

          </div>
        @endforeach
      @endif
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
