
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Edit Data Album</h3>
<form method="post" action="<?php echo e(url('/album/'.$row->id)); ?>">
	<input type="hidden" name="_method" value="PATCH">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="name" value="<?php echo e($row->name); ?>"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="photos_id">
					<option value="<?php echo e($row->photo->id); ?>" ><?php echo e($row->photo->title); ?></option>
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
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/album/edit.blade.php ENDPATH**/ ?>