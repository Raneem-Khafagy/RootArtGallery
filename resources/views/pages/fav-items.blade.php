@extends('layouts.app')
@section('headers')
<title>Favourites</title>
@endsection
@section('active_Favourites')
active
@endsection
@section('content')
<div class="container-custom-margen">
    <div class="category-header">
        <h2 class="display-3">Favourites</h2>
    </div>
    <div class=" row">
        @foreach($art_pieces as $item )
        <div class="col-xl-3 col-lg-6 col-md-6 p-2 ">
            <div class="d-flex justify-content-between align-items-center  flex-column" id='art-piece-mini'>
                <x-art-piece-mini :item="$item" method='delete' route="art-piece.unfav" text="Remove from favourits" />
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
