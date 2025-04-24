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

    <?php if(session('status')): ?>

        <div class="text-green-500"><?php echo e(__(session('status'))); ?></div>

    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->id == 1): ?>
            <div class="my-3 block">
                <a class="ring rounded bg-sky-500/50" href="<?php echo e(route('page.create')); ?>"><?php echo e(__('new')); ?></a>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class ="grid grid-cols-4 gap-2 " style="grid-template-columns: .3fr 2fr 3.5fr 2fr;">

        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <!--<div class="flex justify-between gap-8 w-full my-2">-->

                <div class=""><?php echo e(++$key); ?></div>
                <div class=""><?php echo e(Str::of($page->title)->limit(13)); ?></div>
                <div class=""><?php echo e(Str::of($page->description)->limit(40)); ?></div>

                <div class="flex flex-row justify-center gap-3">
                    <div><a class="ring rounded bg-sky-500/50" href="<?php echo e(route('page.show',$page->id)); ?>">mostra</a></div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->id == 1): ?>

                            <div><a class="ring rounded bg-sky-500/50" href="<?php echo e(route('page.edit',$page->id)); ?>">modifica</a></div>
                            <form  action="<?php echo e(route('page.destroy',$page->id)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button class="ring rounded bg-sky-500/50" type="submit">elimina</button>
                            </form>

                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <!--</div>-->

            <!--</div>-->

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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
<?php /**PATH C:\Users\Manuel\OneDrive\Pictures\Documents\Sviluppo\multidb\api\resources\views\pages\index.blade.php ENDPATH**/ ?>