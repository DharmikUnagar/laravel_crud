<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Employee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <?php echo View::make('layouts/links'); ?>
  <style>  .required{ color: red;}  </style>
</head>
<body class="hold-transition sidebar-mini">

  <?php echo View::make('layouts/top_header'); ?>

  <?php echo View::make('layouts/side_link'); ?> 
 <div class="wrapper" >
    <div class="content-wrapper">
      <section class="content-header">
      <div class="row">
      <div class="col-lg-12 margin-tb">
          

    </div>
    </div>
    </section>

    <section class="content">
      <div class="container-fluid row">
        <div class=" col-lg-12" >
        <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header bg-secondary ">
                <h3 class="card-title">Add Employee</h3>
              </div>
             
              <form role="form" id="EmployeeInsert">
                <div class="card-body">

                  <div class="form-group">
                    <label for="">Full Name</label><span class="required">*</span>
                    <input type="text" class="form-control" id="FullName" name="FullName" placeholder="Enter Full Name" >
                    <p id="errfullname" class="text-danger"><p>
                  </div>

                  <div class="form-group">
                    <label for="">Email address</label><span class="required">*</span>
                    <input type="email" class="form-control" id="Email" name="Email" placeholder="Enter email" >
                    <p id="erremail" class="text-danger"><p>
                  </div>

                  <div class="form-group">
                    <label for="">Salary</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Salary" name="Salary" placeholder="Enter Salary" >
                    <p id="errSalary" class="text-danger"><p>
                  </div>
                 
                  <div class="form-group">
                    <label for="">Profile Photo</label><span class="required">*</span>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" id="file" name="file">
                      </div>
                    </div>
                  </div>
                  <p id="errprofile" class="text-danger"><p>

                  <div class="form-group">
                    <label for="Contact Number">Contact Number</label><span class="required">*</span>
                    <input type="text" class="form-control" id="ContactNumber" name="ContactNumber" placeholder="Enter Contact Number" >
                  </div>
                  <p id="errphone" class="text-danger"><p>

                  <div class="form-group">
                    <label for="Department">Department</label><span class="required">*</span>
                    <select class="form-control select2bs4" style="width: 100%;" id="Department" name="Department" >
                    <option selected="selected">IT</option>
                  </select>
                  </div>
                  <p id="errdepartment" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">Designation</label><span class="required">*</span>
                    <select class="form-control select2bs4" style="width: 100%;" name="Designation" id="Designation">
                    <option selected="selected">Software Engineer</option>
                    <option>Designer</option>
                    </select>
                  </div>
                  <p id="errdesignation" class="text-danger"><p>
                  
                  <div class="form-group">
                    <label for="">Emp. No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="EmpNo" name="EmpNo" placeholder="Enter Emp. No" >
                  </div>
                  <p id="errempno" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">P.F. No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="PFNo" name="PFNo" placeholder="Enter P.F. No" > 
                  </div>
                  <p id="errpfno" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">ESI No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="ESINo" name="ESINo" placeholder="Enter ESI No" >
                  </div>
                  <p id="erresino" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">Bank</label><span class="required">*</span>
                    <input type="text" class="form-control" id="Bank" name="Bank" placeholder="Enter Bank" >
                  </div>
                  <p id="errbank" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">A/C No</label><span class="required">*</span>
                    <input type="text" class="form-control" id="ACNo" name="ACNo" placeholder="Enter A/C No" >
                  </div>
                  <p id="erracno" class="text-danger"><p>

                  <div class="form-group">
                    <label for="">DOB</label><span class="required">*</span>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="DOB" name="DOB">
                  </div>
                  </div>
                  <p id="errdob" class="text-danger"><p>
                  
                  <div class="form-group">
                    <label for="">D.O.J</label><span class="required">*</span>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control float-right" id="DOJ" name="DOJ">
                   
                  </div>
                  <p id="errdoj" class="text-danger"><p>
                  </div>
                </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add</button>
                  <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</a>
                </div>
              </form>
            </div>
          </div>
      </div>
    </section>

      </div>
    </section>
  </div>

<script>
  $(function () {
    $('#DOB').datepicker({
      format: 'yy/mm/dd',
      autoclose: true
    });

    $('#DOJ').datepicker({
      format: 'yy/mm/dd',
      autoclose: true
    });
  })
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#EmployeeInsert').on('submit', function(event){alert();
    event.preventDefault();
    $.ajax
        ({
            type: 'post',
            url: route('employees.store'),
            data: new FormData(this),
            contentType: false,
            cache:false,
            processData: false,
            dataType:"json",
            success:function(data)
                {
                  window.location.href = "{{URL::to('allemployee')}}"
                },
                error: function (request, status, error) {
                   $errorarray=request.responseJSON.errors;
                   
                   if(jQuery.inArray('FullName',$errorarray))
                  {
                          $("#errfullname").text(request.responseJSON.errors.FullName);
                  }
                  if(jQuery.inArray('Email',$errorarray))
                  {   
                      $("#erremail").text(request.responseJSON.errors.Email );
                  }
                  if(jQuery.inArray('Salary',$errorarray))
                  {   
                      $("#errSalary").text(request.responseJSON.errors.Salary);
                  }
                  if(jQuery.inArray('file',$errorarray))
                  {   
                      $("#errprofile").text(request.responseJSON.errors.file);
                  }
                  if(jQuery.inArray('ContactNumber',$errorarray))
                  {   
                      $("#errphone").text(request.responseJSON.errors.ContactNumber);
                  }
                  if(jQuery.inArray('Department',$errorarray))
                  {   
                      $("#errdepartment").text(request.responseJSON.errors.Department);
                  }
                  if(jQuery.inArray('Designation',$errorarray))
                  {   
                      $("#errdesignation").text(request.responseJSON.errors.Designation);
                  }
                  if(jQuery.inArray('EmpNo',$errorarray))
                  {   
                      $("#errempno").text(request.responseJSON.errors.EmpNo);
                  }
                  if(jQuery.inArray('PFNo',$errorarray))
                  {   
                      $("#errpfno").text(request.responseJSON.errors.PFNo);
                  }
                  if(jQuery.inArray('ESINo',$errorarray))
                  {   
                      $("#erresino").text(request.responseJSON.errors.ESINo);
                  }
                  if(jQuery.inArray('Bank',$errorarray))
                  {   
                      $("#errbank").text(request.responseJSON.errors.Bank);
                  }
                  if(jQuery.inArray('ACNo',$errorarray))
                  {   
                      $("#erracno").text(request.responseJSON.errors.ACNo);
                  }
                  if(jQuery.inArray('DOB',$errorarray))
                  {   
                      $("#errdob").text(request.responseJSON.errors.DOB);
                  }
                  if(jQuery.inArray('DOJ',$errorarray))
                  {   
                      $("#errdoj").text(request.responseJSON.errors.DOJ);
                  }	
               }
        });
  });
</script>
</body>
</html>