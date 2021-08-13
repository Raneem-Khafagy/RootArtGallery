<a href="{{route('art-piece',$item)}}">
    <img class="" src="{{asset($item ->image)}}" alt="Generic placeholder image" width="100%">
</a>
<h2 class="display-4">{{$item->name}}</h2>
@auth
<div class="art-piece.fav">
    <form method="post" action="{{route($route,$item->id)}}">
        @csrf
        @method("$method")
        @if($method==='POST')
        <button formaction="{{route('favourites')}}" type="submit" class="btn btn-outline-dark ">{{$text}}</button>
        @else
        <button type="submit" class="btn btn-outline-dark ">{{$text}}</button>
        @endif
    </form>
</div>
@endauth
