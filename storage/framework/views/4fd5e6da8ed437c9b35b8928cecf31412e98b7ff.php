<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <?php echo $__env->yieldContent('script'); ?>
  </head>
  <body id="main">
    <div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
      <div class="wrap-login100">
          <form class="login100-form validate-form" action=<?php echo $__env->yieldContent('form_action'); ?> name=<?php echo $__env->yieldContent('name_form'); ?> method="post" <?php echo $__env->yieldContent('enctype'); ?>>
          <?php echo e(csrf_field()); ?>

            <span class="login100-form-logo">
						  <i class="zmdi zmdi-landscape"></i>
					  </span>
            <span class="login100-form-title p-b-34 p-t-27">
						  <?php echo $__env->yieldContent('type'); ?>
					  </span>
            <?php echo $__env->yieldContent('login'); ?>

            <?php echo $__env->yieldContent('password_checker'); ?>

            <?php echo $__env->yieldContent('buttons'); ?>

            <?php echo $__env->yieldContent('add'); ?>
            
          </form>
        </div>	
      </div>
    </div>
  </body>
</html><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/layouts/log_reg_del.blade.php ENDPATH**/ ?>