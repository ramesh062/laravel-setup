<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: Admin</title>
    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/simple-datatables/style.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    {{--  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>  --}}
    @stack("styles")
</head>
 <body id="app">
    @include("admin.layouts.header")
    @include("admin.layouts.sidebar")
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{$moduleName??""}}</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Example Card</h5>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include("admin.layouts.footer")
    <script src="{{asset("js/app.js")}}"></script>
    <script src="{{asset('vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset("plugins/toastr/toastr.min.js")}}"></script>
    <script>
    function deleteRecordByAjax(deleteUrl, moduleName, dataTablesName, appendMsg) {
        appendMsg = appendMsg || '';
        var deleteAlertStr = "{{ __('admin/general.delete_confirm_msg') }}"+" "+moduleName+"? "+appendMsg;

        Swal.fire({
                title: "{{ __('admin/general.are_you_sure') }}",
                text: deleteAlertStr,
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "{{ __('admin/general.yes') }}",
                cancelButtonText: "{{ __('admin/general.no') }}",
                showLoaderOnConfirm: true,
                allowOutsideClick:false,
                allowEscapeKey:false,
                preConfirm: function (email) {
                    return new Promise(function (resolve, reject) {
                        setTimeout(function() {
                            jQuery.ajax({
                                url: deleteUrl,
                                type: 'DELETE',
                                dataType: 'json',
                                data: {
                                    "_token": "{{csrf_token()}}"
                                },
                                success: function (result) {
                                    dataTablesName.draw();
                                    Swal.fire({
                                        type: 'success',
                                        title: '{{ __('admin/general.success') }}',
                                        confirmButtonText: '{{ __('admin/general.ok') }}',
                                        html: moduleName+' '+'{{ __('admin/general.delete_success_msg') }}'
                                    });
                                    {{--  fnToastSuccess(result.message);  --}}
                                },
                                error: function (xhr, status, error) {
                                    if(xhr.responseJSON && xhr.responseJSON.message!=""){
                                        Swal.fire({
                                            type: 'error',
                                            title: '{{ __('admin/general.ohh_snap') }}',
                                            confirmButtonText: '{{ __('admin/general.ok') }}',
                                            html: xhr.responseJSON.message
                                        });
                                    } else {
                                        Swal.fire({
                                            type: 'error',
                                            title: '{{ __('admin/general.ohh_snap') }}',
                                            confirmButtonText: '{{ __('admin/general.ok') }}',
                                            html: '{{ __('admin/general.error_msg') }}'
                                        });
                                    }
                                    ajaxError(xhr, status, error);
                                }
                            });
                        }, 0)
                    })
                },
            });
    }

    function ajaxError(xhr, status, error) {
        if(xhr.status ==401){
            fnToastError("{{ __('admin/general.login_error') }}");
        }else if(xhr.status == 403){
            fnToastError("{{ __('admin/general.permission_error') }}");
        }else if(xhr.responseJSON && xhr.responseJSON.message!=""){
            fnToastError(xhr.responseJSON.message);
        }else{
            fnToastError("{{ __('admin/general.default_error') }}");
        }
    }

    setTimeout(function(){
        $('.has-error').find('.help-block').hide();
        $('.form-group.has-error').removeClass('has-error');
    },8000);
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        timeOut: 5000
    };

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

    function ajaxError(xhr, status, error) {
        if(xhr.status ==401){
            fnToastError("{{ __('admin/general.login_error') }}");
        }else if(xhr.status == 403){
            fnToastError("{{ __('admin/general.permission_error') }}");
        }else if(xhr.responseJSON && xhr.responseJSON.message!=""){
            fnToastError(xhr.responseJSON.message);
        }else{
            fnToastError("{{ __('admin/general.default_error') }}");
        }
    }

    createTag=function(tag,attribute={}){
        return $(tag,attribute);
    }
</script>
@stack("scripts")
</body>
</html>
