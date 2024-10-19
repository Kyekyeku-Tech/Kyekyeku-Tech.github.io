<?php
    $popup = getContent('popup.content', true);
?>
<div class="modal custom--modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content glass-bg" style="width: 90%; margin: auto;">
            <div class="modal-body p-3">
                <h5 class="mb-0 small-font text-light text-center">
                    <?php
                        echo @$popup->data_values->notice;
                    ?>
                </h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm text-primary w-100" data-bs-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/ethemest/DEMO/script.viser.store/usdt/core/resources/views/templates/basic/modal/popup.blade.php ENDPATH**/ ?>