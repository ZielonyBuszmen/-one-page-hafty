<!-- jQuery -->
{{ Html::script('js/jquery.js') }}

<!-- Bootstrap Core JavaScript -->
{{ Html::script('js/bootstrap.min.js') }}

<!-- Custom Theme JavaScript -->
{{ Html::script('js/stylish_portfolio.js') }}


{{ Html::script('blueimp_gallery/blueimp-gallery.min.js') }}

<!-- BlueImp -->
<script>
    document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
    };
</script>