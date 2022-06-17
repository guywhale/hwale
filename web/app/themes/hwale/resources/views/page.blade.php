@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <x-floating-title />
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection
