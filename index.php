<?php
/*
Template name: Ритм — фитнес и полезные привычки
*/
?>
    <!DOCTYPE html>
<html lang="ru" data-wf-page="688c4b33b396a0d6048490aa" data-wf-site="688c4b32b396a0d6048490a4">
	<?php get_template_part("header_block", ""); ?>
	<body class="body">
		<script>
			(function () {
				if (!location.hash && window.scrollY < 80 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
					document.documentElement.classList.add('site-intro-active');
					window.setTimeout(function () { document.documentElement.classList.remove('site-intro-active'); }, 8000);
				}
			}());
		</script>
		<div class="site-preloader" aria-hidden="true">
			<div class="site-preloader-mark">РИТМ</div>
		</div>
<?php if(function_exists('get_field')) { echo get_field('body_code', 'option'); } ?>

		<div data-w-id="ce1e9bea-22d5-0ec1-1cdb-bf2bd1e454cd" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar-component w-nav">
			<div class="navbar-container"><a href="/" aria-current="page" class="navbar-logo-ink w-nav-brand w--current"><span class="brand-wordmark">РИТМ</span></a>
				<nav role="navigation" class="home-01-nav-menu w-nav-menu">
					<div class="home-menu-left"><a href="/" aria-current="page" class="navbar-link w-nav-link w--current">Главная</a><a href="#feature" class="navbar-link w-nav-link">Возможности</a><a href="#Journey" class="navbar-link w-nav-link">Тренировки</a><a href="#process" class="navbar-link w-nav-link">Как это работает</a><a href="#pricing" class="navbar-link w-nav-link">Тарифы</a><a href="#download" class="navbar-link w-nav-link">Скачать</a><a data-w-id="361a74e9-3bb2-f6eb-f119-66ee5c67cb3f" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button nav hide-desktop w-inline-block"><div class="nav-button-text-wrapper"><div style="-webkit-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button-text is-absolute">Попробовать</div><div style="-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button-text is-relative">Попробовать</div></div><div class="nav-button-circle"><div style="-webkit-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="nav-icon is-absolute w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M6.60645 3.39282L2.85645 7.14282" stroke="currentColor" stroke-linecap="round"></path><path d="M3.5708 2.92429C3.5708 2.92429 6.44505 2.68199 6.88123 3.11817C7.31744 3.55435 7.07509 6.4286 7.07509 6.4286" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div style="-webkit-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="nav-icon is-relative w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M6.60645 3.39282L2.85645 7.14282" stroke="currentColor" stroke-linecap="round"></path><path d="M3.5708 2.92429C3.5708 2.92429 6.44505 2.68199 6.88123 3.11817C7.31744 3.55435 7.07509 6.4286 7.07509 6.4286" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></a></div>
				</nav>
				<div class="nav-right-component">
					<div class="home-01-navbar-menu-button w-nav-button">
						<div class="menu-icon-component">
							<div class="menu-icon-line-top"></div>
							<div class="menu-icon-line-middle">
								<div class="menu-icon-line-middle-inner"></div>
							</div>
							<div class="menu-icon-line-bottom"></div>
						</div>
					</div><a data-w-id="ce1e9bea-22d5-0ec1-1cdb-bf2bd1e454e6" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button nav hide-mobile w-inline-block"><div class="nav-button-text-wrapper"><div style="-webkit-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 190%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button-text is-absolute">Попробовать</div><div style="-webkit-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="button-text is-relative">Попробовать</div></div><div class="nav-button-circle"><div style="-webkit-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-150%, 150%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="nav-icon is-absolute w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M6.60645 3.39282L2.85645 7.14282" stroke="currentColor" stroke-linecap="round"></path><path d="M3.5708 2.92429C3.5708 2.92429 6.44505 2.68199 6.88123 3.11817C7.31744 3.55435 7.07509 6.4286 7.07509 6.4286" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div style="-webkit-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="nav-icon is-relative w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 10 10" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M6.60645 3.39282L2.85645 7.14282" stroke="currentColor" stroke-linecap="round"></path><path d="M3.5708 2.92429C3.5708 2.92429 6.44505 2.68199 6.88123 3.11817C7.31744 3.55435 7.07509 6.4286 7.07509 6.4286" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div></a></div>
			</div>
		</div>
						<section id="top" data-w-id="ce30b7c8-fe78-df87-54c0-0220d72b1d28" class="hero-section">
			<div data-w-id="c4b0d414-1781-7d3e-f1d4-e2d2bc7a56a1" class="hero-wrapper">
				<div class="hero-title-wrapper" role="heading" aria-level="1" aria-label="СИЛА ВНУТРИ">
					<div class="hero-heading">
						<span class="hero-text _01" aria-hidden="true">С</span>
						<span class="hero-text _02" aria-hidden="true">И</span>
						<span class="hero-text _03" aria-hidden="true">Л</span>
						<span class="hero-text _04" aria-hidden="true">А</span>
						<span data-w-id="235e04b2-e8c6-5eae-1c16-46202fbb6de2" class="hero-text _05" aria-hidden="true"></span>
					</div>
					<div class="hero-heading-design">
						<span class="hero-text is-highlight _06" aria-hidden="true">В</span>
						<span class="hero-text is-highlight _07" aria-hidden="true">Н</span>
						<span class="hero-text is-highlight _08" aria-hidden="true">У</span>
						<span class="hero-text is-highlight _09" aria-hidden="true">Т</span>
						<span class="hero-text is-highlight _10" aria-hidden="true">Р</span>
						<span class="hero-text is-highlight _11" aria-hidden="true">И</span>
					</div>
				</div>
				<div class="hero-phone-mockup"><img src="<?php echo get_template_directory_uri() ?>/images/new/hand.png" loading="eager" width="426" alt="Рука с телефоном: план тренировок и задачи на день в приложении Ритм" class="hero-mockup"></div>
				<div class="hero-intro"><p><strong>РИТМ</strong> — ваш незаменимый<br>помощник в фитнесе</p><div class="hero-downloads"><a class="primary-button" href="https://play.google.com/store/games?hl=en" target="_blank" aria-label="Скачать для Android"><span class="hero-download-label-full">Скачать для Android</span><span class="hero-download-label-short" aria-hidden="true">Android</span></a><a class="secondary-button" href="https://www.apple.com/app-store/" target="_blank" aria-label="Скачать для iOS"><span class="hero-download-label-full">Скачать для iOS</span><span class="hero-download-label-short" aria-hidden="true">iOS</span></a></div></div>
				<div class="hero-rating"><div class="hero-stars" aria-label="Рейтинг 4,9 из 5">★★★★★</div><p>Рейтинг 4,9/5 на основе<br>отзывов более 1700<br>пользователей.</p></div>
				<div class="hero-shadow-wrapper"></div>
				<div data-w-id="5f779d92-238e-8820-12ca-7715a7658f50" class="hero-highlight">
					<div class="hero-brand-shadow"></div>
				</div>
			</div>
			<div data-w-id="e2361442-e553-d0e2-dd4d-8bb0716e95cb" class="hero-background">
				<div class="hero-bg-line"></div>
				<div class="hero-bg-line _01">
					<div class="bg-small-line-wrapper _01">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line hide-tablet"></div>
				<div class="hero-bg-line _01 hide">
					<div class="bg-small-line-wrapper _6">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line hide-tablet"></div>
				<div class="hero-bg-line">
					<div class="bg-small-line-wrapper _02">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line"></div>
				<div class="hero-bg-line">
					<div class="bg-small-line-wrapper _03">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line hide-tablet"></div>
				<div class="hero-bg-line hide-tablet">
					<div class="bg-small-line-wrapper _03">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line hide-tablet"></div>
				<div class="hero-bg-line hide-tablet">
					<div class="bg-small-line-wrapper _04">
						<div class="bg-small-line"></div>
					</div>
				</div>
				<div class="hero-bg-line"></div>
				<div class="hero-bg-line">
					<div class="bg-small-line-wrapper _05">
						<div class="bg-small-line"></div>
					</div>
				</div>
			</div>
		</section>
		<section data-w-id="f856ffb7-861e-5dd8-6807-92438897ec0b" class="hero-cta-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="hero-cta-wrapper">
					<div class="hero-cta-button-wrapper">
						<p data-w-id="25bbdd73-ad07-9b29-96f8-df89e5a11ea1" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text center">Ритм — твой ритм тренировок, полезные привычки и прогресс, который вдохновляет двигаться дальше.</p>
						<div style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="hero-cta-button-holder"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
						<div data-w-id="17c92d19-2f05-bc2a-84cf-99b9769c3067" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="text-18px bold">Оценка 4,9 из 5 от 5 300+ пользователей</div>
					</div>
				</div>
			</div>
		</section>
		<section class="brand-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper brand">
					<div class="text-18px bold">В одном ритме с твоими целями</div>
					<div data-w-id="07287e37-cb79-f865-ad74-72935a40fd79" class="brand-marquee-section second">
						<div class="marque-wrap-big-oppsite">
							<div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="marque-text-two">
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Движение</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Баланс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Энергия</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Ритм</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Фокус</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Прогресс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Движение</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Баланс</span></div>
							</div>
							<div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="marque-text-two">
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Энергия</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Ритм</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Фокус</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Прогресс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Движение</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Баланс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Энергия</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Ритм</span></div>
							</div>
							<div style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="marque-text-two">
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Фокус</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Прогресс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Движение</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Баланс</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Энергия</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Ритм</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Фокус</span></div>
								<div class="home-brand-wrapper"><span class="marquee ru-marquee-word"><span class="brand-symbol" aria-hidden="true"></span>Прогресс</span></div>
							</div>
							<div class="brand-right-shadow"></div>
							<div class="brand-left-shadow"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="feature" class="feature-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper">
					<div data-w-id="4b55c538-7912-c617-6938-747a0b827290" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);filter:blur(10px);opacity:0" class="feature-header-wrapper">
						<h2 class="feature-header">Всё для твоего прогресса</h2>
						<p class="body-text feature-paragraph">Следи за активностью, находи мотивацию и превращай маленькие шаги в полезные привычки.</p>
					</div>
					<div data-w-id="ccaa3daa-88df-bd5c-6ca9-71ef836fdb16" class="feature-scroll-wrapper">
						<div class="feature-main-block">
							<div id="w-node-_9c2f1919-aaee-c3d8-297b-6188467965c0-048490aa" data-w-id="9c2f1919-aaee-c3d8-297b-6188467965c0" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);filter:blur(10px);opacity:0" class="feature-image-blog hide-mobile">
								<div class="feature-image-inner-blog"><img class="feature-image one feature-screen" src="/images/new/68adbe5dad6ad074716f5f17_Calories20Details-portrait20(1).png" alt="Калории и баланс питания — экран приложения Ритм" loading="lazy"><img class="feature-image two feature-screen" src="/images/new/68adbe5ec8e2e861699b82f1_Steps20Details-portrait20(1).png" alt="Каждый шаг — к цели — экран приложения Ритм" loading="lazy"><img class="feature-image three feature-screen" src="/images/new/68adbe5dfa8c2b86a0250963_Water20Details-portrait20(1).png" alt="Вода в твоём ритме — экран приложения Ритм" loading="lazy"><img class="feature-image four feature-screen" src="/images/new/68adbe5ee391750700f3fd36_Statics-portrait20(1).png" alt="Весь прогресс перед глазами — экран приложения Ритм" loading="lazy">
									<div class="mobile-shadow"></div>
								</div>
							</div>
							<div data-w-id="f9c6689d-8457-d66d-7716-0d04e82e480f" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="feature-content-wrapper">
								<div class="feature-content-holder" id="featureMobileSlides" aria-label="Возможности приложения">
									<div data-w-id="351cbcd0-6769-0e14-1bf2-a89f43c46767" class="feature-content-card _01">
										<div class="mobile-image-wrapper hide-desktop"><img class="mobile-image feature-screen" src="/images/new/68adbe5dad6ad074716f5f17_Calories20Details-portrait20(1).png" alt="Калории и баланс питания — экран приложения Ритм" loading="lazy"></div>
										<div class="feature-content">
											<div class="content-holder">
												<div class="number-wrapper hide">
													<div class="text-16px">01</div>
												</div>
												<h3>Калории и БЖУ</h3>
<p class="body-text">Калории и БЖУ за день — в одном месте.</p>
<ul role="list" class="feature-list"><li>Калории за выбранный день.</li><li>Белки, жиры и углеводы в граммах.</li><li>Баланс питательных веществ.</li><li>Сводка питания за день.</li></ul>
												<p class="body-text feature-mobile-summary">Калории и БЖУ за день — в одном месте.</p>
											</div>
											<div class="button-wrapper hide"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
										</div>
									</div>
									<div data-w-id="382aa218-0ff3-dc84-3a85-0f38075698e7" class="feature-content-card _02">
										<div class="mobile-image-wrapper hide-desktop"><img class="mobile-image feature-screen" src="/images/new/68adbe5ec8e2e861699b82f1_Steps20Details-portrait20(1).png" alt="Каждый шаг — к цели — экран приложения Ритм" loading="lazy"></div>
										<div class="feature-content">
											<div class="content-holder">
												<div class="number-wrapper hide">
													<div class="text-16px">02</div>
												</div>
												<h3>Каждый шаг — к цели</h3>
<p class="body-text">Шаги, дистанция и время движения — под рукой.</p>
<ul role="list" class="feature-list"><li>Шаги за день.</li><li>Время в движении и расстояние.</li><li>Прогресс дневного плана.</li><li>Динамика активности.</li></ul>
												<p class="body-text feature-mobile-summary">Шаги, дистанция и время движения — под рукой.</p>
											</div>
											<div class="button-wrapper"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
										</div>
									</div>
									<div data-w-id="fccb9ad9-bfa9-79e2-56ab-00b7c3bffdef" class="feature-content-card _03">
										<div class="mobile-image-wrapper hide-desktop"><img class="mobile-image feature-screen" src="/images/new/68adbe5dfa8c2b86a0250963_Water20Details-portrait20(1).png" alt="Вода в твоём ритме — экран приложения Ритм" loading="lazy"></div>
										<div class="feature-content">
											<div class="content-holder">
												<div class="number-wrapper hide">
													<div class="text-16px">03</div>
												</div>
												<h3>Вода в твоём ритме</h3>
<p class="body-text">Вода за день и прогресс к цели — на одном экране.</p>
<ul role="list" class="feature-list"><li>Выпитая вода в литрах.</li><li>Твоя дневная цель.</li><li>Наглядный индикатор прогресса.</li><li>Прогресс в течение дня.</li></ul>
												<p class="body-text feature-mobile-summary">Вода за день и прогресс к цели — на одном экране.</p>
											</div>
											<div class="button-wrapper"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
										</div>
									</div>
									<div data-w-id="ef148086-d90e-2d70-f6d8-89a12dc97194" class="feature-content-card _04">
										<div class="mobile-image-wrapper hide-desktop"><img class="mobile-image feature-screen" src="/images/new/68adbe5ee391750700f3fd36_Statics-portrait20(1).png" alt="Весь прогресс перед глазами — экран приложения Ритм" loading="lazy"></div>
										<div class="feature-content">
											<div class="content-holder">
												<div class="number-wrapper hide">
													<div class="text-16px">04</div>
												</div>
												<h3>Весь прогресс перед глазами</h3>
<p class="body-text">Сон, движение и задачи — в одной сводке.</p>
<ul role="list" class="feature-list"><li>Сводка по выбранной дате.</li><li>Калории, расстояние и сон.</li><li>Выполненные задачи.</li><li>Результаты тренировок.</li></ul>
												<p class="body-text feature-mobile-summary">Сон, движение и задачи — в одной сводке.</p>
											</div>
											<div class="button-wrapper"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
										</div>
									</div>
									</div>
								<div class="feature-mobile-controls" aria-label="Листать возможности">
									<button class="feature-mobile-arrow feature-mobile-prev" type="button" aria-label="Предыдущая возможность" disabled><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 12H5m0 0 6 6m-6-6 6-6"/></svg></button>
									<div class="feature-mobile-dots" role="tablist" aria-label="Выбрать возможность">
										<button class="feature-mobile-dot is-active" type="button" role="tab" aria-label="Возможность 1 из 4" aria-selected="true" data-slide-index="0"></button>
										<button class="feature-mobile-dot" type="button" role="tab" aria-label="Возможность 2 из 4" aria-selected="false" data-slide-index="1"></button>
										<button class="feature-mobile-dot" type="button" role="tab" aria-label="Возможность 3 из 4" aria-selected="false" data-slide-index="2"></button>
										<button class="feature-mobile-dot" type="button" role="tab" aria-label="Возможность 4 из 4" aria-selected="false" data-slide-index="3"></button>
									</div>
									<button class="feature-mobile-arrow feature-mobile-next" type="button" aria-label="Следующая возможность"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14m0 0-6-6m6 6-6 6"/></svg></button>
								</div>
								<div class="feature-mobile-downloads" aria-label="Скачать приложение">
									<a href="https://play.google.com/store/games?hl=en" target="_blank" rel="noopener" aria-label="Скачать для Android" class="primary-button feature-mobile-download"><span class="feature-download-full">Скачать для Android</span><span class="feature-download-short" aria-hidden="true">Android</span></a>
									<a href="https://www.apple.com/app-store/" target="_blank" rel="noopener" aria-label="Скачать для iOS" class="secondary-button feature-mobile-download"><span class="feature-download-full">Скачать для iOS</span><span class="feature-download-short" aria-hidden="true">iOS</span></a>
								</div>
								<div class="feature-progress-bar hide">
									<div class="feature-progress"></div>
								</div>
							</div>
							<div class="left-gradient tablet"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="journey-slider-section hide-desktop">
			<div class="w-layout-blockcontainer container journey w-container">
				<div class="section-wrapper">
					<div class="fitjourney-header">
						<h2 data-w-id="bbbbe848-b97c-53b4-4764-b38d64e57022" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-heading">Твой путь, твой темп</h2>
						<p data-w-id="bbbbe848-b97c-53b4-4764-b38d64e57024" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text feature-paragraph">Выбирай занятия по душе, следи за результатами и двигайся к своей цели.</p>
					</div>
					<div data-w-id="ebd41a69-adbb-e57b-d641-ea555f649753" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="slider-journey-holder">
						<div data-delay="4000" data-animation="slide" class="journey-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
							<div class="journey-slider-mask w-slider-mask">
								<div class="journey-slide w-slide">
									<div class="fitjourney-card-wrapper">
										<div data-w-id="357a6ddd-b726-66fb-6d6b-78fa241729a3" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img1.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Силовая тренировка в зале" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Силовые тренировки</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="journey-slide w-slide">
									<div data-w-id="e25902b4-e9be-f4c8-3802-c2a4da387b49" class="fitjourney-card-wrapper">
										<div data-w-id="e25902b4-e9be-f4c8-3802-c2a4da387b4a" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img2.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Спортсмен после кардиотренировки" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Кардио и выносливость</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="journey-slide w-slide">
									<div data-w-id="bad3643c-39ce-0439-0a42-a0452132d0dc" class="fitjourney-card-wrapper">
										<div data-w-id="bad3643c-39ce-0439-0a42-a0452132d0dd" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img3.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Отдых после занятия" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Йога и гибкость</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="journey-slide w-slide">
									<div data-w-id="8bc38561-50ef-d128-c4ff-66ecf6fb2e16" class="fitjourney-card-wrapper">
										<div data-w-id="8bc38561-50ef-d128-c4ff-66ecf6fb2e17" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img4.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Приготовление еды из свежих продуктов" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Осознанное питание</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="journey-slide w-slide">
									<div data-w-id="a844b18c-bfde-dd20-e9bc-1d14d23cea8a" class="fitjourney-card-wrapper">
										<div data-w-id="a844b18c-bfde-dd20-e9bc-1d14d23cea8b" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img5.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Перерыв между упражнениями" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Интервальные тренировки</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="journey-slide w-slide">
									<div data-w-id="ed0dd05e-ff32-4483-b613-4158aff4f19b" class="fitjourney-card-wrapper">
										<div data-w-id="ed0dd05e-ff32-4483-b613-4158aff4f19c" style="background-color:rgb(33,56,48)" class="journey-card-holder">
											<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img6.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Восстановление после тренировки" class="fitjourney-image"></div>
											<div class="fitjourney-content">
												<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Отдых и восстановление</div>
												<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Выбирай комфортную нагрузку и постепенно открывай новые возможности своего тела.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="journey-left-arrow w-slider-arrow-left">
								<div class="left-icon-journey w-embed">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
										<path d="M4.32326 12.5H20.3232" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M9.32314 17.5C9.32314 17.5 4.32324 13.8176 4.32324 12.5C4.32324 11.1824 9.32324 7.5 9.32324 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</div>
							<div class="journey-right-arrow w-slider-arrow-right">
								<div class="right-arrow-icon w-embed">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
										<path d="M20.3232 12.5H4.32324" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M15.3233 17.5C15.3233 17.5 20.3232 13.8176 20.3232 12.5C20.3232 11.1824 15.3232 7.5 15.3232 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</div>
							<div class="journey-slide-nav w-slider-nav w-shadow w-round"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="Journey" class="fitjourney-section hide-tablet">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper">
					<div class="fitjourney-header">
						<h2 data-w-id="64c9c4c7-c2e7-9bb4-46de-fdf7e6ac1412" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-heading">Твой путь, твой темп</h2>
						<p data-w-id="84e8ec09-5df8-6a45-e482-8df9b7489281" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text feature-paragraph">Силовые, кардио, йога и восстановление — выбирай свой ритм.</p>
					</div>
					<div class="fitjourney-holder">
						<div class="w-layout-grid fitjourney-grid">
							<div data-w-id="e9dd0303-98e4-6da9-df86-19092e6057d3" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="2f7f1136-9faa-6070-6823-8c0c090231a0" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img1.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Силовая тренировка в зале" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Силовые тренировки</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Развивай силу и укрепляй мышцы с постепенным ростом нагрузки.</p>
									</div>
								</div>
							</div>
							<div data-w-id="c92fc57e-848e-ccea-c348-233d16503c81" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="c92fc57e-848e-ccea-c348-233d16503c82" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img2.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Спортсмен после кардиотренировки" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Кардио и выносливость</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Тренируй выносливость и заряжайся энергией в движении.</p>
									</div>
								</div>
							</div>
							<div data-w-id="93533f11-2222-4309-2945-91f0cc284dca" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="93533f11-2222-4309-2945-91f0cc284dcb" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img3.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Отдых после занятия" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Йога и гибкость</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Развивай гибкость, находи баланс и освобождайся от напряжения.</p>
									</div>
								</div>
							</div>
							<div data-w-id="3d849c54-db83-3a10-88fe-cd4f03d68402" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="3d849c54-db83-3a10-88fe-cd4f03d68403" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img4.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Приготовление еды из свежих продуктов" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Осознанное питание</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Формируй полезные пищевые привычки без сложных правил.</p>
									</div>
								</div>
							</div>
							<div data-w-id="ec96c968-20c2-a02c-54b4-860505f4d35c" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="ec96c968-20c2-a02c-54b4-860505f4d35d" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img5.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Перерыв между упражнениями" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Интервальные тренировки</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Чередуй активные упражнения и отдых в коротких тренировках.</p>
									</div>
								</div>
							</div>
							<div data-w-id="eec689ed-7adb-f314-1cdd-27e42b08be38" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="fitjourney-card-wrapper">
								<div data-w-id="eec689ed-7adb-f314-1cdd-27e42b08be39" style="background-color:rgb(33,56,48)" class="fitjourney-card-holder">
									<div class="fitjourney-image-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/new/img6.jpg" loading="lazy" width="70" style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" alt="Восстановление после тренировки" class="fitjourney-image"></div>
									<div class="fitjourney-content">
										<div style="color:rgb(220,227,220)" class="text-20px feature-card-heading">Отдых и восстановление</div>
										<p style="color:rgb(184,196,187)" class="body-text feature-card-text">Дай телу восстановиться, а мыслям — переключиться.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="workout-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper">
					<div class="workout-header">
						<h2 data-w-id="67408505-9594-0b7b-8ce1-d9e139e11320" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="workout-heading">Двигаться вперёд легче вместе</h2>
						<p data-w-id="68f4a48e-f9d1-4499-9fd2-ac435fec39b5" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text workout">Присоединяйся к тренировкам, находи свой ритм и занимайся там, где удобно. Твой следующий шаг начинается сегодня.</p>
					</div>
					<div data-w-id="69ce7e62-709e-0731-ab4c-ce18eae4eac1" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="workout-video-holder">
						<div class="workout-video-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68b5dfa87f6028834590ddd0_Fit20Nova20Video.webp" loading="lazy" width="70" style="filter:blur(0px)" alt="Приложение для тренировок в спортзале" data-w-id="4282f6c8-3e67-4e7d-6c6d-dad956bc4408" class="workout-thumbnail"></div><a href="#" class="video-button w-inline-block w-lightbox"><div class="video-button-wrapper"><div class="video-button-wrapper" data-w-id="da64a48e-7775-844f-1ea4-4acad37adbfe" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/688c4b32b396a0d6048490a4/68a5d42389ceee8ba183c7df_Fit Nova Video Button.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-default-duration="0" data-duration="1.334667946972529" data-loading="eager"></div></div><script type="application/json" class="w-json">{"items":[{"url":"https://www.youtube.com/watch?v=Ojiv9Smi4XE&t=3s","originalUrl":"https://www.youtube.com/watch?v=Ojiv9Smi4XE&t=3s","width":940,"height":528,"thumbnailUrl":"https://i.ytimg.com/vi/Ojiv9Smi4XE/hqdefault.jpg","html":"<iframe src=\"https://www.youtube.com/embed/Ojiv9Smi4XE?start=3\" width=\"940\" height=\"528\" title=\"Видео о тренировках\" frameborder=\"0\" allow=\"autoplay; fullscreen\" allowfullscreen></iframe>","type":"video"}],"group":""}</script></a></div>
				</div>
			</div>
		</section>
		<section id="process" class="how-it-works-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper">
					<div class="why-choose-heading">
						<h2 data-w-id="4c84596f-7cef-fa70-e6c4-54d1f1a03eb7" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="why-choose-heading">Твой путь<br>начинается здесь</h2>
						<p data-w-id="7b27e691-4f01-2456-5e6d-8ae223ded80a" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text">Расскажи о себе — умный план поможет выбрать нагрузку и двигаться к цели шаг за шагом.</p>
					</div>
					<div class="how-it-works-holder">
						<div data-current="Tab 1" data-easing="ease" data-duration-in="560" data-duration-out="420" class="how-it-works-tab w-tabs">
							<div data-w-id="3e3d7d9f-d3fb-f9fb-a2ed-e8df60a7b749" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="tab-menue w-tab-menu"><a data-w-tab="Tab 1" class="tab-link _01 w-inline-block w-tab-link w--current"><div class="how-it-work-card _01"><div class="how-it-works-card-header"><div class="how-it-work-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M4.32324 17.6203C4.32324 19.2771 5.66639 20.6203 7.32324 20.6203C7.32324 22.001 8.44253 23.1203 9.82324 23.1203C11.2039 23.1203 12.3232 22.001 12.3232 20.6203C12.3232 22.001 13.4425 23.1202 14.8232 23.1202C16.2039 23.1202 17.3232 22.0009 17.3232 20.6202C18.9801 20.6202 20.3232 19.277 20.3232 17.6202C20.3232 17.0515 20.165 16.5198 19.8902 16.0667C21.2759 15.8016 22.3232 14.5832 22.3232 13.1202C22.3232 11.6571 21.2759 10.4387 19.8902 10.1736C20.165 9.72048 20.3232 9.18878 20.3232 8.62012C20.3232 6.96326 18.9801 5.62012 17.3232 5.62012C17.3232 4.2394 16.2039 3.12012 14.8232 3.12012C13.4425 3.12012 12.3232 4.2395 12.3232 5.62021C12.3232 4.2395 11.2039 3.12021 9.82324 3.12021C8.44253 3.12021 7.32324 4.2395 7.32324 5.62021C5.66639 5.62021 4.32324 6.96336 4.32324 8.62021C4.32324 9.18887 4.48146 9.72058 4.75628 10.1737C3.37051 10.4388 2.32324 11.6572 2.32324 13.1203C2.32324 14.5833 3.37051 15.8017 4.75628 16.0668C4.48146 16.5199 4.32324 17.0516 4.32324 17.6203Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.82324 15.6201L9.66513 10.0945C9.75955 9.81119 10.0246 9.62012 10.3232 9.62012C10.6218 9.62012 10.8869 9.81119 10.9813 10.0945L12.8232 15.6201M15.8232 9.62012V15.6201M8.82324 13.6201H11.8232" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="text-20px heading-white">Твоя отправная точка</div></div><div class="how-it-work-card-paragraph"><p class="body-text">Укажи свои параметры, чтобы подобрать подходящий план тренировок.</p></div></div></a><a data-w-tab="Tab 2" class="tab-link _02 w-inline-block w-tab-link"><div class="how-it-work-card _02"><div class="how-it-works-card-header"><div class="how-it-work-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M4.32324 17.6203C4.32324 19.2771 5.66639 20.6203 7.32324 20.6203C7.32324 22.001 8.44253 23.1203 9.82324 23.1203C11.2039 23.1203 12.3232 22.001 12.3232 20.6203C12.3232 22.001 13.4425 23.1202 14.8232 23.1202C16.2039 23.1202 17.3232 22.0009 17.3232 20.6202C18.9801 20.6202 20.3232 19.277 20.3232 17.6202C20.3232 17.0515 20.165 16.5198 19.8902 16.0667C21.2759 15.8016 22.3232 14.5832 22.3232 13.1202C22.3232 11.6571 21.2759 10.4387 19.8902 10.1736C20.165 9.72048 20.3232 9.18878 20.3232 8.62012C20.3232 6.96326 18.9801 5.62012 17.3232 5.62012C17.3232 4.2394 16.2039 3.12012 14.8232 3.12012C13.4425 3.12012 12.3232 4.2395 12.3232 5.62021C12.3232 4.2395 11.2039 3.12021 9.82324 3.12021C8.44253 3.12021 7.32324 4.2395 7.32324 5.62021C5.66639 5.62021 4.32324 6.96336 4.32324 8.62021C4.32324 9.18887 4.48146 9.72058 4.75628 10.1737C3.37051 10.4388 2.32324 11.6572 2.32324 13.1203C2.32324 14.5833 3.37051 15.8017 4.75628 16.0668C4.48146 16.5199 4.32324 17.0516 4.32324 17.6203Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M7.82324 15.6201L9.66513 10.0945C9.75955 9.81119 10.0246 9.62012 10.3232 9.62012C10.6218 9.62012 10.8869 9.81119 10.9813 10.0945L12.8232 15.6201M15.8232 9.62012V15.6201M8.82324 13.6201H11.8232" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="text-20px heading-white">План под тебя</div></div><div class="how-it-work-card-paragraph"><p class="body-text">Расскажи о себе, чтобы занятия учитывали особенности твоего тела.</p></div></div></a><a data-w-tab="Tab 3" class="tab-link _3 w-inline-block w-tab-link"><div class="how-it-work-card _03"><div class="how-it-works-card-header"><div class="how-it-work-icon w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.5 12.3325C2.5 7.85417 2.5 5.615 3.89124 4.22376C5.28249 2.83252 7.52166 2.83252 12 2.83252C16.4783 2.83252 18.7175 2.83252 20.1088 4.22376C21.5 5.615 21.5 7.85417 21.5 12.3325C21.5 16.8109 21.5 19.05 20.1088 20.4413C18.7175 21.8325 16.4783 21.8325 12 21.8325C7.52166 21.8325 5.28249 21.8325 3.89124 20.4413C2.5 19.05 2.5 16.8109 2.5 12.3325Z" stroke="currentColor" stroke-width="1.5"></path><path d="M2.5 9.33252H21.5" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M7 6.33252H7.00898" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M11 6.33252H11.009" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path><path d="M17 17.3325C17 14.5711 14.7614 12.3325 12 12.3325C9.23858 12.3325 7 14.5711 7 17.3325" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M12.707 15.6255L11.2928 17.0397" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="text-20px heading-white">Выбери свою цель</div></div><div class="how-it-work-card-paragraph"><p class="body-text">Стать сильнее, сбросить вес или больше двигаться — определи, что важно тебе.</p></div></div></a><a data-w-tab="Tab 4" class="tab-link _04 w-inline-block w-tab-link"><div class="how-it-work-card _04"><div class="how-it-works-card-header"><div class="how-it-work-icon w-embed"><svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 12.3325C3 13.9894 6.58172 15.3325 11 15.3325C11.3387 15.3325 11.6724 15.3246 12 15.3093" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M19 5.33252V11.8325M3 5.33252V19.3325C3 20.9894 6.58172 22.3325 11 22.3325C11.3387 22.3325 11.6724 22.3246 12 22.3093" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M11 8.33252C15.4183 8.33252 19 6.98937 19 5.33252C19 3.67567 15.4183 2.33252 11 2.33252C6.58172 2.33252 3 3.67567 3 5.33252C3 6.98937 6.58172 8.33252 11 8.33252Z" stroke="currentColor" stroke-width="1.5"></path><path d="M7 8.33252V10.3325" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M7 15.3325V17.3325" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path><path d="M19.9868 14.3325L20.4861 16.4169L19.6566 15.8986C19.0657 15.4498 18.3313 15.1837 17.5354 15.1837C15.5828 15.1837 14 16.784 14 18.7581C14 20.7322 15.5828 22.3325 17.5354 22.3325C19.2457 22.3325 20.6724 21.1045 21 19.473" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></div><div class="text-20px heading-white">В комфортном ритме</div></div><div class="how-it-work-card-paragraph"><p class="body-text">Укажи возраст и уровень подготовки, чтобы начать с подходящей нагрузки.</p></div></div></a></div>
							<div data-w-id="3e3d7d9f-d3fb-f9fb-a2ed-e8df60a7b786" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="how-it-works-tab-content w-tab-content">
								<div data-w-tab="Tab 1" class="tab-pane w-tab-pane w--tab-active">
									<div class="how-it-works-tab-image"><div class="tab-image ru-phone" role="img" aria-label="Настройка роста в приложении «Ритм»"><div class="app-preview"><div class="app-status"><span>9:41</span><span class="app-island"></span><span>▥ ◒ ▰</span></div><div class="app-topline"><span>‹</span><span>Начнём знакомство</span><span>•••</span></div><div class="app-steps"><i class="active"></i><i class=""></i><i class=""></i><i class=""></i></div><div class="app-title">Какой у тебя рост?</div><p class="app-note">Это поможет подобрать план под твои параметры.</p><div class="app-number">175</div><div class="app-unit" style="text-align:center">сантиметров</div><div class="app-ruler"></div><div class="app-action">Продолжить →</div></div></div></div>
								</div>
								<div data-w-tab="Tab 2" class="tab-pane w-tab-pane">
									<div class="how-it-works-tab-image"><div class="tab-image ru-phone" role="img" aria-label="Личные параметры в приложении «Ритм»"><div class="app-preview"><div class="app-status"><span>9:41</span><span class="app-island"></span><span>▥ ◒ ▰</span></div><div class="app-topline"><span>‹</span><span>Твои особенности</span><span>•••</span></div><div class="app-steps"><i class="active"></i><i class="active"></i><i class=""></i><i class=""></i></div><div class="app-title">План под тебя</div><p class="app-note">Учтём особенности твоего тела при выборе нагрузки.</p><div class="app-choice selected">Мужчина</div><div class="app-choice">Женщина</div><div class="app-choice">Укажу позже</div><div class="app-action">Продолжить →</div></div></div></div>
								</div>
								<div data-w-tab="Tab 3" class="tab-pane w-tab-pane">
									<div class="how-it-works-tab-image"><div class="tab-image ru-phone" role="img" aria-label="Выбор цели в приложении «Ритм»"><div class="app-preview"><div class="app-status"><span>9:41</span><span class="app-island"></span><span>▥ ◒ ▰</span></div><div class="app-topline"><span>‹</span><span>Твоя цель</span><span>•••</span></div><div class="app-steps"><i class="active"></i><i class="active"></i><i class="active"></i><i class=""></i></div><div class="app-title">К чему стремишься?</div><p class="app-note">Выбери то, что сейчас важнее всего.</p><div class="app-choice selected">Стать сильнее</div><div class="app-choice">Сбросить вес</div><div class="app-choice">Больше двигаться</div><div class="app-choice">Поддерживать форму</div><div class="app-action">Продолжить →</div></div></div></div>
								</div>
								<div data-w-tab="Tab 4" class="tab-pane w-tab-pane">
									<div class="how-it-works-tab-image"><div class="tab-image ru-phone" role="img" aria-label="Настройка возраста в приложении «Ритм»"><div class="app-preview"><div class="app-status"><span>9:41</span><span class="app-island"></span><span>▥ ◒ ▰</span></div><div class="app-topline"><span>‹</span><span>Твой ритм</span><span>•••</span></div><div class="app-steps"><i class="active"></i><i class="active"></i><i class="active"></i><i class="active"></i></div><div class="app-title">Сколько тебе лет?</div><p class="app-note">Подберём комфортную нагрузку для начала.</p><div class="app-number">28</div><div class="app-unit" style="text-align:center">лет</div><div class="app-ruler"></div><div class="app-action">Мой план готов →</div></div></div></div>
								</div>
							</div>
						</div>
						<div class="how-it-works-glow"></div>
					</div>
				</div>
			</div>
		</section>
		<section class="testimonial-section">
			<div class="w-layout-blockcontainer container testimonial w-container">
				<div class="section-wrapper testimonial-space">
					<div class="testimonial-heading-wrapper">
						<h2 data-w-id="afd01eb2-c2e9-a50f-a56f-d0e288389941" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="testimonial-heading">Живой опыт</h2>
						<p data-w-id="bb752ece-6047-8de6-a38b-c1f73a2aefde" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="body-text testimonial center">Истории, которые помогают<br>двигаться дальше.</p>
						<div data-w-id="fdcd8887-6d28-4af0-d846-42424a605124" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="ratings-component">
							<div class="avatar-group-component"><img loading="lazy" src="/images/remote/men-32.jpg" alt="Алексей Морозов" class="avatar-group-item"><img loading="lazy" src="/images/remote/women-44.jpg" alt="Мария Волкова" class="avatar-group-item"><img loading="lazy" src="/images/remote/men-12.jpg" alt="Илья Соколов" class="avatar-group-item"><img loading="lazy" src="/images/remote/women-65.jpg" alt="Анна Кузнецова" class="avatar-group-item"></div>
							<div class="ratings-wrapper">
								<div class="hero-star-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="240.5" alt class="hero-star-image">
									<div class="text-20px semi-bold-white">4,9</div>
								</div>
								<div class="body-text">Оценка пользователей приложения</div>
							</div>
						</div>
					</div>
					<div data-w-id="c4d31ede-818a-f302-662d-84988dbcf97c" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="testimonial-holder">
						<div data-delay="4000" data-animation="slide" class="testimonial-slider w-slider" data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
							<div class="mask w-slider-mask">
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
												<div class="text-16px deep-text">С «Ритмом» тренироваться стало проще. Понятный план помогает не терять мотивацию и двигаться дальше!</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/men-32.jpg" loading="lazy" width="70" alt="Алексей Морозов" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Алексей Морозов, 28 лет</div>
														<div class="text-16px">Пользователь приложения</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
												<div class="text-16px deep-text">Раньше я часто пропускал занятия. Теперь есть план на день, и найти время для тренировки гораздо легче.</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/women-44.jpg" loading="lazy" width="70" alt="Мария Волкова" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Мария Волкова, 31 год</div>
														<div class="text-16px deep-text">Пользователь приложения</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
												<div class="text-16px deep-text">Мне нравится видеть свой прогресс. Даже небольшие результаты дают желание продолжать.</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/men-12.jpg" loading="lazy" width="70" alt="Илья Соколов" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Илья Соколов, 26 лет</div>
														<div class="text-16px deep-text">Пользователь приложения</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
																<div class="text-16px deep-text">Наконец-то нашёл удобный ритм — тренировки, прогулки и отдых без ощущения постоянной гонки.</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/women-65.jpg" loading="lazy" width="70" alt="Анна Кузнецова" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Анна Кузнецова, 29 лет</div>
														<div class="text-16px deep-text">Пользователь приложения</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
												<div class="text-16px deep-text">Всё нужное в одном месте. Открываю приложение и сразу понимаю, на чём сосредоточиться сегодня.</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/women-49.jpg" loading="lazy" width="70" alt="Ольга Лебедева" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Ольга Лебедева, 34 года</div>
														<div class="text-16px deep-text">Анова Флоу</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="slide w-slide">
									<div class="testimonial-card-wrapper">
										<div class="testimonial-card">
											<div class="testimonail-icon-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/68a7718c86f196517bb3dffa_quotation20120(traced).webp" loading="lazy" width="70" alt class="testimonial-icon"></div>
											<div class="testimonial-text">
												<div class="text-16px deep-text">Начал с небольших целей и постепенно втянулся. Теперь движение — привычная часть моего дня.</div>
											</div>
											<div class="testimonial-client-wrapper"><img src="<?php echo get_template_directory_uri() ?>/images/688e3ef40a5cc11c64f40490_Star20ratings.png" loading="lazy" width="70" alt class="testimonial-star">
																								<div class="testimonial-client-holder"><img src="/images/remote/men-45.jpg" loading="lazy" width="70" alt="Дмитрий Орлов" class="testimonial-client-image">
													<div class="client-name">
																								<div class="text-20px is-highlight">Дмитрий Орлов, 30 лет</div>
														<div class="text-16px deep-text">Пользователь приложения</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="left-arrow w-slider-arrow-left">
								<div class="left-icon w-embed">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
										<path d="M4.32326 12.5H20.3232" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M9.32314 17.5C9.32314 17.5 4.32324 13.8176 4.32324 12.5C4.32324 11.1824 9.32324 7.5 9.32324 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</div>
							<div class="right-arrow w-slider-arrow-right">
								<div class="right-arrow-icon w-embed">
									<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 25 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
										<path d="M20.3232 12.5H4.32324" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M15.3233 17.5C15.3233 17.5 20.3232 13.8176 20.3232 12.5C20.3232 11.1824 15.3232 7.5 15.3232 7.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</div>
							</div>
							<div class="slide-nav w-slider-nav w-round"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="download-banner-section" aria-labelledby="download-banner-title">
			<div class="w-layout-blockcontainer container w-container">
				<div class="download-banner">
					<img src="<?php echo get_template_directory_uri() ?>/images/new/banner.jpg" loading="lazy" alt="Спортсмен в движении на фоне светового следа" class="download-banner-image">
					<div class="download-banner-content">
						<div class="download-banner-copy">
							<h2 id="download-banner-title" class="download-banner-title">Скачайте Ритм</h2>
							<p class="download-banner-text">и возьмите своё здоровье<br>под контроль.</p>
						</div>
						<a href="https://play.google.com/store/apps" target="_blank" rel="noopener" class="download-banner-qr" aria-label="Открыть магазин приложений Google Play">
							<img src="<?php echo get_template_directory_uri() ?>/images/new/ritm-store-qr.svg" loading="lazy" width="112" height="112" alt="QR-код для перехода в Google Play">
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="pricing" class="pricing-section" aria-labelledby="pricing-title">
  <div class="w-layout-blockcontainer container w-container">
    <div class="section-wrapper">
      <div class="pricing-header-wrapper">
        <h2 id="pricing-title" class="pricing-heading">Выбери свой уровень</h2>
        <p class="body-text pricing">Начни с базы. Премиум — персональный план и больше статистики.</p>
      </div>
      <div class="pricing-holder">
        <div data-current="Tab 1" data-easing="ease" data-duration-in="0" data-duration-out="0" class="pricing-component w-tabs">
          <div class="pricing-tabs-menu w-tab-menu" aria-label="Период подписки">
            <a data-w-tab="Tab 1" class="pricing-tab-link w-inline-block w-tab-link w--current"><div>На месяц</div></a>
            <a data-w-tab="Tab 2" class="pricing-tab-link w-inline-block w-tab-link"><div>На год</div></a>
          </div>
          <div class="pricing-tab-content w-tab-content">
            <div data-w-tab="Tab 1" class="pricing-tab-pane w-tab-pane w--tab-active">
              <div class="pricing-plans">
<article class="plan-card" aria-labelledby="plan-monthly-0">
  <div class="plan-heading">
    <div class="plan-title-row">
      <h3 id="plan-monthly-0" class="plan-name">Базовый</h3>
      
    </div>
    <p class="body-text plan-description">Всё, чтобы сделать движение привычкой.</p>
  </div>
  <div class="plan-price"><span class="plan-amount">490&nbsp;<span class="plan-currency">₽</span></span><span class="plan-period">/ мес.</span></div>
  <ul class="plan-features" role="list">
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Библиотека тренировок в приложении</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Трекеры активности и полезных привычек</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Занятия для разного уровня подготовки</span></li>
  </ul>
  <a class="plan-button" href="https://play.google.com/store/games?hl=en" target="_blank" rel="noopener" aria-label="Выбрать Базовый — на месяц">Выбрать план</a>
</article>
<article class="plan-card plan-card-premium" aria-labelledby="plan-monthly-1">
  <div class="plan-heading">
    <div class="plan-title-row">
      <h3 id="plan-monthly-1" class="plan-name">Премиум</h3>
      <span class="plan-badge">Больше возможностей</span>
    </div>
    <p class="body-text plan-description">Персональный подход к твоим целям.</p>
  </div>
  <div class="plan-price"><span class="plan-amount">990&nbsp;<span class="plan-currency">₽</span></span><span class="plan-period">/ мес.</span></div>
  <ul class="plan-features" role="list">
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Персональный план тренировок</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Подробная статистика прогресса</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Ежедневные задания под твои цели</span></li>
  </ul>
  <a class="plan-button plan-button-primary" href="https://play.google.com/store/games?hl=en" target="_blank" rel="noopener" aria-label="Выбрать Премиум — на месяц">Выбрать план</a>
</article>
              </div>
            </div>
            <div data-w-tab="Tab 2" class="pricing-tab-pane w-tab-pane">
              <div class="pricing-plans">
<article class="plan-card" aria-labelledby="plan-yearly-0">
  <div class="plan-heading">
    <div class="plan-title-row">
      <h3 id="plan-yearly-0" class="plan-name">Базовый</h3>
      
    </div>
    <p class="body-text plan-description">Всё, чтобы сделать движение привычкой.</p>
  </div>
  <div class="plan-price"><span class="plan-amount">3&nbsp;990&nbsp;<span class="plan-currency">₽</span></span><span class="plan-period">/ год</span></div>
  <ul class="plan-features" role="list">
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Библиотека тренировок в приложении</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Трекеры активности и полезных привычек</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Занятия для разного уровня подготовки</span></li>
  </ul>
  <a class="plan-button" href="https://play.google.com/store/games?hl=en" target="_blank" rel="noopener" aria-label="Выбрать Базовый — на год">Выбрать план</a>
</article>
<article class="plan-card plan-card-premium" aria-labelledby="plan-yearly-1">
  <div class="plan-heading">
    <div class="plan-title-row">
      <h3 id="plan-yearly-1" class="plan-name">Премиум</h3>
      <span class="plan-badge">Больше возможностей</span>
    </div>
    <p class="body-text plan-description">Персональный подход к твоим целям.</p>
  </div>
  <div class="plan-price"><span class="plan-amount">7&nbsp;990&nbsp;<span class="plan-currency">₽</span></span><span class="plan-period">/ год</span></div>
  <ul class="plan-features" role="list">
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Персональный план тренировок</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Подробная статистика прогресса</span></li>
    <li><svg class="plan-check" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="m5 10 3.2 3.2L15 6.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>Ежедневные задания под твои цели</span></li>
  </ul>
  <a class="plan-button plan-button-primary" href="https://play.google.com/store/games?hl=en" target="_blank" rel="noopener" aria-label="Выбрать Премиум — на год">Выбрать план</a>
</article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
		<section id="faq" class="faq-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="faq-wrapper">
					<div class="w-layout-grid faq-grid">
						<div id="w-node-_3e04e7dc-1891-40bd-22ac-ad73fa2b36c8-048490aa" data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36c8" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="faq-header">
						<h2>Вопросы? Есть ответы</h2>
							<p class="body-text faq">Всё, что нужно знать перед первым шагом.</p>
						</div>
						<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36cd" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="faq-list">
							<div class="w-layout-grid faq-list-grid">
								<div class="faq-card">
									<div class="faq-accordion">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36d1" class="faq-question">
											<div class="faq-answer-heading">
												<div class="faq-icon-wrap">
													<div class="faq-icon w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
															<g clip-path="url(#clip0_641_738)">
																<path d="M20.3267 10.6592C22.161 11.9578 23.3334 14.0966 23.3335 16.4531C23.3335 17.7304 22.9936 18.9716 22.3481 20.0615L22.2036 20.3057L22.2788 20.5781L23.0093 23.2207L20.3667 22.4902L20.0942 22.415L19.8501 22.5596C18.7602 23.205 17.519 23.5449 16.2417 23.5449C13.8852 23.5448 11.7464 22.3724 10.4478 20.5381C15.6204 19.9472 19.7357 15.8319 20.3267 10.6592Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
																<path d="M9.16406 0.87793C13.849 0.87793 17.6611 4.69003 17.6611 9.375C17.6611 14.06 13.849 17.8721 9.16406 17.8721C7.73154 17.8721 6.33561 17.5153 5.0918 16.835L4.8457 16.6943L4.60156 16.5498L4.32812 16.626L0.989258 17.5488L1.91309 14.2109L1.98926 13.9375L1.84473 13.6934C1.07342 12.3889 0.666992 10.9029 0.666992 9.375C0.666992 4.69003 4.47909 0.87793 9.16406 0.87793ZM7.79395 14.9873H10.5342V12.2471H7.79395V14.9873ZM9.16406 3.7627C7.24497 3.7627 5.68457 5.32309 5.68457 7.24219V7.90918H8.4248V7.24219C8.4248 6.83493 8.7568 6.50293 9.16406 6.50293C9.57132 6.50293 9.90332 6.83493 9.90332 7.24219C9.90332 7.42763 9.83945 7.59651 9.71777 7.73242L9.66211 7.78809L8.01074 9.2998L7.79395 9.49805V12.1748H10.5342V10.7041L11.5117 9.80957C12.2311 9.15157 12.6436 8.21653 12.6436 7.24219C12.6436 5.32309 11.0832 3.7627 9.16406 3.7627Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
															</g>
															<defs>
																<clippath id="clip0_641_738">
																	<rect width="24" height="24" fill="currentColor" transform="translate(0 0.210938)"></rect>
																</clippath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="text-24px">Что такое Ритм?</div>
											</div>
											<div class="faq-icon-wrapper">
												<div class="accordion-icon-component-2">
													<div class="accordion-icon-horizontal-line-2"></div>
													<div class="accordion-icon-vertical-line"></div>
												</div>
											</div>
										</div>
										<div style="width:100%;height:0px" class="faq-answer">
											<div class="max-width-large-3">
												<div class="body-text">Ритм — приложение для тренировок и полезных привычек. Оно объединяет персональные планы, трекеры активности и небольшие ежедневные задания, чтобы помогать тебе двигаться к своей цели.</div>
											</div>
											<div class="space-medium-2"></div>
										</div>
									</div>
									<div class="faq-initial-divider">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36e1" style="width:0%" class="faq-gradient-05"></div>
									</div>
								</div>
								<div class="faq-card">
									<div class="faq-accordion">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36e4" class="faq-question">
											<div class="faq-answer-heading">
												<div class="faq-icon-wrap">
													<div class="faq-icon w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
															<g clip-path="url(#clip0_641_738)">
																<path d="M20.3267 10.6592C22.161 11.9578 23.3334 14.0966 23.3335 16.4531C23.3335 17.7304 22.9936 18.9716 22.3481 20.0615L22.2036 20.3057L22.2788 20.5781L23.0093 23.2207L20.3667 22.4902L20.0942 22.415L19.8501 22.5596C18.7602 23.205 17.519 23.5449 16.2417 23.5449C13.8852 23.5448 11.7464 22.3724 10.4478 20.5381C15.6204 19.9472 19.7357 15.8319 20.3267 10.6592Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
																<path d="M9.16406 0.87793C13.849 0.87793 17.6611 4.69003 17.6611 9.375C17.6611 14.06 13.849 17.8721 9.16406 17.8721C7.73154 17.8721 6.33561 17.5153 5.0918 16.835L4.8457 16.6943L4.60156 16.5498L4.32812 16.626L0.989258 17.5488L1.91309 14.2109L1.98926 13.9375L1.84473 13.6934C1.07342 12.3889 0.666992 10.9029 0.666992 9.375C0.666992 4.69003 4.47909 0.87793 9.16406 0.87793ZM7.79395 14.9873H10.5342V12.2471H7.79395V14.9873ZM9.16406 3.7627C7.24497 3.7627 5.68457 5.32309 5.68457 7.24219V7.90918H8.4248V7.24219C8.4248 6.83493 8.7568 6.50293 9.16406 6.50293C9.57132 6.50293 9.90332 6.83493 9.90332 7.24219C9.90332 7.42763 9.83945 7.59651 9.71777 7.73242L9.66211 7.78809L8.01074 9.2998L7.79395 9.49805V12.1748H10.5342V10.7041L11.5117 9.80957C12.2311 9.15157 12.6436 8.21653 12.6436 7.24219C12.6436 5.32309 11.0832 3.7627 9.16406 3.7627Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
															</g>
															<defs>
																<clippath id="clip0_641_738">
																	<rect width="24" height="24" fill="currentColor" transform="translate(0 0.210938)"></rect>
																</clippath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="text-24px">Как выбрать подходящий тариф?</div>
											</div>
											<div class="faq-icon-wrapper">
												<div class="accordion-icon-component-2">
													<div class="accordion-icon-horizontal-line-2"></div>
													<div class="accordion-icon-vertical-line"></div>
												</div>
											</div>
										</div>
										<div style="width:100%;height:0px" class="faq-answer">
											<div class="max-width-large-3">
												<div class="body-text">Базовый тариф подойдёт для регулярных тренировок и отслеживания привычек. Премиум добавляет персональные планы и более подробную статистику. Сравни возможности в разделе «Тарифы».</div>
											</div>
											<div class="space-medium-2"></div>
										</div>
									</div>
									<div class="faq-initial-divider">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36f4" style="width:0%" class="faq-gradient-05"></div>
									</div>
								</div>
								<div class="faq-card">
									<div class="faq-accordion">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b36f7" class="faq-question">
											<div class="faq-answer-heading">
												<div class="faq-icon-wrap">
													<div class="faq-icon w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
															<g clip-path="url(#clip0_641_738)">
																<path d="M20.3267 10.6592C22.161 11.9578 23.3334 14.0966 23.3335 16.4531C23.3335 17.7304 22.9936 18.9716 22.3481 20.0615L22.2036 20.3057L22.2788 20.5781L23.0093 23.2207L20.3667 22.4902L20.0942 22.415L19.8501 22.5596C18.7602 23.205 17.519 23.5449 16.2417 23.5449C13.8852 23.5448 11.7464 22.3724 10.4478 20.5381C15.6204 19.9472 19.7357 15.8319 20.3267 10.6592Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
																<path d="M9.16406 0.87793C13.849 0.87793 17.6611 4.69003 17.6611 9.375C17.6611 14.06 13.849 17.8721 9.16406 17.8721C7.73154 17.8721 6.33561 17.5153 5.0918 16.835L4.8457 16.6943L4.60156 16.5498L4.32812 16.626L0.989258 17.5488L1.91309 14.2109L1.98926 13.9375L1.84473 13.6934C1.07342 12.3889 0.666992 10.9029 0.666992 9.375C0.666992 4.69003 4.47909 0.87793 9.16406 0.87793ZM7.79395 14.9873H10.5342V12.2471H7.79395V14.9873ZM9.16406 3.7627C7.24497 3.7627 5.68457 5.32309 5.68457 7.24219V7.90918H8.4248V7.24219C8.4248 6.83493 8.7568 6.50293 9.16406 6.50293C9.57132 6.50293 9.90332 6.83493 9.90332 7.24219C9.90332 7.42763 9.83945 7.59651 9.71777 7.73242L9.66211 7.78809L8.01074 9.2998L7.79395 9.49805V12.1748H10.5342V10.7041L11.5117 9.80957C12.2311 9.15157 12.6436 8.21653 12.6436 7.24219C12.6436 5.32309 11.0832 3.7627 9.16406 3.7627Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
															</g>
															<defs>
																<clippath id="clip0_641_738">
																	<rect width="24" height="24" fill="currentColor" transform="translate(0 0.210938)"></rect>
																</clippath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="text-24px"> Что входит в Премиум?</div>
											</div>
											<div class="faq-icon-wrapper">
												<div class="accordion-icon-component-2">
													<div class="accordion-icon-horizontal-line-2"></div>
													<div class="accordion-icon-vertical-line"></div>
												</div>
											</div>
										</div>
										<div style="width:100%;height:0px" class="faq-answer">
											<div class="max-width-large-3">
												<div class="body-text">Персональные планы тренировок, подробная статистика прогресса и ежедневные задания под твои цели — вместе со всеми возможностями базового тарифа.</div>
											</div>
											<div class="space-medium-2"></div>
										</div>
									</div>
									<div class="faq-initial-divider">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b3707" style="width:0%" class="faq-gradient-05"></div>
									</div>
								</div>
								<div class="faq-card">
									<div class="faq-accordion">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b370a" class="faq-question">
											<div class="faq-answer-heading">
												<div class="faq-icon-wrap">
													<div class="faq-icon w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
															<g clip-path="url(#clip0_641_738)">
																<path d="M20.3267 10.6592C22.161 11.9578 23.3334 14.0966 23.3335 16.4531C23.3335 17.7304 22.9936 18.9716 22.3481 20.0615L22.2036 20.3057L22.2788 20.5781L23.0093 23.2207L20.3667 22.4902L20.0942 22.415L19.8501 22.5596C18.7602 23.205 17.519 23.5449 16.2417 23.5449C13.8852 23.5448 11.7464 22.3724 10.4478 20.5381C15.6204 19.9472 19.7357 15.8319 20.3267 10.6592Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
																<path d="M9.16406 0.87793C13.849 0.87793 17.6611 4.69003 17.6611 9.375C17.6611 14.06 13.849 17.8721 9.16406 17.8721C7.73154 17.8721 6.33561 17.5153 5.0918 16.835L4.8457 16.6943L4.60156 16.5498L4.32812 16.626L0.989258 17.5488L1.91309 14.2109L1.98926 13.9375L1.84473 13.6934C1.07342 12.3889 0.666992 10.9029 0.666992 9.375C0.666992 4.69003 4.47909 0.87793 9.16406 0.87793ZM7.79395 14.9873H10.5342V12.2471H7.79395V14.9873ZM9.16406 3.7627C7.24497 3.7627 5.68457 5.32309 5.68457 7.24219V7.90918H8.4248V7.24219C8.4248 6.83493 8.7568 6.50293 9.16406 6.50293C9.57132 6.50293 9.90332 6.83493 9.90332 7.24219C9.90332 7.42763 9.83945 7.59651 9.71777 7.73242L9.66211 7.78809L8.01074 9.2998L7.79395 9.49805V12.1748H10.5342V10.7041L11.5117 9.80957C12.2311 9.15157 12.6436 8.21653 12.6436 7.24219C12.6436 5.32309 11.0832 3.7627 9.16406 3.7627Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
															</g>
															<defs>
																<clippath id="clip0_641_738">
																	<rect width="24" height="24" fill="currentColor" transform="translate(0 0.210938)"></rect>
																</clippath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="text-24px"> Можно отменить подписку?</div>
											</div>
											<div class="faq-icon-wrapper">
												<div class="accordion-icon-component-2">
													<div class="accordion-icon-horizontal-line-2"></div>
													<div class="accordion-icon-vertical-line"></div>
												</div>
											</div>
										</div>
										<div style="width:100%;height:0px" class="faq-answer">
											<div class="max-width-large-3">
												<div class="body-text">Да, подписку можно отменить в любой момент. Доступ сохранится до конца оплаченного периода, после чего автоматическое продление прекратится.</div>
											</div>
											<div class="space-medium-2"></div>
										</div>
									</div>
									<div class="faq-initial-divider">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b371a" style="width:0%" class="faq-gradient-05"></div>
									</div>
								</div>
								<div class="faq-card">
									<div class="faq-accordion">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b371d" class="faq-question">
											<div class="faq-answer-heading">
												<div class="faq-icon-wrap">
													<div class="faq-icon w-embed">
														<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 24 25" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img">
															<g clip-path="url(#clip0_641_738)">
																<path d="M20.3267 10.6592C22.161 11.9578 23.3334 14.0966 23.3335 16.4531C23.3335 17.7304 22.9936 18.9716 22.3481 20.0615L22.2036 20.3057L22.2788 20.5781L23.0093 23.2207L20.3667 22.4902L20.0942 22.415L19.8501 22.5596C18.7602 23.205 17.519 23.5449 16.2417 23.5449C13.8852 23.5448 11.7464 22.3724 10.4478 20.5381C15.6204 19.9472 19.7357 15.8319 20.3267 10.6592Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
																<path d="M9.16406 0.87793C13.849 0.87793 17.6611 4.69003 17.6611 9.375C17.6611 14.06 13.849 17.8721 9.16406 17.8721C7.73154 17.8721 6.33561 17.5153 5.0918 16.835L4.8457 16.6943L4.60156 16.5498L4.32812 16.626L0.989258 17.5488L1.91309 14.2109L1.98926 13.9375L1.84473 13.6934C1.07342 12.3889 0.666992 10.9029 0.666992 9.375C0.666992 4.69003 4.47909 0.87793 9.16406 0.87793ZM7.79395 14.9873H10.5342V12.2471H7.79395V14.9873ZM9.16406 3.7627C7.24497 3.7627 5.68457 5.32309 5.68457 7.24219V7.90918H8.4248V7.24219C8.4248 6.83493 8.7568 6.50293 9.16406 6.50293C9.57132 6.50293 9.90332 6.83493 9.90332 7.24219C9.90332 7.42763 9.83945 7.59651 9.71777 7.73242L9.66211 7.78809L8.01074 9.2998L7.79395 9.49805V12.1748H10.5342V10.7041L11.5117 9.80957C12.2311 9.15157 12.6436 8.21653 12.6436 7.24219C12.6436 5.32309 11.0832 3.7627 9.16406 3.7627Z" fill="currentColor" stroke="currentColor" stroke-width="1.33333"></path>
															</g>
															<defs>
																<clippath id="clip0_641_738">
																	<rect width="24" height="24" fill="currentColor" transform="translate(0 0.210938)"></rect>
																</clippath>
															</defs>
														</svg>
													</div>
												</div>
												<div class="text-24px"> Подойдёт ли приложение новичку?</div>
											</div>
											<div class="faq-icon-wrapper">
												<div class="accordion-icon-component-2">
													<div class="accordion-icon-horizontal-line-2"></div>
													<div class="accordion-icon-vertical-line"></div>
												</div>
											</div>
										</div>
										<div style="width:100%;height:0px" class="faq-answer">
											<div class="max-width-large-3">
												<div class="body-text">Да. Начни с комфортной нагрузки и коротких занятий. Укажи свой уровень подготовки и постепенно усложняй тренировки по мере прогресса.</div>
											</div>
											<div class="space-medium-2"></div>
										</div>
									</div>
									<div class="faq-initial-divider">
										<div data-w-id="3e04e7dc-1891-40bd-22ac-ad73fa2b372d" style="width:0%" class="faq-gradient-05"></div>
										<div class="faq-divider"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="download" data-w-id="4f0530a1-5ede-6b39-0977-de6d8961abe7" class="cta-section">
			<div class="w-layout-blockcontainer container cta w-container">
				<div class="w-layout-grid cta-image">
					<div class="cta-marquee-layer">
						<div class="cta-marquee" role="img" aria-label="РИТМ НАЧНИ СЕГОДНЯ">
							<div class="cta-marquee-track" aria-hidden="true">
								<div class="cta-marquee-group">
									<span class="cta-marquee-copy"><span>РИТМ</span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg><span>НАЧНИ СЕГОДНЯ</span></span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg>
									<span class="cta-marquee-copy"><span>РИТМ</span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg><span>НАЧНИ СЕГОДНЯ</span></span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg>
								</div>
								<div class="cta-marquee-group">
									<span class="cta-marquee-copy"><span>РИТМ</span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg><span>НАЧНИ СЕГОДНЯ</span></span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg>
									<span class="cta-marquee-copy"><span>РИТМ</span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg><span>НАЧНИ СЕГОДНЯ</span></span><svg class="cta-marquee-icon" viewBox="0 0 48 48" aria-hidden="true" focusable="false"><path d="M28.3 2 8.8 26.2h12.6l-2.1 19.8 20-27.1H26.8L28.3 2Z"/></svg>
								</div>
							</div>
						</div>
					</div>
					<div class="cta-phone-group">
						<img src="<?php echo get_template_directory_uri() ?>/images/footer/Frame 2087330845.jpg" loading="lazy" width="225" alt="Тренировка с приложением Ритм" class="cta-first-image">
						<img src="<?php echo get_template_directory_uri() ?>/images/footer/Frame 2087330846.jpg" loading="lazy" width="225" alt="Силовая тренировка с Ритм" class="cta-second-image">
						<img src="<?php echo get_template_directory_uri() ?>/images/footer/Frame 2087330847.jpg" loading="lazy" width="380" alt="Тренировка с канатами в Ритме" class="cta-third-image">
						<div class="mobile-frame"><img src="<?php echo get_template_directory_uri() ?>/images/new/Новая папка/phone footer.png" loading="lazy" width="150" alt="Рамка телефона приложения Ритм" class="mobile-frame-image"><img src="<?php echo get_template_directory_uri() ?>/images/688f6c4395a98c5060a9ac9c_677d097887d0c4d1ed6054b9_mobile-screen-1-no-img.webp" loading="lazy" alt="Экран приложения Ритм" class="mobile-frame-top-content"></div>
					</div>
				</div>
				<div data-w-id="02008507-7512-19fa-caea-0104275222c0" style="-webkit-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 80px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;filter:blur(10px)" class="cta-sectionbutton-holder"><a data-w-id="bd21e43c-f6d6-8288-33fb-190164c74cfc" href="https://play.google.com/store/games?hl=en" target="_blank" class="primary-button w-inline-block"><div class="button-text is-absolute">Для Андроид</div><div class="button-text is-relative">Для Андроид</div></a><a data-w-id="28049f12-43b9-3100-9503-817ed4e8c642" href="https://www.apple.com/app-store/" target="_blank" class="secondary-button w-inline-block"><div class="button-text is-absolute">Для Айфона</div><div class="button-text is-relative">Для Айфона</div></a></div>
			</div>
		</section>
		<section data-w-id="72c3b360-94ef-40d3-9064-4755838b85e4" class="footer-section">
			<div class="w-layout-blockcontainer container w-container">
				<div class="section-wrapper">
					<div class="footer-top-content">
						<div class="footer-logo-wrapper"><a href="/" aria-current="page" class="footer-logo-link w-inline-block w--current"><span class="brand-wordmark">РИТМ</span></a>
							<div class="text-20px">Больше движения. Больше энергии. Больше тебя.</div>
						</div>
						<div class="footer-social-media-wrapper"><a href="https://www.linkedin.com/" target="_blank" class="footer-social-media-link w-inline-block"><div class="footer-icon w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 21 21" fill="none" preserveaspectratio="xMidYMid meet" aria-hidden="true" role="img"><path d="M4.07308 8.8457H3.65641C2.87074 8.8457 2.4779 8.8457 2.23382 9.08978C1.98975 9.33387 1.98975 9.7267 1.98975 10.5124V17.5957C1.98975 18.3814 1.98975 18.7742 2.23382 19.0183C2.4779 19.2624 2.87074 19.2624 3.65641 19.2624H4.07308C4.85875 19.2624 5.25159 19.2624 5.49567 19.0183C5.73975 18.7742 5.73975 18.3814 5.73975 17.5957V10.5124C5.73975 9.7267 5.73975 9.33387 5.49567 9.08978C5.25159 8.8457 4.85875 8.8457 4.07308 8.8457Z" stroke="currentColor" stroke-width="1.5"></path><path d="M5.73975 4.4707C5.73975 5.50624 4.90028 6.3457 3.86475 6.3457C2.82921 6.3457 1.98975 5.50624 1.98975 4.4707C1.98975 3.43517 2.82921 2.5957 3.86475 2.5957C4.90028 2.5957 5.73975 3.43517 5.73975 4.4707Z" stroke="currentColor" stroke-width="1.5"></path><path d="M10.5947 8.8457H9.90641C9.12075 8.8457 8.72791 8.8457 8.48382 9.08978C8.23975 9.33387 8.23975 9.7267 8.23975 10.5124V17.5957C8.23975 18.3814 8.23975 18.7742 8.48382 19.0183C8.72791 19.2624 9.12075 19.2624 9.90641 19.2624H10.3231C11.1087 19.2624 11.5016 19.2624 11.7457 19.0183C11.9897 18.7742 11.9897 18.3814 11.9897 17.5957L11.9898 14.6791C11.9898 13.2985 12.4298 12.1791 13.7297 12.1791C14.3795 12.1791 14.9064 12.7388 14.9064 13.4291V17.1791C14.9064 17.9648 14.9064 18.3576 15.1505 18.6017C15.3945 18.8458 15.7874 18.8458 16.5731 18.8458H16.9887C17.7742 18.8458 18.1669 18.8458 18.411 18.6018C18.6551 18.3578 18.6552 17.965 18.6553 17.1795L18.6565 12.5959C18.6565 10.5249 16.6867 8.8459 14.7371 8.8459C13.6272 8.8459 12.637 9.38995 11.9898 10.2407C11.9897 9.71562 11.9897 9.45312 11.8757 9.2582C11.8035 9.13475 11.7007 9.03198 11.5772 8.95976C11.3823 8.8457 11.1198 8.8457 10.5947 8.8457Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path></svg></div></a><a href="https://www.facebook.com/" target="_blank" class="footer-social-media-link w-inline-block"><div class="footer-icon w-embed"><svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.4746 9.54012C4.6598 9.54012 4.48975 9.70004 4.48975 10.466V11.855C4.48975 12.621 4.6598 12.7809 5.4746 12.7809H7.44429V18.3365C7.44429 19.1025 7.61434 19.2624 8.42914 19.2624H10.3988C11.2137 19.2624 11.3837 19.1025 11.3837 18.3365V12.7809H13.5953C14.2133 12.7809 14.3726 12.668 14.5423 12.1094L14.9644 10.7205C15.2552 9.76353 15.076 9.54012 14.0174 9.54012H11.3837V7.22534C11.3837 6.71396 11.8246 6.2994 12.3685 6.2994H15.1716C15.9863 6.2994 16.1564 6.13953 16.1564 5.37348V3.52163C16.1564 2.75558 15.9863 2.5957 15.1716 2.5957H12.3685C9.64891 2.5957 7.44429 4.66846 7.44429 7.22534V9.54012H5.4746Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path></svg></div></a><a href="https://www.instagram.com/" target="_blank" class="footer-social-media-link w-inline-block"><div class="footer-icon w-embed"><svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.40674 10.9284C2.40674 7.19644 2.40674 5.33046 3.5661 4.17109C4.72548 3.01172 6.59146 3.01172 10.3234 3.01172C14.0553 3.01172 15.9213 3.01172 17.0807 4.17109C18.2401 5.33046 18.2401 7.19644 18.2401 10.9284C18.2401 14.6603 18.2401 16.5263 17.0807 17.6857C15.9213 18.8451 14.0553 18.8451 10.3234 18.8451C6.59146 18.8451 4.72548 18.8451 3.5661 17.6857C2.40674 16.5263 2.40674 14.6603 2.40674 10.9284Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M14.0732 10.9287C14.0732 12.9998 12.3943 14.6787 10.3232 14.6787C8.25218 14.6787 6.57324 12.9998 6.57324 10.9287C6.57324 8.85764 8.25218 7.17871 10.3232 7.17871C12.3943 7.17871 14.0732 8.85764 14.0732 10.9287Z" stroke="currentColor" stroke-width="1.5"></path><path d="M14.9148 6.3457H14.9058" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></a><a href="https://mail.google.com/" target="_blank" class="footer-social-media-link w-inline-block"><div class="footer-icon w-embed"><svg width="21" height="21" viewbox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.98975 5.92871L7.7506 9.19285C9.87441 10.3962 10.7717 10.3962 12.8956 9.19285L18.6564 5.92871" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path><path d="M2.00289 12.1587C2.05736 14.7134 2.0846 15.9906 3.02721 16.9369C3.96981 17.883 5.28169 17.916 7.90544 17.9819C9.5225 18.0225 11.1237 18.0225 12.7407 17.9819C15.3645 17.916 16.6763 17.883 17.619 16.9369C18.5616 15.9906 18.5888 14.7134 18.6432 12.1587C18.6608 11.3373 18.6608 10.5208 18.6432 9.69937C18.5888 7.14475 18.5616 5.86745 17.619 4.92125C16.6763 3.97506 15.3645 3.9421 12.7407 3.87618C11.1237 3.83555 9.5225 3.83555 7.90543 3.87617C5.28169 3.94209 3.96981 3.97505 3.0272 4.92125C2.0846 5.86744 2.05736 7.14475 2.00288 9.69937C1.98536 10.5208 1.98537 11.3373 2.00289 12.1587Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"></path></svg></div></a></div>
					</div>
					<div class="footer-lower-content">
						<div class="footer-middle-wrapper">
							<div class="footer-big-text-wrapper">
								<div class="footer-big-text-holder">
									<div class="footer-big-text">
										<div class="text-120px">РИТМ</div>
									</div><span class="image brand-symbol footer-brand-symbol" aria-hidden="true"></span>
									<div class="footer-big-text">
										<div class="text-120px">РИТМ</div>
									</div>
									<div class="footer-big-text">
										<div class="text-120px">РИТМ</div>
									</div><span class="image brand-symbol footer-brand-symbol" aria-hidden="true"></span></div>
								<div class="footer-left-shadow"></div>
								<div class="footer-right-shadow"></div>
							</div>
							<div class="footer-form-wrapper">
								<div class="text-24px">Вдохновение в твоей почте</div>
								<div class="footer-form-block w-form">
									<form id="email-form" name="email-form" data-name="Подписка на новости" aria-label="Подписка на новости" method="get" class="footer-form" data-wf-page-id="688c4b33b396a0d6048490aa" data-wf-element-id="72c3b360-94ef-40d3-9064-4755838b860b" data-turnstile-sitekey="0x4AAAAAAAQTptj2So4dx43e"><input class="form-input w-node-_72c3b360-94ef-40d3-9064-4755838b860c-838b85e4 w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Твоя электронная почта" aria-label="Электронная почта" autocomplete="email" type="email" id="email" required><input type="submit" data-wait="Отправляем…" class="form-button is-button-small w-button" value="Отправить"></form>
									<div class="success-message w-form-done">
										<div class="text-24px"><span class="is-highlight">Спасибо! </span>Твоя заявка отправлена.</div>
									</div>
									<div class="error-message w-form-fail">
										<div class="text-24px"><span class="is-highlight">Не получилось </span>Не удалось отправить заявку. Попробуй ещё раз.</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer-link-wrapper">
							<a href="/" class="footer-inline-logo">РИТМ</a>
							<div class="footer-copyright-wrapper">
								<div class="footer-copyright-text text-18px tmobile">© 2026 РИТМ. Все права защищены.</div>
							</div>
							<div class="footer-developer-wrapper text-18px tmobile">Разработка — <a href="https://nbashkirev.ru/" target="_blank" rel="noopener noreferrer" class="copyright-link">Николай Башкирев</a></div>
							<a href="#top" class="footer-back-to-top"><span aria-hidden="true">↑</span> Наверх</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
	
<!-- FOOTER CODE --><?php get_template_part("footer_block", ""); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js?ver=1789427232"></script></body>
</html>



