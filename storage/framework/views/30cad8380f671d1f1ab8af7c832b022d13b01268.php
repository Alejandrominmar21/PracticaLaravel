<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12" >
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 self-center">
                    <h1> Crear una actividad </h1>
                    <form action="<?php echo e(route('actividades.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Nombre</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="nombre" type="text" placeholder="Nombre" value="<?php echo e(old('nombre')); ?>"><br>

                        <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <br>
                           <small>Nombre incorrecto</small>
                           <br> 
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="descripcion" type="text" placeholder="Descripción"  value="<?php echo e(old('descripcion')); ?>">

                        <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <br>
                           <small>Descripción incorrecta</small>
                           <br> 
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                        <label class="block text-gray-700 text-sm font-bold mb-2" for="aforo">Aforo</label>
                        <input class="shadow appearance-none border rounded text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="aforo" type="number" placeholder="Aforo" value="<?php echo e(old('aforo')); ?>">
                        <br>
                        <?php $__errorArgs = ['aforo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <br>
                           <small>Aforo incorrecto</small>
                           <br> 
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\practicaLaravel\resources\views/actividades/create.blade.php ENDPATH**/ ?>