
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Post</h3>
<form method="post" action="<?php echo e(url('/post')); ?>">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="cat_id">
					<?php $__currentLoopData = $lst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($row->id); ?>"><?php echo e($row->name); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</select>
			</td>
		<tr>
			<th>Slug</th>
			<td><input type="text" name="slug"></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text"></td>
		</tr>
		<tr>
			<th>Date</th>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/Post/add.blade.php ENDPATH**/ ?>