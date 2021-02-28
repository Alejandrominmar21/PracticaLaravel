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
                    <h1> Crear un Tramo </h1>
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
                    <form action="<?php echo e(route('tramos.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <label for="dia">Elige un dia</label>
                        <select id="dia" name="dia">
                        <?php $__currentLoopData = $dias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($dia); ?>"><?php echo e($dia); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>

                        <label for="horainicio">Elige una hora de inicio</label>
                        <select id="horainicio" name="horainicio">
                        <?php $__currentLoopData = $horas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($hora); ?>"><?php echo e($hora); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>

                        <label for="horafin">Elige una hora de fin</label>
                        <select id="horafin" name="horafin">
                        <?php $__currentLoopData = $horas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hora): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($hora); ?>"><?php echo e($hora); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>
                        
                        <label for="actividad_id">Elige una actividad</label>
                        <select id="actividad_id" name="actividad_id">
                        <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($actividad->id); ?>"><?php echo e($actividad->nombre); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select><br>

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
<?php endif; ?><?php /**PATH D:\xampp\htdocs\practicaLaravel\resources\views/tramos/create.blade.php ENDPATH**/ ?>