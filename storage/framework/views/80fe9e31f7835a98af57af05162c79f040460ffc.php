
<?php $__env->startSection('title', 'Login'); ?>
<?php $__env->startSection('type', 'Log In'); ?>
<?php $__env->startSection('name_form', 'send_form'); ?>
<?php $__env->startSection('form_action', route('check.db')); ?>

<?php $__env->startSection('script'); ?>
<script src="js/script_checkuserpass.js" defer></script>
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

<?php $__env->startSection('add'); ?>
  <div class="text-center p-t-90">
    <?php if($check == "name_false"): ?>
      <br>
      <span class="text-center flex-c text-red">
        Non esiste alcun utente registrato con questo nome. Riprova!
      </span>
    <?php elseif($check == "pass_false"): ?>
      <br>
      <span class="text-center flex-c text-red">
        Password Errata. Riprova!
      </span>
    <?php elseif($check == "register_ok"): ?>
      <br>
      <span class="text-center flex-c text-lime">
        Account Registrato Con Successo. Accedi!
      </span>
    <?php elseif($check == "register_fail"): ?>
      <br>
      <span class="text-center flex-c text-red">
        Esiste già un account registrato a questo nome!
      </span>
    <?php elseif($check == "delete_ok"): ?>
      <br>
      <span class="text-center flex-c text-lime">
        Account eliminato con successo!
      </span>
    <?php endif; ?>
    <a class="txt1" href="<?php echo e(route('view.register')); ?>">
      Create account
      <i class="fa fa-user-plus" aria-hidden="true"></i>
    </a>
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
<?php echo $__env->make('layouts.log_reg_del', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/login.blade.php ENDPATH**/ ?>