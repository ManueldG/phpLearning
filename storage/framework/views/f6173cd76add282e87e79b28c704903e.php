<footer class="bg-white rounded-lg shadow-sm dark:bg-gray-900 m-4">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="<?php echo e(route('home')); ?>" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                <?php if (isset($component)) { $__componentOriginal8892e718f3d0d7a916180885c6f012e7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8892e718f3d0d7a916180885c6f012e7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-logo','data' => ['class' => 'block h-14 w-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-14 w-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $attributes = $__attributesOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__attributesOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8892e718f3d0d7a916180885c6f012e7)): ?>
<?php $component = $__componentOriginal8892e718f3d0d7a916180885c6f012e7; ?>
<?php unset($__componentOriginal8892e718f3d0d7a916180885c6f012e7); ?>
<?php endif; ?>
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php echo e(__('Interprete PHP')); ?></span>
            </a>
            <?php if(0): ?>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            <?php endif; ?>
            <span class="block text-sm text-gray-500 sm:text-end dark:text-gray-400">© 2025 <a href="https://www.manueldellagala.it/" class="hover:underline">Manuel della Gala™</a>. All Rights Reserved.</span>
        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

    </div>
    <div class="flex justify-center text-gray-200">
        Powered by
    </div>
    <div class="flex justify-around flex-wrap sm:flex-nowrap text-gray-200">

        <div class="flex items-center flex-col logo-tek text-gray-200 m-7">
            <img class="w-24" src="https://phpsandbox.org/images/logo.png" alt="PHPSandbox">
            <div> © 2025 <a href="https://phpsandbox.org/" class="hover:underline"> PHPSandbox™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col logo-tek  text-gray-200 m-7">
            <img class="w-24" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="Laravel">
            <div> © 2025 <a href="https://www.laravel.com/" class="hover:underline">Laravel™</a>. All Rights Reserved.</div>
        </div>

        <div class="flex items-center flex-col logo-tek text-gray-200 m-7">
            <img class="w-10 " src="https://flowbite.com/docs/images/logo.svg" alt="Flowbite">
            <div>© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™ </a>. All Rights Reserved.</div>
        </div>

    </div>
</footer>
<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views\components\footer.blade.php ENDPATH**/ ?>