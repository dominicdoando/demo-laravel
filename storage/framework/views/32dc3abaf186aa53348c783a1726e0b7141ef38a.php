<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header'); ?> 
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Edit Category
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
                  
                  <div class="col-md-8 pt-2 pb-2">
                    <h4 class="card-title">Edit Category</h4>
                    <form action="<?php echo e(url('category/update/'.$categories->id)); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Update Category Name</label>
                        <input type="text" name="category_name" class="form-control" placeholder="Enter email" value="<?php echo e($categories->category_name); ?>">
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
                      <button type="submit" class="btn btn-primary">Update Category</button>
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
<?php /**PATH E:\laragon\www\demo-laravel\resources\views/admin/category/edit.blade.php ENDPATH**/ ?>