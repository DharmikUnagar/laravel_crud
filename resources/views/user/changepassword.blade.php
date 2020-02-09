@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Change Password</h1>
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
                            <div class="card ">
                                <div class="card-header bg-secondary ">
                                    <h3 class="card-title">Change Password</h3>
                                </div>
                                {{ html()->form('POST')->id('formsubmit')->class('form-horizontal')->open() }}

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Old Password<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Enter Old Password">
                                            <p id="errold_password" class="text-danger">
                                                <p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">New Password<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                                            <p id="errnew_password" class="text-danger">
                                                <p>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-sm-3 col-form-label">Confirm Password<span class="required">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password">
                                            <p id="errconfirm_password" class="text-danger">
                                                <p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-success btn-md pull-right" type="submit">Create</button>
                                    <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                                </div>
                            </div>

                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">

            </div>
        </div>
    </div>
</section>

@push('after-scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#formsubmit').on('submit', function(event) {
        event.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: "{{route('change-password',Auth::id())}}",
            method: 'POST',
            data: formData,
            contentType: false,
            cache: false,
            processData: false,
            dataType: "json",
            success: function(data) {
                window.location.href = "{{URL::to('/')}}"
            },
            error: function(request, status, error) {
                $errorarray = request.responseJSON.errors;

                if (jQuery.inArray('old_password', $errorarray)) {
                    $("#errold_password").text(request.responseJSON.errors.old_password);
                }

                if (jQuery.inArray('new_password', $errorarray)) {
                    $("#errnew_password").text(request.responseJSON.errors.new_password);
                }

                if (jQuery.inArray('confirm_password', $errorarray)) {
                    $("#errconfirm_password").text(request.responseJSON.errors.confirm_password);
                }
            }
        });
    });
</script>
@endpush
@endsection