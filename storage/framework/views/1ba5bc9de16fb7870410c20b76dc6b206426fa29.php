<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header'); ?> 
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          All Brand
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
                      <h4 class="card-title">All Brand</h4>
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th>Brand Name</th>
                            <th>Brand Image</th>
                            <th>Created At</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <td scope="row"><?php echo e($brands->firstItem()+$loop->index); ?></td>
                            <td><?php echo e($brand->brand_name); ?></td>
                            <td><img src="<?php echo e(asset($brand->brand_image)); ?>" alt="" style="height:40px;"></td>
                            <td>
                              <?php if($brand->created_at !== NULL): ?>
                              <?php echo e(Carbon\Carbon::parse($brand->created_at)->diffForHumans()); ?>

                              <?php else: ?>
                              <span>No Data</span>
                              <?php endif; ?>
                              
                              </td>
                              <td>
                                <a href="<?php echo e(url('brand/edit/'.$brand->id)); ?>" class="btn btn-info">Edit</a>
                                <a href="<?php echo e(url('brand/delete/'.$brand->id)); ?>" onclick="return confirm('Are you sure delete this?')" class="btn btn-danger">Delete</a>
                              </td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </tbody>
                      </table>
                      
                      <?php echo e($brands->render()); ?>

                  </div>
                  <div class="col-md-4 pt-2 pb-2">
                    <h4 class="card-title">Add Brand</h4>
                    <form action="<?php echo e(route('store.brand')); ?>" method="POST" enctype="multipart/form-data">
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Brand Name</label>
                        <input type="text" name="brand_name" class="form-control" placeholder="Enter email">
                        <?php $__errorArgs = ['brand_name'];
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
                      <div class="form-group">
                        <label for="exampleInputEmail1">Brand Image</label>
                        <input type="file" name="brand_image" class="form-control" placeholder="Enter email">
                        <?php $__errorArgs = ['brand_image'];
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
                      <button type="submit" class="btn btn-primary">Add Brand</button>
                    </form>
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
<?php /**PATH E:\laragon\www\demo-laravel\resources\views/admin/brand/index.blade.php ENDPATH**/ ?>