

<?php $__env->startSection('title'); ?>
<title>Business</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('href_header'); ?>
<a class="login100-form-logo" href="<?php echo e(url('home')); ?>" data-tooltip="Home">
	<i class="zmdi zmdi-landscape"></i>
</a>
<a id="header-link_W" href="<?php echo e(url('crypto')); ?>">Crypto</a>
<a id="header-link_W" href="<?php echo e(url('stocks')); ?>">Stocks</a>
<a id="header-link_WO" href="#top" data-tooltip="Back to top">Business</a>
<a id="header-link_W" href="<?php echo e(url('music')); ?>">Music</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('widgets'); ?>
  <div class="widget">
    <!-- https://www.tomorrow.io/weather/widget/ -->
    <script>
      (function(d, s, id) {
        if (d.getElementById(id)) {
          if (window.__TOMORROW__) {
            window.__TOMORROW__.renderWidget();
          }
        return;
        }
        const fjs = d.getElementsByTagName(s)[0];
        const js = d.createElement(s);
        js.id = id;
        js.src = "https://www.tomorrow.io/v1/widget/sdk/sdk.bundle.min.js";
        
         fjs.parentNode.insertBefore(js, fjs);
      })(document, 'script', 'tomorrow-sdk');
    </script>
    <div class="tomorrow"
        data-location-id="137391,059582,140142,128587,064500,148183"
        data-language="IT"
        data-unit-system="METRIC"
        data-skin="dark"
        data-widget-type="current6"
        style="padding-bottom:22px;position:relative;"
    >
      <a
        href="https://www.tomorrow.io/weather/"
        target="_blank"
        style="position: absolute; bottom: 0; transform: translateX(-50%); left: 50%;"
      >
        <img alt="Powered by Tomorrow.io" src="https://weather-website-client.tomorrow.io/img/powered-by-tomorrow.svg" width="140" height="15"
        />
      </a>
    </div>
  </div>
  <!-- Weather Widget END -->
  <div class="widget">
    <a href="https://www.theguardian.com/international" target="_blank">
      <img class="guardianimg" src="img/theguardian.jpg">
    </a>
    <section class="theguardian-news-titles">
    <?php $__currentLoopData = $guardianNews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a class="no-decoration" href="<?php echo e($news->webUrl); ?>" target="_blank">
        <p class="titles"><?php echo e($news->webTitle); ?></p>
        <p class="type"><?php echo e($news->pillarName); ?> / <?php echo e(str_replace(array('T', 'Z')," ",$news->webPublicationDate)); ?></p>
      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/business.blade.php ENDPATH**/ ?>