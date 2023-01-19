@extends('admin.layouts.auth-app')

@section('content')
<div class="pt-4 pb-2">
    <h5 class="card-title text-center pb-0 fs-4">{{__("Register")}}</h5>
</div>
<form method="POST" id="form_validate" class="row g-3 needs-validation" action="{{ route('admin.register') }}">
    @csrf
    <div class="col-6">
        <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" placeholder="{{__("Enter First Name")}}" value="{{ old('first_name') }}" required autofocus>
        @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-6">
        <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" placeholder="{{__("Enter Last Name")}}" value="{{ old('last_name') }}" required/>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12">
        <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile Number') }}</label>
        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" placeholder="{{__("Enter Mobile Number")}}" value="{{ old('mobile') }}" required/>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="col-12">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{__("Enter Email Address")}}" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{__("Enter Password")}}" autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="col-12">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="{{__("Enter Confirm Password")}}">
    </div>
    <div class="col-12">
        <div class="row">
            <label for="role" class="col-form-label text-md-right">{{ __('Select Role') }}</label>
            @foreach($roles as $role_id=>$role)
            <div class="col-4">
                <input class="form-check-input" name="role_id[]" type="checkbox" value="{{$role_id}}" id="{{$role."-".$role_id}}" @if($role_id==3) {{"checked"}} @endif>
                <label class="form-check-label" for="distributor">{{$role}}</label>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Create Account</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Already have an account? <a href="{{route("admin.login")}}">Log in</a></p>
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
