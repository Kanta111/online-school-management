<?php if(Auth::user()->usertype=='Admin'): ?>


<?php $__env->startSection('content'); ?>



 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Video Lectures</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Assign Videos Lectures</li>
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
                Edit Video Lectures
                <?php else: ?>
                Add Videos Lectures
                <?php endif; ?>
                <a class="btn btn-success float-right" href="<?php echo e(route('setups.document.subject.view')); ?>"><i class="fa fa-plus-circle"></i>Assign Video Lectures</a>
               </h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                 <form method="post" action="<?php echo e(route('setups.document.subject.store')); ?>" id="myForm" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <div class="add_item">
                    <div class="form-row">
                      <div class="form-group col-md-3">
                        <label>Class Name</label>
                        <select name="class_id" class="form-control">
                          <option value="">Select Class</option>
                          <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($cls->id); ?>"><?php echo e($cls->name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                         </div>
                       </div>
                       <div class="form-row">
                
                  <div class="form-group col-md-3">
                       <label>Subjects</label>
                        <select name="subject_id[]" class="form-control">
                          <option value="">Select Subject</option>
                            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                  
                   <div class="form-group col-md-2">
                    <label class="control-label">View</label>
                    <input type="file" name="video" class="form-control" id="video">
                  </div>

               

                 
                  
                  <div class="form-group col-md-1" style="padding-top: 30px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                    
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-primary"><?php echo e((@editData)?'Update':'Submit'); ?></button>
            </form>
          </div>
        </div>
      </section>
    </div>
  </div>
</section>
</div>
<div style="visibility: hidden;">
  <div class="whole_extra_item_add" id="whole_extra_item_add">
    <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
      <div class="row">
        <div class="form-group col-md-3">
           <label>Subjects</label>
                        <select name="subject_id[]" class="form-control">
                          <option value="">Select Subject</option>
                            <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($subject->id); ?>"><?php echo e($subject->name); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                  
                   <div class="form-group col-md-2">
                    <label>View</label>
                    <input type="file" name="video" class="form-control">
                  </div>

                
                 
                  <div class="form-group col-md-1" style="padding-top: 30px;">
                    <div class="form-row">
                      <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                      <span class="btn btn-success removeeventmore"><i class="fa fa-minus-circle"></i></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <script type="text/javascript">
          $(document).ready(function(){
            var counter = 0;
            $(document).on("click",".addeventmore",function(){
              var whole_extra_item_add = $("#whole_extra_item_add").html();
              $(this).closest(".add_item").append(whole_extra_item_add);
              counter++;

            }
              );
            $(document).on("click",".removeeventmore",function(event){
               $(this).closest(".delete_whole_extra_item_add").remove();
               counter -= 1




            }
            );
          });
          
        </script>


        <script type="text/javascript">
          $(document).ready(function(){
            $('myForm').validate({
              rules:{
                "class_id":{
                  required:true,
                },
                "subject_id"[]:{
                  required:true,

                },
                
                "video":{
                  required:true,

                },
               
               
                },
                messages:{

                },
                errorElement:'span',
                errorPlacement:function(error,element){
                  error.addClass('invalid-feedback');
                  element.closest('.form-group').append(error);

                },
                highlight:function(element,errorClass,validClass){
                  $(element).addClass('is-invalid');
                },
                unhighlight:function(element,errorClass,validClass){
                  $(element).removeClass('is-invalid');
                },

            }
          });

        </script>
                    

            




                          
                       
<?php $__env->stopSection(); ?>
<?php endif; ?>
<?php echo $__env->make('backend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/setup/document_subject/add-document-subject.blade.php ENDPATH**/ ?>