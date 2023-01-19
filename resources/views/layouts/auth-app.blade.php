<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Admin</title>

    <link href="{{asset("assets/css/styles.css")}}" rel="stylesheet" />
    <link href="{{asset("assets/css/custom.css")}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    @stack("styles")
</head>
 <body class="sb-nav-fixed">
     <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset("assets/js/scripts.js")}}"></script>
<script src="{{asset("assets/plugins/toastr/toastr.min.js")}}"></script>
<script>
    @if(\Session::has('error'))
        toastr.error('{{ \Session::get('error') }}', 'Error');
    @endif
    @if(\Session::has('success'))
        toastr.success('{{ \Session::get('success') }}', 'Success');
    @endif

    function fnToastSuccess(message) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success(message);
    }

    function fnToastError(message) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.error(message);
    }
</script>
@stack("scripts")
</body>
</html>
