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
{{asset('storage/rev-home-image-1.jpg')}}
@endslot
@slot('second_slide')
{{asset('storage/rev-home-image-2.jpg')}}
@endslot
@slot('third_slide')
{{asset('storage/rev-home-image-3.jpg')}}
@endslot
@endcomponent
{{-- end carousel --}}
<h1>ghkasdcvashcvasvcghas</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae sint ipsa sequi inventore quas aperiam culpa odio, modi eius dolore veritatis ratione facilis dicta fuga eos ullam iure distinctio magni.lorem </p>
@endsection
