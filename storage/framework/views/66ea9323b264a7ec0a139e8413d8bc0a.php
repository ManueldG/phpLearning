<?php if (isset($component)) { $__componentOriginala6cc7234524c83bec4dcfe3dc96fc88e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala6cc7234524c83bec4dcfe3dc96fc88e = $attributes; } ?>
<?php $component = App\View\Components\Advice::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('advice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Advice::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

ciao <?php echo e($msg); ?>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala6cc7234524c83bec4dcfe3dc96fc88e)): ?>
<?php $attributes = $__attributesOriginala6cc7234524c83bec4dcfe3dc96fc88e; ?>
<?php unset($__attributesOriginala6cc7234524c83bec4dcfe3dc96fc88e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6cc7234524c83bec4dcfe3dc96fc88e)): ?>
<?php $component = $__componentOriginala6cc7234524c83bec4dcfe3dc96fc88e; ?>
<?php unset($__componentOriginala6cc7234524c83bec4dcfe3dc96fc88e); ?>
<?php endif; ?>


<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views/emails/advice.blade.php ENDPATH**/ ?>