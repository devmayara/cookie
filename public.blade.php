resources>views>layout>public.blade.php

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>i-Educar</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="{{ url('intranet/styles/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('intranet/styles/cookie.css') }}">
    <!-- Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>

    <!-- Google Tag Manager -->
    <script>
        dataLayer = [{
            'slug': '{{$config['app']['database']['dbname']}}',
            'user_id': 0
        }];

        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', '{{ config('legacy.gtm') }}');
    </script>
    <!-- End Google Tag Manager -->

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id={{ config('legacy.gtm') }}" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="main">

    <!--alert-->
    <div class="box" id="mensagens">
      <div class="message message-info">
        <div class="icone">
          <img src="/intranet/imagens/login/icon-info.png" alt="">
        </div>
        <div class="titulo">Avisos:</div>
        <div class="mensagem">
          <p>
            - No dia 24/12/2021 (sexta-feira), Não haverá atendimento. <br><br> - Nesse período todos os pedidos de suporte podem ser realizados normalmente através do email <b><a href="mailto:suporte@yantec.com.br">suporte@yantec.com.br</a></b> ou <b><a href="https://api.whatsapp.com/send?phone=5582996792564&text=Olá%20YanTec!" target="_blank">whatsapp</a></b> que serão respondidos a partir do dia 27/12/2021 (segunda-feira).
          </p>
          <p>
            Obrigado pela compreensão. Time YanTec. 💙
          </p>
        </div>
      </div>
      <br>
      <div style="min-height: 0px; padding: 5px 10px; background-color:#facdcd;">
        <p style="text-align:center">
          <span style="color:#cc0033">
            <strong>
              Desejamos a todos boas festas. <br><br> Que esta data seja celebrada com paz, alegria e saúde. <br><br> Feliz Natal e Próspero Ano Novo!
            </strong>
          </span>
        </p>
      </div>
    </div> <br> <!--alert-->

        <!-- Cookies -->
    <div class="cookie-disclaimer">
      <div class="cookie-close accept-cookie"><i class="bi bi-x-lg"></i></div>
      <div class="container">
        <p>
          <img src="{{ url('intranet/imagens/cookie.png') }}" width="30px"/>
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
    </div>    <!-- Cookies -->

    <div>
        <img alt="Logo" width="150px" src="{{ config('legacy.config.ieducar_image') ?? url('intranet/imagens/brasao-republica.png') }}"/>
    </div>

    <h1>{{ config('legacy.config.ieducar_entity_name') }}</h1>

    @if (session('status'))
        <p class="success">{{ session('status') }}</p>
    @endif

    @if($errors->count())
        <p class="error">{{ $errors->first() }}</p>
    @endif

    <div id="login-form" class="box shadow">
        @yield('content')
    </div>

</div>

<div id="footer">
    <p>
        {!! config('legacy.config.ieducar_login_footer') !!}
    </p>

    <div class="footer-social">

        {!! config('legacy.config.ieducar_external_footer') !!}

        @if(config('legacy.config.facebook_url') || config('legacy.config.linkedin_url') || config('legacy.config.twitter_url'))
            <div class="social-icons">
                <p> Siga-nos nas redes sociais&nbsp;&nbsp;</p>
                @if(config('legacy.config.facebook_url'))
                    <a target="_blank" href="{{ config('legacy.config.facebook_url')}}"><img src="{{ url('intranet/imagens/icon-social-facebook.png') }}"></a>
                @endif
                @if(config('legacy.config.linkedin_url'))
                    <a target="_blank" href="{{ config('legacy.config.linkedin_url')}}"><img src="{{ url('intranet/imagens/icon-social-linkedin.png') }}"></a>
                @endif
                @if(config('legacy.config.twitter_url'))
                    <a target="_blank" href="{{ config('legacy.config.twitter_url')}}"><img src="{{ url('intranet/imagens/icon-social-twitter.png') }}"></a>
                @endif
            </div>
        @endif
    </div>
</div>
      <script src="{{ url('intranet/scripts/jquery/jquery-1.8.3.min.js') }}"></script>
      <script src="{{ url('intranet/scripts/cookie.js') }}"></script>
</body>
</html>
