resources>views>auth>cookie.blade.php

@extends('layout.public')

@section('cookie')
<div class="cookie-disclaimer">
  <div class="cookie-close accept-cookie"><i class="bi bi-x-lg"></i></div>
  <div class="container">
    <p>
      <img src="cookie.png" width="30px"/>
      <b>Esse site usa cookies!</b>
      Nós armazenamos dados temporariamente para melhorar a sua experiência
      de navegação e recomendar <br/>
      conteúdo de seu interesse. Ao utilizar nossos serviços, você concorda
      com a nossa política. <!--<a href="#">Política de Privacidade</a>.-->
    </p>
    <button type="button" class="btn btn-primary accept-cookie">
      Aceitar e Continuar
    </button>
  </div>
</div>
@endsection