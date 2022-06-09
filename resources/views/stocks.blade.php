@extends('layouts.home_master')

@section('title')
<title>Stocks</title>
@endsection

@section('href_header')
<a class="login100-form-logo" href="{{url('home')}}" data-tooltip="Home">
  <i class="zmdi zmdi-landscape"></i>
</a>
<a id="header-link_W" href="{{url('crypto')}}">Crypto</a>
<a id="header-link_WO" href="#top" data-tooltip="Back to top">Stocks</a>
<a id="header-link_W" href="{{url('business')}}">Business</a>
<a id="header-link_W" href="{{url('music')}}">Music</a>
@endsection

@section('widgets')
<div class="widget">
  <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock Quotes</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
  {
  "title": "Stocks",
  "tabs": [
    {
      "title": "Financial",
      "symbols": [
        {
          "s": "NYSE:JPM",
          "d": "Jpmorgan Chase & Co"
        },
        {
          "s": "NYSE:WFC",
          "d": "Wells Fargo Co New"
        },
        {
          "s": "NYSE:BAC",
          "d": "Bank Amer Corp"
        },
        {
          "s": "NYSE:HSBC",
          "d": "Hsbc Hldgs Plc"
        },
        {
          "s": "NYSE:C",
          "d": "Citigroup Inc"
        },
        {
          "s": "NYSE:MA",
          "d": "Mastercard Incorporated"
        }
      ]
    },
    {
      "title": "Technology",
      "symbols": [
        {
          "s": "NASDAQ:AAPL",
          "d": "Apple"
        },
        {
          "s": "NASDAQ:GOOGL",
          "d": "Google Inc"
        },
        {
          "s": "NASDAQ:MSFT",
          "d": "Microsoft Corp"
        },
        {
          "s": "NASDAQ:FB",
          "d": "Meta Platforms Inc"
        },
        {
          "s": "NYSE:ORCL",
          "d": "Oracle Corp"
        },
        {
          "s": "NASDAQ:INTC",
          "d": "Intel Corp"
        }
      ]
    },
    {
      "title": "Services",
      "symbols": [
        {
          "s": "NASDAQ:AMZN",
          "d": "Amazon Com Inc"
        },
        {
          "s": "NYSE:BABA",
          "d": "Alibaba Group Hldg Ltd"
        },
        {
          "s": "NYSE:T",
          "d": "At&t Inc"
        },
        {
          "s": "NYSE:WMT",
          "d": "Wal-mart Stores Inc"
        },
        {
          "s": "NYSE:V",
          "d": "Visa Inc"
        }
      ]
    }
  ],
  "width": "333",
  "height": "600",
  "showChart": true,
  "showFloatingTooltip": false,
  "locale": "en",
  "plotLineColorGrowing": "#2962FF",
  "plotLineColorFalling": "#2962FF",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(120, 123, 134, 1)",
  "showSymbolLogo": true,
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
  "colorTheme": "dark"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
@endsection