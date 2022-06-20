@extends('layouts.home_master')

@section('title')
<title>Business</title>
@endsection

@section('href_header')
<a class="login100-form-logo" href="{{url('home')}}" data-tooltip="Home">
	<i class="zmdi zmdi-landscape"></i>
</a>
<a id="header-link_W" href="{{url('crypto')}}">Crypto</a>
<a id="header-link_W" href="{{url('stocks')}}">Stocks</a>
<a id="header-link_WO" href="#top" data-tooltip="Back to top">Business</a>
<a id="header-link_W" href="{{url('music')}}">Music</a>
@endsection

@section('widgets')
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
    @foreach($guardianNews as $news)
      <a class="no-decoration" href="{{$news->webUrl}}" target="_blank">
        <p class="titles">{{$news->webTitle}}</p>
        <p class="type">{{$news->sectionName}} / {{str_replace(array('T', 'Z')," ",$news->webPublicationDate)}}</p>
      </a>
    @endforeach
    </section>
  </div>
@endsection