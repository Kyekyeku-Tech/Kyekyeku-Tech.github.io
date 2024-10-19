<?php
    $planCaption = getContent('plan.content', true);
    $gatewayCurrency = App\Models\GatewayCurrency::whereHas('method', function ($gate) {
        $gate->where('status', 1);
    })
        ->with('method')
        ->orderby('name')
        ->get();
    $plans = App\Models\Plan::where('status', 1)->get();
?>
<div class="ptb-150 price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <div class="section-header text-center">
                    <h2 class="section-title"><?php echo e(__($planCaption->data_values->heading)); ?></h2>
                    <p><?php echo e(__($planCaption->data_values->subheading)); ?></p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
                            <div class="single-price">
                                <?php if($plan->highlight): ?>
                                    <div class="popular-badge">
                                        <span class="badge badge--primary"><?php echo app('translator')->get('Popular'); ?></span>
                                    </div>
                                <?php endif; ?>
                                <div class="part-top">
                                    <h3><?php echo e(__($plan->name)); ?></h3>
                                    <h4><?php echo e(__(showAmount($plan->price))); ?> <?php echo e($general->cur_text); ?><br></h4>
                                </div>
                                <div class="part-bottom">
                                    <ul>
                                        <li><?php echo app('translator')->get('Plan Details'); ?></li>
                                        <li><?php echo app('translator')->get('Daily Limit'); ?> : <?php echo e($plan->daily_limit); ?> <?php echo app('translator')->get('PTC'); ?></li>
                                        <li><?php echo app('translator')->get('Referral Bonus'); ?> : <?php echo app('translator')->get('Upto'); ?> <?php echo e($plan->ref_level); ?> <?php echo app('translator')->get('Level'); ?></li>
                                        <li><?php echo app('translator')->get('Plan Price'); ?> : <?php echo e(showAmount($plan->price)); ?> <?php echo e(__($general->cur_text)); ?></li>
                                        <li><?php echo app('translator')->get('Validity'); ?> : <?php echo e($plan->validity); ?> <?php echo app('translator')->get('Days'); ?></li>
                                    </ul>
                                    <button class="buyBtn" data-plan="<?php echo e($plan); ?>"><?php echo app('translator')->get('Subscribe Now'); ?></button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

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
                            <select class="form-control  form-select" name="wallet_type" required>
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
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><?php echo app('translator')->get('No'); ?></button>
                        <button type="submit" class="btn btn--base"><?php echo app('translator')->get('Yes'); ?></button>
                    <?php else: ?>
                        <a href="<?php echo e(route('user.login')); ?>" class="btn btn--base w-100"><?php echo app('translator')->get('Login'); ?></a>
                    <?php endif; ?>
                </div>

            </form>

        </div>
    </div>
</div>
<?php $__env->startPush('script'); ?>
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('.buyBtn').click(function() {
                let symbol = '<?php echo e($general->cur_sym); ?>';
                let currency = '<?php echo e($general->cur_text); ?>';
                $('.gateway-info').addClass('d-none');
                let modal = $('#BuyModal');
                let plan = $(this).data('plan')
                modal.find('.planName').text(plan.name)
                modal.find('[name=id]').val(plan.id)
                let planPrice = parseFloat(plan.price).toFixed(2);
                modal.find('[name=amount]').val(planPrice);
                modal.find('[name=amount]').attr('readonly', true);

                modal.find('.dailyLimit').html(`Daily Ads Limit:<span class="text--danger"> ${plan.daily_limit}</span>`)
                modal.find('.refLevel').html(`Referral Level: <span class="text--danger">${plan.ref_level} </span>`)
                modal.find('.validity').html(`Plan Validity:  <span class="text--danger"> ${plan.validity} Days </span>`)

                $('[name=amount]').on('input', function() {
                    $('[name=wallet_type]').trigger('change');
                })

                $('[name=wallet_type]').change(function() {
                    var amount = $('[name=amount]').val();
                    if ($(this).val() != 'deposit_wallet' && $(this).val() != 'interest_wallet' && amount) {
                        var resource = $('select[name=wallet_type] option:selected').data('gateway');
                        var fixed_charge = parseFloat(resource.fixed_charge);
                        var percent_charge = parseFloat(resource.percent_charge);
                        var charge = parseFloat(fixed_charge + (amount * percent_charge / 100)).toFixed(2);
                        $('.charge').text(charge);
                        $('.rate').text(parseFloat(resource.rate));
                        $('.gateway-info').removeClass('d-none');
                        if (resource.currency == '<?php echo e($general->cur_text); ?>') {
                            $('.rate-info').addClass('d-none');
                        } else {
                            $('.rate-info').removeClass('d-none');
                        }
                        $('.method_currency').text(resource.currency);
                        $('.total').text(parseFloat(charge) + parseFloat(amount));
                    } else {
                        $('.gateway-info').addClass('d-none');
                    }
                });
                modal.find('input[name=id]').val(plan.id);
                modal.modal('show');
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/sections/plan.blade.php ENDPATH**/ ?>