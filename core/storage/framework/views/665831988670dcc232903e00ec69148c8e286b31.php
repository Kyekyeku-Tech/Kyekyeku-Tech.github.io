<div class="modal custom--modal fade" id="BuyModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="post" action="<?php echo e(route('user.buyPlan')); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id">
                <div class="modal-header">
                    <strong class="modal-title"> <?php echo app('translator')->get('Confirmation to purches  '); ?><span class="planName"></span></strong>

                    <button type="button" class="close btn btn-sm btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <?php if(auth()->guard()->check()): ?>
                        <div class="form-group">
                            <?php if(auth()->user()->runningPlan): ?>
                                <code class="d-block"><?php echo app('translator')->get('If you subscribe to this one. Your old limitation will reset according to this package.'); ?></code>
                            <?php endif; ?>

                            <h6 class="text-center dailyLimit"></h6>
                            <p class="text-center refLevel"></p>
                            <p class="text-center mt-1 validity"></p>

                            <label><?php echo app('translator')->get('Select Wallet'); ?></label>
                            <select class="form--control  form-control form-select" name="wallet_type" required>
                                <option value=""><?php echo app('translator')->get('Select One'); ?></option>
                                <?php if(auth()->user()->balance > 0): ?>
                                    <option value="deposit_wallet"><?php echo app('translator')->get('Deposit Wallet - ' . $general->cur_sym . showAmount(auth()->user()->balance)); ?></option>
                                <?php endif; ?>

                                <?php $__currentLoopData = $gatewayCurrency; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>" <?php if(old('wallet_type') == $data->method_code): echo 'selected'; endif; ?> data-gateway="<?php echo e($data); ?>"><?php echo e($data->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <code class="gateway-info rate-info d-none"><?php echo app('translator')->get('Rate'); ?>: 1 <?php echo e($general->cur_text); ?>

                                = <span class="rate"></span> <span class="method_currency"></span></code>
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Invest Amount'); ?></label>
                            <div class="input-group">
                                <input type="number" step="any" class="form-control form--control" name="amount" required>
                                <span class="input-group-text text-white bg--base"><?php echo e($general->cur_text); ?></span>
                            </div>
                            <code class="gateway-info d-none"><?php echo app('translator')->get('Charge'); ?>: <span class="charge"></span>
                                <?php echo e($general->cur_text); ?>. <?php echo app('translator')->get('Total amount'); ?>: <span class="total"></span>
                                <?php echo e($general->cur_text); ?></code>
                        </div>
                    <?php else: ?>
                        <p><?php echo app('translator')->get('Please login to subscribe plan'); ?></p>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <?php if(auth()->guard()->check()): ?>
                        <button type="submit" class="trk-btn trk-btn--outline active"><?php echo app('translator')->get('Yes'); ?></button>
                    <?php else: ?>
                        <a href="<?php echo e(route('user.login')); ?>" class="trk-btn trk-btn--outline active"><?php echo app('translator')->get('Login'); ?></a>
                    <?php endif; ?>
                </div>

            </form>

        </div>
    </div>
</div>
<?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/modal/plan_modal.blade.php ENDPATH**/ ?>