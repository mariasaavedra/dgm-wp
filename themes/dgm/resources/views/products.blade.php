{{--
  Template Name: Products Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')   
     
    @component('components/header')
      @slot('title')
        <h1 class="text-uppercase">Products</h1>
      @endslot
    @endcomponent
    
    @include('partials.product-grid')

    @component('components/banner')
      @slot('title')
        <h1 class="text-uppercase">Browse our entire collection</h1>
      @endslot
    @endcomponent
  @endwhile
@endsection
