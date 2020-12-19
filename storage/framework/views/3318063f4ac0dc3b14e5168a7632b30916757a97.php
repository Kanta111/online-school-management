<?php
 $prefix = Request::route()->getPrefix();
 $route = Route::current()->getName();
?> <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <?php if(Auth::user()->usertype=='Admin'): ?>
          <li class="nav-item has-treeview <?php echo e(($prefix=='/users')?'menu-open':''); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('users.view')); ?>" class="nav-link <?php echo e(($route=='users.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
            </ul>
          </li>
         <?php endif; ?>



       <li class="nav-item has-treeview <?php echo e(($prefix=='/profiles')?'menu-open':''); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('profiles.view')); ?>" class="nav-link <?php echo e(($route=='profiles.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Your Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo e(route('profiles.password.view')); ?>" class="nav-link <?php echo e(($route=='profiles.password.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>



          <?php if(Auth::user()->usertype=='Admin'): ?>
          <li class="nav-item has-treeview <?php echo e(($prefix=='/setups')?'menu-open':''); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Setup
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('setups.student.class.view')); ?>" class="nav-link <?php echo e(($route=='setups.student.class.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Student Class</p>
                </a>
              </li>
              
            </ul>
          </li>
            <?php endif; ?>



          <li class="nav-item">
                <a href="<?php echo e(route('setups.subject.view')); ?>" class="nav-link <?php echo e(($route=='setups.subject.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Subjects</p>
                </a>
              </li>
           

            <li class="nav-item">
                <a href="<?php echo e(route('setups.assign.subject.view')); ?>" class="nav-link <?php echo e(($route=='setups.assign.subject.view')?'active':''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign Subjects</p>
                </a>
              </li>




       <li class="nav-item has-treeview <?php echo e(($prefix=='/profiles')?'menu-open':''); ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Video Lectures
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo e(route('setups.assign.files.index')); ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class One</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Two</p>
                </a>
              </li>

              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Three</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Four</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Five</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Six</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Seven</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Eight</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Nine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=>
                  <i class="far fa-circle nav-icon"></i>
                  <p>Class Ten</p>
                </a>
              </li>
            </ul>
          </li>


              
           </ul>
         </nav>




           
      
      
      <!-- /.sidebar-menu --><?php /**PATH C:\xampp\htdocs\online_school\resources\views/backend/layouts/sidevar.blade.php ENDPATH**/ ?>