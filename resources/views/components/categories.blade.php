<div id="categories">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="category"> <a href="{{route('category',$category->id)}}">
                    <div class="category-overlay">
                        <div class="category-details fadeIn-bottom">
                            <h3 class="c-title">{{$category ->name}}</h3>
                        </div>
                    </div>
                    <img class="category-image" src="{{$category ->image}}"
                        class="img-responsive">
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
