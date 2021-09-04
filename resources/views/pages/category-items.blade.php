@extends('layouts.app')

@section('headers')
<title>{{$category->name}}</title>
@endsection
@section('content')
<div class="container-custom-margen">
    <div class="category-header">
        <h2 class="display-3">{{$category->name}}</h2>
    </div>
</div>
<div class="container-custom-margen">
    <div class="row">
        @foreach($data as $item )
        <div class="col-xl-3 col-lg-6 col-md-6 p-2 ">
            <div class="d-flex justify-content-between align-items-center  flex-column"  >
                <x-art-piece-mini :item="$item" method='post' route="art-piece.fav" text="Add to favourites" />
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
@section('footer')
@component('layouts.footer1')
@endcomponent
@endsection
