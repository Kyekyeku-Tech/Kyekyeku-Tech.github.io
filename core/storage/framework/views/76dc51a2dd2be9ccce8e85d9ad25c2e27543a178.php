<?php if($seo): ?>
    <meta name="title" Content="<?php echo e($general->siteName(__($pageTitle))); ?>">
    <meta name="description" content="<?php echo e($seo->description); ?>">
    <meta name="keywords" content="<?php echo e(implode(',',$seo->keywords)); ?>">
    <link rel="shortcut icon" href="<?php echo e(getImage(getFilePath('logoIcon') .'/favicon.png')); ?>" type="image/x-icon">

    
    <link rel="apple-touch-icon" href="<?php echo e(getImage(getFilePath('logoIcon') .'/logo.png')); ?>">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="<?php echo e($general->siteName($pageTitle)); ?>">
    
    <meta itemprop="name" content="<?php echo e($general->siteName($pageTitle)); ?>">
    <meta itemprop="description" content="<?php echo e($general->seo_description); ?>">
    <meta itemprop="image" content="<?php echo e(getImage(getFilePath('seo') .'/'. $seo->image)); ?>">
    
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo e($seo->social_title); ?>">
    <meta property="og:description" content="<?php echo e($seo->social_description); ?>">
    <meta property="og:image" content="<?php echo e(getImage(getFilePath('seo') .'/'. $seo->image)); ?>"/>
    <meta property="og:image:type" content="image/<?php echo e(pathinfo(getImage(getFilePath('seo')) .'/'. $seo->image)['extension']); ?>" />
    <?php $socialImageSize = explode('x', getFileSize('seo')) ?>
    <meta property="og:image:width" content="<?php echo e($socialImageSize[0]); ?>" />
    <meta property="og:image:height" content="<?php echo e($socialImageSize[1]); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>">
    
    <meta name="twitter:card" content="summary_large_image">
<?php endif; ?>
<?php /**PATH /Users/mrorko/Sites/whiteTrading/core/resources/views/partials/seo.blade.php ENDPATH**/ ?>