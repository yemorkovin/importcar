<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="" />
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script src="/assets/js/jquery.min.js" type="text/javascript"></script>
</head>
<body>
	<header class="header">
		<div class="logo">
			<a href="/"><svg width="144" height="28" viewBox="0 0 144 28" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10.7571 0.772814C10.8627 0.320204 11.2662 0 11.731 0H35.5468C36.0116 0 36.4151 0.320286 36.5207 0.772972L38.1372 7.70728C38.2834 8.33446 37.8073 8.9343 37.1633 8.9343H10.1133C9.46922 8.9343 8.99311 8.33434 9.13943 7.70712L10.7571 0.772814Z" fill="#FAA317"/>
			<path d="M33.6909 27.2272C33.5853 27.6798 33.1818 28 32.7171 28L14.5583 28C14.0935 28 13.69 27.6797 13.5844 27.227L12.1457 21.0553L35.1307 21.0553L33.6909 27.2272Z" fill="#FAA317"/>
			<path d="M0.452224 15.53C0.230484 14.8811 0.71277 14.2067 1.3985 14.2067H8.68908C9.09597 14.2067 9.46228 14.4532 9.61548 14.8301L12.1457 21.0553H3.0554C2.62774 21.0553 2.24741 20.7834 2.10912 20.3787L0.452224 15.53Z" fill="#FAA317"/>
			<path d="M46.8242 15.53C47.0459 14.8811 46.5637 14.2067 45.8779 14.2067H38.5873C38.1805 14.2067 37.8141 14.4532 37.6609 14.8301L35.1307 21.0553H44.221C44.6487 21.0553 45.029 20.7834 45.1673 20.3787L46.8242 15.53Z" fill="#FAA317"/>
			<path d="M68.3725 23.0216C65.7547 23.0216 63.5842 22.16 61.8611 20.4369C60.138 18.6806 59.2764 16.535 59.2764 14C59.2764 11.4485 60.138 9.31112 61.8611 7.588C63.5677 5.8483 65.7381 4.97845 68.3725 4.97845C69.9466 4.97845 71.3963 5.35125 72.7218 6.09683C74.0638 6.84241 75.1076 7.85309 75.8532 9.12887L73.3679 10.5703C72.904 9.70877 72.2247 9.02946 71.33 8.5324C70.4519 8.01878 69.4661 7.76197 68.3725 7.76197C66.5334 7.76197 65.0257 8.35015 63.8493 9.52651C62.7061 10.6863 62.1345 12.1775 62.1345 14C62.1345 15.8225 62.7061 17.3137 63.8493 18.4735C65.0257 19.6499 66.5334 20.2381 68.3725 20.2381C69.4661 20.2381 70.4602 19.9895 71.3549 19.4925C72.2496 18.9788 72.9206 18.2913 73.3679 17.4297L75.8532 18.8463C75.1408 20.1055 74.1052 21.1245 72.7466 21.9032C71.4377 22.6488 69.9797 23.0216 68.3725 23.0216Z" fill="black"/>
			<path d="M87.8711 12.0366V10.2721H90.5552V22.6985H87.8711V20.9091C86.8604 22.3174 85.4107 23.0216 83.5219 23.0216C81.8153 23.0216 80.3573 22.392 79.1478 21.1328C77.9383 19.8735 77.3335 18.3244 77.3335 16.4853C77.3335 14.6462 77.9383 13.097 79.1478 11.8378C80.3573 10.5786 81.8153 9.94901 83.5219 9.94901C85.4107 9.94901 86.8604 10.6449 87.8711 12.0366ZM81.136 19.3434C81.8816 20.0889 82.8177 20.4617 83.9444 20.4617C85.071 20.4617 86.0071 20.0889 86.7527 19.3434C87.4983 18.5812 87.8711 17.6285 87.8711 16.4853C87.8711 15.3421 87.4983 14.3977 86.7527 13.6521C86.0071 12.8899 85.071 12.5088 83.9444 12.5088C82.8177 12.5088 81.8816 12.8899 81.136 13.6521C80.3904 14.3977 80.0176 15.3421 80.0176 16.4853C80.0176 17.6119 80.3904 18.5646 81.136 19.3434Z" fill="black"/>
			<path d="M96.3678 10.2721V12.3597C97.0471 10.8189 98.3229 10.0484 100.195 10.0484V12.9562C99.1845 12.8899 98.2898 13.1384 97.5111 13.7018C96.7489 14.2485 96.3678 15.1598 96.3678 16.4356V22.6985H93.6837V10.2721H96.3678Z" fill="black"/>
			<path d="M102.352 5.30154H109.187C111.573 5.30154 113.553 6.13825 115.127 7.81167C116.717 9.48509 117.512 11.5479 117.512 14C117.512 16.4356 116.717 18.4984 115.127 20.1883C113.553 21.8618 111.573 22.6985 109.187 22.6985H102.352V5.30154ZM105.21 19.9647H109.187C110.827 19.9647 112.161 19.4013 113.188 18.2747C114.232 17.148 114.754 15.7231 114.754 14C114.754 12.2769 114.232 10.852 113.188 9.72533C112.161 8.59867 110.827 8.03535 109.187 8.03535H105.21V19.9647Z" fill="black"/>
			<path d="M122.479 7.91108C122.148 8.24245 121.75 8.40814 121.286 8.40814C120.822 8.40814 120.416 8.24245 120.068 7.91108C119.737 7.56314 119.571 7.15721 119.571 6.6933C119.571 6.22938 119.737 5.83173 120.068 5.50036C120.4 5.15242 120.806 4.97845 121.286 4.97845C121.767 4.97845 122.173 5.15242 122.504 5.50036C122.835 5.83173 123.001 6.22938 123.001 6.6933C123.001 7.15721 122.827 7.56314 122.479 7.91108ZM122.628 22.6985H119.944V10.2721H122.628V22.6985Z" fill="black"/>
			<path d="M128.083 13.7018C128.083 14.0829 128.282 14.3977 128.679 14.6462C129.077 14.8781 129.657 15.1018 130.419 15.3172C130.999 15.4498 131.504 15.5906 131.935 15.7397C132.366 15.8888 132.821 16.1125 133.302 16.4107C133.782 16.6924 134.147 17.0735 134.395 17.554C134.66 18.0179 134.785 18.5646 134.768 19.1942C134.768 20.3872 134.304 21.3233 133.376 22.0026C132.448 22.6819 131.297 23.0216 129.922 23.0216C128.696 23.0216 127.644 22.7648 126.765 22.2511C125.887 21.7375 125.249 21.0251 124.852 20.1138L127.163 18.7717C127.577 19.9647 128.497 20.5611 129.922 20.5611C131.33 20.5611 132.034 20.0972 132.034 19.1694C132.034 18.4901 131.247 17.9599 129.673 17.5788C129.077 17.4297 128.571 17.2806 128.157 17.1315C127.76 16.9823 127.312 16.767 126.815 16.4853C126.335 16.2036 125.962 15.8308 125.697 15.3669C125.448 14.903 125.332 14.3645 125.349 13.7515C125.349 12.6083 125.78 11.6887 126.641 10.9928C127.519 10.2969 128.605 9.94901 129.897 9.94901C130.924 9.94901 131.835 10.181 132.631 10.6449C133.443 11.0922 134.064 11.7218 134.495 12.5337L132.233 13.8012C131.819 12.8568 131.04 12.3846 129.897 12.3846C129.367 12.3846 128.928 12.5006 128.58 12.7325C128.248 12.9645 128.083 13.2876 128.083 13.7018Z" fill="black"/>
			<path d="M143.576 10.2721V12.8568H140.494V18.8214C140.494 19.3351 140.61 19.7079 140.842 19.9398C141.074 20.1552 141.414 20.2795 141.861 20.3126C142.325 20.3292 142.897 20.3209 143.576 20.2878V22.6985C141.522 22.947 140.047 22.773 139.152 22.1766C138.258 21.5635 137.81 20.4452 137.81 18.8214V12.8568H135.524V10.2721H137.81V7.588L140.494 6.79271V10.2721H143.576Z" fill="black"/>
			</svg></a>
		</div>
		<a class="mobile_click">
			<img src="assets/img/img-mobile.png" alt="">
		</a>
		<ul class="menu_mobile">
			<div class="close_menu">X</div>
			<li>
				<a href="/" class="active">Главная</a>
			</li>
			<li>
				<a href="/page/about">О нас</a>
			</li>
			<li>
				<a href="/page/review">Отзывы</a>
			</li>
			<li>
				<a href="/page/document">Документы</a>
			</li>
			<li>
				<a href="/catalog">Каталог</a>
			</li>
			<li>
				<a href="/page/contaacts">Контакты</a>
			</li>
		</ul>
		<ul class="menu">
			<li>
				<a href="/" class="active">Главная</a>
			</li>
			<li>
				<a href="/page/about">О нас</a>
			</li>
			<li>
				<a href="/page/review">Отзывы</a>
			</li>
			<li>
				<a href="/page/document">Документы</a>
			</li>
			<li>
				<a href="/catalog">Каталог</a>
			</li>
			<li>
				<a href="/page/contaacts">Контакты</a>
			</li>
		</ul>
	</header>
	
	@yield('content')
	
	<div class="cont_footer">
	<footer class="footer">
		<div class="logo logo-footer">
			<svg width="144" height="29" viewBox="0 0 144 29" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.7571 1.70323C10.8627 1.25062 11.2662 0.93042 11.731 0.93042H35.5468C36.0116 0.93042 36.4151 1.25071 36.5207 1.70339L38.1372 8.6377C38.2834 9.26488 37.8073 9.86472 37.1633 9.86472H10.1133C9.46922 9.86472 8.99311 9.26476 9.13943 8.63754L10.7571 1.70323Z" fill="#FAA317"/>
<path d="M33.6909 28.1576C33.5853 28.6102 33.1818 28.9304 32.7171 28.9304L14.5583 28.9304C14.0935 28.9304 13.69 28.6101 13.5844 28.1574L12.1457 21.9857L35.1307 21.9857L33.6909 28.1576Z" fill="#FAA317"/>
<path d="M0.452224 16.4606C0.230484 15.8117 0.71277 15.1372 1.3985 15.1372H8.68908C9.09597 15.1372 9.46228 15.3837 9.61548 15.7607L12.1457 21.9859H3.0554C2.62774 21.9859 2.24741 21.7139 2.10912 21.3092L0.452224 16.4606Z" fill="#FAA317"/>
<path d="M46.8242 16.4606C47.0459 15.8117 46.5637 15.1372 45.8779 15.1372H38.5873C38.1805 15.1372 37.8141 15.3837 37.6609 15.7607L35.1307 21.9859H44.221C44.6487 21.9859 45.029 21.7139 45.1673 21.3092L46.8242 16.4606Z" fill="#FAA317"/>
<path d="M68.3725 23.952C65.7547 23.952 63.5842 23.0905 61.8611 21.3674C60.138 19.6111 59.2764 17.4655 59.2764 14.9305C59.2764 12.3789 60.138 10.2416 61.8611 8.51848C63.5677 6.77878 65.7381 5.90894 68.3725 5.90894C69.9466 5.90894 71.3963 6.28173 72.7218 7.02731C74.0638 7.77289 75.1076 8.78357 75.8532 10.0593L73.3679 11.5008C72.904 10.6392 72.2247 9.95994 71.33 9.46288C70.4519 8.94926 69.4661 8.69245 68.3725 8.69245C66.5334 8.69245 65.0257 9.28063 63.8493 10.457C62.7061 11.6168 62.1345 13.108 62.1345 14.9305C62.1345 16.753 62.7061 18.2442 63.8493 19.404C65.0257 20.5804 66.5334 21.1685 68.3725 21.1685C69.4661 21.1685 70.4602 20.92 71.3549 20.423C72.2496 19.9093 72.9206 19.2217 73.3679 18.3602L75.8532 19.7768C75.1408 21.036 74.1052 22.055 72.7466 22.8337C71.4377 23.5793 69.9797 23.952 68.3725 23.952Z" fill="white"/>
<path d="M87.8711 12.9671V11.2026H90.5552V23.629H87.8711V21.8396C86.8604 23.2479 85.4107 23.952 83.5219 23.952C81.8153 23.952 80.3573 23.3224 79.1478 22.0632C77.9383 20.804 77.3335 19.2549 77.3335 17.4158C77.3335 15.5767 77.9383 14.0275 79.1478 12.7683C80.3573 11.5091 81.8153 10.8795 83.5219 10.8795C85.4107 10.8795 86.8604 11.5754 87.8711 12.9671ZM81.136 20.2738C81.8816 21.0194 82.8177 21.3922 83.9444 21.3922C85.071 21.3922 86.0071 21.0194 86.7527 20.2738C87.4983 19.5117 87.8711 18.559 87.8711 17.4158C87.8711 16.2725 87.4983 15.3281 86.7527 14.5826C86.0071 13.8204 85.071 13.4393 83.9444 13.4393C82.8177 13.4393 81.8816 13.8204 81.136 14.5826C80.3904 15.3281 80.0176 16.2725 80.0176 17.4158C80.0176 18.5424 80.3904 19.4951 81.136 20.2738Z" fill="white"/>
<path d="M96.3678 11.2026V13.2902C97.0471 11.7493 98.3229 10.9789 100.195 10.9789V13.8867C99.1845 13.8204 98.2898 14.0689 97.5111 14.6323C96.7489 15.179 96.3678 16.0903 96.3678 17.3661V23.629H93.6837V11.2026H96.3678Z" fill="white"/>
<path d="M102.352 6.23202H109.187C111.573 6.23202 113.553 7.06873 115.127 8.74215C116.717 10.4156 117.512 12.4784 117.512 14.9305C117.512 17.3661 116.717 19.4288 115.127 21.1188C113.553 22.7922 111.573 23.629 109.187 23.629H102.352V6.23202ZM105.21 20.8952H109.187C110.827 20.8952 112.161 20.3318 113.188 19.2052C114.232 18.0785 114.754 16.6536 114.754 14.9305C114.754 13.2074 114.232 11.7825 113.188 10.6558C112.161 9.52916 110.827 8.96583 109.187 8.96583H105.21V20.8952Z" fill="white"/>
<path d="M122.479 8.84156C122.148 9.17293 121.75 9.33862 121.286 9.33862C120.822 9.33862 120.416 9.17293 120.068 8.84156C119.737 8.49362 119.571 8.08769 119.571 7.62378C119.571 7.15986 119.737 6.76221 120.068 6.43084C120.4 6.08291 120.806 5.90894 121.286 5.90894C121.767 5.90894 122.173 6.08291 122.504 6.43084C122.835 6.76221 123.001 7.15986 123.001 7.62378C123.001 8.08769 122.827 8.49362 122.479 8.84156ZM122.628 23.629H119.944V11.2026H122.628V23.629Z" fill="white"/>
<path d="M128.083 14.6323C128.083 15.0133 128.282 15.3281 128.679 15.5767C129.077 15.8086 129.657 16.0323 130.419 16.2477C130.999 16.3802 131.504 16.5211 131.935 16.6702C132.366 16.8193 132.821 17.043 133.302 17.3412C133.782 17.6229 134.147 18.0039 134.395 18.4844C134.66 18.9484 134.785 19.4951 134.768 20.1247C134.768 21.3177 134.304 22.2538 133.376 22.9331C132.448 23.6124 131.297 23.952 129.922 23.952C128.696 23.952 127.644 23.6952 126.765 23.1816C125.887 22.668 125.249 21.9555 124.852 21.0443L127.163 19.7022C127.577 20.8952 128.497 21.4916 129.922 21.4916C131.33 21.4916 132.034 21.0277 132.034 20.0999C132.034 19.4206 131.247 18.8904 129.673 18.5093C129.077 18.3602 128.571 18.2111 128.157 18.0619C127.76 17.9128 127.312 17.6974 126.815 17.4158C126.335 17.1341 125.962 16.7613 125.697 16.2974C125.448 15.8335 125.332 15.295 125.349 14.682C125.349 13.5387 125.78 12.6192 126.641 11.9233C127.519 11.2274 128.605 10.8795 129.897 10.8795C130.924 10.8795 131.835 11.1114 132.631 11.5754C133.443 12.0227 134.064 12.6523 134.495 13.4642L132.233 14.7317C131.819 13.7873 131.04 13.3151 129.897 13.3151C129.367 13.3151 128.928 13.431 128.58 13.663C128.248 13.895 128.083 14.218 128.083 14.6323Z" fill="white"/>
<path d="M143.576 11.2026V13.7873H140.494V19.7519C140.494 20.2656 140.61 20.6383 140.842 20.8703C141.074 21.0857 141.414 21.21 141.861 21.2431C142.325 21.2597 142.897 21.2514 143.576 21.2182V23.629C141.522 23.8775 140.047 23.7035 139.152 23.107C138.258 22.494 137.81 21.3756 137.81 19.7519V13.7873H135.524V11.2026H137.81V8.51848L140.494 7.72319V11.2026H143.576Z" fill="white"/>
</svg>

		</div>
		<ul class="menu_footer">
			<li>
				<a href="/" class="active">Главная</a>
			</li>
			<li>
				<a href="/page/about">О нас</a>
			</li>
			<li>
				<a href="/page/review">Отзывы</a>
			</li>
			<li>
				<a href="/page/document">Документы</a>
			</li>
			<li>
				<a href="/page/catalog">Каталог</a>
			</li>
			<li>
				<a href="/page/contaacts">Контакты</a>
			</li>
		</ul>
	</footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" integrity="sha512-d4KkQohk+HswGs6A1d6Gak6Bb9rMWtxjOa0IiY49Q3TeFd5xAzjWXDCBW9RS7m86FQ4RzM2BdHmdJnnKRYknxw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	let l = $('.actual_catalog_item').length;
	let res = '';
	for(let i=0;i<l;i++){
		if(i==0) res += '<div><a class="click_it n'+(i+1)+'"><img src="assets/img/iconslider_active.png"></a></div>';
		else res += '<div><a class="click_it n'+(i+1)+'"><img src="assets/img/iconslider.png"></a></div>';
	}
	let a1, a2, a3, a4 = false;
	$('.acti_slider').html(res);
	$('.click_it').on('click', function(){
		let d = $(this).attr('class');
		if(d == 'click_it n1'){
			console.log(2);
			$('.n1 img').attr('src', 'assets/img/iconslider_active.png');
			$('.n2 img').attr('src', 'assets/img/iconslider.png');
			$('.n3 img').attr('src', 'assets/img/iconslider.png');
			$('.n4 img').attr('src', 'assets/img/iconslider.png');
			
			$('.actual_catalog_item:nth-child(1)').css('margin-top', '10px').slideDown(1000);
			//$('.actual_catalog_item:nth-child(2)').css('margin-top', '23px');
			//$('.actual_catalog_item:nth-child(3)').css('margin-top', '23px');
			//$('.actual_catalog_item:nth-child(4)').css('margin-top', '23px');
			
		}
		if(d == 'click_it n2'){
			$('.actual_catalog_item:nth-child(1)').css('margin-top', '-365px').slideUp(1000);
			$('.n1 img').attr('src', 'assets/img/iconslider.png');
			$('.n2 img').attr('src', 'assets/img/iconslider_active.png');
			$('.n3 img').attr('src', 'assets/img/iconslider.png');
			$('.n4 img').attr('src', 'assets/img/iconslider.png');

			$('.actual_catalog_item:nth-child(1)').css('margin-top', '-360px');
		}
		if(d == 'click_it n3'){
			$('.actual_catalog_item:nth-child(1)').css('margin-top', '-740px').slideDown(1000);
			$('.n1 img').attr('src', 'assets/img/iconslider.png');
			$('.n2 img').attr('src', 'assets/img/iconslider.png');
			$('.n3 img').attr('src', 'assets/img/iconslider_active.png');
			$('.n4 img').attr('src', 'assets/img/iconslider.png');
		}
		if(d == 'click_it n4'){
			$('.actual_catalog_item:nth-child(1)').css('margin-top', '-1116px').slideUp(1000);
			$('.n1 img').attr('src', 'assets/img/iconslider.png');
			$('.n2 img').attr('src', 'assets/img/iconslider.png');
			$('.n3 img').attr('src', 'assets/img/iconslider.png');
			$('.n4 img').attr('src', 'assets/img/iconslider_active.png');
		}
	});
	let mode_menu = false;
	$('.mobile_click').on('click', function(){
		if(!mode_menu){
			$('.menu_mobile').css('display', 'block');
			mode_menu = true;
		}else{
			$('.menu_mobile').css('display', 'none');
			mode_menu = false;
		}
		
	});
	$('.close_menu').on('click', function(){
		$('.menu_mobile').css('display', 'none');
		mode_menu = false;
	});
	$('.btn_form').on('click', function(e){
		e.preventDefault()
		let name = $('#name_1').val();
		let phone = $('#phone_1').val();
		if(name.length > 1){
			if(phone.length > 1){
				$.ajax({
					url: '/ajaxszayavka',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{ csrf_token() }}',name:name, phone:phone },
					success: function(data){
					console.log(data);
					if(data == 1){
						alert('Ваша заявка успешно создана!');
						document.location.href = '/';
					}	
				}
				});
			}else{
				alert('Поле телефон является пустым!');
			}
		}else{
			alert('Поле имя является пустым!');
		}
	});
	/*$('.active_filter').on('click', function(e){
		
		alert(1);
	});*/
	/*$('.active_filter').on('click', function(){
		alert(1);
		//$(this).removeClass('active_filter');
		//$(this).removeClass("active");

	});*/
	$("#phone_1").mask("+7(999) 999-99-99");
	$('.menu_left a').on('click', function(e){
		let cl = $(this).parent().attr('class');
		if(cl == 'active_filter'){
			$(this).parent().removeClass('active_filter');
		}else{
			$(this).parent().addClass('active_filter');
		}
		let el_1 = $('#v_1.active_filter');
		let el_2 = $('#v_2.active_filter');
		let el_3 = $('#v_3.active_filter');
		let el_4 = $('#v_4.active_filter');
		let el_len_1 = $('#v_1.active_filter').length;
		let el_len_2 = $('#v_2.active_filter').length;
		let el_len_3 = $('#v_3.active_filter').length;
		let el_len_4 = $('#v_4.active_filter').length;
		let res_1 = '';
		let res_2 = '';
		let res_3 = '';
		let res_4 = '';
	
		for(let i=0;i<el_len_1;i++){
			res_1+=(','+$(el_1[i]).text());
		}
		for(let i=0;i<el_len_2;i++){
			res_2+=(','+$(el_2[i]).text());
		}
		for(let i=0;i<el_len_3;i++){
			res_3+=(','+$(el_3[i]).text());
		}
		for(let i=0;i<el_len_4;i++){
			res_4+=(','+$(el_4[i]).text());
		}
		
		$.ajax({
					url: '/ajaxfilter',
					method: 'post',
					dataType: 'html',
					data: {'_token':'{{ csrf_token() }}',res_1:res_1,res_2:res_2,res_3:res_3,res_4:res_4 },
					success: function(data){
					$('.actual_catalog_flex').html(data);
				}
				});
	});
	
</script>

</body>
</html>
	
	
	
	
