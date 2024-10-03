<?php
    $favicon = setting_item('site_favicon');
?>
<?php if($favicon): ?>
    <?php
        $file = (new \Modules\Media\Models\MediaFile())->findById($favicon);
    ?>
    <?php if(!empty($file)): ?>
        <link rel="icon" type="<?php echo e($file['file_type']); ?>" href="<?php echo e(asset('uploads/'.$file['file_path'])); ?>" />
    <?php else: ?>
        :
        <link rel="icon" type="image/png" href="<?php echo e(url('images/favicon.png')); ?>" />
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\angular\Vip_travel\Vip_Travel_Project\modules/Layout/parts/favicon.blade.php ENDPATH**/ ?>