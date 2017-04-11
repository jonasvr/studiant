<div id="myCarousel" class="carousel slide " data-ride="carousel" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @foreach($images as $key => $image)
        <li data-target="#myCarousel" data-slide-to="{{$key}}" class={{$key == 1?:'active'}}></li>
        @endforeach
    </ol>



    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @foreach($images as $key => $image)
        <div class="item {{$key == 1?:'active'}}">
            <img src="{{asset($image->path)}}" class="max-height-400 img-responsive center-block">
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="fa fa-arrow-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="fa fa-arrow-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>