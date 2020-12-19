
<?php $__env->startSection('content'); ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Lecture Videos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assign Lecture Videos</li>
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
               <h3>Assign Video Lecture List
                <a class="btn btn-success float-right" href="<?php echo e(route('setups.document.subject.add')); ?>"><i class="fa fa-plus-circle"></i>Add Lecture Videos</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>SL.</th>
                      <th>Class Name</th>
                      
                      <th>Action</th>
                     
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="<?php echo e($value->id); ?>">
                      <td><?php echo e($key+1); ?></td>
                      <td><?php echo e($value['student_class']['name']); ?></td>
                     
                      <td>
                      <?php if(Auth::user()->usertype=='Admin'): ?>
                        <a title="Edit" class="btn btn-sm btn-primary" href="<?php echo e(route('setups.document.subject.edit',$value->class_id)); ?>"><i class="fa fa-edit"></i></a>
                       <?php endif; ?>
                        <a title="Details" class="btn btn-sm btn-success" href="<?php echo e(route('setups.assign.subject.details',$value->class_id)); ?>"><i class="fa fa-eye"></i></a>
                        <a title="Download" class="btn btn-sm btn-success" href="<?php echo e(route('setups.document.subject.download',$value->class_id)); ?>"><i class="fa fa-eye"></i></a>
                     
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                 </table>
               
              
              </div><!-- /.card-body -->
            </div>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/setup/document_subject/view-document-subject.blade.php ENDPATH**/ ?>