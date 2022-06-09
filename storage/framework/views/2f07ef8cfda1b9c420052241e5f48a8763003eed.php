
<?php $__env->startSection('title', 'Register'); ?>
<?php $__env->startSection('type', 'Create Account'); ?>
<?php $__env->startSection('name_form', 'register'); ?>
<?php $__env->startSection('form_action', route('register')); ?>

<?php $__env->startSection('script'); ?>
<script src="js/script_register.js" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
  <div class="wrap-input100 validate-input" data-validate = "Enter username"> 
    <input type="text" class="input100" placeholder="User name" name="username" value="<?php echo e(old('username')); ?>">
    <span class="focus-input100" data-placeholder="&#xf207;"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Enter password">
    <input id="psw" type="password" class="input100" placeholder="Password" name="password">
      <span class="focus-input100" data-placeholder="&#xf191;"></span>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('password_checker'); ?>

<div id="message">
  <h5>Password deve contenere:</h5>
  <p id="letter" class="invalid">Una lettera <b>minuscola</b></p>
  <p id="capital" class="invalid">Una lettera <b>maiuscola</b></p>
  <p id="number" class="invalid">Un <b>numero</b></p>
  <p id="special" class="invalid">Un <b>carattere speciale</b></p>
  <p id="length" class="invalid">Lunghezza tra <b>8 e 20 caratteri</b></p>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('buttons'); ?>
<div type="submit" class="container-login100-form-btn">
		<button class="login100-form-btn">
			<?php echo $__env->yieldContent('type'); ?>
      <i class="fa fa-sign-in" aria-hidden="true"></i>
		</button>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.log_reg_del', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/register.blade.php ENDPATH**/ ?>