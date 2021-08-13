@extends('layouts.app')

@section('headers')
<title>{{$category->name}}</title>
@endsection
@section('content')
<div class="container-custom-margen">
    <div class="related-category-header">
        <h2 class="display-3">{{$category->name}}</h2>
    </div>
</div>
<div class="container-custom-margen">
    <div class="row">
        @foreach($data as $item )
        <x-art-piece-mini :item="$item"/>
        @endforeach
    </div>
</div>
@endsection
