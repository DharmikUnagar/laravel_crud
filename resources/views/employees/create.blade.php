@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                @if(!isset($employee))
                <h1 class="m-0 text-dark">Create Employee</h1>
                @else
                <h1 class="m-0 text-dark">Edit Employee</h1>
                @endif
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-12 col-6">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            
                            {{ html()->form('POST')->id('formsubmit')->class('form-horizontal')->attribute('enctype', 'multipart/form-data')->open() }}
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <h4 class="card-title mb-0">
                                            @if(!isset($employee))
                                            Create Employee
                                            @else
                                            Edit Employee
                                            @endif
                                                <small class="text-muted"></small>
                                            </h4>
                                        </div><!--col-->
                                    </div><!--row-->

                                    <hr>

                                    <div class="row mt-4 mb-4">
                                        <div class="col">
                                            <div class="form-group row">
                                            {{ html()->label(__('Name <span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('name') }}
                                                <div class="col-md-10">
                                                    {{ html()->text('name')
                                                        ->class('form-control')
                                                        ->placeholder('Name')
                                                        ->value(@$employee->name)
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->

                                            <div class="form-group row">
                                            {{ html()->label(__('Email<span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('email') }}
                                                <div class="col-md-10">
                                                    {{ html()->email('email')
                                                        ->class('form-control')
                                                        ->placeholder('Email')
                                                        ->value(@$employee->email)
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->
                                            @if(!isset($employee))
                                            <div class="form-group row">
                                            {{ html()->label(__('Password<span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('password') }}
                                                <div class="col-md-10">
                                                    {{ html()->password('password')
                                                        ->class('form-control')
                                                        ->placeholder('Password')
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->
                                            @endif
                                            <div class="form-group row">
                                            {{ html()->label(__('Salary<span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('salary') }}
                                                <div class="col-md-10">
                                                    {{ html()->text('salary')
                                                        ->class('form-control')
                                                        ->placeholder('Salary')
                                                        ->value(@$employee->salary)
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->
                                            <div class="form-group row">
                                            {{ html()->label(__('Phone Number<span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('phno') }}
                                                <div class="col-md-10">
                                                    {{ html()->text('phno')
                                                        ->class('form-control')
                                                        ->placeholder('Phone Number')
                                                        ->value(@$employee->phno)
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->
                                            
                                            <div class="form-group row">
                                                {{ html()->label('Image')->class('col-md-2 form-control-label')->for('image') }}
                                                <div class="col-md-9">
                                                    <div class="form-group">    
                                                    <div class="input-group" name="image">
                                                        <input type="hidden" name="old_image" value="{{ @$employee->image }}"/>
                                                        <input type="file" name="image" id="image" class="form-control" placeholder='Choose a file...' multiple="" />
                                                        <span class="input-group-append">
                                                        <button class="btn btn-danger btn-reset" type="button" onclick="document.getElementById('image').value = null;">Delete</button>
                                                        </span>
                                                    </div>
                                                    </div>
                                                </div>
                                                @if(isset($employee))
                                                <div class="col-md-1">
                                                    <img src="{{ asset('images/upload/'.@$employee->image) }}" style="width:100%;" class="mb-2 img-thumbnail" />
                                                </div>
                                                @endif
                                            </div>
                                            <div class="form-group row">
                                            {{ html()->label(__('DOB<span style="color:red">*</span>'))->class('col-md-2 form-control-label')->for('dob') }}
                                                <div class="col-md-10">
                                                    {{ html()->date('dob')
                                                        ->class('form-control')
                                                        ->placeholder('DOB')
                                                        ->value(@$employee->dob)
                                                        ->attribute('maxlength', 191)}}
                                                    <div class="invalid-feedback"></div>
                                                </div><!--col-->
                                            </div><!--form-group-->
                                        </div><!--col-->
                                    </div><!--row-->
                                </div><!--card-body-->
                                <div class="card-footer clearfix">
                                    <div class="row">
                                        <div class="col">
                                            <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                                        </div><!--col-->
                                        <div class="col text-right">
                                        @if(!isset($employee))
                                            <button class="btn btn-success btn-md pull-right" type="submit">Submit</button>
                                        @else
                                            <button class="btn btn-success btn-md pull-right" type="submit">Update</button>
                                        @endif
                                        </div><!--col-->
                                    </div><!--row-->
                                </div><!--card-footer-->
                            </div><!--card-->
                        {{ html()->form()->close() }}
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(!empty($employee->id))
    @php 
        $url = route('employees.update', @$employee->id); 
        $redirect_url = route('employees.index');
    @endphp
@else
    @php 
        $url = route('employees.store');
        $redirect_url = route('employees.index');
    @endphp
@endif
@push('after-scripts')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#formsubmit').on('submit', function(event) {
        event.preventDefault();

        $('.has-danger').next().children().children().css({
            "border": ""
        });
        $('.is-invalid').removeClass("is-invalid");
        $('.invalid-feedback').html("");
        $('.has-danger').removeClass("has-danger");

        var formData = new FormData($(this)[0]);

        $( ".pref_check" ).each(function( key, value ) {
            if(value.value == 0){
                formData.append(value.name, value.value);
            }
        });
        var employeeid = '{{ @$employee->id }}';
        if (employeeid != '') {
            formData.append('_method', 'PUT');
        }
        $.ajax({
            url: "{{ $url }}",
            method: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            beforeSend: function() {
                    $('.loading').addClass('loading_hide');
            },
            success: function(data) {
                if (data.status == 'success') {
                    $('.loading').removeClass('loading_hide');
                    swal("Saved", "You clicked the button!", "success");
                    setTimeout(function() {
                        window.location.href = "{{ $redirect_url }}";
                    }, 500);
                }
                if (data.status == 'error') {
                    $('.loading').addClass('loading_hide');
                    swal("Error!", "You clicked the button!", "error");
                }
            },
            error: function(data) {
                $('.loading').removeClass('loading_hide');
                if (data.status === 422) {
                   swal("Error!", data.responseJSON.message, "error");
                    $('.btn-success').removeAttr('disabled');
                    var errors = [];
                    errors = data.responseJSON.errors
                    $.each(errors, function(key, value) {
                        $('#' + key).parent().addClass('has-danger');
                        $('#' + key).addClass('is-invalid');
                        $('#' + key).parent('.has-danger').find('.invalid-feedback').html(value);
                        $('#' + key).next().children().children().css({
                            "border": "1px solid #f86c6b"
                        });
                    })
                }
            }
        });
    });

    $('body').on('click', '.pref_check', function(){
        if(this.checked){
            $(this).val(1);
            $(this).attr('checked','checked');
        }else{
            $(this).val(0);
            $(this).removeAttr('checked');
        }
    })
    $('body').on('click', '.type_check', function(){
        if(this.checked){
            $(this).val(1);
            $(this).attr('checked','checked');
        }else{
            $(this).val(0);
            $(this).removeAttr('checked');
        }
    })
</script>
@endpush
@endsection
