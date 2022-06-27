@extends('layouts.app')

@section('content')
  <x-floating-title />

  <div class="min-h-screen pt-32">
    <div class="container">
      <x-search-text />
      {!! get_search_form() !!}

      @while(have_posts()) @php(the_post())
        <x-search-card />
      @endwhile
    </div>

  </div>
@endsection
