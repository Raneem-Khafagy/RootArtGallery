@extends('layouts.app')
@section('headers')
<title>contact</title>
@endsection

@section('active_Contact')
active
@endsection

@section('content')
{{-- Header picture --}}
 <img src="{{asset('storage/contact.jpg')}}" width=100%>
{{-- end Header picture --}}
<h1>ghkasdcvashcvasvcghas</h1>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae sint ipsa sequi inventore quas aperiam culpa odio, modi eius dolore veritatis ratione facilis dicta fuga eos ullam iure distinctio magni.lorem </p>

<section id="gap">
    <div class="container-custom-margen">
        <div class="container gap100">
            <x-form />
        </div>
    </div>
</section>
{{-- Changes gap-section background image --}}
@php
$background=asset('storage/gap/gap-1.jpg');
@endphp

@endsection
@section('footer')
@component('layouts.footer2')
@endcomponent
@endsection





@section('extra_scripts')
{{-- Changes gap-section background image --}}
<script>
    let root = document.documentElement;

    root.style.setProperty('--gap-image', "url({{$background}})");

</script>
@endsection

