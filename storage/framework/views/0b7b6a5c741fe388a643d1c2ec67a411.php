<?php if (isset($component)) { $__componentOriginala5d2ebe6984b8bef0c1edd634ec9db32 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5d2ebe6984b8bef0c1edd634ec9db32 = $attributes; } ?>
<?php $component = App\View\Components\ProfileLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('profile-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ProfileLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('API Tokens')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('api.api-token-manager');

$__html = app('livewire')->mount($__name, $__params, 'lw-3807723463-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5d2ebe6984b8bef0c1edd634ec9db32)): ?>
<?php $attributes = $__attributesOriginala5d2ebe6984b8bef0c1edd634ec9db32; ?>
<?php unset($__attributesOriginala5d2ebe6984b8bef0c1edd634ec9db32); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5d2ebe6984b8bef0c1edd634ec9db32)): ?>
<?php $component = $__componentOriginala5d2ebe6984b8bef0c1edd634ec9db32; ?>
<?php unset($__componentOriginala5d2ebe6984b8bef0c1edd634ec9db32); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views/api/index.blade.php ENDPATH**/ ?>