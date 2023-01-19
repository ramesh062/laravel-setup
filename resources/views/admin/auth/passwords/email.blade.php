@extends('admin.layouts.auth-app')

@section('content')
<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">{{ __('Reset Password') }}</h5>
    <small>{{__('Please enter your registered email address to reset password.')}}</small>
</div>

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<form id="form_validate" class="row g-3 needs-validation" method="POST" action="{{ route('admin.password.email') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <div class="col-12">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('Email Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</form>
@endsection
@push("scripts")
{{-- jQuery Validate --}}
<script src="{{ asset('/plugins/jquery-validator/jquery.validate.min.js') }} "></script>
<script src="{{ asset('/plugins/jquery-validator/additional-methods.min.js') }} "></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        var required_msg = 'This field is required';
        $("#form_validate").validate({
            errorClass:'text-danger',
            errorElement:'div',
            rules: {
                email: {
                    email:true,
                    required: true,
                }
            },
            messages:{
                email: {
                    email:"Please enter valid email address",
                    required: required_msg,
                },
           },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
            submitHandler:function(form){
                form.submit();
            }
        });
    });
</script>
@endpush

