
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Edit Data Photos</h3>
<form method="post" action="<?php echo e(url('/photo/'.$row->id)); ?>">
	<input type="hidden" name="_method" value="PATCH">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title" value="<?php echo e($row->title); ?>"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="post_id">
					<option value="<?php echo e($row->post->id); ?>" ><?php echo e($row->post->title); ?></option>
					<?php $__currentLoopData = $lst; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($rows->id); ?>" ><?php echo e($rows->title); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				</select>
			</td>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text" value="<?php echo e($row->text); ?>"></td>
		</tr>
		<tr>
			<th>Tanggal</th>
			<td><input type="date" name="date" value="<?php echo e($row->date); ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/photo/edit.blade.php ENDPATH**/ ?>