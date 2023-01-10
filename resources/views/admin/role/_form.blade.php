<div class="row">
    <div class="col-md-12 col-12">
        <div class="form-text form-group">
            <label for="name">Role</label>
            {{ Form::text('name', null, ['class'=>"form-control","placeholder"=>"Role","id"=>"Role name"]) }}
            @if($errors->has('name'))
                <span class="help-block text-danger m-b-none">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="form-group">
            <div class="card">
                <div class="card-header d-flex justify-content-between text-center">
                    <h5 class="card-title text-center">{{trans('Accessibility')}}</h5>
                </div>

                <div class="card-body select-all-access">
                    <div class="form-group">
                        <label><input type="checkbox" class="selectAll" name="accessAll"> {{trans('Select All')}}</label>
                    </div>

                    <table class=" table table-hover table-striped table-bordered text-center">
                        <thead class="thead-dark">
                        <tr>
                            <th class="text-left">@lang('Permissions')</th>
                            <th>@lang('View')</th>
                            <th>@lang('Add')</th>
                            <th>@lang('Edit')</th>
                            <th>@lang('Delete')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(config('permissions') as $key => $value)
                            <tr>
                                <td data-label="Permissions" class="text-left">{{$value['label']}}</td>
                                <td data-label="View">
                                    @if(!empty($value['access']['view']))
                                        <input type="checkbox" value="{{join(',',$value['access']['view'])}}" name="access[]"
                                            @if(array_intersect( $value['access']['view'], $result->permissions??[] ))
                                                checked
                                            @endif
                                        />
                                    @endif
                                </td>
                                <td data-label="Add">
                                    @if(!empty($value['access']['add']))
                                        <input type="checkbox" value="{{join(",",$value['access']['add'])}}" name="access[]"
                                            @if(array_intersect( $value['access']['add'], $result->permissions??[] ))
                                                checked
                                            @endif
                                        />
                                    @endif
                                </td>
                                <td data-label="Edit">
                                    @if(!empty($value['access']['edit']))
                                        <input type="checkbox" value="{{join(",",$value['access']['edit'])}}" name="access[]"
                                            @if(array_intersect( $value['access']['edit'], $result->permissions??[] ))
                                                checked
                                            @endif
                                        />
                                    @endif
                                </td>
                                <td data-label="Delete">
                                    @if(!empty($value['access']['delete']))
                                        <input type="checkbox" value="{{join(",",$value['access']['delete'])}}" name="access[]"
                                            @if(array_intersect( $value['access']['delete'], $result->permissions??[] ))
                                                checked
                                            @endif
                                        />
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
