@extends('layouts.app')

@section('content')
  <x-floating-title />

  <div class="min-h-screen pb-40 pt-68 md:pt-75 lg:pt-32 lg:pb-56">
    <div class="container">
      <div class="opacity-0 animate-slide-in-left">
        <x-search-text />
      </div>
      <div class="opacity-0 animate-slide-in-left animate-delay-300">
        <x-search-form />
      </div>

      @while(have_posts()) @php(the_post())
        <x-search-card />
      @endwhile

    </div>

  </div>
@endsection
