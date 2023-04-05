
<?php $__env->startSection('title', 'Mettre à jour'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl mt-5">
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form  method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-header text-center">
                       <h5><?php echo app('translator')->get('lang.text_update_info'); ?></h5> 
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="nom">Name</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="<?php echo e($etudiant->nom); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" value="<?php echo e($etudiant->dob); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control" value="<?php echo e($etudiant->phone); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="<?php echo e($etudiant->email); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo e($etudiant->address); ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ville">City</label>
                            <select name="ville" id="ville" class="form-control">
                                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ville->id); ?>" <?php echo e($etudiant->ville_id == $ville->id ? 'selected' : ''); ?>>
                                    <?php echo e($ville->nom); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="<?php echo app('translator')->get('lang.btn_update'); ?>" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/edit.blade.php ENDPATH**/ ?>