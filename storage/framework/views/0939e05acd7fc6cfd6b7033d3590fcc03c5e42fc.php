
<?php $__env->startSection('content'); ?>
<div class="container">
<form action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
	<h3>Daftar Post<a id="tbh" href="<?php echo e(url('post/create')); ?>">+</a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>CATEGORY</th>
			<th>JUDUL</th>
			<th>SLUG</th>
			<th>KETERANGAN</th>
			<th>TANGGAL</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($row->id); ?></td>
			<td><?php echo e($row->category->name); ?></td>
			<td><?php echo e($row->title); ?></td>
			<td><?php echo e($row->slug); ?></td>
			<td><?php echo e($row->text); ?></td>
			<td><?php echo e($row->date); ?></td>
			<td><a id="btn"  href="<?php echo e(url('post/'.$row->id.'/edit')); ?>">Edit</a></td>
			<td><form action="<?php echo e(url('/post/'.$row->id)); ?>" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				<?php echo csrf_field(); ?>
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/Post/index.blade.php ENDPATH**/ ?>