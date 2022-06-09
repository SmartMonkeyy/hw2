@extends('layouts.log_reg_del')
@section('title', 'Delete Account')
@section('type', 'Delete')
@section('name_form', 'send_form')
@section('form_action', route('delete'))

@section('script')
<script src="js/script_checkuserpass.js" defer></script>
@endsection

@section('login')
  <div class="wrap-input100 validate-input" data-validate = "Enter username"> 
  <input type="text" class="input100" placeholder="User name" name="username" value="{{ Session::get('username') }}" readonly>
    <span class="focus-input100" data-placeholder="&#xf207;"></span>
  </div>
  <div class="wrap-input100 validate-input" data-validate="Enter password">
    <input id="psw" type="password" class="input100" placeholder="Password" name="password">
      <span class="focus-input100" data-placeholder="&#xf191;"></span>
  </div>
@endsection

@section('create_account')

  @if ($check == "delete_no")
    <br>
    <span class="text-center flex-c text-red">
			Password Errata. Non puoi eliminare questo account.
		</span>
  @endif

@endsection

@section('buttons')
<div type="submit" class="container-login100-form-btn">
		<button class="login100-form-btn">
			@yield('type')
      <i class="fa fa-sign-in" aria-hidden="true"></i>
		</button>
	</div>
@endsection