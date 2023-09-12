@extends('main')
@section('title', 'Авто из Европы')
@section('content')
 <div class="banner">
		<div class='banner_txt'>
			<h3 class="banner_txt_h">
				Авто из Европы
			</h3>
			<p class="banner_txt_p">по самым актуальным<br />ценам без посредников</p>
			<button class="btn_order">Заказать авто</button>
		</div>
		<ul class="section-contacts">
			<li>
				<div class="fl ">
					<div>
						<img src="assets/img/phone.png" width="32px" alt="">
					</div> 
					<div class="fl_txt f1border">
							 <span>+7 XXX XXX XXXX</span>
					</div>
				</div>
			</li>
			<li>
				<div class="fl ">
					<div>
						<img src="assets/img/phone.png" width="32px" alt="">
					</div>
					<div class="fl_txt f1border">
							 <span>+7 XXX XXX XXXX</span>
					</div>
				</div>
			</li>
			<li>
				<div class="fl ">
					<div>
						<img src="assets/img/phone.png" width="32px" alt="">
					</div>
					<div class="fl_txt f1border">
							 <span>+7 XXX XXX XXXX</span>
					</div>
				</div>
			</li>
			<li>
				<div class="fl">
					<div>
						<img src="assets/img/email.png" width="32px" alt="">
					</div>
					<div class="fl_txt">
							 <span>Email@email.com</span>
					</div>
				</div>
				
			</li>
		</ul>
	</div>
	<div class="sec_1">
		<div class="sec_1_item">
			<h2>ПЕИМУЩЕСТВО АВТО С ЕВРОПЫ</h2>
			<p>Вторичный авторынок России часто предлагает автомобили, стоимость которых не сопоставима их состоянию и оснащению, и автолюбителям приходится выбирать транспорт за границей.<br /> В связи с этим, сейчас очень востребована услуга подбора автомобилей из других стран.<br /> Европа принципиально отличается от других стран, что там в ходу экономичные, но комфортабельные автомобили. Самые популярные типы кузова – универсалы, минивэны и кроссоверы, причем с большим выбором дизельных агрегатов. Подобный транспорт по-прежнему популярен и в России, так как идеально адаптирован к повседневным задачам среднестатистического семейного человека.<br /> Качество европейских дорог намного выше России, на них не применяется такое количество реагентов и кузова машин меньше подвержены коррозии и износу.<br /> Европейцы очень дисциплинированы по части выполнения техрегламента, не будут пропускать ТО или отматывать пробег.<br /> Также не стоит забывать, что иномарки, выпущенные для Европы – совсем не те машины, которые производят и продают в СНГ. Комплектации европейских авто богаче, моторная гамма шире, а некоторые модели даже не экспортируются в другие страны и рассчитаны только на местный рынок.</p>
		</div>
		<div class="sec_1_item">
			<img src="assets/img/coin-stacks-in-front-of-car 1.png" alt="" >
		</div>
	</div>
	<div class="actual_catalog">
		
			<h2>Актуальные АВТО</h2>
			<div class="actual_catalog_flex">
			@foreach($act_auto as $act_au)
				<div class="actual_catalog_item">
					<img src="/storage/{{$act_au->img}}">
					<p class="h_item_fl">{{$act_au->title}}</p>
					<p class="catalog_price">Цена в Европе: <span class="green">{{$act_au->price_evropa}} ₽</span></p>
					<p class="catalog_price">Цена в России: <span class="green">{{$act_au->price_russia}} ₽</span></p>
					<button class="btn_order_catalog">Выгода {{number_format(str_replace('.', '', $act_au->price_russia) - str_replace('.', '', $act_au->price_evropa), 0, ',', '.')}}₽</button>
				</div>
			@endforeach
				
				
			</div>
			<div class="acti_slider">

			</div>
	</div>
	<div class="sec_3">
		<h2>ПРИЧИНЫ ПОЧЕМУ РАБОТАТЬ С НАМИ</h2>
		<hr />
		<div class="sec_3_flex">
			<div class="sec_3_flex_item w396">
				<p><img src="assets/img/item1.png" alt="" ></p>
				<p class="sec_3_h">Любые авто, даже под санкциями-без лишних переплат, экономия до 30%.</p>
				<p class="sec_3_txt">Работаем без посредников напрямую с продавцами и аукционнами. Мы покупаем авто в Европе сами,поэтому санкции на нас не распостраняются. Тысячи разнообразных автомобилей еженедельно. Автомобили с пробегом со всей Европы. Легковые и коммерческие автомобили.</p>
			</div>
			<div class="sec_3_flex_item w492">
				<p><img src="assets/img/item2.png" alt="" ></p>
				<p class="sec_3_h">Гарантия качества</p>
				<p class="sec_3_txt">5+ лет работы на авторынке Европы. Все предлагаемые автомобили соответствуют проверенному пробегу. На каждый автомобиль представлен VIN-номер. Все автомобили прошли юридическую проверку и
получили оценку сертифицированных независимых экспертов ЕС.
Автомобили в хорошем состоянии, без ДТП, с маленьким пробегом.</p>
			</div>
			<div class="sec_3_flex_item w300 bggreen">
				<form class="form_order">
					<p class="h1_form_order">Оставьте заявку сейчас!</p>
					 <input type="text" placeholder="Имя" id="name_1" name="">
					 <input type="text" placeholder="Телефон" id="phone_1" name="">
					 <p>Наши операторы свяжутся с вами в течении 24 часов!</p>
					 <button class="btn_form">Оставить заявку</button>
				</form>
			</div>
			<div class="sec_3_flex_item w450">
				<p><img src="assets/img/item3.png" alt="" ></p>
				<p class="sec_3_h">Отлаженная логистика и сопровождение всего процесса до дверей</p>
				<p class="sec_3_txt">Надежные перевозчики. Точные сроки. От дверей до дверей.
Логистика документов. Мониторинг процесса перевозки.</p>
			</div>
			<div class="sec_3_flex_item w346">
				<p><img src="assets/img/item4.png" alt="" ></p>
				<p class="sec_3_h">Полное томоженное оформление авто</p>
				<p class="sec_3_txt">Наши брокеры и экспедиторы оперативно решают  даже  нестандартные ситуации, без лишней головной боли и дополнительных расходов.</p>
			</div>
		</div>
	</div>
	<div class="sec_4">
		<h2>6 этапов для покупки автомобиля:</h2>
		<div class="sec_4_flex">
			<div class="sec_4_flex_item">
				<h3>01</h3>
				<p><b>Заявка</b></p>
				<p>Оставляете заявку на сайте, с Вами связывается специалист, чтобы обговорить Вашу задачу. Составляете договор при необходимости</p>
			</div>
			<div class="sec_4_flex_item">
				<h3>02</h3>
				<p><b>Автоподбор</b></p>
				<p>Подбираем авто по Вашим критериям. Показываем лучшие предложения со всех официальных платформ и автоаукционов</p>
			</div>
			<div class="sec_4_flex_item">
				<h3>03</h3>
				<p><b>Проверка авто</b></p>
				<p>Осуществляем проверку авто на юридическую чистоту, по запросу проводим тех. обслуживание, видеоотчёт о состоянии авто</p>
			</div>
			<div class="sec_4_flex_item">
				<h3>04</h3>
				<p><b>Покупка авто</b></p>
				<p>После всех проверок и подтверждения оформляем договор купли-продажи с продавцом машины</p>
			</div>
			<div class="sec_4_flex_item">
				<h3>05</h3>
				<p><b>Доставка</b></p>
				<p>Доставляем авто своим ходом или тралом, в любой момент вы можете запросить отчёт о ходе доставки</p>
			</div>
			<div class="sec_4_flex_item">
				<h3>06</h3>
				<p><b>Растаможка</b></p>
				<p>Делаем растаможку под ключ, легализуем машину в России и ставим на учет. Или же частично помогаем с растаможкой</p>
			</div>
			<div class="sec_4_flex_item w44">
				<h3>По итогу:</h3>
				<p>Вы получаете свой идеальный автомобиль по доступной стоимости, без переплат и без лишних проблем. Мы берем на себя всю работу для вашего комофрта!</p>
			</div>
		</div>
	</div>
	<div class="partner">
		<img src="assets/img/partners.png" alt="" >
	</div>
@endsection