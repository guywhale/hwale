<button class="relative w-8.75 h-8.75 border-0 rotate-0 origin-center flex items-center transition-transform z-10 lg:hidden"
  @click="open = ! open"
  :class="open ? '-rotate-45' : 'rotate-0'"
>
  <span class="absolute w-8.75 h-1.5 transition-colors"
    :class="open ? 'bg-red' : 'bg-white'"
  >
  </span>
  <span class="absolute w-8.75 h-1.5 origin-center rotate-90 transition-colors"
    :class="open ? 'bg-red' : 'bg-white'"
  >
  </span>
</button>
