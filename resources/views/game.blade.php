 @extends('main')
@section('title', '1WIN')
@section('content')
<style>
  body {
    --container-background-color: #090F1E;
    --primary-background-color: #141b2e;
    --primary-text-color: #fff;
    --secondary-background-color: #242e49;
    --secondary-text-color: #fff;
    --tertiary-background-color: #EDF2FF;
    --tertiary-text-color: #000;
    --blur-background-color: var(--primary-background-color);
    --gray-text-color1: #9196a4;
    --primary-gradient-background-color1: rgb(30, 40, 63);
    --primary-gradient-background-color2: rgba(28, 38, 64, 0.6);
    --primary-gradient-text-color: #fff;
    --scrollbar-track-background-color: #141b2e;
    --scrollbar-thumb-background-color: #282d3a;
    --secondary-gradient-background-color1: #108de7;
    --secondary-gradient-background-color2: #0855c4;
    --secondary-gradient-text-color: #fff;
    --skeleton-gradient-background-color1: #1C2438;
    --skeleton-gradient-background-color2: #202B45;
    --icon-background-color: #0484f0;
    --primary-active-background-color: #0484f0;
    --primary-active-text-color: #fff;
    --primary-seperator-background-color: #caddfd;
    --secondary-seperator-background-color: #40475d;
    --line-background-color: #0484f0;
    --line-text-color: #fff;
    --live-background-color: #E92541;
    --live-text-color: #fff;
    --vs-background-color: #0484f0;
    --player1-text-color: #3DA5FF;
    --player2-text-color: #93C738;
    --primary-odd-background-color: #D0DAF3;
    --primary-odd-text-color: #090F1E;
    --primary-odd-active-background-color: #c4f027;
    --primary-odd-active-text-color: #000;
    --primary-odd-empty-background-color: #E7EDFC;
    --secondary-odd-background-color: #2d3750;
    --secondary-odd-text-color: #fff;
    --secondary-odd-active-background-color: #c4f027;
    --secondary-odd-active-text-color: #000;
    --secondary-odd-empty-background-color: #263048;
    --collection-background-color: #d6dcec;
    --coupon-bet-background-color: #fff;
    --coupon-bet-text-color: #000;
    --tab-active-background-color: #0484F0;
    --tab-active-text-color: #fff;
    --input-background-color: #1f2841;
    --input-active-background-color: #2A375A;
    --input-text-color: #fff;
    --dropdown-background-color: #1f2841;
    --dropdown-active-background-color: #2A375A;
    --dropdown-text-color: #fff;
    --dropdown-content-background-color: #fff;
    --dropdown-content-active-background-color: #e9e9e9;
    --dropdown-content-text-color: #000;
    --selector-active-background-color: #2196f3;
    --selector-disabled-background-color: #ccc;
    --primary-button-background-color: #0484f0;
    --primary-button-text-color: #fff;
    --secondary-button-background-color: #273046;
    --secondary-button-text-color: #fff;
    --tertiary-button-background-color: #ffe036;
    --tertiary-button-text-color: #000;
    --gradient-button-background-color1: #108de7;
    --gradient-button-background-color2: #0855c4;
    --gradient-button-text-color: #fff;
    --small-border-radius: 4px;
    --default-border-radius: 8px;
    --big-border-radius: 15px;
    --left_panel-size: 270px;
    --right_panel-size: 300px;
    --container-height: 100vh;
    --top-margin: 10px;
    --event-text-color: #fff;
    --disabled-background-color: rgba(20,27,46,.7);
    --gradient-button-background: linear-gradient(103deg, var(--gradient-button-background-color1) -30%, var(--gradient-button-background-color2));
    --primary-gradient-background: linear-gradient(110deg, var(--primary-gradient-background-color1), var(--primary-gradient-background-color2) 100%);
    --secondary-gradient-background: linear-gradient(103deg,var(--secondary-gradient-background-color1) -30%,var(--secondary-gradient-background-color2));
    --skeleton-gradient-background: linear-gradient(to left, var(--skeleton-gradient-background-color1) 0%, var(--skeleton-gradient-background-color2) 30%, var(--skeleton-gradient-background-color1) 60%, var(--skeleton-gradient-background-color1) 100%) var(--skeleton-gradient-background-color1);
    --error-background-color: #e13434;
    --error-text-color: #fff;
    --success-background-color: #3a974d;
    --success-text-color: #fff;
    --transparent-background-color: rgba(255, 255, 255, 0.1);
    --transparent-text-color: #fff;
    --coupon_close-color: #000;
    --coupon_disabled_close-color: #fff;
    --coupon_possible_win-color: var(--dark_mint_green);
}
.mch-tab__cast-td span:hover{
  background: #c4f027;
}
.coupon__bets{
 
}
.h1{
  display: none;
  width: 203px;
}
.coupon .bet {
  margin-top: 10px;
    opacity: 1;
    transform: translateX(0px);
    position: relative;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    background: var(--coupon-bet-background-color);
    color: var(--coupon-bet-text-color);
    border-radius: var(--default-border-radius);
    transition: transform 0.2s ease-in-out 0s, opacity 0.2s ease-in-out 0s;
}
 .coupon .coupon__bets .bet__wrap {
    width: 100%;
}
 .coupon .coupon__bets .bet__wrap .bet__header {
    display: flex;
    justify-content: space-between;
} 

 .coupon .coupon__bets .bet__wrap .bet__header .header__title {
    opacity: 0.8;
    font-size: 12px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}
 .coupon .coupon__bets .bet__wrap .bet__header .header__cancel {
    position: relative;
    top: -3px;
}
 .close {
    opacity: 0.8;
    cursor: pointer;
    position: relative;
    display: inline-block;
    width: 15px;
    height: 15px;
    overflow: hidden;
    z-index: 1;
}
 .close::before {
    transform: rotate(45deg);
}
 .close::before {
    content: "";
    position: absolute;
    height: 2px;
    width: 100%;
    top: 50%;
    left: 0px;
    margin-top: -1px;
    background: var(--coupon_close-color);
}
 .close::after {
    transform: rotate(-45deg);
}
 .close::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 100%;
    top: 50%;
    left: 0px;
    margin-top: -1px;
    background: var(--coupon_close-color);
}
 .coupon .coupon__bets .bet__wrap .bet__info {
    display: flex;
    /*justify-content: space-between;*/
    align-items: center;
    overflow: hidden;
    width: 182px;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps {
    width: 60%;
    font-size: 12px;
    position: relative;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps::before {
    position: absolute;
    content: "";
    width: 3px;
    height: 100%;
    background: var(--primary-active-background-color);
    left: -10px;
    border-radius: 1px;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps .opps-opp:first-child {
    margin-bottom: 3px;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps .opps-opp {
    display: flex;
    align-items: center;
    column-gap: 5px;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps .opps-opp .opp__icon {
    min-width: 15px;
    height: 15px;
    background-position: center center;
    background-size: contain;
    background-repeat: no-repeat;
}
 .coupon .coupon__bets .bet__wrap .bet__info .bet__opps .opps-opp .opp__name {
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
    font-size: 12px;
}
 .coupon .coupon__bets .bet__wrap .bet__info .stake {
    width: 40%;
    padding: 6px 10px;
    text-align: center;
    border-radius: var(--default-border-radius);
    background: var(--primary-odd-background-color);
    color: var(--primary-odd-text-color);
    font-weight: 600;
}
 .stake__value .odd-change {
    position: absolute;
    left: 0px;
    display: none;
    animation: auto ease 0s 1 normal none running none;
    opacity: 0;
}

 .coupon .bet .bet__market {
    font-size: 10px;
    font-weight: 600;
    margin-top: 5px;
}
.info__odd {
    display: flex;
    font-weight: 600;
    margin-bottom: 20px;
    background: var(--primary-button-background-color);
    color: var(--primary-button-text-color);
    padding: 10px;
    border-radius: var(--default-border-radius);
    justify-content: space-between;
    font-size: 11px;
    margin-top: 10px
  }
 .sum__input {
    display: flex;
    
    align-items: center;
    font-weight: 600;
}
 .sum__input .input-button {
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s ease-in-out 0s, opacity 0.3s ease-in-out 0s;
    cursor: pointer;
    width: 24px;
    height: 24px;
    background-position: center center;
    background-repeat: no-repeat;
    opacity: 0.6;
}
.i--minus {
  height: 10px;
  width: 10px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 class=%27icon%27 fill=%27%23fff%27 viewBox=%270 0 121.805 121.804%27%3E%3Cg%3E%3Cpath d=%27M7.308,68.211h107.188c4.037,0,7.309-3.272,7.309-7.31c0-4.037-3.271-7.309-7.309-7.309H7.308C3.272,53.593,0,56.865,0,60.902C0,64.939,3.272,68.211,7.308,68.211z%27%3E%3C/path%3E%3C/g%3E%3C/svg%3E");
}
 input.input {
    background: var(--input-background-color);
    color: var(--input-text-color);
    border-radius: var(--default-border-radius);
    height: 30px;
    padding: 7px 10px 9px;
    width: 100%;
    min-width: 145px;
    text-align: center;
    transition: opacity 0.3s ease-in-out 0s;
}
 .sum__input .input-button {
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.2s ease-in-out 0s, opacity 0.3s ease-in-out 0s;
    cursor: pointer;
    width: 24px;
    height: 24px;
    background-position: center center;
    background-repeat: no-repeat;
    opacity: 0.6;
}
 .i--plus {
  height: 10px;
  width: 10px;
    background-image: url("data:image/svg+xml,%3Csvg xmlns=%27http://www.w3.org/2000/svg%27 class=%27icon%27 fill=%27%23fff%27 viewBox=%270 0 426.66667 424.66667%27%3E%3Cg%3E%3Cpath d=%27m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0%27%3E%3C/path%3E%3C/g%3E%3C/svg%3E")
}
.info__sum{
  margin-bottom: 20px;
}
</style>

<main class="main">
        <div class="_container p-wrap-aside">
         
















<aside class="leagues p__leagues">
            <div class="hed-leag leagues__head">
              <button class="btn-self _js-active" type="button" aria-label="кнопка" data-r-btn="a1">  Линия</button>
              <button class="btn-self" type="button" aria-label="кнопка" data-r-btn="a1">Live</button>
            </div>
            <article class="leagues__line line-lg">
              <h6> Все <br> события</h6>
              <div class="line-lg__line"><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span class="_js-active"> </span></div>
            </article>
            <label class="leagues__line search">
              <input class="search__inp" type="text" name="search" placeholder="Поиск" autocomplete="off"><span class="search__ico"><img class="p-img-c" src="/img/svg/search.svg" loading="lazy" width="100" height="100" alt="img"></span>
            </label>
            <article class="spoiler leagues__sect _js-active" data-sel-target=""> 
              <div class="leagues__top">
                <div class="leagues__l-top">
                  <div class="leagues__ico"><picture><source srcset="/img/ico/l1.avif" type="image/avif"><source srcset="/img/ico/l1.webp" type="image/webp"><img class="p-img-c" src="/img/ico/l1.png" loading="lazy" width="100" height="100" alt="img"></picture></div>
                  <h3>Топ лиги</h3>
                </div>
                <button class="btn-v spoiler__btn" type="button" aria-label="кнопка" data-btn-sel=""><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
              </div>
              <div class="spoiler__hide"> 
                <ul class="leagues__list list-leag">
                            @foreach($data_leages as $data_leage)
                        <li>
                          <a class="list-leag__itm" href="/bets/{{$data_leage['sport_id']}}/{{$data_leage['id_tourn']}}"> <span class="list-leag__ico">
                            <picture>
                            <img class="p-img-c" src="/img/ico/l{{$data_leage['icon']}}.png" loading="lazy" width="100" height="100" alt="иконка">
                          </picture>
                        </span><span>{{$data_leage['name']}}</span>
                      </a>
                        </li>
              @endforeach
                </ul>
              </div>
            </article>
            <article class="spoiler leagues__sect" data-sel-target="">   
              <div class="leagues__top" data-btn-sel="">
                <div class="leagues__l-top">
                  <div class="leagues__ico"><img class="p-img-c" src="/img/games/gg-asd.svg" loading="lazy" width="100" height="100" alt="img"></div>
                  <h3>Виды спорта </h3>
                </div>
                <button class="btn-v spoiler__btn" type="button" aria-label="кнопка" data-go-btn="tl20"><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
              </div>
              <div class="spoiler__hide"> 
                <ul class="leagues__list list-leag">
                  @foreach($arr_res_sport as $arr_res_spor)
                            <li class="list-leag__box-itm">
                              <a class="list-leag__itm" href="/bets/{{$arr_res_spor['id_sport']}}"> <span class="list-leag__ico">
                                <picture>
                                  <img class="p-img-c" src="/storage/{{$arr_res_spor['img']}}" loading="lazy" width="100" height="100" alt="иконка">
                                </picture></span><span>{{$arr_res_spor['name']}}</span>
                              </a>
                              <div class="list-leag__r-itm"> 
                                <span class="list-leag__i-val">@if(isset($arr_res_spor['counter'])) {{$arr_res_spor['counter']}} @else 0 @endif</span>
                                <span class="btn-v spoiler__btn" type="button" aria-label="кнопка" data-go-btn="tl20">
                                  <img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img">
                                </span>
                              </div>
                            </li>
                  @endforeach
                           
                           
                </ul>
              </div>
            </article>
          </aside>


          <div>
            <section class="sport">
              <div class="sport__aside">
                            <article class="sp-match spoiler _js-active sport__sp-match" data-go-target="spm1">  
                              <div class="sp-match__head">
                                <button class="btn-v sp-match__v-btn spoiler__btn" type="button" aria-label="кнопка" data-go-btn="spm1"><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                <h3 class="sp-match__ttl">{{$gameone->sport_name_ru}}. {{$gameone->tournament_name_ru}}</h3>
                              </div>
                              <div class="spoiler__hide"> 
                                <ul class="list-sp-match">
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                              <li class="li-lspm list-sp-match__elm"> 
                                                <div class="li-lspm__top">
                                                  <div class="li-lspm__star _svg">
                                                    <svg>
                                                      <use href="/img/spite/star.svg#ico"></use> 
                                                    </svg>
                                                  </div>
                                                  <div class="li-lspm__c-top">
                                                    <div class="li-lspm__time"> 20:30 02.09</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Горица</div>
                                                    <div class="li-lspm__name"><span class="li-lspm__ico-name"> <picture><source srcset="/img/ico/frm.avif" type="image/avif"><source srcset="/img/ico/frm.webp" type="image/webp"><img class="p-img-c" src="/img/ico/frm.png" loading="lazy" width="100" height="100" alt="img"></picture></span>Дравинья</div>
                                                  </div>
                                                  <div class="li-lspm__tv"><img class="p-img-c" src="/img/ico/itv.svg" loading="lazy" width="100" height="100" alt="img"></div>
                                                </div>
                                                <div class="li-lspm__box-val"><span class="li-lspm__val">3.805</span><span class="li-lspm__val">3.32</span><span class="li-lspm__val">-</span><span class="li-lspm__val li-lspm__val--last">+667</span></div>
                                              </li>
                                </ul>
                              </div>
                            </article>
              </div>
              <div class="sport__c-box">
                <div class="sport__top">
                              <section class="match _ibg sport__match"><picture><source srcset="/img/grass.avif" type="image/avif"><source srcset="/img/grass.webp" type="image/webp"><img class="_ibg-img" src="/img/grass.jpg" loading="lazy" width="100" height="100" alt="img"></picture>
                                <h2 class="match__ttl"> {{$gameone->sport_name_ru}}. {{$gameone->tournament_name_ru}}</h2>
                                <article class="match__info info-match"> 
                                  <h6 class="info-match__name">{{$gameone->opp_1_name_ru}}</h6>
                                  <div class="info-match__time"><span>{{date('H:i', $gameone->game_start)}}</span><span class="info-match__date">{{date('d.Y', $gameone->game_start)}}</span></div>
                                  <h6 class="info-match__name">{{$gameone->opp_2_name_ru}}</h6>
                                </article>
                                <article class="match__timer timer-m">
                                  <div class="timer-m__sect">
                                    @if (($gameone->game_start - time()) < 0)
                                    <p>0</p>

                                    @else
                                       <p>{{date('d', $gameone->game_start - time())}}</p>
                                    @endif
                                    <h6>Дней</h6>
                                  </div><span class="timer-m__sepr">:</span>
                                  <div class="timer-m__sect">
                                    @if (($gameone->game_start - time()) < 0)
                                    <p>0</p>

                                    @else
                                       <p>{{date('H', $gameone->game_start - time())}}</p>
                                    @endif
                                    <h6>Часов</h6>
                                  </div><span class="timer-m__sepr">:</span>
                                  <div class="timer-m__sect">
                                    @if (($gameone->game_start - time()) < 0)
                                    <p>0</p>

                                    @else
                                       <p>{{date('i', $gameone->game_start - time())}}</p>
                                    @endif
                                    <h6>Минут</h6>
                                  </div><span class="timer-m__sepr">:</span>
                                  <div class="timer-m__sect">
                                    @if (($gameone->game_start - time()) < 0)
                                    <p>0</p>

                                    @else
                                       <p>{{date('s', $gameone->game_start - time())}}</p>
                                    @endif
                                    <h6>Секунд</h6>
                                  </div>
                                </article>
                              </section>
                              
<article class="info-spm sport__info-spm" data-screen="box1">
                                <div class="info-spm__box-screen">
                                  


                                  <?php $i=1; ?>
                                  @foreach($gameone->stat_list as $one)
                                  @if($i==1)
                                  <div class="hide-screen _js-active" data-screen="s{{$i}}">
                                  @else
                                  <div class="hide-screen" data-screen="s{{$i}}">
                                  @endif
                                  
                                   <div>
                                      <h3 class="info-spm__ttl">{{$one->name}}</h3>
                                      <div class="info-spm__line"> <span class="info-spm__l-line"> </span><span class="info-spm__r-line"> </span></div>
                                      <div class="info-spm__val-box"><span class="info-spm__val">
                                        <span>{{$one->opp1}}</span>
                                      </span>
                                      <span class="info-spm__val info-spm__val--r"><span>{{$one->opp2}}</span></span></div>
                                     
                                    </div>
                                   

                                  </div>
                                  <?php $i++; ?>
                                @endforeach
                                  
                                  
                                </div>
                                <div class="info-spm__pagination">
                                 <?php $j=1; ?>
                                  @foreach($gameone->stat_list as $one)
                                  <button class="" type="button" aria-label="кнопка" data-screen-btn="s{{$j}}"> </button>
                                  
                                  <?php $j++; ?>
                                  @endforeach
                                  
                                </div>
                              </article>

                             
                </div>
                <div class="sport__e-scroll">
                              <section class="e-scroll">
                                <div class="e-scroll__btn-box">
                                  <div class="e-scroll__box-scrl">
                                    <button class="e-scroll__btn _js-active" type="button" aria-label="кнопка"> Основное время (+366)</button>
                                    <button class="e-scroll__btn" type="button" aria-label="кнопка"> 1й тайм (+150)</button>
                                    <button class="e-scroll__btn" type="button" aria-label="кнопка"> 2й тайм (+150)</button>
                                    <button class="e-scroll__btn" type="button" aria-label="кнопка"> 1й тайм, Угловые (+150)</button>
                                    <button class="e-scroll__btn" type="button" aria-label="кнопка"> 1й тайм, Угловые (+150)</button>
                                    <button class="e-scroll__btn" type="button" aria-label="кнопка"> 1й тайм, Угловые (+150)</button>
                                  </div>
                                </div>
                                <div class="e-scroll__control">
                                  <div class="e-scroll__bg-control"><span></span></div>
                                  <article class="control-ess">
                                    <button class="control-ess__btn" type="button" aria-label="кнопка"><img class="p-img-c" src="/img/svg/win1.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                    <button class="control-ess__btn" type="button" aria-label="кнопка"><img class="p-img-c" src="/img/svg/win2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                    <input class="control-ess__inp" type="text" name="search" placeholder="поиск">
                                  </article>
                                </div>
                              </section>
                </div>
                <div class="sport__box-2clm">
                  <div class="sport__colm"> 
                                <article class="sp-match spoiler _js-active sport__table" data-sel-target="">  
                                  <div class="sp-match__head sp-match__head--sb">
                                    <h3 class="sp-match__ttl">Победитель </h3>
                                    <button class="btn-v sp-match__v-btn spoiler__btn" type="button" aria-label="кнопка" data-btn-sel=""><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                  </div>
                                  <div class="spoiler__hide"> 
                                    <ul class="list-sp-match">

                                      <li class="line-2-sml">
                                        
                                          
                                           @foreach($gameone->game_oc_list as $ls)
                                              @if($ls->oc_group_name == '1x2')
                                              <div class="line-1-sml">
                                                <div class="line-1-sml__l"> 
                                                {{$ls->oc_name}}
                                                </div>
                                                <div class="line-1-sml__r"> {{$ls->oc_rate}}</div>
                                              </div>
                                              @endif
                                            @endforeach
                                          

                                        
                                        
                                      </li>
                                     
                                    </ul>
                                  </div>
                                </article>
                                <article class="sp-match spoiler _js-active sport__table" data-sel-target="">  
                                  <div class="sp-match__head sp-match__head--sb">
                                    <h3 class="sp-match__ttl">Победитель </h3>
                                    <button class="btn-v sp-match__v-btn spoiler__btn" type="button" aria-label="кнопка" data-btn-sel=""><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                  </div>
                                  <div class="spoiler__hide"> 
                                    <ul class="list-sp-match">
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </article>
                  </div>
                  <div class="sport__colm"> 
                                <article class="sp-match spoiler _js-active sport__table" data-sel-target="">  
                                  <div class="sp-match__head sp-match__head--sb">
                                    <h3 class="sp-match__ttl">Двойной шанс </h3>
                                    <button class="btn-v sp-match__v-btn spoiler__btn" type="button" aria-label="кнопка" data-btn-sel=""><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                  </div>
                                  <div class="spoiler__hide"> 
                                    <ul class="list-sp-match">
                                      <li class="line-3-sml">
                                         @foreach($gameone->game_oc_list as $ls)
                                              @if($ls->oc_group_name == 'Двойной шанс')
                                              <div class="line-1-sml">
                                                <div class="line-1-sml__l"> 
                                                {{$ls->oc_name}}
                                                </div>
                                                <div class="line-1-sml__r"> {{$ls->oc_rate}}</div>
                                              </div>

                                              @endif
                                            @endforeach
                                        
                                        
                                      </li>
                                    </ul>
                                  </div>
                                </article>
                                <article class="sp-match spoiler _js-active sport__table" data-sel-target="">  
                                  <div class="sp-match__head sp-match__head--sb">
                                    <h3 class="sp-match__ttl">Победитель </h3>
                                    <button class="btn-v sp-match__v-btn spoiler__btn" type="button" aria-label="кнопка" data-btn-sel=""><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
                                  </div>
                                  <div class="spoiler__hide"> 
                                    <ul class="list-sp-match">
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                      <li class="line-2-sml">
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Люксембург</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                        <div class="line-1-sml">
                                          <div class="line-1-sml__l"> Ничья</div>
                                          <div class="line-1-sml__r"> 1.456</div>
                                        </div>
                                      </li>
                                    </ul>
                                  </div>
                                </article>
                  </div>
                </div>
              </div>
            </section>
          </div>



























         
        

          <aside class="coupon-as">
            <article class="coupon coupon-as__cup spoiler _js-active" data-go-target="c1">
              <div class="coupon__top"> 
                <h3 class="coupon__ttl">Купон</h3>
                <button class="btn-v spoiler__btn" type="button" aria-label="кнопка" data-go-btn="c1"><img class="p-img-c" src="/img/ico/v2.svg" loading="lazy" width="100" height="100" alt="img"></button>
              </div>

              


              <div class="spoiler__box"> 
                <form class="coupon__c-box c-cup" action="#!" method="POST">
                  <div class="c-cup__ct-box">
                    <input class="radio-cc _hide" id="radio11" type="radio" name="coupon" aria-label="чекбокс" checked="checked">
                    <label class="lbl-cc" for="radio11">Ординар</label>
                    <input class="radio-cc _hide" id="radio12" type="radio" name="coupon" aria-label="чекбокс">
                    <label class="lbl-cc" for="radio12">Экспресс</label>
                    <input class="radio-cc _hide" id="radio13" type="radio" name="coupon" aria-label="чекбокс">
                    <label class="lbl-cc" for="radio13">Система</label>
                  </div>
              <div class="h1">
                  <div class="coupon__bets">
                    
              
                </div>
            <div class="info__odd">
              <div class="title">Итоговый коэффициент:</div>
              <div class="value">3.68</div>
            </div>
            <div class="info__sum">
              <div class="sum__input">
                <div class="input-button minus btn_minus" onclick="ButtunMinus()">
                  <div class="icon i--minus"></div>
                </div>
                <input placeholder="Сумма ставки" type="text" inputmode="decimal" autocorrect="off" autocapitalize="off" maxlength="10" autocomplete="off" value="100" class="input input_txt">
                <div class="input-button plus btn_plus" onclick="ButtunPlus()">
                  <div class="icon i--plus"></div>
                </div>
              </div>
            </div>
          </div>

                  <h4 class="c-cup__ttl coupon__ttl">Выберите событие</h4>
                  <div class="c-cup__box-btn">
                    <input class="radio-acp _hide" id="check11" type="checkbox" name="checked-coupon" aria-label="чекбокс" checked="checked">
                    <label class="lbl-acp coupon__acpt" for="check11"> <span>Всегда соглашаться с изменением коэффициента</span></label>
                    <button class="btn c-cup__btn" type="button" aria-label="кнопка"> Сделать ставку</button>
                  </div>
                </form>
              </div>

            </article>
            <article class="a-create-bet">
              <div class="a-create-bet__box">
                <h3 class="a-create-bet__ttl">Любые матчи и события по вашим правилам!</h3>
                <p>Выбирайте событие и создавайте свои коэффициенты для более эффективных ставок в нашем новом и удобном конструкторе.</p>
              </div>
              <button class="btn c-cup__btn" type="button" aria-label="кнопка"> Сделать ставку</button>
            </article>
          </aside>
        </div>
      </main>
      <script type="text/javascript">
        let res = [];
        //const res = new Map();

        let arr_res_k = [];
        let arr_res_game_id = [];
        var i = 0;
        function selectKoef(name_1, name_2, k, game_id, v, r){
          var currentURL = window.location.href;

          // Ищем начало пути "/bets/4/2082213"
          var startIndex = currentURL.indexOf("/bets/");

          // Извлекаем подстроку, начиная с найденного индекса
          var extractedPath = currentURL.substr(startIndex);
          
          let fullPath = extractedPath+'/'+game_id;
          
          let fdc = "sp"+game_id+'_'+r;
          $("#sp"+game_id+'_'+r).css('background' ,'#c4f027');
          //$(this).hide();
          if(arr_res_k.includes(k) && arr_res_game_id.includes(game_id)){

          }else{

          f = '<div class="bet bet-appear-done"><div class="bet__wrap"><div class="bet__header"><div class="header__title">@if (isset($title)) {{$title}} @endif</div><div class="header__cancel"><div class="close" onclick="closeClick('+i+','+k+', '+game_id+', '+r+')"></div></div></div><div class="bet__info"><a href="'+fullPath+'" class="bet__opps"><div class="opps-opp opp--1"><div class="opp__icon" style="background-image: url(&quot;https://nlcdn.anyplay.pro/img/teams/default/1/301.svg&quot;);"></div><div class="opp__name">'+name_1+'</div></div><div class="opps-opp opp--1"><div class="opp__icon" style="background-image: url(&quot;https://nlcdn.anyplay.pro/img/teams/default/1/301.svg&quot;);"></div><div class="opp__name">'+name_2+'</div></div></a><div class="stake"><div class="stake__value"><span class="odd-change"></span><span class="odd formated-odd">'+k+'</span></div></div></div><div class="bet__details"><div class="bet__market">Победитель: '+v+'</div></div></div></div>';
          res.push(f);
          }
          $('.h1').show();
          $('.coupon__bets').html(res.join(''));
          arr_res_k.push(k);
          arr_res_game_id.push(game_id);
          i++;
          $('.value').text(sumK());
        }
        function closeClick(fc, k, game_id, fdc){
          //alert(fc);
          let index = arr_res_k.indexOf(k);
          let index1 = arr_res_game_id.indexOf(game_id);
          arr_res_k.splice(index, 1);
          arr_res_game_id.splice(index1, 1);
          res[fc] = '';
          
          console.log(arr_res_k);

          $("#sp"+game_id+"_"+fdc).css('background', '#d0daf3');
          //$("#sp"+game_id+'_'+r).css('background' ,'#c4f027');
          $('.coupon__bets').html(res.join(''));

          d = 0;
          res.forEach(function(item, i, res) {
            if(item != ''){
                d=1;
            }
          });
          if(d==0){
            $('.h1').hide();
          }

          $('.value').text(sumK());

        }


        function sumK(){
          let s = 0;
          for(var i = 0; i < arr_res_k.length; i++){
            s+=arr_res_k[i];
          }
          return s.toFixed(2);
        }

        function ButtunPlus(){
          let l = $('.input_txt').val();
          $('.input_txt').val(Number(l) + 500);
        }

        function ButtunMinus(){
          let l = $('.input_txt').val();
          if(Number(l) >= 500){
          $('.input_txt').val(Number(l) -500);
          }
          
        }
        
      </script>
        
@endsection