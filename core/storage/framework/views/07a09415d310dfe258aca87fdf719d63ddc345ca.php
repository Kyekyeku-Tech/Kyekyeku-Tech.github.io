<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viser Store Licensing Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://license.viser.store/external/install.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="shortcut icon" href="https://license.viser.store/assets/images/logoIcon/favicon.png" type="image/x-icon">
</head>
<body>
    <header class="section-bg py-2 text-center">
        <div class="container">
            <h3 class="title">License Verification Portal</h3>
        </div>
    </header>

    <div class="installation-section padding-bottom padding-top">
        <div class="container">
            <div class="installation-wrapper">
                <div class="install-content-area">
                    <div class="install-item">
                        <h3 class="title text-center">License Information</h3>
                        <div class="box-item">
                            <form class="verForm">
                                <?php echo csrf_field(); ?>
                                <div class="info-item">
                                    <h5 class="font-weight-normal mb-2">Purchase Code</h5>
                                    <div class="row">
                                        <div class="information-form-group col-sm-9">
                                            <input type="text" name="purchase_code" placeholder="Purchase Code" required>
                                        </div>
                                        <div class="information-form-group col-sm-3">
                                            <button type="submit" class="theme-button choto w-100 sbmBtn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="item table-area mt-5">
                                <table class="requirment-table">
                                    <h3 class="text-success resp-msg text-danger text-center"></h3>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <footer class="section-bg py-3 text-center">
        <div class container>
            <p class="m-0 font-weight-bold">&copy;<?php echo e(date('Y')); ?> - All Rights Reserved by <a href="https://viser.store/">&nbsp;Viser Store</a></p>
        </div>
    </footer>
    
    <script src="<?php echo e(asset('assets/global/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/global/js/jquery-3.6.0.min.js')); ?>"></script>
<script>
    (function ($) {
        $('.verForm').submit(function (e) {
            e.preventDefault();
            $('.alert-area').addClass('d-none');
            $('.sbmBtn').text('Processing...');

            setTimeout(function () {
                var url = '<?php echo e(route(Laramin\Utility\VugiChugi::acRouterSbm())); ?>';
                var data = {
                    "purchase_code": $('.verForm').find('[name=purchase_code]').val(),
                };

                $('.resp-msg').text('');

                $.post(url, data, function (response) {
                    $('.sbmBtn').text('Submit');
                    $('.verForm').trigger("reset");

                    if (response.type === 'error') {
                        $('.alert-area').removeClass('d-none');
                        $('.resp-msg').text(response.message).removeClass('text-success').addClass('text-danger');
                    } else if (response.type === 'success') {
                        $('.alert-area').removeClass('d-none');
                        $('.resp-msg').text('Success: ' + response.message).removeClass('text-danger').addClass('text-success');
                    } else {
                        location.reload();
                    }
                });
            }, 100);
        });
    })(jQuery);
</script>

</body>
</html><?php /**PATH /home/ethemest/DEMO/demo.viser.store/miningjs/core/vendor/laramin/utility/src/Views/laramin_start.blade.php ENDPATH**/ ?>