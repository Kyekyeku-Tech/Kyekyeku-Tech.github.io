<!-- ===============>> Pricing section start here <<================= -->
<section class="pricing padding-top padding-bottom">
    <div class="section-header section-header--max50">
        <h2 class="mb-15 mt-minus-5">Our <span>pricings </span>plan</h2>
        <p>We offer the best pricings around - from installations to repairs, maintenance, and more!</p>
    </div>
    <div class="container">
        <div class="pricing__wrapper">
            <div class="row g-4 align-items-center">
                <?php echo $__env->make('templates.basic.page.plan', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
    <div class="pricing__shape">
        <span class="pricing__shape-item pricing__shape-item--1"> <span></span> </span>
        <span class="pricing__shape-item pricing__shape-item--2"> <img src="assets/images/icon/1.png" alt="shape-icon">
        </span>
    </div>
</section>
<!-- ===============>> Pricing section start here <<================= -->
<?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/templates/basic/sections/home/plan.blade.php ENDPATH**/ ?>