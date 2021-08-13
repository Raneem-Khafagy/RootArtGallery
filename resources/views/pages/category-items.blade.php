@extends('layouts.app')

@section('headers')
<title>{{$category->name}}</title>
@endsection
@section('content')
<div class="container-custom-margen">
    <div class="container-fluid related-category-header">
        <h2 class="display-3">{{$category->name}}</h2>
    </div>
</div>

@endsection
