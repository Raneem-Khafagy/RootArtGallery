@extends('layouts.app')
@section('headers')
<title>contact</title>
@endsection

@section('active_Contact')
active
@endsection

@section('content')
{{-- Header picture --}}
<img src="{{asset('storage/contact.jpg')}}">
{{-- end Header picture --}}
<div class="container top-buffer">
    <x-feature route="{{asset('storage/feature-1.jpg')}}" text="First" class1=" " class2=" " />
    <hr class="featurette-divider">
    @component('components.feature')
    @slot('route')
    {{asset('storage/feature-2.jpg')}}
    @endslot
    @slot('text')
    Second
    @endslot
    @slot('class1')
    order-md-2
    @endslot
    @slot('class2')
    order-md-1
    @endslot
    @endcomponent
</div>

<section id="gap">
    <div class="container-custom-margen">
        <div class="container gap100">
            <x-form />
        </div>
    </div>

</section>
{{-- Changes gap-section background image --}}
@php
$background=asset('storage/gap/gap-2.jpg');
@endphp

@endsection
@section('footer')
@component('layouts.footer1')
@endcomponent
@endsection





@section('extra_scripts')
{{-- Changes gap-section background image --}}
<script>
    let root = document.documentElement;

    root.style.setProperty('--gap-image', "url({{$background}})");

</script>
@endsection
