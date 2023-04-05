
<?php $__env->startSection('title', 'Show Post'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <div class="display-5 mt-5">
                <!-- <?php echo e(config('app.name')); ?> -->
            </div>
            <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
            <?php endif; ?>
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-light h5">
                    <?php echo e($post -> title); ?>

                </div>
                <div class="card-body">
                    <h3><?php echo e($post -> article); ?></h3>
                    <p><?php echo e($post -> body); ?></p>
                    <p><strong>Category :</strong>
                        <?php if(isset($post->postHasCategory)): ?>
                        <?php echo e($post->postHasCategory->category); ?>

                        <?php endif; ?>
                    </p>
                    <p><strong>Author :</strong>
                        <?php if(isset($post -> postHasUser)): ?>
                        <?php echo e($post ->postHasUser->name); ?>

                        <?php endif; ?>
                    </p>
                </div>
                <?php if($post->user_id == Auth::id()): ?>
                <div class="card-footer">
                    <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-dark w-25"><?php echo app('translator')->get('lang.btn_update'); ?></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash3"></span>
                    </button>
                    <a href="<?php echo e(route('etudiants.show', Auth::User()->id)); ?>" class="btn btn-secondary ms-5" role="button">
                            <?php echo app('translator')->get('lang.btn_return'); ?>
                        </a>
                    <?php else: ?>
                    <a href="<?php echo e(route('posts.index')); ?>" class="btn btn-secondary">Go Back</a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this post: <?php echo e($post->title); ?>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="<?php echo e(route('post.delete', ['id' => $post->id, 'user_id' => $post->user_id])); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>






<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/post/show.blade.php ENDPATH**/ ?>