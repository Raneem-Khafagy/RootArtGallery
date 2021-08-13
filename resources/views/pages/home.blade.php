@extends('layouts.app')
@section('headers')
<title>Home</title>
@endsection
@section('active_home')
active
@endsection
@section('content')
{{-- Carousel --}}
@component('components.carousel')
@slot('first_slide')
{{asset('storage/home-image-1.jpg')}}
@endslot
@slot('second_slide')
{{asset('storage/home-image-2.jpg')}}
@endslot
@slot('third_slide')
{{asset('storage/home-image-3.jpg')}}
@endslot
@endcomponent
{{-- end carousel --}}
{{-- Categories --}}
<x-categories :categories="$categories" ></x-categories>
{{-- end Categories --}}

<div id="category-card">
    <div class=" category-header">
        <h5 class="display-2 d-flex justify-content-center">Root Gallery</h5>
        <h4 class=" d-flex justify-content-center">Browse Works To enjoy</h4>
    </div>
    <div class="row top-buffer">
        @foreach($artpieces as $item )
        <x-art-piece-mini :item="$item" method="POST" route="art-piece.fav" text="Add to favourits" />
        @endforeach



    </div>
</div>


<h1>ghkasdcvashcvasvcghas</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae sint ipsa sequi inventore quas aperiam culpa odio, modi eius dolore veritatis ratione facilis dicta fuga eos ullam iure distinctio magni.lorem </p>
@endsection
@section('footer')
@component('layouts.footer2')
@endcomponent
@endsection
