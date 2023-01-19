@extends('admin.layouts.auth-app')

@section('content')
<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">{{__("Set Password")}} </h5>
    <span>Pleases set your new password below for future login</span>
</div>

<form method="POST" id="form_validate" class="row g-3 needs-validation" action="{{ route('admin.password.request') }}" aria-label="{{ __('Reset Password') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="col-12">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}"  name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">
            {{ __('Reset Password') }}
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
                },
                password:{
                    required: true,
                    minlength: 8
                },
                password_confirmation:{
                    required: true,
                    minlength: 8,
                    equalTo: '[name="password"]'
                }
            },
            messages:{
                email: {
                    email:"Please enter valid email address",
                    required: required_msg,
                },
                password:{
                    required: required_msg
                },
                password_confirmation:{
                    required: required_msg
                }
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
