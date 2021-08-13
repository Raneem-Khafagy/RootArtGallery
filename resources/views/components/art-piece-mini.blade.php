<div class="col-xl-3 col-lg-6 col-md-6 p-2 ">
    <div class="d-flex justify-content-between align-items-center  flex-column" id='art-piece-mini'>
        <a href="{{route('art-piece',$item)}}">
            <img class="" src="{{asset($item ->image)}}" alt="Generic placeholder image" width="100%">
        </a>
        <h2 class="display-4">{{$item->name}}</h2>

    </div>
</div>
