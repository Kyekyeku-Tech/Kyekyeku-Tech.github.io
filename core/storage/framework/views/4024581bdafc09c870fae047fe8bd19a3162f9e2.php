<?php $__env->startSection('content'); ?>
<?php
$infos = getContent('contact.element');
$contact = getContent('contact.content',true);
?>
<section class="pt-150 pb-150">
    <div class="container">
      <div class="row mb-none-40">
        <?php $__currentLoopData = $infos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-4 col-md-6 mb-40">
          <div class="contact-item">
            <div class="icon">
              <?php echo $info->data_values->icon ?>
            </div>
            <div class="content">
              <h3 class="title"><?php echo e(__($info->data_values->title)); ?></h3>
              <p><?php echo e(__($info->data_values->content)); ?></p>
            </div>
          </div><!-- contact-item end -->
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="row justify-content-center mt-100">
        <div class="col-lg-12">
          <div class="contact-form-wrapper pl-5">
            <h3 class="title"><?php echo e(__($contact->data_values->heading)); ?></h3>
            <p><?php echo e(__($contact->data_values->subheading)); ?></p>
            <form action="" class="contact-form verify-gcaptcha mt-50" id="contact_form_submit" method="post">
              <?php echo csrf_field(); ?>
              <div class="row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" id="contact-name" placeholder="<?php echo app('translator')->get('Name'); ?>">
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" name="email" class="form-control" id="contact-email" placeholder="<?php echo app('translator')->get('Email'); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <input type="text" name="subject" class="form-control" id="contact-email" placeholder="<?php echo app('translator')->get('Subject'); ?>">
                </div>
                <div class="form-group col-lg-12">
                  <textarea name="message" id="contact-message" class="form-control" placeholder="<?php echo app('translator')->get('Write message'); ?>"></textarea>
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
                <div class="col-lg-12">
                  <button type="submit" class="btn btn--base w-100"><?php echo app('translator')->get('send message'); ?></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($activeTemplate.'layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/oregoazi/public_html/core/resources/views/templates/basic/contact.blade.php ENDPATH**/ ?>