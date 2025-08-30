@extends('layouts.master')

@section('content')

    {{-- Hero Section --}}
    @include('partials.hero')
     @include('partials.material')
     @include('partials.joinery')
     @include('partials.about-products')
     @include('partials.drop-inquiry')
     @include('partials.materials-inquiry')
     @include('partials.project-inquiry')
     @include('partials.faqs')
        @include('partials.other-services')
        @include('partials.footer')
@endsection