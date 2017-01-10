<section id="gallery">

    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <div id="links">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1><b>{{ trans('messages.gallery') }}</b></h1>
                </div>
            </div>
            <div class="row">
                @foreach($photos as $photo)
                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a href="{{url($photo['photo'])}}" class="thumbnail" href="#">
                            <img class="img-responsive" src="{{$photo['thumbnail']}}" alt="">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</section>