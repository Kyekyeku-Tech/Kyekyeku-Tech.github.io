<?php $__env->startSection('panel'); ?>
<div class="row mb-none-30">
  <div class="col-md-12">
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive--sm">
                <table class="table table--light style--two">
                    <thead>
                        <tr>
                            <th scope="col"><?php echo app('translator')->get('Name'); ?></th>
                            
                            <th scope="col"><?php echo app('translator')->get('Price'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Image'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Daily Profit'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Validity'); ?></th>
                            <th scope="col"><?php echo app('translator')->get('Referral Commission'); ?></th>
                            
                            <th scope="col"><?php echo app('translator')->get('Action'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($plan->name); ?></td>
                            
                            <td class="fw-bold"><?php echo e(showAmount($plan->price)); ?> <?php echo e($general->cur_text); ?></td>

                            <td data-label="<?php echo app('translator')->get('Image'); ?>">
                                <img src="<?php echo e(asset('assets/images/plan/'. @$plan->image)); ?>" class="img-fluid img-thumbnail rounded neo-shadow" style="height: 50px">
                            </td>

                            <td><?php echo e($general->cur_sym); ?><?php echo e($plan->daily_profit); ?></td>
                            <td><?php echo e($plan->validity); ?> <?php echo app('translator')->get('Day'); ?></td>
                            <td><?php echo app('translator')->get('up to'); ?> <span class="fw-bold text-primary px-3"><?php echo e($plan->ref_level); ?> </span><?php echo app('translator')->get('level'); ?></td>

                            

                            <td>
                                <button class="btn btn-outline--primary btn-sm planBtn" data-id="<?php echo e($plan->id); ?>" data-name="<?php echo e($plan->name); ?>" data-tagline="<?php echo e($plan->tagline); ?>" data-price="<?php echo e(getAmount($plan->price)); ?>" data-daily_profit="<?php echo e(getAmount($plan->daily_profit)); ?>" data-daily_limit="<?php echo e($plan->daily_limit); ?>" data-validity="<?php echo e($plan->validity); ?>" data-highlight="<?php echo e($plan->highlight); ?>" data-ref_level="<?php echo e($plan->ref_level); ?>" data-act="Edit">
                                    <i class="la la-pencil"></i> <?php echo app('translator')->get('Edit'); ?>
                                </button>

                                <?php if($plan->status == 1): ?>
                                    <button class="btn btn-sm btn-outline--danger ms-1 confirmationBtn" data-question="<?php echo app('translator')->get('Are you sure to disable this plan?'); ?>" data-action="<?php echo e(route('admin.plan.status', $plan->id)); ?>">
                                        <i class="la la-eye-slash"></i> <?php echo app('translator')->get('Disable'); ?>
                                    </button>
                                <?php else: ?>
                                    <button class="btn btn-sm btn-outline--success ms-1 confirmationBtn" data-question="<?php echo app('translator')->get('Are you sure to enable this plan?'); ?>" data-action="<?php echo e(route('admin.plan.status', $plan->id)); ?>">
                                        <i class="la la-eye"></i> <?php echo app('translator')->get('Enable'); ?>
                                    </button>
                                <?php endif; ?>

                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td class="text-muted text-center" colspan="100%"><?php echo e(__($emptyMessage)); ?></td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="planModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title"><span class="act"></span> <?php echo app('translator')->get('Subscription Plan'); ?></h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <i class="las la-times"></i>
            </button>
            </div>
            <form action="<?php echo e(route('admin.plan.save')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name"><?php echo app('translator')->get('Name'); ?> </label>
                        <input type="text" class="form-control" name="name" placeholder="<?php echo app('translator')->get('Plan Name'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="image"><?php echo app('translator')->get('Plan Image'); ?> </label>
                        <div class="file-upload-wrapper" data-text="Select your file!">
                            <input type="file" class="file-upload-field" name="image" id="image" placeholder="<?php echo app('translator')->get('Plan Image'); ?>" required>
                        </div>
                        <small class="text-secondary">Image size must be <b class="text-danger">(300x250)</b>pixel.</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="price"><?php echo app('translator')->get('Price'); ?> </label>
                        <div class="input-group">
                            <input type="text" class="form-control has-append" name="price" placeholder="<?php echo app('translator')->get('Price of Plan'); ?>" required>
                            <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="daily_profit"><?php echo app('translator')->get('Daily Profit'); ?> </label>
                        <div class="input-group">
                            <input type="text" class="form-control has-append" name="daily_profit" placeholder="<?php echo app('translator')->get('Daily Profit'); ?>" required>
                            <div class="input-group-text"><?php echo e($general->cur_text); ?></div>
                        </div>
                    </div>
                    <div class="form-group" hidden>
                        <label for="daily_limit"><?php echo app('translator')->get('Daily Ad Limit'); ?></label>
                        <input type="number" class="form-control" name="daily_limit" placeholder="<?php echo app('translator')->get('Daily Ad Limit'); ?>" value="1" required>
                    </div>
                    <div class="form-group">
                        <label for="daily_limit"><?php echo app('translator')->get('Validity'); ?></label>
                        <div class="input-group">
                            <input type="number" class="form-control" name="validity" placeholder="<?php echo app('translator')->get('Validity'); ?>" required>
                            <div class="input-group-text"><?php echo app('translator')->get('Days'); ?></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="details"><?php echo app('translator')->get('Referral Commission'); ?> </label>
                        <select name="ref_level" class="form-control" required>
                            <option value="0"> <?php echo app('translator')->get('NO Referral Commission'); ?></option>
                            <?php for($i = 1; $i <= $levels; $i++): ?>
                            <option value="<?php echo e($i); ?>"> <?php echo app('translator')->get('Up to'); ?> <?php echo e($i); ?>  <?php echo app('translator')->get('Level'); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn--primary w-100"><?php echo app('translator')->get('Submit'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php if (isset($component)) { $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b = $component; } ?>
<?php $component = App\View\Components\ConfirmationModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('confirmation-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ConfirmationModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b)): ?>
<?php $component = $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b; ?>
<?php unset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('breadcrumb-plugins'); ?>
    <button class="btn btn-outline--primary btn-sm planBtn" data-id="0" data-act="Add" data-bs-toggle="modal" data-bs-target="#planModal"><i class="las la-plus"></i> <?php echo app('translator')->get('Add New'); ?></button>
<?php $__env->stopPush(); ?>


<?php $__env->startPush('script'); ?>
<script>
    (function($){
        "use strict";
        $('.planBtn').on('click', function() {
            var modal = $('#planModal');
            modal.find('.act').text($(this).data('act'));
            modal.find('input[name=id]').val($(this).data('id'));
            modal.find('input[name=name]').val($(this).data('name'));
            // modal.find('input[name=tagline]').val($(this).data('tagline'));
            modal.find('input[name=price]').val($(this).data('price'));
            modal.find('input[name=daily_profit]').val($(this).data('daily_profit'));
            modal.find('input[name=daily_limit]').val($(this).data('daily_limit'));
            modal.find('input[name=validity]').val($(this).data('validity'));
            // modal.find('input[name=highlight]').bootstrapToggle($(this).data('highlight') == 1 ? 'on' : 'off');
            modal.find('select[name=ref_level]').val($(this).data('ref_level'));
            if($(this).data('id') == 0){
                modal.find('form')[0].reset();
            }
            modal.modal('show');
        });
    })(jQuery);
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ethemest/DEMO/demo.viser.store/usdt-trading/core/resources/views/admin/plan.blade.php ENDPATH**/ ?>