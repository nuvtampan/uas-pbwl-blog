
<?php $__env->startSection('content'); ?>
<div class="container">
<h3>Tambah Data Category</h3>
<form method="post" action="<?php echo e(url('/category')); ?>">
	<?php echo csrf_field(); ?>
	<table>
		<tr>
			<th>Nama Category</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\webweban\resources\views/category/add.blade.php ENDPATH**/ ?>