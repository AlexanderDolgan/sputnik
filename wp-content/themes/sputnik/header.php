<!doctype <?ph?>>
<html lang="ru">
<head>
	<meta charset="<?php bloginfo('charset')?>">
	<meta name="viewport" content="width=device-width, initial, scale=1">
	<title><?php bloginfo('title')?></title>

	<?php wp_head(); ?>

</head>
<body <?php body_class();?>>
<div class="wrapper">
	<header class="container-fluid / site-header">

		<?php get_template_part('navigation')?>

		<!--travelline search-->
		<div class="row / tl-search">
			<div class="tl-search-form">
				<div id="tl-search-form"><a href="http://www.travelline.ru/hotel/"></a></div>
			</div>
		</div>

		<!--hero slider-->
		<section class="hero">

			<div class="hero-text">
				<h1 class="hero-h1">Микрокосмос</h1>

				<p class="hero-p">Новое место с идеальным расположением, красивыми интерьерами и комфортным личным
					пространством для каждого гостя.
				</p>
			</div>


			<section class="row / gallery">

				<div id="hero-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#hero-slider" data-slide-to="0" class="active"></li>
						<li data-target="#hero-slider" data-slide-to="1"></li>
						<li data-target="#hero-slider" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="../img/carousel/slide-4.jpg" alt="dorm">
						</div>
						<div class="item">
							<img src="../img/carousel/slide-2.jpg" alt="dorm">
						</div>
						<div class="item">
							<img src="../img/carousel/slide-3.jpg" alt="dorm">
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#hero-slider" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Предыдущая</span>
					</a>
					<a class="right carousel-control" href="#hero-slider" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Следующая</span>
					</a>
				</div>

			</section>
			<!--/carousel gallery-->
		</section>

	</header>