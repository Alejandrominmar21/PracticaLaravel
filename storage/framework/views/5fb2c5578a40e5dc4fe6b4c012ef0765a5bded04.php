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
                    <a href="<?php echo e(route('usuarios.create')); ?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Crear un usuario</button></a>
                    <form>
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="rol">Filtrar por rol</label>
                        <select id="rol" name="rol">
                            <option value="usuario">usuario</option>
                            <option value="administrador">administrador</option>
                          </select>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Filtrar</button>
                    </form>
                    <table>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Avatar</th>
                            <th>Rol</th>                            
                        </tr>
                        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($usuario->name); ?></td>
                                <td><?php echo e($usuario->email); ?></td>
                                <td><?php echo e($usuario->avatar); ?></td>
                                <td><?php echo e($usuario->rol); ?></td>     
                                <td>   <a href="<?php echo e(route('usuarios.edit', $usuario->id)); ?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button></a></td>         
                                <td><form action="<?php echo e(route('usuarios.destroy', $usuario)); ?>" method="POST"><?php echo csrf_field(); ?> <?php echo method_field('delete'); ?><button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Eliminar</button></form></td>                           
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </table>  
                    <?php echo e($usuarios->links()); ?>                  
                </div>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\xampp\htdocs\practicaLaravel\resources\views/users/index.blade.php ENDPATH**/ ?>