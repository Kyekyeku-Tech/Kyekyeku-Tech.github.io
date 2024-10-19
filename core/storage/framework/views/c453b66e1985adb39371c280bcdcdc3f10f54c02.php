
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card b-radius--10">
                <div class="card-body">
                    <?php $__empty_1 = true; $__currentLoopData = $updates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $update): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="update-card">
                        <h5><?php echo app('translator')->get('Version'); ?> <?php echo e($update->version); ?> | <?php echo app('translator')->get('Uploaded'); ?>: <?php echo e($update->created_at->format('Y-m-d')); ?></h5>
                        <hr>
                        <ul>
                            <?php $__currentLoopData = $update->update_log; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $log): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e(__($log)); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <h1 class="text-center"><?php echo app('translator')->get('No update patch uploaded yet.'); ?></h1>
                    <?php endif; ?>
                </div>
            </div><!-- card end -->
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="uploadUpdate">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Upload Update Patch'); ?></h5>
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <span><i class="las la-times"></i></span>
                    </button>
                </div>
                <form action="<?php echo e(route('admin.system.update.upload')); ?>" enctype="multipart/form-data" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Purchase Code'); ?></label>
                            <input type="text" name="purchase_code" value="<?php echo e(env('PURCHASECODE')); ?>" class="form-control" readonly required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Envato Username'); ?></label>
                            <input type="text" name="envato_username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Files'); ?></label>
                            <input type="file" name="file" class="form-control" accept=".zip" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary h-45 w-100"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('style'); ?>
    <style>
        .update-card:last-child{
            margin-bottom: 0;
        }
        .update-card{
            margin-bottom: 40px
        }
        .update-card li {
            font-size: 17px;
            margin: 5px 0px;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('breadcrumb-plugins'); ?>
    <?php if(!extension_loaded('zip')): ?>
        <span class="text--danger mx-3"><span class="fw-bold text--danger"><?php echo app('translator')->get('PHP-zip'); ?></span> <?php echo app('translator')->get('Extension is required'); ?></span>
        <button type="button" disabled class="btn btn-sm btn-outline--primary"><i class="las la-upload"></i><?php echo app('translator')->get('Upload'); ?></button>
    <?php else: ?>
        <button type="button" class="btn btn-sm btn-outline--primary" data-bs-toggle="modal" data-bs-target="#uploadUpdate"><i class="las la-upload"></i><?php echo app('translator')->get('Upload'); ?></button>
    <?php endif; ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/admin/system/update.blade.php ENDPATH**/ ?>