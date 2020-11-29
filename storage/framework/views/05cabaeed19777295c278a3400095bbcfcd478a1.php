<?php $__env->startSection('content'); ?>
<div class="card">
	<div class="card-header bg-primary text-center">
		<h1>Coca-Cola</h1>
	</div>
	<div class="card-body">
		<div class="alert alert-danger text-center">
			Hello <b><?php echo e($got->name); ?> </b>! <br>
			You've won <?php echo e($got->amount); ?> bottle of Coca-Cola. <br>
			Please Contact with <?php echo e($siteOwner); ?> .
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('cocacola::layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/fahimanayet/code/package/packages/cocacola/src/resources/views//won.blade.php ENDPATH**/ ?>