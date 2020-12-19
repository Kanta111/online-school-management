<?php if(Auth::user()->usertype=='Admin'): ?>

<?php $__env->startSection('content'); ?>

 

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Student Subject</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Subject</li>
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
                <?php if(isset($editData)): ?>
                Edit Subject
                <?php else: ?>
                Add Subject
                <?php endif; ?>

               <a class="btn btn-success float-right" href="<?php echo e(route('setups.subject.view')); ?>"><i class="fa fa-list"></i>Subject Lists</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 
              
             
               <form method="post" action="<?php echo e((@$editData)?route('setups.subject.update',
               $editData->id):route('setups.subject.store')); ?>" id="myForm">
                <?php echo csrf_field(); ?>
                <div class="form-row">
                
                <div class="form-group col-md-4">
                    <label >Subject Name</label>
                   
                    <input type="text" name="name" value="<?php echo e(@$editData->name); ?>"  class="form-control">
                    <font style="color:red"><?php echo e(($errors->has('name'))?($errors->first('name')):''); ?></font>
                    
     
                  </div>
                  <div class="form-group col-md-6" style="padding-top: 30px;">
                  <button type="submit" class="btn btn-primary"><?php echo e((@editData)?'Update':'Submit'); ?></button>
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

<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/setup/subject/add-subject.blade.php ENDPATH**/ ?>