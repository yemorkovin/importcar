@extends('main')
@section('title', '1WIN')
@section('content')
<main class="main">
        <div class="_container">
          <div class="main__box-c"><a class="main__img _ibg" href="private.html"><picture><source srcset="img/main.avif" type="image/avif"><source srcset="img/main.webp" type="image/webp"><img class="_ibg-img" src="img/main.jpg" width="100" height="100" alt="банер"></picture></a>
            <article class="main__bonus bonus-mn"> 
              <h3 class="bonus-mn__ttl"> Бонус 100%</h3>
              <p class="bonus-mn__txt">  На первый депозит</p>
              <button class="btn bonus-mn__btn" type="button" aria-label="кнопка"> Получить бонус</button>
            </article>
          </div>
        </div>
      </main>
     <section class="games-n">
        <div class="_container">
          <div class="games-n__c-box">
            <div class="games-n__top">
              <div class="games-n__box-txt">
                <h2 class="games-n__ttl">Выбери тип спорта</h2>
                <p class="games-n__sub-ttl">Профессиональная линия ставок</p>
              </div>
              <div class="games-n__decor"><picture><source srcset="img/games/decor.avif" type="image/avif"><source srcset="img/games/decor.webp" type="image/webp"><img class="p-img-c" src="img/games/decor.png" loading="lazy" width="100" height="100" alt="мячи"></picture></div>
            </div>
            <div class="box-nav-gm">
            	@foreach($sports as $sport)
            	<a class="card-ngm" href="/bets/{{$sport->id_api}}">
                      <div class="card-ngm__img">
                      	<picture>
                      		
                      		<img class="p-img-c" src="/storage/{{$sport->img}}" loading="lazy" width="100" height="100" alt="{{$sport->title}}">
                      		</picture>
                      	</div>
                      <span>{{$sport->title}}</span>
                  </a>
                  @endforeach
                  
            </div>
          </div>
        </div>
      </section>
@endsection