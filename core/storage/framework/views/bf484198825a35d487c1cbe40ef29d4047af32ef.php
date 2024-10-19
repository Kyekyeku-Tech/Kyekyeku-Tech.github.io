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
<div class="section--sm pricing-section">
    <div class="section__head">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-xl-6">
                    <div class="text-center">
                        <span class="section__subtitle">
                            <?php echo e(__(@$planCaption->data_values->subheading)); ?>

                        </span>
                        <h2 class="section__title m-0">
                            <?php echo e(__(@$planCaption->data_values->heading)); ?>

                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xl">
        <div class="row g-3 justify-content-center">
            <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="pricing <?php echo e($plan->highlight == 1 ? 'pricing--popular' : ''); ?>">
                        <?php if($plan->highlight == 1): ?>
                            <span class="pricing__tag"><?php echo app('translator')->get('Popular'); ?></span>
                        <?php endif; ?>
                        <div class="pricing__head">
                            <h4 class="pricing__title"><?php echo e(__($plan->name)); ?></h4>
                            <span class="pricing__sub-title">
                                <?php echo e(__($plan->tagline)); ?>

                            </span>
                        </div>
                        <div class="pricing__plan">
                            <div class="pricing__plan-container">
                                <div class="pricing__price">
                                    <h1 class="pricing__amount">
                                        <?php echo e(__(getAmount($plan->price))); ?>

                                    </h1>
                                </div>
                                <span class="pricing__text"><?php echo e($general->cur_text); ?></span>
                            </div>

                            <?php if(@auth()->user()->runningPlan && @auth()->user()->plan_id == $plan->id): ?>
                                <button class="pricing__btn disabled"><?php echo app('translator')->get('Current Package'); ?></button>
                            <?php else: ?>
                                <button class="pricing__btn <?php echo e($plan->highlight == 1 ? 'pricing__btn-popular' : 'pricing__btn-regular'); ?> buyBtn" data-plan="<?php echo e($plan); ?>">
                                    <?php echo app('translator')->get('Subscribe Now'); ?>
                                </button>
                            <?php endif; ?>

                        </div>
                        <div class="pricing__body">
                            <ul class="list pricing__list">
                                <li class="pricing__item pricing__item-success">
                                    <?php echo app('translator')->get('Daily Limit'); ?> : <?php echo e($plan->daily_limit); ?> <?php echo app('translator')->get('PTC'); ?>
                                </li>
                                <li class="pricing__item pricing__item-success">
                                    <?php echo app('translator')->get('Referral Bonus'); ?> : <?php echo app('translator')->get('Upto'); ?> <?php echo e($plan->ref_level); ?> <?php echo app('translator')->get('Level'); ?>
                                </li>
                                <li class="pricing__item pricing__item-success">
                                    <?php echo app('translator')->get('Plan Price'); ?> : <?php echo e(showAmount($plan->price)); ?> <?php echo e(__($general->cur_text)); ?>

                                </li>
                                <li class="pricing__item pricing__item-success">
                                    <?php echo app('translator')->get('Validity'); ?> : <?php echo e($plan->validity); ?> <?php echo app('translator')->get('Days'); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <select class="form--control  form-select" name="wallet_type" required>
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
<?php $__env->stopPush(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/ptc_diamond/sections/plan.blade.php ENDPATH**/ ?>