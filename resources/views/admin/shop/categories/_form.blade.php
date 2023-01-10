<div class="row">
    <div class="col-md-12 col-12">
        <div class="form-text form-group">
            <label for="name">Category</label>
            {{ Form::text('name', null, ['class'=>"form-control","placeholder"=>"Category","id"=>"name"]) }}
            @if($errors->has('name'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('name') }}</span>
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
                }
            },
            messages:{
                name: {
                    required: required_msg,
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
