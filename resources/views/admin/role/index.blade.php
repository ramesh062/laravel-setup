@extends('admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{!! route("admin.roles.create") !!}" class="btn btn-primary btn-sm"><i class="fa fa-add"></i>Add</a>
            </div>

            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                <table class="table table-striped dt-responsive nowrap" id="datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@push("styles")
<link rel="stylesheet" href="{{asset("assets/plugins/sweetalert2/sweetalert2.min.css")}}"/>
<link rel="stylesheet" href="{{asset("assets/plugins/datatable/css/dataTables.bootstrap5.min.css")}}"/>
<link rel="stylesheet" href="{{asset("assets/plugins/datatable/css/responsive.bootstrap5.min.css")}}"/>
@endpush
@push("scripts")
<script src="{{asset("assets/plugins/sweetalert2/sweetalert2.all.min.js")}}"></script>
<script src="{{asset("assets/plugins/datatable/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/plugins/datatable/js/dataTables.bootstrap5.min.js")}}"></script>
<script src="{{asset("assets/plugins/datatable/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("assets/plugins/datatable/js/responsive.bootstrap5.min.js")}}"></script>
<script>
var oTable="";
jQuery(function($){
    oTable = $('#datatable').DataTable({
        dom: '<"row" <"col-sm-4"l> <"col-sm-4"r> <"col-sm-4"f>> <"row"  <"col-sm-12"t>> <"row" <"col-sm-5"i> <"col-sm-7"p>>',
        processing: false,
        serverSide: true,
        responsive: false,
        pagingType: "full_numbers",
        stateSave: false,
        ajax: {
            url: "{!! route("admin.roles.index") !!}",
            data: function (d) {}
        },
        columns: [
            { data: 'id', name: 'id'},
            { data: 'name', name: 'name'},
            {
                data:  null,
                orderable: false,
                searchable: false,
                render:function(o){
                    var str="";
                    var deleteUrl="{{ $moduleRoute }}/" + o.id;
                    str +="<a href='{{ $moduleRoute }}/" + o.id + "/edit' data-toggle='tooltip' title='Edit'><i class='fa fa-edit text-info'></i></a>";
                    str += "&nbsp;&nbsp;<a href='javascript:void(0);' data-toggle='tooltip' title='Delete' class='deleteRecord' val='" + o.id + "'><i class='fa fa-trash text-danger'></i></a> ";
                    return str;
                },responsivePriority: 1, targets: -1, width: '10%',
            }
        ]
    })
    //delete Record
    jQuery(document).on('click', '.deleteRecord', function(event) {
        var id = $(this).attr('val');
        var deleteUrl = "{!!  $moduleRoute  !!}/" + id;
        var isDelete = deleteRecordByAjax(deleteUrl, "{{__($moduleName)}}", oTable);
    });
});
</script>
@endpush
@endsection
