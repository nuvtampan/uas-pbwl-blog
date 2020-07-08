
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Edit Data Category</h3>
<form method="post" action="<?php echo e(url('/category/'.$row->id)); ?>">
	<input type="hidden" name="_method" value="PATCH">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Nama Category</th>
			<td><input type="text" name="name" value="<?php echo e($row->name); ?>"></td>
		</tr>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/category/edit.blade.php ENDPATH**/ ?>