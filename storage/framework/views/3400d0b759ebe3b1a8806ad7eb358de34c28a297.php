
<?php $__env->startSection('title', 'Upload'); ?>
<?php $__env->startSection('type', 'Upload Article'); ?>
<?php $__env->startSection('name_form', 'upload'); ?>
<?php $__env->startSection('enctype', 'enctype=multipart/form-data'); ?>
<?php $__env->startSection('form_action', route('upload.article')); ?>

<?php $__env->startSection('script'); ?>
<script src="js/upload_check.js" defer></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('login'); ?>
<div class="wrap-input100 validate-input">
  <input id="file" type="file" class="input100" name="logo" placeholder="Immagine dell'articolo">
  <span class="focus-input100" data-placeholder="&#xf17f;"></span>
</div>
<div class="wrap-input100 validate-input">
  <textarea id="title" type="text" class="input100" name="title" rows="4" cols="50" placeholder="Titolo dell'articolo"></textarea>
  <span class="focus-input100" data-placeholder="&#xf256;"></span>
</div>
<div class="wrap-input100 validate-input">
  <textarea id="heading" type="text" class="input100" name="heading" rows="10" cols="100" placeholder="Header dell'articolo"></textarea>
  <span class="focus-input100" data-placeholder="&#xf256;"></span>
</div>
<div class="wrap-input100 validate-input">
  <textarea id="paragraph" type="text" class="input100" name="paragraph" rows="10" cols="100" placeholder="Corpo dell'articolo"></textarea>
  <span class="focus-input100" data-placeholder="&#xf256;"></span>
</div>
<div class="wrap-input100 validate-input">
  <label for="type" class="input100">Tipo di articolo</label>
  <select id="type" name="type">
  <option value="crypto">Crypto</option>
  <option value="stocks">Stocks</option>
  <option value="business">Business</option>
  <option value="music">Music</option>
  </select>
  <span class="focus-input100" data-placeholder="&#xf256;"></span>
</div>

<div id="message">
  <h5>Parametri da rispettare:</h5>
  <p id="mandatory_file" class="invalid">File con estensione <b>jpg o jpeg</b></p>
  <p id="mandatory_title" class="invalid">Titolo con lunghezza compresa tra <b>30 e 132 caratteri</b></p>
  <p id="mandatory_heading" class="invalid">Heading con lunghezza compresa tra <b>50 e 290 caratteri</b></p>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('buttons'); ?>
  <?php if($upload_check == "ok"): ?>
  <br>
  <span class="text-center flex-c text-lime">
    Articolo Caricato con successo!
  </span>
  <?php elseif($upload_check == "error"): ?>
  <br>
  <span class="text-center flex-c text-red">
    Errore durante il caricamento dell'articolo!
  </span>
  <?php elseif($upload_check == "img_false"): ?>
  <br>
  <span class="text-center flex-c text-red">
    Non puoi caricare un articolo con un'immagine già esistente!
    (Prova a cambiare nome dell'immagine)
  </span>
  <?php endif; ?>
  <div type="submit" class="container-login100-form-btn">
    <button class="login100-form-btn">
    Carica
    </button>
    &nbsp;
    <a id="exit" class="login100-form-btn" href="<?php echo e(route('logout')); ?>">
    Esci
    </a>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.log_reg_del', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/upload.blade.php ENDPATH**/ ?>