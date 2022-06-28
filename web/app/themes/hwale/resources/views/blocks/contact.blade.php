<div class="{{ $block->classes }} relative min-h-screen pt-65  md:pt-81.5 lg:pt-40 overflow-hidden">
  <div class="container h-full">
    @if ($text)
      <div class="lg:w-1/2 cms animate-slide-in-left mb-9">
        {!! $text !!}
      </div>
    @endif
    <div class="opacity-0 animate-slide-in-left animate-delay-300">
      @if ($email)
        <a href="mailto:{{ $email }}"
          target="_blank"
          class="relative inline-block px-0.5 text-center uppercase text-button group"
        >
          Email<span class="absolute block left-0 -bottom-1 w-full h-0.5 bg-pink group-hover:translate-y-0.5 group-hover:bg-red transition-all"></span>
        </a>
      @endif
      @if ($linkedin)
        <a href="{{ $linkedin }}"
          target="_blank"
          class="relative inline-block px-0.5 uppercase text-button group text-center ml-7.5"
        >
          LinkedIn<span class="absolute block left-0 -bottom-1 w-full h-0.5 bg-pink group-hover:translate-y-0.5 group-hover:bg-red transition-all"></span>
        </a>
      @endif
    </div>
  </div>

  <div class="relative -top-13.5 w-[200%] md:w-[150%] md:absolute md:top-[33vh] lg:top-[33vh] xl:top-[20vh] lg:right-0 lg:w-full-60 -z-20">
    <div id="arrow" class="absolute w-[10.37%] -top-[20%] -left-[6.5%] inline-block">
      {!! get_svg('images.animated-arrow') !!}
    </div>
    {!! get_svg('images.animated-lines', 'w-full h-auto') !!}
  </div>

  @if ($image)
    <img src="{{ $image['url'] }}"
      alt="{{ $image['alt'] }}"
      srcset="
        {{ $image['sizes']['medium'] }} 300w,
        {{ $image['url'] }} 424w,
        {{ $image['url'] }} 550w,
        {{ $image['url'] }} 620w
      "
      sizes="
        (max-width: 767px) 300px,
        (max-width: 1279px) 424px,
        (max-width: 1535px) 550px,
        620px
      "
      class="mx-auto md:mx-0 md:absolute bottom-0 translate-y-full animate-slide-up right-7.5 2xl:right-15"
    >
  @endif

  <div>
    <InnerBlocks />
  </div>
</div>
