<div class="{{ $block->classes }} overflow-x-hidden">
  <div class="flex flex-col w-full lg:flex-row">
    <div class="relative flex items-center justify-center w-full h-1/3-screen bg-red-dark md:h-1/2-screen lg:h-screen lg:w-1/2 animate-slide-in-left">
      <x-laptop-image :laptopImage="$laptopImage" />
      @if ($work['images'])
        <div class="relative -top-[7px] left-px w-[432px] h-[270px] bg-pink overflow-x-hidden overflow-y-scroll snap-y snap-mandatory">
          @foreach ($work['images'] as $slideNumber => $image)
          <img src="{{ $image['image'] }}"
            alt=""
            class="object-cover w-full h-full snap-start snap-always"
          >
          {{-- @dump($slideNumber)
          @dump($image) --}}
          @endforeach
        </div>
      @endif
    </div>
    <div class="flex flex-wrap items-center justify-center lg:w-1/2 w-full h-2/3-screen md:h-1/2-screen lg:h-screen overflow-y-scroll snap-y snap-mandatory px-7.5 animate-slide-in-right">
      @if ($work['content'])
        @foreach ($work['content'] as $slideNumber => $content)
          {{-- @dump($slideNumber) --}}
          <x-slide-text :title="$content['title']"
            :content="$content['content']"
            :tags="$content['tags']"
            :button="$content['button']"
          />
        @endforeach
      @endif
    </div>
  </div>
  <div>
    <InnerBlocks />
  </div>
</div>
