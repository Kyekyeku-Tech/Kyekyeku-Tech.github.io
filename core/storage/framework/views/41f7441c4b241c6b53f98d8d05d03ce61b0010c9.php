<?php
    $popup = getContent('popup.content', true);
?>
<div class="modal custom--modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
        <div class="modal-content glass-bg" style="width: 90%; margin: auto;">
            <div class="modal-body p-3" style="background-color:#041E42">
                <h5 class="mb-0 small-font text-light text-center">
                    <?php
                        echo @$popup->data_values->notice;
                    ?>
                </h5>
            </div>
            <div class="modal-footer" style="background-color:#041E42">
                <button type="button" class="btn btn-sm text-primary w-100" data-bs-dismiss="modal">Confirm</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/sites/2a/9/9175d3ede1/public_html/cloudminers.site/tree/core/resources/views/templates/basic/modal/popup.blade.php ENDPATH**/ ?>