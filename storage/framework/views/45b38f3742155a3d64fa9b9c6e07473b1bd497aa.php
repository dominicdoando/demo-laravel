<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header'); ?> 
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <?php echo e(__('Dashboard')); ?>

      </h2>
   <?php $__env->endSlot(); ?>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              
              <div class="container">
                <div class="row">
                  <?php if(session('success')): ?>
                  <div class="col-12 mb-2 mt-2">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong><?php echo e(session('success')); ?></strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                  <?php endif; ?>
                  

                  <div class="col-md-8 pt-2">
                      <h4 class="card-title">All Category</h4>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th>CATEGORY</th>
                            <th>User Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td scope="row"><?php echo e($categories->firstItem()+$loop->index); ?></td>
                            <td><?php echo e($category->user->name); ?></td>
                            <td><?php echo e($category->category_name); ?></td>
                            <td>
                              <?php if($category->created_at !== NULL): ?>
                              <?php echo e(Carbon\Carbon::parse($category->created_at)->diffForHumans()); ?>

                              <?php else: ?>
                              <span>No Data</span>
                              <?php endif; ?>
                              
                              </td>
                              <td>
                                <a href="<?php echo e(url('category/edit/'.$category->id)); ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo e(url('softdelete/category/'.$category->id)); ?>" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                      </table>
                      
                      <?php echo e($categories->render()); ?>

                  </div>
                  <div class="col-md-4 pt-2 pb-2">
                    <h4 class="card-title">Add Category</h4>
                    <form action="<?php echo e(route('store.category')); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <?php $__errorArgs = ['category_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                          <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      </div>
                      <button type="submit" class="btn btn-primary">Add Category</button>
                    </form>
                  </div>
                </div>
              </div>
              

              <div class="container">
                <div class="row">
                  

                  <div class="col-md-8 pt-2">
                      <h4 class="card-title">TRASH LIST</h4>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th>CATEGORY</th>
                            <th>User Name</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php $__currentLoopData = $trashCat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td scope="row"><?php echo e($categories->firstItem()+$loop->index); ?></td>
                            <td><?php echo e($category->user->name); ?></td>
                            <td><?php echo e($category->category_name); ?></td>
                            <td>
                              <?php if($category->created_at !== NULL): ?>
                              <?php echo e(Carbon\Carbon::parse($category->created_at)->diffForHumans()); ?>

                              <?php else: ?>
                              <span>No Data</span>
                              <?php endif; ?>
                              
                              </td>
                              <td>
                                <a href="<?php echo e(url('category/restore/'.$category->id)); ?>" class="btn btn-info">Restore</a>
                                <a href="<?php echo e(url('pdelete/category/'.$category->id)); ?>" class="btn btn-danger">P Delete</a>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                      </table>
                      
                      <?php echo e($trashCat->render()); ?>

                  </div>
                  <div class="col-md-4 pt-2 pb-2">
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH E:\laragon\www\demo-laravel\resources\views/admin/category/index.blade.php ENDPATH**/ ?>