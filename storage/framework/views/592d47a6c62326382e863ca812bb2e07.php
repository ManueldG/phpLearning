<?php if(auth()->guard()->check()): ?>

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

                    <?php if (isset($component)) { $__componentOriginala29c4b6de1220dbc50317dc759b47929 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala29c4b6de1220dbc50317dc759b47929 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $attributes = $__attributesOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__attributesOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $component = $__componentOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__componentOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>

                </div>

            </header>

         <?php $__env->endSlot(); ?>

        <div class="py-12">
            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">
                <?php if (isset($component)) { $__componentOriginalfef18b83dad9fb9f477934ba01c89ca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2)): ?>
<?php $attributes = $__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2; ?>
<?php unset($__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfef18b83dad9fb9f477934ba01c89ca2)): ?>
<?php $component = $__componentOriginalfef18b83dad9fb9f477934ba01c89ca2; ?>
<?php unset($__componentOriginalfef18b83dad9fb9f477934ba01c89ca2); ?>
<?php endif; ?>
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

<?php else: ?>

    <?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

         <?php $__env->slot('header', null, []); ?> 

            <header class="bg-white shadow my-2">

                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">

                    <?php if (isset($component)) { $__componentOriginala29c4b6de1220dbc50317dc759b47929 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala29c4b6de1220dbc50317dc759b47929 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.title','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $attributes = $__attributesOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__attributesOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala29c4b6de1220dbc50317dc759b47929)): ?>
<?php $component = $__componentOriginala29c4b6de1220dbc50317dc759b47929; ?>
<?php unset($__componentOriginala29c4b6de1220dbc50317dc759b47929); ?>
<?php endif; ?>

                </div>

            </header>

         <?php $__env->endSlot(); ?>

        <div class="py-12">

            <div class="flex flex-row max-w-7xl mx-auto sm:px-6 lg:px-8">

                <?php if (isset($component)) { $__componentOriginalfef18b83dad9fb9f477934ba01c89ca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.home','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2)): ?>
<?php $attributes = $__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2; ?>
<?php unset($__attributesOriginalfef18b83dad9fb9f477934ba01c89ca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfef18b83dad9fb9f477934ba01c89ca2)): ?>
<?php $component = $__componentOriginalfef18b83dad9fb9f477934ba01c89ca2; ?>
<?php unset($__componentOriginalfef18b83dad9fb9f477934ba01c89ca2); ?>
<?php endif; ?>

            </div>

        </div>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>

<?php endif; ?>





<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views/home.blade.php ENDPATH**/ ?>