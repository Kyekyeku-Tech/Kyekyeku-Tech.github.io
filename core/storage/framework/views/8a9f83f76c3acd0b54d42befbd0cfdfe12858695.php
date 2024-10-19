<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    

    <div class="col-md-6 col-lg-4">
        <div class="pricing__item " data-aos="fade-up" data-aos-duration="1000">
            <div class="pricing__item-inner active">
                <div class="pricing__item-content">

                    <!-- pricing top part -->
                    <div class="pricing__item-top">
                        <h6 class="mb-15"><?php echo e(__($plan->name)); ?></h6>
                        <h3 class="mb-25"><?php echo e(__($general->cur_sym)); ?><?php echo e(__(getAmount($plan->price))); ?>/<span><?php echo e($plan->validity); ?> <?php echo app('translator')->get('Days'); ?></span> </h3>
                    </div>

                    <!-- pricing middle part -->
                    <div class="pricing__item-middle">
                        <ul class="pricing__list">
                            <li class="pricing__list-item">
                                <span><img src="assets/images/icon/check.svg" alt="check" class="dark"></span>
                                Validity: <?php echo e($plan->validity); ?> <?php echo app('translator')->get('Days'); ?>
                            </li>
                            <li class="pricing__list-item">
                                <span><img src="assets/images/icon/check.svg" alt="check" class="dark"></span>
                                Referral Bonus: <?php echo app('translator')->get('Upto'); ?> <?php echo e($plan->ref_level); ?> <?php echo app('translator')->get('Level'); ?>
                            </li>
                            <li class="pricing__list-item">
                                <span><img src="assets/images/icon/check.svg" alt="check" class="dark"></span>
                                Daily: Earning: <?php echo e($plan->daily_profit); ?> <?php echo e($general->cur_text); ?>

                            </li>
                        </ul>

                    </div>

                    <!-- pricing bottom part -->
                    <div class="pricing__item-bottom">
                        <?php if(@auth()->user()->runningPlan && @auth()->user()->plan_id == $plan->id): ?>
                            <button class="trk-btn trk-btn--outline active disabled" disabled><?php echo app('translator')->get('Current Package'); ?></button>
                        <?php else: ?>
                            <button class="trk-btn trk-btn--outline active buyBtn" data-plan="<?php echo e($plan); ?>"><?php echo app('translator')->get('Subscribe Now'); ?></button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/mrorko/Sites/whiteTrading/core/resources/views/templates/basic/page/plan.blade.php ENDPATH**/ ?>