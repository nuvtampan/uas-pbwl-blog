
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/category')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Category<a id="tbh" href="<?php echo e(url('category/create')); ?>">+</a></h3>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><?php echo e($row->text); ?></td>
			<td><a id="btn"  href="<?php echo e(url('category/'.$row->id.'/edit')); ?>">Edit</a></td>
			<td><form action="<?php echo e(url('/category/'.$row->id)); ?>" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/category/index.blade.php ENDPATH**/ ?>