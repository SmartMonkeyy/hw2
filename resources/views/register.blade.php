@extends('layouts.log_reg_del')
@section('title', 'Register')
@section('type', 'Create Account')
@section('name_form', 'register')
@section('form_action', route('register'))

@section('script')
<script src="js/script_register.js" defer></script>
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

@section('password_checker')

<div id="message">
  <h5>Password deve contenere:</h5>
  <p id="letter" class="invalid">Una lettera <b>minuscola</b></p>
  <p id="capital" class="invalid">Una lettera <b>maiuscola</b></p>
  <p id="number" class="invalid">Un <b>numero</b></p>
  <p id="special" class="invalid">Un <b>carattere speciale</b></p>
  <p id="length" class="invalid">Lunghezza tra <b>8 e 20 caratteri</b></p>
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