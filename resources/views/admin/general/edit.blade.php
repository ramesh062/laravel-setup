@extends('admin.layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{$FormName}}</div>
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
                {!! Form::model($result, array('url' => $moduleRoute.'/'.$result->id, 'method' => 'PUT', "enctype"=>"multipart/form-data",'class'=>'form-horizontal','id'=>'form_validate', 'autocomplete'=>'off')) !!}
                    @include("$moduleView._form")
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
