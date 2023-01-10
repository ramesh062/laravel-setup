<div class="row">
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label class="form-text" for="first-name-column">Full Name</label>
            {{ Form::text('name', null, ['class'=>"form-control","placeholder"=>"full Name","id"=>"first-name-column"]) }}
            @if($errors->has('name'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('name') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label class="form-text" for="last-name-column">Email</label>
            {{ Form::email('email', null, ['class'=>"form-control","placeholder"=>"Email","id"=>"email-column"]) }}
            @if($errors->has('email'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label class="form-text" for="password">Password</label><br/>
            {{ Form::password('password', null, ['class'=>"form-control","placeholder"=>"Password","id"=>"password"]) }}
            @if($errors->has('password'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('password') }}</span>
            @endif
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-text" class="form-group">
            <label for="confirm_password">Confirm Password</label><br/>
            {{ Form::password('confirm_password', null, ['class'=>"form-control","placeholder"=>"Confirm Password","id"=>"confirm_password"]) }}
        </div>
    </div>
    <div class="form-text" class="col-md-6 col-12">
        <div class="form-group">
            <label for="role-column">Role</label>
            {{ Form::select('role_id',$roles, null, ['class'=>"form-control","placeholder"=>"Select Role","id"=>"role-column"]) }}
            @if($errors->has('role_id'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('role_id') }}</span>
            @endif
        </div>
    </div>
    <div class="col-12 d-flex justify-content-start mt-4">
        <button type="submit" class="btn btn-primary me-1 mb-1 btn-sm">Submit</button>
        <button type="reset" class="btn btn-light-secondary me-1 mb-1 btn-sm">Reset</button>
    </div>
</div>
@push('scripts')
{{-- jQuery Validate --}}
<script src="{{ asset('/assets/plugins/jquery-validator/jquery.validate.min.js') }} "></script>
<script src="{{ asset('/assets/plugins/jquery-validator/additional-methods.min.js') }} "></script>
<script type="text/javascript">
    $(document).ready(function () {
        var required_msg = 'This field is required';
        $("#form_validate").validate({
            errorClass:'text-danger',
            errorElement:'div',
            rules: {
                name: {
                    required: true,
                },
                email: {
                    email:true,
                    required: true,
                },
                role_id: {
                    required: true,
                },
                password:{
                    required: true,
                    minlength: 8
                },
                confirm_password:{
                    required: true,
                    minlength: 8,
                    equalTo: '[name="password"]'
                }
            },
            messages:{
                name: {
                    required: required_msg,
                },
                email: {
                    email:"Please enter valid email address",
                    required: required_msg,
                },
                role_id: {
                    required: required_msg,
                },
                password:{
                    required: required_msg
                },
                confirm_password:{
                    required: required_msg
                }
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element);
            },
             submitHandler:function(form){
                form.submit();
                return false;
            }
        });
    });
</script>
@endpush
