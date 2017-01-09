<section id="gallery">

    <h2>TODO:</h2>
    - zrobić ładne logo w tle na początku -> może zamiast budynków miasta dać zdjęcia haftów? <br><br>
    - napisać księgę gości + zrobić do niej ładny wygląd + skopiować wpisy ze starej


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


            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h1> <b>Galeria</b></h1>
                </div>
            </div>
        <div class="row">
            @foreach($photos as $photo)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="{{url($photo_dir.$photo)}}" class="thumbnail" href="#">
                    <img class="img-responsive" src="{{$thumb_dir.$photo}}" alt="">
                </a>
            </div>
            @endforeach

        </div>
    </div>

</section>