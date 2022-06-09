
<?php $__env->startSection('title', 'Delete Account'); ?>
<?php $__env->startSection('type', 'Delete'); ?>
<?php $__env->startSection('name_form', 'send_form'); ?>
<?php $__env->startSection('form_action', route('delete')); ?>

<?php $__env->startSection('script'); ?>
<script src="js/script_checkuserpass.js" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
  <div class="wrap-input100 validate-input" data-validate = "Enter username"> 
  <input type="text" class="input100" placeholder="User name" name="username" value="<?php echo e(Session::get('username')); ?>" readonly>
    <span class="focus-input100" data-placeholder="&#xf207;"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Enter password">
    <input id="psw" type="password" class="input100" placeholder="Password" name="password">
      <span class="focus-input100" data-placeholder="&#xf191;"></span>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('create_account'); ?>

  <?php if($check == "delete_no"): ?>
    <br>
    <span class="text-center flex-c text-red">
			Password Errata. Non puoi eliminare questo account.
		</span>
  <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('buttons'); ?>
<div type="submit" class="container-login100-form-btn">
		<button class="login100-form-btn">
			<?php echo $__env->yieldContent('type'); ?>
      <i class="fa fa-sign-in" aria-hidden="true"></i>
		</button>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.log_reg_del', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/delete.blade.php ENDPATH**/ ?>