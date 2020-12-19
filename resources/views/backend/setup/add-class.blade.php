@extends('backend.layouts.master')
@section('content')



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Student Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Class</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-md-12">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
               <h3>
                @if(isset($editData))
                Edit Student Class
                @else
                Add Student Class
                @endif

               <a class="btn btn-success float-right" href="{{route('setups.student.class.view')}}"><i class="fa fa-list"></i>Student Class List</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 
              
             
               <form method="post" action="{{(@$editData)?route('setups.student.class.update',
               $editData->id):route('setups.student.class.store')}}" id="myForm">
                @csrf
                <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label >Student Class</label>
                   
                    <input type="text" name="name" value="{{@$editData->name}}"  class="form-control">
                    <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                    
     
                  </div>
                  <div class="form-group col-md-6" style="padding-top: 30px;">
                  <button type="submit" class="btn btn-primary">{{(@editData)?'Update':'Submit'}}</button>
                  </div>



                

                 

                  



                 
                  </div>
               </div><!-- /.card-body -->
            </div>
          </form>
            <!-- /.card -->

          
            
            </div>
            <!-- /.card -->
          </section>
          
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
$(function () {
  $('#myForm').validate({
    rules: {
      name: {
        required: true,
      
      },
     
    messages: {
      name: {
        required: 'Please enter user name',
       
      },
       
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection