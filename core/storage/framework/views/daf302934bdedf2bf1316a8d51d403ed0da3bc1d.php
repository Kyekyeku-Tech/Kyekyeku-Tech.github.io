<?php
    $breadcrumb = getContent('breadcrumb.content',true);
?>
<section class="inner-page-hero bg_img" data-background="<?php echo e(getImage('assets/images/frontend/breadcrumb/'.$breadcrumb->data_values->image)); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="page-title"><?php echo e(__($pageTitle)); ?></h2>
                <ul class="page-list">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                    <li class="active"><?php echo e(__($pageTitle)); ?></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/partials/breadcrumb.blade.php ENDPATH**/ ?>