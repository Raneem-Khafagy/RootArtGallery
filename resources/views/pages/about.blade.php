@extends('layouts.app')
@section('headers')
<title>about</title>
@endsection
@section('active_about')
active
@endsection
@section('content')
{{-- Carousel --}}
<div id="about-text">
@component('components.carousel')
@slot('first_slide')
{{asset('storage/about-rev-image-2.jpg')}}
@endslot
@slot('second_slide')
{{asset('storage/about-rev-image-1.jpg')}}
@endslot
@slot('third_slide')
{{asset('storage/rev-home-image-3.jpg')}}
@endslot
@endcomponent
</div>
{{-- end carousel --}}
@endsection
@section('footer')
@component('layouts.footer1')
@endcomponent
@endsection
