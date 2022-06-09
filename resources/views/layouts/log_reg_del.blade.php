<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    @yield('script')
  </head>
  <body id="main">
    <div class="limiter">
    <div class="container-login100" style="background-image: url('img/bg-01.jpg');">
      <div class="wrap-login100">
          <form class="login100-form validate-form" action=@yield('form_action') name=@yield('name_form') method="post" @yield('enctype')>
          {{ csrf_field() }}
            <span class="login100-form-logo">
						  <i class="zmdi zmdi-landscape"></i>
					  </span>
            <span class="login100-form-title p-b-34 p-t-27">
						  @yield('type')
					  </span>
            @yield('login')

            @yield('password_checker')

            @yield('buttons')

            @yield('add')
            
          </form>
        </div>	
      </div>
    </div>
  </body>
</html>