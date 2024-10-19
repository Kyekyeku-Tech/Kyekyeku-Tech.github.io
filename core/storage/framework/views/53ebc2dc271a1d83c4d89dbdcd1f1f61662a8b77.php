<?php $__env->startSection('content'); ?>
<section class="pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-7">
                <div class="password-area">
                    <h3 class="title mb-2"><?php echo e(__($pageTitle)); ?></h3>
                    <div class="mb-4">
                        <p><?php echo app('translator')->get('To recover your account please provide your email or username to find your account.'); ?></p>
                    </div>
                    <form method="POST" action="<?php echo e(route('user.password.email')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label class="form-label"><?php echo app('translator')->get('Email or Username'); ?></label>
                            <input type="text" class="form-control form--control" name="value" value="<?php echo e(old('value')); ?>" required autofocus="off">
                        </div>

                        <?php if (isset($component)) { $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243 = $component; } ?>
<?php $component = App\View\Components\Captcha::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('captcha'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Captcha::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243)): ?>
<?php $component = $__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243; ?>
<?php unset($__componentOriginalc0af13564821b3ac3d38dfa77d6cac9157db8243); ?>
<?php endif; ?>

                        <div class="form-group">
                            <button type="submit" class="btn btn--base w-100"><?php echo app('translator')->get('Submit'); ?></button>
                            <p class="mt-20"><a href="<?php echo e(route('user.login')); ?>"><?php echo app('translator')->get('Back to login'); ?></a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/auth/passwords/email.blade.php ENDPATH**/ ?>