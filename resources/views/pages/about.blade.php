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
    {{asset('storage/about-image-1.jpg')}}
    @endslot
    @slot('second_slide')
    {{asset('storage/about-image-2.jpg')}}
    @endslot
    @slot('third_slide')
    {{asset('storage/about-image-3.jpg')}}
    @endslot
    @endcomponent
</div>
{{-- end carousel --}}
<div class="container">
    <div class=" row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Enjoy your time</h2>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos voluptatem sunt sed
                voluptatibus optio, Voluptas.</p>
        </div>

        <div class="col-md-5">
            <img src={{asset('storage/about.jpg')}}
                class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                height="500">
        </div>
    </div>
</div>


{{-- Team members --}}
<div id="category-card">
    <div class=" category-header">
        <h4 class=" d-flex justify-content-center">People Behing Idea</h4>
        <h5 class="display-2 d-flex justify-content-center">Our Team</h5>
    </div>
    <div class="container top-buffer">
        <div class="row">
            @for ($x = 1; $x <= 4; $x++)
            <div class="col-xl-3 col-lg-6 col-md-6m p-2">
                <div class="d-flex justify-content-between align-items-center  flex-column">
                    <img class="" src="storage/team/team-{{$x}}.jpg" alt="team member" width="100%">

                </div>
            </div>
            @endfor
        </div>
    </div>


</div>
{{-- end Team members --}}
@endsection
@section('footer')
@component('layouts.footer2')
@endcomponent
@endsection
