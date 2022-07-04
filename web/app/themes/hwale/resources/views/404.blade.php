@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <x-floating-title />
    <section class="flex items-center min-h-screen pt-36 md:pt-20">
      <div class="container">
        <div class="opacity-0 animate-slide-in-left">
          <h2 class="mb-4 md:mb-11">
            Not Found<span class="text-red animate-blinking-cursor">_</span>
          </h2>
          <h3 class="mb-4 md:mb-11">
            {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
          </h3>
        </div>
        <div class="opacity-0 animate-slide-in-left animate-delay-300">
          <x-search-form />
        </div>
      </div>
    </section
  @endif
@endsection
