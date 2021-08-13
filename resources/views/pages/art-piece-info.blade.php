@extends('layouts.app')

@section('headers')
<title>Art Piece</title>
@endsection
@section('content')
<div class="row ">
    <div class="container-custom-margen">

        <h2 class="display-3 ">{{$category->name}}</h2>

        <div id="art-piece" class="">
            <div class=" row">
                <x-art-piece :item="$art_piece" />
            </div>
        </div>
        <hr>

        <div id="category">

            <h1 class="category-header">Related Pieces</h1>

            <div class="container-fluid  row">
                @foreach($data as $item )
                <x-related-category :item="$item" />
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@component('layouts.footer1')
@endcomponent
@endsection
