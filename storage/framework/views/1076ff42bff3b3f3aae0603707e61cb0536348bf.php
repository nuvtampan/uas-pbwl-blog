
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Photos<a id="tbh" href="<?php echo e(url('photo/create')); ?>">+</a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>POST</th>
			<th>JUDUL</th>
			<th>IMAGES</th>
			<th>KETERANGAN</th>
			<th>TANGGAL</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr><center>
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->post->title); ?></td>
			<td><?php echo e($row->title); ?></td>
			<td><img src="img\<?php echo e($row->file); ?>"></td>
			<td><?php echo e($row->text); ?></td>
			<td><?php echo e($row->date); ?></td>
			<td><a class="btn btn-secondary"  href="<?php echo e(url('photo/'.$row->id.'/edit')); ?>">Edit</a></td>
			<td><form action="<?php echo e(url('/photo/'.$row->id)); ?>" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button class="btn btn-danger">Hapus</button>
			</form></td></center>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/photo/index.blade.php ENDPATH**/ ?>