
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['submit']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('header', null, []); ?> 

        <header class="bg-white shadow my-2">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                <h2><?php echo $page->title; ?></h2>

            </div>
        </header>

     <?php $__env->endSlot(); ?>

        <div class="flex flex-col grow">

            <?php if (isset($component)) { $__componentOriginalc01ad8e65f8891933bc1fb362935acb5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc01ad8e65f8891933bc1fb362935acb5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.my-form','data' => ['submit' => 'invio','class' => 'grow','action' => '/console','method' => 'get','target' => '_self']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('my-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['submit' => 'invio','class' => 'grow','action' => '/console','method' => 'get','target' => '_self']); ?>

                 <?php $__env->slot('title', null, []); ?> 
                    <?php echo e($page->title); ?>

                 <?php $__env->endSlot(); ?>



                 <?php $__env->slot('description', null, []); ?> 
                    <span class="whitespace-pre-wrap text-base"><?php echo e(__($page->description)); ?></span>
                 <?php $__env->endSlot(); ?>

                 <?php $__env->slot('form', null, []); ?> 

                    <?php echo method_field('GET'); ?>
                    <?php echo csrf_field(); ?>
                    <textarea id="id" class="w-full" name="code" type="text" placeholder="insert code" rows="7">
<?php echo e($page->example ?? ""); ?>

                    </textarea>

                    <input type="submit" class="rounded-xl inline-block px-5 py-2 my-3 border-[#19140035] border text-[#1b1b18]  hover:border-[#19140035] text-sm leading-normal" value="<?php echo e(__('Enter')); ?>" >


                 <?php $__env->endSlot(); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc01ad8e65f8891933bc1fb362935acb5)): ?>
<?php $attributes = $__attributesOriginalc01ad8e65f8891933bc1fb362935acb5; ?>
<?php unset($__attributesOriginalc01ad8e65f8891933bc1fb362935acb5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc01ad8e65f8891933bc1fb362935acb5)): ?>
<?php $component = $__componentOriginalc01ad8e65f8891933bc1fb362935acb5; ?>
<?php unset($__componentOriginalc01ad8e65f8891933bc1fb362935acb5); ?>
<?php endif; ?>

            <div class="w-full">
                <div class="m-3 whitespace-pre-wrap overflow-x-auto"><?php echo $result ?? "<div class='text-red-700'>" . $error . "</div>"; ?></div>
            </div>

        </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>


<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views/pages/show.blade.php ENDPATH**/ ?>