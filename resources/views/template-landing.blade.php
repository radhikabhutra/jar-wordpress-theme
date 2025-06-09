{{--
  Template Name: Landing Page
--}}
@extends('layouts.blank')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
  @endwhile
@endsection
