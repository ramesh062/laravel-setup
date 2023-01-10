<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Plugins JS File -->
<script src="{{asset("js/jquery.min.js")}}"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("js/plugins.min.js")}}"></script>
<script src="{{asset("js/optional/isotope.pkgd.min.js")}}"></script>
<script src="{{asset("js/jquery.appear.min.js")}}"></script>
<script src="{{asset("js/jquery.plugin.min.js")}}"></script>
<script src="{{asset("js/jquery.countdown.min.js")}}"></script>

<!-- Main JS File -->
<script src="{{asset("js/main.min.js")}}"></script>

<script>
jQuery(function($){
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700', 'Oswald:300,400']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
});
</script>
