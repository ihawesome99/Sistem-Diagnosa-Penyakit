
<div class="modal fade" id="<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo e($id); ?>Label"
aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="<?php echo e($id); ?>Label"><?php echo e($title); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/components/modal.blade.php ENDPATH**/ ?>