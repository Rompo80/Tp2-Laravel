
<?php $__env->startSection('title', 'Registration'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h3><?php echo app('translator')->get('lang.text_reg'); ?></h3>
                </div>
                <form method="post">
                <?php echo csrf_field(); ?>
                    <div class="card-body">
                        <?php if(session('success')): ?>
                            <div class="alert alert-success alert-dismissible fade show">
                                <?php echo e(session('success')); ?>

                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>
                        <div class="form-group mb-3">
                            <input type="text" name="name" placeholder="<?php echo app('translator')->get('lang.text_user'); ?>" class="form-control" value="<?php echo e(old('name')); ?>">
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger mt-2">
                                    <?php echo e($errors->first('name')); ?>

                                </div>                                
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="<?php echo app('translator')->get('lang.text_email'); ?>" class="form-control" value="<?php echo e(old('email')); ?>">
                            <?php if($errors->has('email')): ?>
                                <div class="text-danger mt-2">
                                    <?php echo e($errors->first('email')); ?>

                                </div>                                
                            <?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="<?php echo app('translator')->get('lang.text_psw'); ?>" class="form-control">
                            <?php if($errors->has('password')): ?>
                                <div class="text-danger mt-2">
                                    <?php echo e($errors->first('password')); ?>

                                </div>                                
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        
                        <input type="submit" value="<?php echo app('translator')->get('lang.btn_save'); ?>" class="btn btn-outline-secondary py-2 fs-6 w-100">
                        
                           
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/auth/create.blade.php ENDPATH**/ ?>