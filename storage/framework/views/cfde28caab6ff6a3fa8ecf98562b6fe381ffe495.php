
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header text-center">
                    <h3>Login</h3>
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

                        <?php if(!$errors->isEmpty()): ?>
                            <div class="alert alert-danger">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e($error); ?><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>

                        <div class="form-group mb-3">
                            <input type="email" name="email" placeholder="<?php echo app('translator')->get('lang.text_email'); ?>" class="form-control" value="<?php echo e(old('email')); ?>">
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" name="password" placeholder="<?php echo app('translator')->get('lang.text_psw'); ?>" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-center">
                            <input type="submit" value="<?php echo app('translator')->get('lang.text_login'); ?>" class="btn btn-primary fs-6 w-100">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <span><?php echo app('translator')->get('lang.text_login_invite'); ?></span>
                        <a class="nav-link" href="<?php echo e(route('user.registration')); ?>"><?php echo app('translator')->get('lang.text_reg'); ?></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/auth/login.blade.php ENDPATH**/ ?>