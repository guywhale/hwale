{{--
  Template Name: Page Builder
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <x-floating-title />
    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
