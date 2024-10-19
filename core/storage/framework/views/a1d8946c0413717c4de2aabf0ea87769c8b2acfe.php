<?php $__env->startSection('content'); ?>
    <div class="cmn-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card custom--card">
                        <div class="card-header card-header-bg d-flex flex-wrap justify-content-between align-items-center">
                            <h5 class="mt-0">
                                <?php echo $myTicket->statusBadge; ?>
                                [<?php echo app('translator')->get('Ticket'); ?>#<?php echo e($myTicket->ticket); ?>] <?php echo e($myTicket->subject); ?>

                            </h5>
                            <?php if($myTicket->status != Status::TICKET_CLOSE && $myTicket->user): ?>
                                <span class="confirmationBtn text-danger c-pointer" data-question="<?php echo app('translator')->get('Are you sure to close this ticket?'); ?>" data-action="<?php echo e(route('ticket.close', $myTicket->id)); ?>"><i class="las la-lg la-times-circle"></i>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="card-body">
                            <form method="post" action="<?php echo e(route('ticket.reply', $myTicket->id)); ?>" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row justify-content-between">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control form--control" rows="4"><?php echo e(old('message')); ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <a href="javascript:void(0)" class="btn btn--base btn-sm addFile"><i class="fa fa-plus"></i> <?php echo app('translator')->get('Add New'); ?></a>
                                </div>
                                <div class="form-group">
                                    <label class="form-label"><?php echo app('translator')->get('Attachments'); ?></label> <small class="text-danger"><?php echo app('translator')->get('Max 5 files can be uploaded'); ?>. <?php echo app('translator')->get('Maximum upload size is'); ?> <?php echo e(ini_get('upload_max_filesize')); ?></small>
                                    <input type="file" name="attachments[]" class="form-control form--control"/>
                                    <div id="fileUploadsContainer"></div>
                                    <p class="my-2 ticket-attachments-message text-muted">
                                        <?php echo app('translator')->get('Allowed File Extensions'); ?>: .<?php echo app('translator')->get('jpg'); ?>, .<?php echo app('translator')->get('jpeg'); ?>, .<?php echo app('translator')->get('png'); ?>, .<?php echo app('translator')->get('pdf'); ?>, .<?php echo app('translator')->get('doc'); ?>, .<?php echo app('translator')->get('docx'); ?>
                                    </p>
                                </div>
                                <button type="submit" class="btn btn--base w-100"> <i class="fa fa-reply"></i> <?php echo app('translator')->get('Reply'); ?></button>
                            </form>
                        </div>
                    </div>

                    <div class="card mt-4">
                        <div class="card-body">
                            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($message->admin_id == 0): ?>
                                    <div class="row border border-primary border-radius-3 my-3 py-3 mx-2">
                                        <div class="col-md-3 border-end text-end">
                                            <h5 class="my-3"><?php echo e($message->ticket->name); ?></h5>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted fw-bold my-3">
                                                <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                            <p><?php echo e($message->message); ?></p>
                                            <?php if($message->attachments->count() > 0): ?>
                                                <div class="mt-2">
                                                    <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(route('ticket.download', encrypt($image->id))); ?>" class="me-3"><i class="fa fa-file"></i> <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php else: ?>
                                    <div class="row border border-warning border-radius-3 my-3 py-3 mx-2" style="background-color: #ffd96729">
                                        <div class="col-md-3 border-end text-end">
                                            <h5 class="my-3"><?php echo e($message->admin->name); ?></h5>
                                            <p class="lead text-muted"><?php echo app('translator')->get('Staff'); ?></p>
                                        </div>
                                        <div class="col-md-9">
                                            <p class="text-muted fw-bold my-3">
                                                <?php echo app('translator')->get('Posted on'); ?> <?php echo e($message->created_at->format('l, dS F Y @ H:i')); ?></p>
                                            <p><?php echo e($message->message); ?></p>
                                            <?php if($message->attachments->count() > 0): ?>
                                                <div class="mt-2">
                                                    <?php $__currentLoopData = $message->attachments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(route('ticket.download', encrypt($image->id))); ?>" class="me-3"><i class="fa fa-file"></i> <?php echo app('translator')->get('Attachment'); ?> <?php echo e(++$k); ?> </a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b = $component; } ?>
<?php $component = App\View\Components\ConfirmationModal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('confirmation-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ConfirmationModal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b)): ?>
<?php $component = $__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b; ?>
<?php unset($__componentOriginalc51724be1d1b72c3a09523edef6afdd790effb8b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
    <style>
        .input-group-text:focus {
            box-shadow: none !important;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict";
            var fileAdded = 0;
            $('.addFile').on('click', function() {
                if (fileAdded >= 4) {
                    notify('error', 'You\'ve added maximum number of file');
                    return false;
                }
                fileAdded++;
                $("#fileUploadsContainer").append(`
                    <div class="input-group my-3">
                        <input type="file" name="attachments[]" class="form-control form--control" required />
                        <button type="submit" class="input-group-text btn-danger remove-btn"><i class="las la-times"></i></button>
                    </div>
                `)
            });
            $(document).on('click', '.remove-btn', function() {
                fileAdded--;
                $(this).closest('.input-group').remove();
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($activeTemplate . 'layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/ptclab-new-look/core/resources/views/templates/basic/user/support/view.blade.php ENDPATH**/ ?>