<!-- footer section start -->
<footer class="footer-section">
    <div class="footer-bottom">
      <div class="container">
        <hr>
        <div class="row">
          <div class="col-lg-8 col-md-6 text-md-start text-center">
            <p><?php echo app('translator')->get('Copyright'); ?> &copy; <?php echo e(date('Y')); ?> <?php echo e($general->sitename); ?>. <?php echo app('translator')->get('All Rights Reserved.'); ?></p>
          </div>
          <div class="col-lg-4 col-md-6 mt-md-0 mt-3">
            <?php
              $links = getContent('policy_pages.element');
            ?>
            <ul class="link-list justify-content-md-end justify-content-center">
              <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a href="<?php echo e(route('policy.pages',[slug($link->data_values->title),$link->id])); ?>"><?php echo e(__($link->data_values->title)); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
</footer>
  <!-- footer section end -->
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/partials/footer.blade.php ENDPATH**/ ?>