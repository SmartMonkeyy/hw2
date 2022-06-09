@extends('layouts.log_reg_del')
@section('title', 'Upload')
@section('type', 'Upload Article')
@section('name_form', 'upload')
@section('enctype', 'enctype=multipart/form-data')
@section('form_action', route('upload.article'))

@section('script')
<script src="js/upload_check.js" defer></script>
@endsection

@section('login')
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
@endsection

@section('buttons')
  @if ($upload_check == "ok")
  <br>
  <span class="text-center flex-c text-lime">
    Articolo Caricato con successo!
  </span>
  @elseif ($upload_check == "error")
  <br>
  <span class="text-center flex-c text-red">
    Errore durante il caricamento dell'articolo!
  </span>
  @elseif ($upload_check == "img_false")
  <br>
  <span class="text-center flex-c text-red">
    Non puoi caricare un articolo con un'immagine già esistente!
    (Prova a cambiare nome dell'immagine)
  </span>
  @endif
  <div type="submit" class="container-login100-form-btn">
    <button class="login100-form-btn">
    Carica
    </button>
    &nbsp;
    <a id="exit" class="login100-form-btn" href="{{ route('logout') }}">
    Esci
    </a>
  </div>
@endsection