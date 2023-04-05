
<?php $__env->startSection('title', 'Inscription'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="<?php echo e(route('etudiants.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="card-header text-center">
                        <h5><?php echo app('translator')->get('lang.text_info_registration'); ?></h5>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dob">Anniversaire</label>
                            <input type="date" name="dob" id="dob" class="form-control">
                        </div>
                            
                     
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Courriel</label>
                            <input type="email" name="email" id="email" class="form-control">
                            
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="address">Adresse</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div> 
                        <div class="mb-3"> 
                        <label class="form-label" for="ville">Ville</label>
                            <select class="form-control" name="ville" id="ville">
                                <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="<?php echo app('translator')->get('lang.btn_save'); ?>" class="btn btn-success me-2">
                        <a class="btn btn-secondary" href="<?php echo e(route('forum.index')); ?>"><?php echo app('translator')->get('lang.btn_return'); ?></a>
                    </div>
                </form>
            </div>
                          
                      
                        
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/create.blade.php ENDPATH**/ ?>