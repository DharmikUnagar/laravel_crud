@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Employees</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a class="btn btn-primary" href="{{ url('employees/create') }}"> Create Employee</i></a>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <table class="table table-bordered data-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Photo </th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Salary</th>
                                <th>Mobile Number</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('js')
<script type="text/javascript">
    $(function () {
        setTimeout(function() {
        $(".alert-danger").hide();
    }, 3000);
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            autoWidth: false,
            responsive: true,
            ajax: "{{ route('employees.index') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'image', name: 'image', orderable: false, searchable: false, width: "200px"},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'salary', name: 'salary'},
                {data: 'phno', name: 'phno'},
                {data: 'dob', name: 'dob'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click', '.editItem', function () {
            var item_url = $(this).data("url");
            window.location.href = item_url;
        });

        $('body').on('click', '.viewItem', function () {
            var item_url = $(this).data("url");
            window.location.href = item_url;
        });

        $('body').on('click', '.deleteItem', function () {
            var employee_id = $(this).data("id");
            swal({
            title: 'Are You sure want to delete?',
            text: 'You will not be able to recover this employee!',
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: false
            },
            function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ url('employees') }}"+'/'+employee_id,
                    success: function (data) {
                        swal("Deleted!", "Employee record has been deleted.", "success");
                        table.draw();
                    },
                    error: function (data) {
                        swal("Error!", "Employee record not deleted.", "error");
                    }
                });
            } else {
                swal("Cancelled", "Employee record is safe :)", "error");
            }
            });
        });
    });
</script>
@endsection