<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'link' => '',
    'title' => '',
    'value' => '',
    'icon' => '',
    'image' => '',
    'bg' => 'white',
    'color' => 'primary',
    'icon_style' => 'outline',
    'overlay_icon' => 1,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'link' => '',
    'title' => '',
    'value' => '',
    'icon' => '',
    'image' => '',
    'bg' => 'white',
    'color' => 'primary',
    'icon_style' => 'outline',
    'overlay_icon' => 1,
]); ?>
<?php foreach (array_filter(([
    'link' => '',
    'title' => '',
    'value' => '',
    'icon' => '',
    'image' => '',
    'bg' => 'white',
    'color' => 'primary',
    'icon_style' => 'outline',
    'overlay_icon' => 1,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="widget-two box--shadow2 b-radius--5 bg--<?php echo e($bg); ?> border border-2 border--primary" >
    <?php if((bool) $overlay_icon): ?>
        
        <img class="overlay-icon" style="height: 100%; width: 100%; max-width: 100px" src="<?php echo e($image); ?>" alt="">
    <?php endif; ?>

    <div class="widget-two__icon b-radius--5">
        <img style="height: 100%; width: 100%; max-width: 100px" src="<?php echo e($image); ?>" alt="">
    </div>
    

    <div class="widget-two__content">
        <h3><?php echo e($value); ?></h3>
        <p><?php echo e(__($title)); ?></p>
    </div>

    <?php if($link): ?>
        <a href="<?php echo e($link); ?>" class="widget-two__btn btn btn-outline--<?php echo e($color); ?>"><?php echo app('translator')->get('View All'); ?></a>
    <?php endif; ?>
</div>
<?php /**PATH /home/ethemest/DEMO/demo.viser.store/miningjs/core/resources/views/components/widget-2.blade.php ENDPATH**/ ?>