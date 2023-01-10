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
 <body id="app" class="sb-nav-fixed">
    @include("admin.layouts.header")
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            @include("admin.layouts.sidebar")
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h4 class="mt-4">{{$moduleName??""}}</h4>
                    {{--  <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>  --}}
                    <div>
                        @yield('content')
                    </div>
                </div>
            </main>
            @include("admin.layouts.footer")
        </div>
    </div>
<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("assets/plugins/jquery/jquery.min.js")}}"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset("assets/js/scripts.js")}}"></script>
<script src="{{asset("assets/plugins/toastr/toastr.min.js")}}"></script>
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
