@extends('admin.layouts.auth-app')

@section('content')
<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
    <p class="text-center small">Enter your username & password to login</p>
</div>
<form class="row g-3 needs-validation" id="form_validate" novalidate method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
    @csrf
    <div class="col-12">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Password</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-6">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>
    </div>
    <div class="col-6">
        @if (Route::has('admin.password.request'))
            <p class="small mb-0"><a class="small" href="{{ route('admin.password.request') }}">{{ __('Forgot Your Password?') }}</a></p>
        @endif
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary w-100" type="submit">Login</button>
    </div>
      <div class="col-6">
        @if (Route::has('admin.password.request'))
            <p class="small mb-0"><a class="small" href="{{ route('admin.register') }}">{{ __('Register User?') }}</a></p>
        @endif
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
           },
            errorPlacement: function(error, element) {
                {{--  if($(element).prop("name")=="email")
                    $(element).parents('.input-group').parent().append(error)
                    error.appendTo($(element).parents('.input-group'));
                else  --}}
                    error.insertAfter(element);
            },
            submitHandler:function(form){
                form.submit();
            }
        });
    });
</script>
@endpush
