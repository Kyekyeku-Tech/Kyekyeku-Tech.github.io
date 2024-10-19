<?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-6" style="background-color:#041E42">
        <div class="card border border-2 border-secondary" style="background-color:#041E42">
            <div class="card-body" style="background-color:#041E42">
                <div class="row mb-2">
                    <div class="col-12 border-bottom border-white">
                        <h5 class="mb-0 text-white"><?php echo e(__($plan->name)); ?></h5>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-auto">
                        <img width="90px" src="<?php echo e(asset('assets/images/plan/' . $plan->image)); ?>"
                            alt="">
                    </div>
                    <div class="col">
                        <div class="row mb-2">
                            <div class="col-12 bg-secondary">
                                <div class="row">
                                    <div class="col-auto ps-1 pe-1">
                                        <img width="20px"
                                            src="https://cdn.discordapp.com/attachments/1048181445723693068/1191086788203249764/20240101_003319.png?ex=65a42903&is=6591b403&hm=62f01a9bb37534c1699d44fc203fbc0e0159b1b5cf89b72e4478f2228525358a&"
                                            alt="">
                                    </div>
                                    <div class="col ps-0 pe-1">
                                        <h6 class="mb-0 text-white small-font-sm">
                                            SHA-136 algorithm with a maximum hashrate of 480Th/s for a power consumption of 6005W.
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 text-start">
                                <h6 class="mb-0 text-secondary small-font">Price</h6>
                                <h5 class="mb-0 text-white small-font-lg"><?php echo e(__($general->cur_text)); ?> <?php echo e(__(getAmount($plan->price))); ?>

                                    </h5>
                            </div>
                            <div class="col-6 text-end">
                                <h6 class="mb-0 text-secondary small-font">Period</h6>
                                <h5 class="mb-0 text-white small-font-lg"><?php echo e($plan->validity); ?> Days</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-end">
                    <div class="col">
                        <h5 class="mb-0 text-white small-font">
                            Referral Bonus: <?php echo e($plan->ref_level); ?> <?php echo app('translator')->get('Level'); ?>
                        </h5>
                        <h5 class="mb-0 text-white small-font">
                            Daily Earning: <?php echo e($general->cur_text); ?> <?php echo e($plan->daily_profit); ?> 
                        </h5>
                        <h5 class="mb-0 text-white small-font">
                            Total Earning: <?php echo e($general->cur_text); ?> <?php echo e($plan->daily_profit * $plan->validity); ?> 
                        </h5>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-light btn-sm rounded-pill buyBtn" data-id="<?php echo e($plan->id); ?>"
                            data-price="<?php echo e(getAmount($plan->price)); ?>" data-plan="<?php echo e($plan); ?>">
                            Rent
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(auth()->guard()->check()): ?>
    <!-- Modal -->
    <div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content glass-bg">
                <form action="<?php echo e(route('user.buy.plan.new')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="modal-header">
                        <h6 class="modal-title" id="planModalLabel"></h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6 class="mb-2 text-center text-light small-font-lg">
                            Are You Sure?
                        </h6>
                        <div id="planInfo" class="text-center"></div>
                        <input type="hidden" name="id" class="planID">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-sm btn-primary">Yes, Rent</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="modal fade" id="planModal" tabindex="-1" aria-labelledby="planModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content glass-bg">
                <div class="modal-header ">
                    <h6 class="modal-title">Login Alert!</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="mb-2 text-center text-light small-font-lg">
                        You need to login at first!
                    </h6>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('user.login')); ?>" class="btn btn-sm btn-primary">Login Now</a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>



<?php $__env->startPush('script'); ?>
    <script>
        $(document).on('click', '.buyBtn', function() {
            let id = $(this).data('id');
            let price = $(this).data('price');
            let plan = $(this).data('plan');
            let name = plan.name;
            let refBonus = plan.ref_level;
            let validity = plan.validity;
            let dailyEarning = plan.daily_profit;
            let totalEarning = dailyEarning * validity;

            $('.planID').val(id);

            let planInfo = `
                <h6 class="mb-0 small-font text-light">
                    Referral Bonus: <span class="text-primary">Up to ${refBonus} Level</span>
                </h6>
                <h6 class="mb-0 small-font text-light">
                    Daily Earning: <span class="text-primary">${dailyEarning} <?php echo e($general->cur_text); ?></span>
                </h6>
                <h6 class="mb-0 small-font text-light">
                    Total Earning: <span class="text-primary">${totalEarning} <?php echo e($general->cur_text); ?></span>
                </h6>
            `
            $('#planInfo').html(planInfo);

            console.log(plan);

            $('#planModalLabel').html(name + ' - ' + price + ' <?php echo e($general->cur_text); ?>');


            $('#planModal').modal('show');
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/oregoazi/public_html/core/resources/views/templates/basic/page/plan.blade.php ENDPATH**/ ?>