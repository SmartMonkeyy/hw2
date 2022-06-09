

<?php $__env->startSection('title'); ?>
<title>Crypto</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('href_header'); ?>
<a class="login100-form-logo" href="<?php echo e(url('home')); ?>" data-tooltip="Home">
	<i class="zmdi zmdi-landscape"></i>
</a>
<a id="header-link_WO" href="#top" data-tooltip="Back to top">Crypto</a>
<a id="header-link_W" href="<?php echo e(url('stocks')); ?>">Stocks</a>
<a id="header-link_W" href="<?php echo e(url('business')); ?>">Business</a>
<a id="header-link_W" href="<?php echo e(url('music')); ?>">Music</a>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('widgets'); ?>
<div class="widget">
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://it.tradingview.com" target="_blank">
      <span class="blue-text">
        Cryptocurrencies
      </span>
    </a> 
    by TradingView
  </div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "colorTheme": "dark",
  "dateRange": "12M",
  "showChart": true,
  "locale": "en",
  "width": "333",
  "height": "600",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
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
      "title": "Overview",
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
        }
      ]
    },
    {
      "title": "Bitcoin",
      "symbols": [
        {
          "s": "BYBIT:BTCUSD",
          "d": "Bitcoin / U.S. Dollar"
        },
        {
          "s": "COINBASE:BTCEUR",
          "d": "Bitcoin / Euro"
        },
        {
          "s": "COINBASE:BTCGBP",
          "d": "Bitcoin / British Pound"
        },
        {
          "s": "CME:BTC1!",
          "d": "Bitcoin CME Futures"
        },
        {
          "s": "CRYPTOCAP:BTC.D",
          "d": "Bitcoin Dominance"
        }
      ]
    },
    {
      "title": "Ethereum",
      "symbols": [
        {
          "s": "COINBASE:ETHUSD",
          "d": "Ethereum / U.S. Dollar"
        },
        {
          "s": "BINANCE:ETHEUR",
          "d": "Ethereum / Euro"
        },
        {
          "s": "COINBASE:ETHGBP",
          "d": "Ethereum / British Pound"
        },
        {
          "s": "CME:ETH1!",
          "d": "Ethereum CME Futures"
        },
        {
          "s": "CRYPTOCAP:ETH.D",
          "d": "Ethereum Dominance"
        }
      ]
    },
    {
      "title": "Alt Coin",
      "symbols": [
        {
          "s": "KUCOIN:SOLUSDT",
          "d": "Solana / TetherUS"
        },
        {
          "s": "BYBIT:BNBUSDT",
          "d": "Binance Coin / TetherUS"
        },
        {
          "s": "BINANCE:AVAXUSDT",
          "d": "Avalanche / TetherUS"
        },
        {
          "s": "BINANCE:MATICUSDT",
          "d": "Polygon / TetherUS"
        },
        {
          "s": "CRYPTOCAP:OTHERS.D",
          "d": "Alt Coin Market Cap"
        }
      ]
    }
  ]
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\esercizi\esempio_laravel\resources\views/crypto.blade.php ENDPATH**/ ?>