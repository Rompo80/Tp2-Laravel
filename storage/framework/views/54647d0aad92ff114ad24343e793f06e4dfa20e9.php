<!-- extends va toujours regarder a partir le view -->

<?php $__env->startSection('title', 'Post List'); ?>
<?php $__env->startSection('content'); ?>

<div class="container-xxl mt-5">
    <div class="row g-3">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- <a href="<?php echo e(route('post.show', $post->id)); ?>"> -->
            <div class="col-sm-6">
                <div class="card shadow-sm">
                
                    <div class="card-header post-header bg-light d-flex  align-items-center">
                        <img src="https://picsum.photos/80/80.webp" alt="rundom_avatar_img" class="rounded-circle mr-2">
                        <span class="text-dark h5 mb-0" style="margin-left: 10px"><?php echo e($post->user->name); ?></span>
                        <span class="text-muted ml-4 mb-0" style="margin-left: 20px"><?php echo e(date('m-d-Y', strtotime($post->created_at))); ?></span>
                    </div>
                <div class="card-body">
                <a href="<?php echo e(route('post.show', $post->id)); ?>" style="text-decoration: none;">
                    <h3 class="card-title" style="color: black;"><?php echo e($post -> title); ?></h3>
                    <p class="text-secondary h5"><?php echo e($post -> body); ?></p>
                </a>
                </div>
            
           
            </div>
        </div>
        <!-- </a> -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/post/index.blade.php ENDPATH**/ ?>