<div class="flex flex-wrap justify-between w-1/2 px-3.5 py-5"
  x-data="{
    setMaxWidth() {
      $refs.scoreLine.style.maxWidth = '{{ $score }}%'
    }
  }"
  x-init="setTimeout(setMaxWidth, 1000)"
>
  @if ($skill)
    <p class="uppercase opacity-0 text-button animate-fade-in animate-duration-2000">
      {{ $skill }}
    </p>
  @endif
  @if ($score)
    <p class="opacity-0 text-skill-score animate-fade-in animate-duration-2000">
      {{ $score }}%
    </p>
  @endif
  <div class="relative w-full h-0.75 basis-full mt-1">
    <div class="absolute left-0 w-full h-px bg-white max-w-0 animate-draw-horizontal-line top-px opacity-10"></div>
    <div class="absolute top-0 left-0 w-full h-0.75 bg-white transition-max-width duration-700 ease-linear"
      style="max-width: 0%;"
      x-ref="scoreLine"
    ></div>
  </div>
</div>
