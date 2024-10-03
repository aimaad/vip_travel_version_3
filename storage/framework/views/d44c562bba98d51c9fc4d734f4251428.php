
<?php $__env->startSection('title', __('Forbidden')); ?>
<?php $__env->startSection('code', '403'); ?>
<?php $__env->startSection('message', __($exception->getMessage() ?: 'Forbidden')); ?>

<?php echo $__env->make('errors.illustrated-layout',['title'=>__('Page not found')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\dell\Desktop\Vip_travel\Vip_Travel_Project\themes\BC\resources\views\errors\403.blade.php ENDPATH**/ ?>