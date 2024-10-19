
<?php $__env->startSection('panel'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card b-radius--10 ">
                <div class="card-body p-0">
                    <div class="table-responsive--sm table-responsive">
                        <table class="table table--light style--two custom-data-table">
                            <thead>
                                <tr>
                                    <th><?php echo app('translator')->get('Title'); ?></th>
                                    <th><?php echo app('translator')->get('Client ID'); ?></th>
                                    <th><?php echo app('translator')->get('Status'); ?></th>
                                    <th><?php echo app('translator')->get('Action'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = gs()->socialite_credentials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $credential): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="fw-bold"><?php echo e(ucfirst($key)); ?></td>
                                        <td><?php echo e($credential->client_id); ?></td>
                                        <td>
                                            <?php if(@$credential->status == 1): ?>
                                                <span class="badge badge--success"><?php echo app('translator')->get('Enabled'); ?></span>
                                            <?php else: ?>
                                                <span class="badge badge--warning"><?php echo app('translator')->get('Disabled'); ?></span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-end flex-wrap gap-1">
                                                <button class="btn btn-outline--primary btn-sm editBtn" data-client_id="<?php echo e($credential->client_id); ?>" data-client_secret="<?php echo e($credential->client_secret); ?>" data-key="<?php echo e($key); ?>"><i class="la la-cogs"></i><?php echo app('translator')->get('Configure'); ?></button>

                                                <button type="button" class="btn btn-sm btn-outline--dark helpBtn" data-target-key="<?php echo e($key); ?>">
                                                    <i class="la la-question"></i> <?php echo app('translator')->get('Help'); ?>
                                                </button>

                                                <?php if(@$credential->status == 1): ?>
                                                    <button class="btn btn-outline--danger btn-sm confirmationBtn" data-question="<?php echo app('translator')->get('Are you sure that you want to enable this login credential?'); ?>" data-action="<?php echo e(route('admin.socialite.credentials.status.update', $key)); ?>"><i class="las la-eye-slash"></i><?php echo app('translator')->get('Disable'); ?></button>
                                                <?php else: ?>
                                                    <button class="btn btn-outline--success btn-sm confirmationBtn" data-question="<?php echo app('translator')->get('Are you sure that you want to disable login credential?'); ?>" data-action="<?php echo e(route('admin.socialite.credentials.status.update', $key)); ?>"><i class="las la-eye"></i><?php echo app('translator')->get('Enable'); ?></button>
                                                <?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit -->
    <div id="editModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('Update Credential'); ?>: <span class="credential-name"></span></h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <form method="POST" action="">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Client ID'); ?></label>
                            <input type="text" class="form-control" name="client_id">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Client Secret'); ?></label>
                            <input type="text" class="form-control" name="client_secret">
                        </div>
                        <div class="form-group">
                            <label><?php echo app('translator')->get('Callback URL'); ?></label>
                            <div class="input-group">
                                <input type="text" class="form-control callback" readonly>
                                <button type="button" class="input-group-text copyInput" title="<?php echo app('translator')->get('Copy'); ?>">
                                    <i class="las la-clipboard"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="editBtn"><?php echo app('translator')->get('Submit'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Help -->
    <div id="helpModal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><?php echo app('translator')->get('How to get'); ?> <span class="title-key"></span> <?php echo app('translator')->get('credentials'); ?>?</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="modal-body">

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

<?php $__env->startPush('script'); ?>
    <script>
        (function($) {
            "use strict";
            $(document).on('click', '.editBtn', function() {
                let modal = $('#editModal');
                let data = $(this).data();
                let route = "<?php echo e(route('admin.socialite.credentials.update', '')); ?>";
                let callbackUrl = "<?php echo e(route('user.social.login.callback', '')); ?>";
                modal.find('form').attr('action', `${route}/${data.key}`);
                modal.find('.credential-name').text(data.key);
                modal.find('[name=client_id]').val(data.client_id);
                modal.find('[name=client_secret]').val(data.client_secret);
                modal.find('.callback').val(`${callbackUrl}/${data.key}`);
                modal.modal('show');
            });
            $('.copyInput').on('click', function(e) {
                var copybtn = $(this);
                var input = copybtn.closest('.input-group').find('input');
                if (input && input.select) {
                    input.select();
                    try {
                        document.execCommand('SelectAll')
                        document.execCommand('Copy', false, null);
                        input.blur();
                        notify('success', `Copied: ${copybtn.closest('.input-group').find('input').val()}`);
                    } catch (err) {
                        alert('Please press Ctrl/Cmd + C to copy');
                    }
                }
            });

            $(document).on('click', '.helpBtn', function() {
                var modal = $('#helpModal');

                let rules = '';
                let key = $(this).data('target-key');
                modal.find('.title-key').text(key);

                if (key == 'google') {

                    rules = `<ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 1'); ?></b>: <?php echo app('translator')->get('Go to'); ?> <a href="https://console.developers.google.com" target="_blank"><?php echo app('translator')->get('google developer console'); ?>.</a></li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 2'); ?></b>: <?php echo app('translator')->get('Click on Select a project than click on'); ?> <a href="https://console.cloud.google.com/projectcreate" target="_blank"><?php echo app('translator')->get('New Project'); ?></a>  <?php echo app('translator')->get('and create a project providing the project name'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 3'); ?></b>: <?php echo app('translator')->get('Click on'); ?> <a href="https://console.cloud.google.com/apis/credentials" target="_blank"><?php echo app('translator')->get('credentials'); ?>.</a></li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 4'); ?></b>: <?php echo app('translator')->get('Click on create credentials and select'); ?> <a href="https://console.cloud.google.com/apis/credentials/oauthclient" target="_blank"><?php echo app('translator')->get('OAuth client ID'); ?>.</a></li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 5'); ?></b>: <?php echo app('translator')->get('Click on'); ?> <a href="https://console.cloud.google.com/apis/credentials/consent" target="_blank"><?php echo app('translator')->get('Configure Consent Screen'); ?>.</a></li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 6'); ?></b>: <?php echo app('translator')->get('Choose External option and press the create button'); ?>. </li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 7'); ?></b>: <?php echo app('translator')->get('Please fill up the required informations for app configuration'); ?>. </li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 8'); ?></b>: <?php echo app('translator')->get('Again click on'); ?> <a href="https://console.cloud.google.com/apis/credentials" target="_blank"><?php echo app('translator')->get('credentials'); ?></a> <?php echo app('translator')->get('and select type as web application and fill up the required informations. Also don\'t forget to add redirect url and press create button'); ?>. </li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 9'); ?></b>: <?php echo app('translator')->get('Finally you\'ve got the credentials. Please copy the Client ID and Client Secret and paste it in admin panel google configuration'); ?>. </li>
                    </ul>`;
                } else if (key == 'facebook') {
                    rules = ` <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 1'); ?></b>: <?php echo app('translator')->get('Go to'); ?> <a href="https://developers.facebook.com/" target="_blank"><?php echo app('translator')->get('facebook developer'); ?></a></li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 2'); ?></b>: <?php echo app('translator')->get('Click on Get Started and create Meta Developer account'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 3'); ?></b>: <?php echo app('translator')->get('Create an app by selecting Consumer option'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 4'); ?></b>: <?php echo app('translator')->get('Click on Setup Facebook Login and select Web option'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 5'); ?></b>: <?php echo app('translator')->get('Add site url'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 6'); ?></b>: <?php echo app('translator')->get('Go to Facebook Login > Settings and add callback URL here'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 7'); ?></b>: <?php echo app('translator')->get('Go to Setting > Basic and copy the credentials and paste to admin panel'); ?>.</li>

                    </ul>`;
                } else if (key == 'linkedin') {
                    rules = `<ul class="list-group list-group-flush">
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 1'); ?></b>: <?php echo app('translator')->get('Go to'); ?> <a href="https://developer.linkedin.com/" target="_blank"><?php echo app('translator')->get('linkedin developer'); ?></a>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 2'); ?></b>: <?php echo app('translator')->get('Click on create app and provide required information'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 3'); ?></b>: <?php echo app('translator')->get('Click on Sign In with Linkedin > Request access'); ?>.</li>
                        <li class="list-group-item"><b><?php echo app('translator')->get('Step 4'); ?></b>: <?php echo app('translator')->get('Click Auth option and copy the credentials and paste it to admin panel and don\'t forget to add redirect url here'); ?>.</li>
                    </ul>`;
                }

                modal.find('.modal-body').html(rules);
                modal.modal('show');
            });
        })(jQuery);
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mrorko/Sites/newTrading/core/resources/views/admin/setting/social_credential.blade.php ENDPATH**/ ?>