{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @component('components/hero')
    
    @slot('content')
    <div style="max-width: 900px; margin: 0 auto;">
      <h1 class="display-4 text-uppercase">Build your dreams with a solid foundation</h1>
      <p class="text-uppercase">We provide quality natural materials that exceed the industry standard</p>
      <a href="/contact" class="btn btn-primary">Contact Us</a>
      <a href="/products" class="btn btn-outline-light">View Products</a>
    </div>
    @endslot
  @endcomponent


    @include('partials.content-page')
    @include('partials.product-grid')

    @component('components/banner')
      @slot('title')
        <h1 class="display-5 display-md-4 mb-4 text-uppercase">Browse our entire collection</h1>
      @endslot
    @endcomponent

  @endwhile
@endsection
