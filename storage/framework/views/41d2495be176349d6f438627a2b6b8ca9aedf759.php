

<?php $__env->startSection('title'); ?>
<title>Home</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('href_header'); ?>
<a class="login100-form-logo" href="#top" data-tooltip="Back to top">
	<i class="zmdi zmdi-landscape"></i>
</a>
<a id="header-link_W" href="<?php echo e(url('crypto')); ?>">Crypto</a>
<a id="header-link_W" href="<?php echo e(url('stocks')); ?>">Stocks</a>
<a id="header-link_W" href="<?php echo e(url('business')); ?>">Business</a>
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
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">General Outlook</span></a> by TradingView</div>
      <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
      {
      "colorTheme": "dark",
      "dateRange": "12M",
      "showChart": true,
      "locale": "en",
      "largeChartUrl": "",
      "isTransparent": false,
      "showSymbolLogo": true,
      "showFloatingTooltip": false,
      "width": "333",
      "height": "600",
      "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
      "plotLineColorFalling": "rgba(41, 98, 255, 1)",
      "gridLineColor": "rgba(240, 243, 250, 0)",
      "scaleFontColor": "rgba(120, 123, 134, 1)",
      "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
      "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
      "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
      "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
      "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
      "tabs": [
        {
          "title": "Indices",
          "symbols": [
            {
              "s": "FOREXCOM:SPXUSD",
              "d": "S&P 500"
            },
            {
              "s": "FOREXCOM:NSXUSD",
              "d": "US 100"
            },
            {
              "s": "FOREXCOM:DJI",
              "d": "Dow 30"
            },
            {
              "s": "INDEX:NKY",
              "d": "Nikkei 225"
            },
            {
              "s": "INDEX:DEU40",
              "d": "DAX Index"
            },
            {
              "s": "FOREXCOM:UKXGBP",
              "d": "UK 100"
            }
          ],
          "originalTitle": "Indices"
        },
        {
          "title": "Futures",
          "symbols": [
            {
              "s": "CME_MINI:ES1!",
              "d": "S&P 500"
            },
            {
              "s": "CME:6E1!",
              "d": "Euro"
            },
            {
              "s": "COMEX:GC1!",
              "d": "Gold"
            },
            {
              "s": "NYMEX:CL1!",
              "d": "Crude Oil"
            },
            {
              "s": "NYMEX:NG1!",
              "d": "Natural Gas"
            },
            {
              "s": "COMEX:SI1!",
              "d": "Silver"
            }
          ],
          "originalTitle": "Futures"
        },
        {
          "title": "Forex",
          "symbols": [
            {
              "s": "FX:EURUSD",
              "d": "EUR/USD"
            },
            {
              "s": "FX:GBPUSD",
              "d": "GBP/USD"
            },
            {
              "s": "FX:USDJPY",
              "d": "USD/JPY"
            },
            {
              "s": "FX:USDCHF",
              "d": "USD/CHF"
            },
            {
              "s": "FX:AUDUSD",
              "d": "AUD/USD"
            },
            {
              "s": "FX:USDCAD",
              "d": "USD/CAD"
            }
          ],
          "originalTitle": "Forex"
        },
        {
          "title": "Crypto",
          "symbols": [
            {
              "s": "CRYPTOCAP:TOTAL",
              "d": "Crypto Total Market Cap, $"
            },
            {
              "s": "BITSTAMP:BTCUSD",
              "d": "Bitcoin / U.S. Dollar"
            },
            {
              "s": "COINBASE:ETHUSD",
              "d": "Ethereum / U.S. Dollar"
            },
            {
              "s": "COINBASE:SOLUSD",
              "d": "Solana / U.S. Dollar"
            },
            {
              "s": "BINANCE:DOTUSDT",
              "d": "Polkadot / TetherUS"
            },
            {
              "s": "BINANCE:APEUSDT",
              "d": "ApeCoin / TetherUS"
            }
          ]
        }
      ]
    }
      </script>
    </div>
    <!-- TradingView Widget END -->
  </div>
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
<?php echo $__env->make('layouts.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/home.blade.php ENDPATH**/ ?>