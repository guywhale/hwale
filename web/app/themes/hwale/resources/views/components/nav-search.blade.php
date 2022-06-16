<form action="/" method="GET" class="relative flex flex-col pl-6 2xl:pl-11.25 group">
  <span class="nav-number-sm lg:text-nav-number-lg xl:text-nav-number mb-0.5">06</span>
  <label for="navSearch" class="text-nav-sm lg:text-nav-lg xl:text-nav">Search</label>
  <input type="search"
    name="s"
    id="navSearch"
    class="text-nav-search-sm lg:text-nav-search-lg xl:text-nav-search pr-8.5 w-40 rounded-none bg-transparent border-t-0 border-r-0 border-b-2 border-b-grey border-l-0 text-white focus:outline-none active:outline-none"
    data-search=""
  >
  <button type="submit" class="absolute bottom-0 right-0">
    {!! get_svg('images.telescope-down', 'w-auto h-6') !!}
  </button>
</form>
