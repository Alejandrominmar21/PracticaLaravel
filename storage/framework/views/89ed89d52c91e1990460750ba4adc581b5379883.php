<?php use App\Models\Tramo; use App\Http\Controllers\TramoController; ?>
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
                    <table class="table-auto"style="width: 30%">
                        <tr>
                            <th>Actividad</th>
                            <th>Dia</th>
                            <th>Inicio</th>
                            <th>Fin</th>                               
                        </tr>
                        <?php $__currentLoopData = $reservas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reserva): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $tramo =  Tramo::find($reserva->tramo_id)?>
                            <tr>
                                <td><?php echo e(TramoController::imprimirActividad($tramo->actividad_id)); ?></td>        
                                <td><?php echo e($tramo->dia); ?></td>
                                <td><?php echo e($tramo->horainicio); ?></td>
                                <td><?php echo e($tramo->horafin); ?></td>
                                <td>
                                    <form action="<?php echo e(route('Tramo_users.destroy', $reserva)); ?>" method="POST"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?>
                                        <button type="submit"><img width='15' height='15' src='<?php echo e(asset('img/eliminar.png')); ?>'></button>
                                    </form>    
                                </td>                                  
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>             
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\practicaLaravel\resources\views/misActividades.blade.php ENDPATH**/ ?>