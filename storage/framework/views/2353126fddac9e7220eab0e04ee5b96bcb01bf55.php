
<?php $__env->startSection('title', 'Mettre à jour'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <!-- <div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-one">
                Mettre à jour un article
            </h1>

        </div>
    </div>
    <hr> -->
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-md-6">
            <div class="card">
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="card-header h4">
                        <?php echo app('translator')->get('lang.text_update_post'); ?>
                    </div>
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="<?php echo e($forumPost -> title); ?>">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message">Post</label>
                            <textarea class="form-control" id="message" name="body"><?php echo e($forumPost -> body); ?></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="title"><?php echo e(__('Title (Français)')); ?></label>
                            <input type="text" id="title" name="title_fr" class="form-control" value="<?php echo e($forumPost -> title_fr); ?>">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message"> <?php echo e(__('Post (Français)')); ?></label>
                            <textarea class="form-control" id="message" name="body_fr"><?php echo e($forumPost -> body_fr); ?></textarea>
                        </div>
                        <div class="col-12">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="">Selectionner la categorie</option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>" <?php echo e($category->id == $forumPost->category_id ? 'selected' : ''); ?>><?php echo e($category->category); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="<?php echo app('translator')->get('lang.btn_update'); ?>" class="btn btn-success">
                        <a href="<?php echo e(route('etudiants.show', Auth::User()->id)); ?>" class="btn btn-secondary" role="button">
                        <?php echo app('translator')->get('lang.btn_return'); ?>
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><!--/container-->




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/post/edit.blade.php ENDPATH**/ ?>