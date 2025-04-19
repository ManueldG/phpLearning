<?php if (isset($component)) { $__componentOriginal3ead5760848878974bd34d96acfc16e3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ead5760848878974bd34d96acfc16e3 = $attributes; } ?>
<?php $component = App\View\Components\MinimalLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('minimal-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\MinimalLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('title', null, []); ?> 
        <?php echo e(__('Forbidden')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('code', null, []); ?> 
        <?php echo e(__('403')); ?>

     <?php $__env->endSlot(); ?>

     <?php $__env->slot('message', null, []); ?> 
        <?php echo e(__('Forbidden')); ?>

     <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ead5760848878974bd34d96acfc16e3)): ?>
<?php $attributes = $__attributesOriginal3ead5760848878974bd34d96acfc16e3; ?>
<?php unset($__attributesOriginal3ead5760848878974bd34d96acfc16e3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ead5760848878974bd34d96acfc16e3)): ?>
<?php $component = $__componentOriginal3ead5760848878974bd34d96acfc16e3; ?>
<?php unset($__componentOriginal3ead5760848878974bd34d96acfc16e3); ?>
<?php endif; ?>



<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views/errors/403.blade.php ENDPATH**/ ?>