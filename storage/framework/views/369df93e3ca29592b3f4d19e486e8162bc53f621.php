
<?php $__env->startSection('title', 'Information detailé'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-xxl mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if(session('success')): ?>
            <div class="alert alert-success col-12">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
            <?php if($errors->has('error')): ?>
            <div class="alert alert-info" role="alert">
                 <?php echo e($errors->first('error')); ?>

            </div>
            <?php endif; ?>



            <div class="card mb-3">
                <div class="card-header">
                    <?php if(isset($message)): ?>
                    <div class="alert alert-danger">
                        <?php echo e($message); ?>

                    </div>
                    <?php endif; ?>

                    <h4><i class="bi bi-person-badge"></i>&nbsp;<?php echo e($student->nom); ?> - <?php echo app('translator')->get('lang.text_passport'); ?></h4>
                </div>
                <div class="card-body">
                    <p><strong>Address:</strong> <?php echo e($student->address); ?></p>
                    <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo e($student->dob); ?></p>
                    <p><strong>Phone:</strong> <?php echo e($student->phone); ?></p>
                    <p><strong>City:</strong> <?php echo e($student->ville->nom); ?></p>
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="d-flex">
                    <?php if($student->student_id == Auth::id()): ?>
                        <a class="btn btn-outline-success me-3" href="<?php echo e(route('etudiants.edit', $student->student_id)); ?>"><i class="bi bi-pencil-square"></i>&nbsp;<?php echo app('translator')->get('lang.btn_edit_my_info'); ?></a>
                    <?php endif; ?>
                        <a class="btn btn-secondary" href="<?php echo e(route('forum.index')); ?>"><?php echo app('translator')->get('lang.btn_return'); ?></a>
                    </div>


                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h4>
                        <i class="bi bi-card-text"></i>&nbsp;<?php echo app('translator')->get('lang.text_my_posts'); ?>
                    </h4>
                </div>
                <div class="card-body">
                    <?php $__currentLoopData = $forum_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="mb-3">
                    <p class="mb-0"><a href="<?php echo e(route('post.show', $post->id)); ?>" ><?php echo e($post->title); ?></a></p>
                    <span class="text-muted"><?php echo e($post->created_at->format('F j, Y \a\t h:iA')); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if($student->student_id == Auth::id()): ?>
                <div class="card-footer">
                    <a href="<?php echo e(route('post.create')); ?>" class="btn btn-outline-success"><?php echo app('translator')->get('lang.btn_post_article'); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                    <h4><span class="bi bi-files"></span>&nbsp;<?php echo app('translator')->get('lang.text_file_repository'); ?></h4>
                </div>
                <?php $__currentLoopData = $documents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $document): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card-body d-flex justify-content-between border">

                    <?php
                    $extension = pathinfo($document->file_path, PATHINFO_EXTENSION);
                    switch($extension)
                    {
                    case 'pdf':
                    $icon = 'bi bi-file-pdf';
                    break;
                    case 'doc':
                    case 'docx':
                    $icon = 'bi bi-file-word';
                    break;
                    case 'jpeg':
                    case 'jpg':
                    case 'png':
                    $icon = 'bi bi-file-image';
                    break;
                    default:
                    $icon = 'bi bi-file-earmark-text';
                    }
                    ?>

                    <div>
                        <span><i class="<?php echo e($icon); ?> fs-4"></i><a href="<?php echo e(asset('storage/' . $document->file_path)); ?>" download style="text-decoration: none;">&nbsp;<?php echo e($document->title); ?></a></span>
                        <p class="text-muted"><?php echo e($document->created_at->format('F j, Y \a\t h:iA')); ?></p>
                    </div>
                    <form action="<?php echo e(route('document.delete',  ['id' => $document->id, 'user_id' => $document->user_id])); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-outline-danger"><span class="bi bi-trash3"></span></button>
                    </form>
                    <a class="btn btn-outline-success me-3" href="<?php echo e(route('document.edit', $document->id)); ?>"><i class="bi bi-pencil-square"></i></a>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($student->student_id == Auth::id()): ?>
                <div class="card-footer">
                    <a href="<?php echo e(route('document.create')); ?>" class="btn btn-outline-success"><i class="bi bi-folder-plus"></i>&nbsp;<?php echo app('translator')->get('lang.btn_add_document'); ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
        
    
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/show.blade.php ENDPATH**/ ?>