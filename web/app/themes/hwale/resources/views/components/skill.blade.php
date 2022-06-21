<div class="flex flex-wrap justify-between w-1/2 px-3.5 py-5">
  @if ($skill)
    <p class="uppercase text-button">
      {{ $skill }}
    </p>
  @endif
  @if ($score)
    <p class="text-skill-score">
      {{ $score }}%
    </p>
  @endif
  <div class="relative w-full h-0.75 basis-full mt-1">
    <div class="absolute left-0 w-full h-px bg-white top-px opacity-10"></div>
    <div class="absolute top-0 left-0 w-full h-0.75 bg-white max-w-0"></div>
  </div>
</div>
