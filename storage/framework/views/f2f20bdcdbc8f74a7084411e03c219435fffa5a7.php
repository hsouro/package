<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header bg-primary text-center">
		<h1>Coca-Cola</h1>
	</div>
	<div class="card-body">
		<form action="<?php echo e(route('cocacola.post')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<div class="form-group">
				<label for="name">Name : </label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<input type="submit" value="Dodge That" class="btn btn-primary btn-block">
			</div>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('cocacola::layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fahimanayet/code/package/packages/cocacola/src/resources/views//index.blade.php ENDPATH**/ ?>