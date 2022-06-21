{{--
  Template Name: Page Builder
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <x-b-g-lines />
    <x-floating-title :positionOnMobile="is_front_page() ? 'right' : 'left'" />
    @include('partials.content-page')
  @endwhile
@endsection
