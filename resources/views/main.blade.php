<!DOCTYPE html>
<html lang="ru">
  <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="/css/style.min.css?_v=20230904172117">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content=" 1WIN">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="document-state" content="dynamic">
    <meta name="revisit-after" content="15 days">
    <meta name="copyright" content="(c)">
    <meta name="Publisher-Email" content="">
    <meta property="og:type" content="website">
    <meta property="og:title" content=" 1WIN">
    <meta property="og:description" content=" 1WIN">
    <meta property="og:image" content="">
    <meta property="og:site_name" content=" 1WIN">
    <meta property="og:url" content="">
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple--icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="//img/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <meta name="apple-mobile-web-app-title" content=" 1WIN">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="date=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <script defer src="/js/app.min.js?_v=20230904172117"></script>
    <script src="/js/jquery-3.7.1.min.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <section class="p-box-lng">
        <div class="_container p-box-lng__c-box">
          <button class="lng-btn" type="button" aria-label="кнопка"> <span>RU</span><span class="lng-btn__ico"> <picture><source srcset="/img/rus.avif" type="image/avif"><source srcset="/img/rus.webp" type="image/webp"><img class="p-img-c" src="/img/rus.jpg" loading="lazy" width="100" height="100" alt="img"></picture></span></button>
        </div>
      </section>
      <header class="header page__header" id="header">
        <div class="_container">
          <div class="header__c-box">
            <div class="header__l"><a class="header__logo logo" href="/"><img class="p-img-c" src="/img/logo.svg" loading="lazy" width="100" height="100" alt="img"></a>
              <nav class="header__nav nav">
                <ul class="nav__list">
                  <li class="nav__itm nav__home"><a href="/">Главная </a></li>
                  <li class="nav__itm"><a href="match.html">Мои ставки </a>  </li>
                </ul>
              </nav>
            </div>
            <div class="header__r" @if (Auth::check()) style="display: none;" @endif>
              <button class="btn btn-in" type="button" aria-label="кнопка" data-popup="#pplogin">Войти </button>
              <button class="btn" type="button" aria-label="кнопка" data-popup="#ppReg"><span class="btn__ico"> <img class="p-img-c" src="/img/btn-ico.svg" loading="lazy" width="100" height="100" alt="img"></span><span>Регистрация</span></button>
            </div>
            <div class="header__r header__on-login" @if (Auth::check()) style="display: grid;" @endif>
              <div class="header__balance">
                <div class="balance">
                  <h6>Баланс</h6><span>
                  	 @if (Auth::check())

                  	@if (auth()->user()->cur == 'RUB')
                   	{{auth()->user()->money??'0'}}Р  
                   	@else 
                   		{{auth()->user()->money??'0'}}₸ 
               		@endif

               		@endif
</span>
                </div>
                <div class="balance">
                  <h6>Бонус</h6><span>
                  	
                  	  @if (Auth::check())

                  	@if (auth()->user()->cur == 'RUB')
                   	{{auth()->user()->bonus??'0'}}Р  
                   	@else 
                   	{{auth()->user()->bonus??'0'}}₸ 
               		@endif

               		@endif
                  	</span>
                  </span>

                 
                </div>
              </div>
              <button class="btn btn-user" type="button" aria-label="кнопка" data-popup="#ppUser"><span class="btn-user__ico"><img class="p-img-c" src="/img/svg/user.svg" loading="lazy" width="100" height="100" alt="img"></span></button>
              <button class="btn" type="button" aria-label="кнопка" data-popup="#ppBalance"><span class="btn__ico"> <img class="p-img-c" src="/img/btn-ico.svg" loading="lazy" width="100" height="100" alt="img"></span><span>Пополнить</span></button>
              <a href="/logout" style="padding: 6px">Выход</a>
            </div>
          </div>
        </div>
      </header>
      @yield('content')
       
      <section class="popup page__popup" id="pplogin" aria-hidden="true">
        <div class="popup__wrapper">
          <article class="popup__content popup-form">
            
            <button class="popup__close" type="button" data-close><span class="popup__ico-close"><img class="p-img-c" src="/img/svg/cross2.svg" loading="lazy" width="100" height="100" alt="img"></span></button>
            <h2 class="popup-form__ttl"> Вход в аккаунт</h2>
            <form class="form" action="#!" method="POST"> 
              <input class="form__input" type="email" id="email_login" placeholder="Email" autocomplete="off" required>
              <input class="form__input" type="password" id="password_login" placeholder="Password" autocomplete="off" required><a class="form__r-link" href="#!" target="_blank"> Забыли пароль?</a>
              <a class="form__submit btn login_btn" target="_blank"> Сохранить</a>
              <p class="form__tt"> Ещё нет аккаунта? 
                <button class="form__link" type="button" aria-label="кнопка" data-popup="#ppReg"> Зарегистрируйтесь</button>
              </p>
            </form>
          </article>
        </div>
      </section>
      <section class="popup page__popup" id="ppReg" aria-hidden="true">
        <div class="popup__wrapper">
          <article class="popup__content popup-form">
            <button class="popup__close" type="button" data-close><span class="popup__ico-close"><img class="p-img-c" src="/img/svg/cross2.svg" loading="lazy" width="100" height="100" alt="img"></span></button>
            <h2 class="popup-form__ttl"> Регистрация аккаунта</h2>
            <form class="form" action="/reg" method="POST">
            
              <input class="form__input" type="text" id="name" name="name" placeholder="Имя Фамилия" autocomplete="off" required>

              <input class="form__input" type="tel" id="phone" placeholder="+7" autocomplete="off" required>
              <h6>Выберите валюту</h6>
              <div class="form__radio-box">
                <input class="form__radio _hide" id="radio1" type="radio" name="currency" aria-label="чекбокс" checked="checked" value="RUB">
                <label class="form__lbl" for="radio1">RUB</label>
                <input class="form__radio _hide" id="radio2" type="radio" name="currency" aria-label="чекбокс" value="KZT">
                <label class="form__lbl" for="radio2"> KZT</label>
              </div>
              <input class="form__input" type="email" id="email" placeholder="Email" autocomplete="off" required>
              <input class="form__input" type="password" id="password" placeholder="Пароль" autocomplete="off" required>
              <input class="form__input" type="password" id="passsword_rep" placeholder="Подтвердите пароль" autocomplete="off" required>
              <div class="form__lbl-box">
                <input class="form__radio _hide" id="check1" type="checkbox" name="group1" aria-label="чекбокс" required>
                <label class="form__lbl" for="check1"> Я прочитал и принял   </label><a class="form__b-link" href="/rules">положения и условия</a>
              </div>

              <input class="form__radio _hide" id="check2" type="checkbox" name="group1" aria-label="чекбокс" >
              <label class="form__lbl" for="check2">  Мне уже есть 18 лет или больше</label>

              <button class="form__submit btn reg_btn" type="submit" name="submitForm" aria-label="кнопка">Регистрация</button>
              <p class="form__tt">Уже есть аккаунт?
                <button class="form__link" type="button" aria-label="кнопка"> Войти</button>
              </p>
            </form>
          </article>
        </div>
      </section>
      @if (Auth::check())
       <section class="popup page__popup" id="ppBalance" aria-hidden="true">
        <div class="popup__wrapper">
          <article class="popup__content popup-form">
            <button class="popup__close" type="button" data-close><span class="popup__ico-close"><img class="p-img-c" src="/img/svg/cross2.svg" loading="lazy" width="100" height="100" alt="img"></span></button>
            <h2 class="popup-form__ttl">Пополнить баланс</h2>
            <form class="form" action="#!" method="POST"> 
              <input class="form__input form__input--cnt" type="text" name="text" placeholder="Введите сумму ₸" autocomplete="off" required>
              <div class="box-pay">
                <button class="pay-btn" type="submit" name="submitForm" aria-label="кнопка"> <span class="pay-btn__img"> <picture><source srcset="/img/pay1.avif" type="image/avif"><source srcset="/img/pay1.webp" type="image/webp"><img class="p-img-c" src="/img/pay1.png" loading="lazy" width="100" height="100" alt="img"></picture></span></button>
                <button class="pay-btn" type="submit" name="submitForm" aria-label="кнопка"> <span class="pay-btn__img"> <picture><source srcset="/img/pay2.avif" type="image/avif"><source srcset="/img/pay2.webp" type="image/webp"><img class="p-img-c" src="/img/pay2.png" loading="lazy" width="100" height="100" alt="img"></picture></span></button>
                <button class="pay-btn" type="submit" name="submitForm" aria-label="кнопка"> <span class="pay-btn__img"> <picture><source srcset="/img/pay3.avif" type="image/avif"><source srcset="/img/pay3.webp" type="image/webp"><img class="p-img-c" src="/img/pay3.png" loading="lazy" width="100" height="100" alt="img"></picture></span></button>
                <button class="pay-btn" type="submit" name="submitForm" aria-label="кнопка"> <span class="pay-btn__img"> <picture><source srcset="/img/pay4.avif" type="image/avif"><source srcset="/img/pay4.webp" type="image/webp"><img class="p-img-c" src="/img/pay4.png" loading="lazy" width="100" height="100" alt="img"></picture></span></button>
              </div>
            </form>
          </article>
        </div>
      </section>
      <section class="popup page__popup" id="ppUser" aria-hidden="true">
        <div class="popup__wrapper">
          <article class="popup__content popup-form">
            <button class="popup__close" type="button" data-close=""><span class="popup__ico-close"><img class="p-img-c" src="/img/svg/cross2.svg" loading="lazy" width="100" height="100" alt="img"></span></button>
            <h2 class="popup-form__ttl"> Настройки аккаунта</h2>
            @if ($request->session()->exists('suc'))
            	@if ($request->session()->get('suc') == '1')
            	<p style="color: green;">Данные успешно обновлены!</p>
            	 {{$request->session()->forget('suc')}}

            	@endif
            @endif
             @if ($request->session()->exists('error'))
            	@if ($request->session()->get('error') == '1')
            	<p style="color: red;">Старый пароль введен не правильно и/или новые пароли не совпадают!</p>
            	 {{$request->session()->forget('error')}}

            	@endif
            @endif
             <form class="form" action="/editprofile" method="POST" enctype='multipart/form-data'> 
             	@csrf
            <div class="popup-form__ava">
            	
            	<picture>
            		
            		<label for="file_avatar">
            			<img class="p-img " id="img_avatar"  src="/storage/{{auth()->user()->avatar}}" loading="lazy" width="100" height="100" alt="img">
            		</label>
            	</picture>

		            	<input type="file" id="file_avatar" name="avatar" style="display: none;" name="">
		            
            </div>
            <h4 class="popup-form__account">Счет №{{str_pad(auth()->user()->id, 9, '0', STR_PAD_LEFT)}}
</h4>
            <h3 class="popup-form__ttl">Персональные данные</h3>
           
              <input class="form__input" type="text" name="name_edit" value="{{auth()->user()->name}}" placeholder="Имя Фамилия" autocomplete="off" required="">
              <input class="form__input" type="tel" name="phone_edit" value="{{auth()->user()->phone}}" placeholder="Номер телефона" autocomplete="off" required="">
              <input class="form__input" type="email" name="email_edit" value="{{auth()->user()->email}}" placeholder="Почта" autocomplete="off" required="">
              <h3 class="popup-form__ttl">Изменить валюту</h3>
              <div class="form__radio-box">
                <input class="form__radio _hide" id="radio4" type="radio" value="RUB" name="currency" aria-label="чекбокс" @if(auth()->user()->cur == 'RUB') checked="checked" @endif>
                <label class="form__lbl" for="radio4">RUB</label>
                <input class="form__radio _hide" value="KZT" id="radio5" type="radio" name="currency" aria-label="чекбокс" @if(auth()->user()->cur == 'KZT') checked="checked" @endif>
                <label class="form__lbl" for="radio5"> KZT</label>
              </div>
              <h3 class="popup-form__ttl">Изменить пароль      </h3>
              <input class="form__input" type="password" name="password_old" placeholder="Старый пароль" autocomplete="off">
              <input class="form__input" type="password" name="password_new" placeholder="Новый пароль" autocomplete="off" >
              <input class="form__input" type="password" name="password_new_rep" placeholder="Подтвердите пароль" autocomplete="off">
              <button class="form__submit btn" type="submit" name="submitForm" aria-label="кнопка">Сохранить</button>
            </form>
          </article>
        </div>
      </section>
      @endif
      <footer class="footer"> 
        <div class="_container">
          <div class="footer__separator"><img class="p-img-c" src="/img/separator.svg" loading="lazy" width="100" height="100" alt="img"></div>
          <ul class="footer__nav nav-ftr"> 
            <li class="nav-ftr__itm"><a href="/">Главная</a></li>
            <li class="nav-ftr__itm"><a href="/return">Условия возврата </a>  </li>
            <li class="nav-ftr__itm"><a href="#!">Уведомление о рисках </a> </li>
            <li class="nav-ftr__itm"><a href="/rules">Правила и условия </a> </li>
            <li class="nav-ftr__itm"><a href="/policy">Политика конфиденциальности </a> </li>
          </ul>
          <div class="footer__separator"><img class="p-img-c" src="/img/separator.svg" loading="lazy" width="100" height="100" alt="img"></div>
          <article class="banner-ftr"> 
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr1.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr2.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr3.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr4.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr5.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr6.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr7.svg" loading="lazy" width="100" height="100" alt="img"></div>
            <div class="banner-ftr__img"> <img class="p-img-c" src="/img/ftr/bnr8.svg" loading="lazy" width="100" height="100" alt="img"></div>
          </article>
          <div class="footer__separator"><img class="p-img-c" src="/img/separator.svg" loading="lazy" width="100" height="100" alt="img"></div>
          <article class="banner-ftr banner-ftr--min"> 
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr11.avif" type="image/avif"><source srcset="/img/ftr/bnr11.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr11.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr12.avif" type="image/avif"><source srcset="/img/ftr/bnr12.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr12.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr13.avif" type="image/avif"><source srcset="/img/ftr/bnr13.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr13.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr14.avif" type="image/avif"><source srcset="/img/ftr/bnr14.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr14.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr15.avif" type="image/avif"><source srcset="/img/ftr/bnr15.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr15.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr16.avif" type="image/avif"><source srcset="/img/ftr/bnr16.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr16.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr17.avif" type="image/avif"><source srcset="/img/ftr/bnr17.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr17.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr18.avif" type="image/avif"><source srcset="/img/ftr/bnr18.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr18.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr19.avif" type="image/avif"><source srcset="/img/ftr/bnr19.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr19.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr20.avif" type="image/avif"><source srcset="/img/ftr/bnr20.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr20.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr21.avif" type="image/avif"><source srcset="/img/ftr/bnr21.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr21.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
            <div class="banner-ftr__img"> <picture><source srcset="/img/ftr/bnr22.avif" type="image/avif"><source srcset="/img/ftr/bnr22.webp" type="image/webp"><img class="p-img-c" src="/img/ftr/bnr22.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
          </article>
          <div class="footer__separator"><img class="p-img-c" src="/img/separator.svg" loading="lazy" width="100" height="100" alt="img"></div>
          <div class="footer__line-box"><a href="mailto:sup1winkz@gmail.com">Email адрес службы поддержки - sup1winkz@gmail.com</a></div>
          <div class="footer__separator"><img class="p-img-c" src="/img/separator.svg" loading="lazy" width="100" height="100" alt="img"></div>
          <div class="footer__line-box"><small class="footer__copy">Copyright © 2023, 1winkz.net, All rights reserved.</small></div>
        </div>
      </footer>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
    	$("#phone").mask("+7(999) 999-99-99");

    	$('.reg_btn').on('click', function(e){
    		e.preventDefault();
    		let cur = '';
    		if ($('#radio1').is(':checked')){
    			cur = $('#radio1').val();
    		}else{
    			cur = $('#radio2').val();
    		}
    		let name = $('#name').val();
    		if (name.length < 3){
    			alert('Имя слишком короткое!');
    			return;
    		}
    		let phone = $('#phone').val();
    		if (name.length < 5){
    			alert('Телефон обязательно для заполнения');
    			return;
    		}
    		let email = $('#email').val();
    		if (email.length < 5){
    			alert('email обязательно для заполнения');
    			return;
    		}
    		let password = $('#password').val();
    		let password_rep = $('#passsword_rep').val();
    		if ($('#check1').is(':checked')){
    			if ($('#check2').is(':checked')){
    				if(password == password_rep){
    					if(password.length > 8){
    						$.ajax({
								url: "/reg",
								type:"POST",
								data:{
									"_token":  "{{ csrf_token() }}",
									name:name,
									phone:phone,
									email:email,
									password:password,
									cur:cur
								},
								success:function(response){
									if(response == 1){
										alert('Вы успешно зарегистрировались!');
										document.location.href = '/#pplogin';
									}
								},
							});
    					}else{
    						alert('Пароль слишком короткий!');
    					}
    				}else{
    					alert('Пароли не совпадают!');
    				}
    				
	    		}else{
	    			alert('Нажмите галочку "Мне уже есть 18 лет или больше"');
	    		}
    		}else{
    			alert('Нажмите галочку "Я прочитал и принял положения и условия"');
    		}

    		
    		/**/
    	});
 		$('.login_btn').on('click', function(){
 			let email_login = $('#email_login').val();
 			let password_login = $('#password_login').val();
 			$.ajax({
								url: "/auth",
								type:"POST",
								data:{
									"_token":  "{{ csrf_token() }}",
									email_login:email_login,
									password_login:password_login,
									
								},
								success:function(response){
									if(response == 1){
										document.location.href = '/';

									}else{
										alert('Логин и/или пароль не подходит');
									}
								},

							});
 		});
		

		$('#file_avatar').change(function (event){
		    var tmp_url = window.URL.createObjectURL(event.target.files[0]);
		    $("#img_avatar").attr("src", tmp_url);
		});

		
    </script>
  </body>
</html> 