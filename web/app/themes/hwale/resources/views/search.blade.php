@extends('layouts.app')

@section('content')
  <x-floating-title />

  <div class="min-h-screen pt-32">
    <div class="container">
        <x-search-text />
        {!! get_search_form() !!}

      @while(have_posts()) @php(the_post())
        @include('partials.content-search')
      @endwhile
    </div>

  </div>


  {!! get_the_posts_navigation() !!}
@endsection
