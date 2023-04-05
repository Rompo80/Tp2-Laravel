
<?php $__env->startSection('title', 'Blog List'); ?>
<?php $__env->startSection('content'); ?>
<?php $lang = session()->get('lang') ?>

<div class="container mt-5 mb-4">
    <!-- <div class="row">
        <div class="col-12 text-center pt-2">
            <h2 class="display-one">
                Publish your article
            </h2>
        </div>
    </div> -->
   
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php if($errors->any()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="text-danger"><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <div class="card">
                <form method="post">
                    <?php echo csrf_field(); ?>
                    <div class="card-header">
                        <h4> Publish your article</h4>
                   
                    </div>
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message">Post</label>
                            <textarea class="form-control" id="message" name="body"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="title"><?php echo e(__('Title (French)')); ?></label>
                            <input type="text" id="title" name="title_fr" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message"> <?php echo e(__('Post (French)')); ?></label>
                            <textarea class="form-control" id="message" name="body_fr"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="Selectionner Categorie"></option>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($category->id); ?>"><?php echo e($category->category); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="<?php echo app('translator')->get('lang.btn_publish'); ?>" class="btn btn-outline-primary">
                        <a href="<?php echo e(route('etudiants.show', Auth::User()->id)); ?>" class="btn btn-secondary" role="button">
                        <?php echo app('translator')->get('lang.btn_return'); ?>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/forum/post/create.blade.php ENDPATH**/ ?>