<?php $__env->startSection('content'); ?>
<div class="cmn-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form class="register" action="" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label"><?php echo app('translator')->get('First Name'); ?></label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo e($user->firstname); ?>" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label"><?php echo app('translator')->get('Last Name'); ?></label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo e($user->lastname); ?>" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="form-label"><?php echo app('translator')->get('E-mail Address'); ?></label>
                                    <input class="form-control" value="<?php echo e($user->email); ?>" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="form-label"><?php echo app('translator')->get('Mobile Number'); ?></label>
                                    <input class="form-control" value="<?php echo e($user->mobile); ?>" readonly>
                                </div>
                            </div>
                            

                            <div class="row">
                                

                                <div class="form-group col-12">
                                    <label class="form-label"><?php echo app('translator')->get('Country'); ?></label>
                                    <input class="form-control" value="<?php echo e(@$user->address->country); ?>" disabled>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn--base w-100 mt-3"><?php echo app('translator')->get('Submit'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/user/profile_setting.blade.php ENDPATH**/ ?>