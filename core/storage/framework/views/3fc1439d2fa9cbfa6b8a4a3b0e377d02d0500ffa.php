<?php $__env->startSection('content'); ?>
<div class="cmn-section" style="background-color: #041E42" >
    <div class="container" style="background-color: #041E42" >
        <div class="row justify-content-center" style="background-color: #041E42" >
            <div class="col-md-8" style="background-color: #041E42" >
                <div class="card custom--card" style="background-color: #041E42" >
                    <div class="card-header card-header-bg" style="background-color: #041E42" >
                        <h5 class="title"><?php echo e(__($pageTitle)); ?></h5>
                    </div>
                    <div class="card-body  " style="background-color: #041E42" >
                        <form action="<?php echo e(route('user.deposit.manual.update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-12 text-center text-white" style="background-color: #041E42" >
                                    <p class="text-center mt-2 text-white"><?php echo app('translator')->get('You have requested'); ?> <b  class="text-white"><?php echo e(__($general->cur_text)); ?> <?php echo e(showAmount($data['amount'])); ?> </b> , <?php echo app('translator')->get('Please pay'); ?>
                                        <b class="text-white"><?php echo e(showAmount($data['final_amo']) .' '.$data['method_currency']); ?> </b> <?php echo app('translator')->get('for successful payment'); ?>
                                    </p>
                                    <h4 class="text-center text-white mb-4"><?php echo app('translator')->get('Please follow the instruction below'); ?></h4>

                                    <p class="my-4 text-center text-white"><?php echo  $data->gateway->description ?></p>

                                </div>

                                <?php if (isset($component)) { $__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0 = $component; } ?>
<?php $component = App\View\Components\ViserForm::resolve(['identifier' => 'id','identifierValue' => ''.e($gateway->form_id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('viser-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ViserForm::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0)): ?>
<?php $component = $__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0; ?>
<?php unset($__componentOriginale40beaa5cbfa24869bd0b7ba4d9f41184a3f12f0); ?>
<?php endif; ?>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn--base w-100 mt-3"><?php echo app('translator')->get('Pay Now'); ?></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oregoazi/public_html/core/resources/views/templates/basic/user/payment/manual.blade.php ENDPATH**/ ?>