
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Album<a id="tbh" href="<?php echo e(url('album/create')); ?>">+</a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>FOTO</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->name); ?></td>
			<td><?php echo e($row->text); ?></td>
			<td><img src="img\<?php echo e($row->photo->file); ?>"></td>
			<td><a id="btn"  href="<?php echo e(url('album/'.$row->id.'/edit')); ?>">Edit</a></td>
			<td><form action="<?php echo e(url('/album/'.$row->id)); ?>" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/album/index.blade.php ENDPATH**/ ?>