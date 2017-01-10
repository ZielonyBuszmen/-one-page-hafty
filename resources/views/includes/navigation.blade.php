<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
<div id="" href="#" class=" lang-toggle">
    @foreach($lang_array as $lang)
        <a href="{{url($lang['url'])}}" class="btn btn-dark btn-sm toggle">
            <img src="{{$lang['flag']}}" style="width: 40px; height: 20px;">
        </a>
    @endforeach
</div>

<nav id="sidebar-wrapper">

    <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>


        <li class="sidebar-brand">
            <a href="#top" onclick=$("#menu-close").click();>{{ trans('messages.title') }}</a>
        </li>
        <li>
            <a href="#top" onclick=$("#menu-close").click();>Start</a>
        </li>
        <li>
            <a href="#about" onclick=$("#menu-close").click();>{{ trans('messages.about_me') }}</a>
        </li>
        <li>
            <a href="#gallery" onclick=$("#menu-close").click();>{{ trans('messages.gallery') }}</a>
        </li>
        <li>
            <a href="#guest_book" onclick=$("#menu-close").click();>{{ trans('messages.guest_book') }}</a>
        </li>
        <li>
            <a href="#contact" onclick=$("#menu-close").click();>{{ trans('messages.contact') }}</a>
        </li>
    </ul>
</nav>