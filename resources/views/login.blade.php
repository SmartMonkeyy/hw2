@extends('layouts.log_reg_del')
@section('title', 'Login')
@section('type', 'Log In')
@section('name_form', 'send_form')
@section('form_action', route('check.db'))

@section('script')
<script src="js/script_checkuserpass.js" defer></script>
@endsection

@section('login')
  <div class="wrap-input100 validate-input" data-validate = "Enter username"> 
    <input type="text" class="input100" placeholder="User name" name="username" value="{{ old('username') }}">
    <span class="focus-input100" data-placeholder="&#xf207;"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Enter password">
    <input id="psw" type="password" class="input100" placeholder="Password" name="password">
      <span class="focus-input100" data-placeholder="&#xf191;"></span>
  </div>
@endsection

@section('add')
  <div class="text-center p-t-90">
    @if ($check == "name_false")
      <br>
      <span class="text-center flex-c text-red">
        Non esiste alcun utente registrato con questo nome. Riprova!
      </span>
    @elseif ($check == "pass_false")
      <br>
      <span class="text-center flex-c text-red">
        Password Errata. Riprova!
      </span>
    @elseif ($check == "register_ok")
      <br>
      <span class="text-center flex-c text-lime">
        Account Registrato Con Successo. Accedi!
      </span>
    @elseif ($check == "register_fail")
      <br>
      <span class="text-center flex-c text-red">
        Esiste già un account registrato a questo nome!
      </span>
    @elseif ($check == "delete_ok")
      <br>
      <span class="text-center flex-c text-lime">
        Account eliminato con successo!
      </span>
    @endif
    <a class="txt1" href="{{ route('view.register') }}">
      Create account
      <i class="fa fa-user-plus" aria-hidden="true"></i>
    </a>
  </div>
@endsection

@section('buttons')
<div type="submit" class="container-login100-form-btn">
		<button class="login100-form-btn">
			@yield('type')
      <i class="fa fa-sign-in" aria-hidden="true"></i>
		</button>
	</div>
@endsection