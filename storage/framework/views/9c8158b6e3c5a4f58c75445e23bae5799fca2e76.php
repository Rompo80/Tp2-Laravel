
<?php $__env->startSection('title', 'Resultats de recherche'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-xxl mt-5">
    <div class="row g-3">
        <?php if(!empty($students) && $students->count()): ?>
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Student: <mark> <?php echo e($student->nom); ?></mark></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-danger lead">
                        Records that have been permanently deleted will not be recoverable.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                       
                        <form action="<?php echo e(route('etudiant.delete', $student->student_id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="btn btn-outline-danger"><span class="bi bi-trash3"></span></button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo e($student->nom); ?></h5>
                    <p class="card-text"><strong>From: </strong><?php echo e($student->ville->nom); ?></p>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="<?php echo e(route('etudiants.show', $student->student_id)); ?>" class="card-link btn btn-outline-secondary me-2 text-nowrap" role="button">More info</a>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash3"></button>
                    </div>

                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <div class="col-12 text-center">
            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <h5><?php echo e($students->count()); ?> students found</h5>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/search.blade.php ENDPATH**/ ?>