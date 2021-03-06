<!--header-->
<?php get_header();?>

<!--section with text about-->
<section class="container / about" id="about">
	<div class="row">
		<h1 class="about-h1">Микрокосмос</h1>

		<p>Всегда в вашем распоряжении просторная кухня с бесплатными горячими напитками и печеньем,
			доставка завтраков из дружественного кафе Good Enough, места для работы и отдыха, индивидуальные ящики
			для безопасного хранения вещей с электронными замками, фен, стирально-сушильная машина, утюг.
		</p>
	</div>
	<!--anchor for contacts-->

</section>

<!--lozenge and rooms info-->
<section class="container" id="roominfo">
	<h1 class="roominfo-h1">Наши номера</h1>
	<ul class="room-info-ul">
		<li class="col-md-3">
			<button type="button" class="btn" data-toggle="modal" data-target="#double-box">
				<img class="lozenge" src="<?php echo get_template_directory_uri();?>/img/lozenge/first.jpg" alt="double">

				Двухместный номер
			</button>
		</li>
		<li class="col-md-3">
			<button type="button" class="btn" data-toggle="modal" data-target="#triple-box">
				<img class="lozenge" src="<?php echo get_template_directory_uri();?>/img/lozenge/second.jpg" alt="triple">

				Трехместный номер
			</button>
		</li>
		<li class="col-md-3">
			<button type="button" class="btn" data-toggle="modal" data-target="#dorm-one-box">
				<img class="lozenge" src="<?php echo get_template_directory_uri();?>/img/lozenge/third.jpg" alt="dorm">

				Общие номера для 4 – 8 человек
			</button>
		</li>
		<li class="col-md-3">
			<button type="button" class="btn" data-toggle="modal" data-target="#dorm-double-box">
				<img class="lozenge" src="<?php echo get_template_directory_uri();?>/img/lozenge/fourth.jpg" alt="dorm">

				Двуспальные кровати в общих номерах
			</button>
		</li>
	</ul>

	<!-- Modal double box-->
	<div class="modal fade" id="double-box" tabindex="-1" role="dialog" aria-labelledby="DoubleRoom">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="DoubleRoom">Двухместный номер</h1>
					<div class="link">
						<a href="/reservation.html?room-type=27519" class="btn-reserve"><span>Забронировать</span></a>
					</div>
				</div>
				<div class="modal-body">
					<p>В этом отдельном номере большая двуспальная кровать, ящики и вешалки для хранения вещей, будильник, настольное зеркало. Душевые и туалетные комнаты общие.</p>

					<!--carousel double-->
					<section class="container-fluid / gallery">
						<div class="row">
							<div id="double-slider" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#double-slider" data-slide-to="0" class="active"></li>
									<li data-target="#double-slider" data-slide-to="1"></li>
									<li data-target="#double-slider" data-slide-to="2"></li>
									<li data-target="#double-slider" data-slide-to="3"></li>
									<li data-target="#double-slider" data-slide-to="5"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="../img/room-info/double/double0.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/double/double1.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/double/double2.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/double/double3.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/double/double5.jpg" alt="dorm">
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#double-slider" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Предыдущая</span>
								</a>
								<a class="right carousel-control" href="#double-slider" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Следующая</span>
								</a>
							</div>
						</div>
					</section>
					<!--/carousel double-->
				</div>
			</div>
		</div>
	</div>

	<!-- Modal triple box-->
	<div class="modal fade" id="triple-box" tabindex="-1" role="dialog" aria-labelledby="tripleLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="tripleLabel">Трехместный номер</h1>
					<div class="link">
						<a href="/reservation.html?room-type=27541" class="btn-reserve"><span>Забронировать</span></a>
					</div>
				</div>
				<div class="modal-body">
					<p>В этом отдельном номере одна двуспальная и одна антресольная односпальная кровати. Шторы между кроватями помогут разделить пространство номера и сделать спальные места более уединенными. Также в номере ящики и вешалки для хранения вещей, будильник, зеркало. Душевые и туалетные комнаты общие.</p>

					<!--carousel triple-->
					<section class="container-fluid / gallery">
						<div class="row">
							<div id="triple-slider" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#triple-slider" data-slide-to="0" class="active"></li>
									<li data-target="#triple-slider" data-slide-to="1"></li>
									<li data-target="#triple-slider" data-slide-to="2"></li>
									<li data-target="#triple-slider" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="../img/room-info/triple/triple.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/triple/triple1.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/triple/triple2.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/triple/triple3.jpg" alt="dorm">
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#triple-slider" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Предыдущая</span>
								</a>
								<a class="right carousel-control" href="#triple-slider" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Следующая</span>
								</a>
							</div>
						</div>
					</section>
					<!--/carousel triple-->
				</div>
			</div>
		</div>
	</div>

	<!-- dorm one triple box-->
	<div class="modal fade" id="dorm-one-box" tabindex="-1" role="dialog" aria-labelledby="dormOneLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="dormOneLabel">Места в дорме - односпальная кровать</h1>
					<div class="link">
						<a href="/reservation.html?room-type=27517" class="btn-reserve"><span>Забронировать</span></a>
					</div>
				</div>
				<div class="modal-body">
					<p>Выберите слипбокс в одном из наших дормов – для четырех или восьми человек. Каким бы ни оказался ваш выбор, в вашем слипбоксе всегда будут розетки, освещение, полка для мелочи, штора и индивидуальный ящик с электронным замком для безопасного хранения вещей. При размещении гостей в четырехместные комнаты мы стараемся делить их на мужские и женские. Восьмиместный дорм всегда общий. Путешествуя компанией, вы можете выбрать комнату для 8-ми, 5-ти или 4-х человек.</p>

					<!--carousel dorm-one-->
					<section class="container-fluid / gallery">
						<div class="row">
							<div id="dorm-one-slider" class="carousel / slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#dorm-one-slider" data-slide-to="0" class="active"></li>
									<li data-target="#dorm-one-slider" data-slide-to="1"></li>
									<li data-target="#dorm-one-slider" data-slide-to="2"></li>
									<li data-target="#dorm-one-slider" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="../img/room-info/dorm-one/dorm-one.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-one/dorm-one1.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-one/dorm-one2.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-one/dorm-one3.jpg" alt="dorm">
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#dorm-one-slider" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Предыдущая</span>
								</a>
								<a class="right carousel-control" href="#dorm-one-slider" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Следующая</span>
								</a>
							</div>
						</div>
					</section>
					<!--/carousel dorm-one-->
				</div>
			</div>
		</div>
	</div>

	<!-- dorm double  box-->
	<div class="modal fade" id="dorm-double-box" tabindex="-1" role="dialog" aria-labelledby="dormDouble">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close btn btn-primary" data-dismiss="modal" aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h1 class="modal-title" id="dormDouble">Места в дорме - двуспальная кровать</h1>
					<div class="link">
						<a href="/reservation.html?room-type=27554" class="btn-reserve"><span>Забронировать</span></a>
					</div>
				</div>
				<div class="modal-body">
					<p>В наших общих комнатах для пяти или восьми человек есть двуспальные слипбоксы для тех, кто путешествует в паре. Каким бы ни оказался ваш выбор, у вашей кровати всегда будут розетки, освещение, полка для мелочи, штора и индивидуальный ящик с электронным замком для безопасного хранения вещей.</p>

					<!--carousel dorm double-->
					<section class="container-fluid / gallery">
						<div class="row">
							<div id="dorm-double-slider" class="carousel slide" data-ride="carousel">
								<!-- Indicators -->
								<ol class="carousel-indicators">
									<li data-target="#dorm-double-slider" data-slide-to="0" class="active"></li>
									<li data-target="#dorm-double-slider" data-slide-to="1"></li>
									<li data-target="#dorm-double-slider" data-slide-to="2"></li>
									<li data-target="#dorm-double-slider" data-slide-to="3"></li>
								</ol>

								<!-- Wrapper for slides -->
								<div class="carousel-inner" role="listbox">
									<div class="item active">
										<img src="../img/room-info/dorm-double/dorm-double.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-double/dorm-double1.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-double/dorm-double2.jpg" alt="dorm">
									</div>
									<div class="item">
										<img src="../img/room-info/dorm-double/dorm-double3.jpg" alt="dorm">
									</div>
								</div>

								<!-- Controls -->
								<a class="left carousel-control" href="#dorm-double-slider" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
									<span class="sr-only">Предыдущая</span>
								</a>
								<a class="right carousel-control" href="#dorm-double-slider" role="button"
								   data-slide="next">
									<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
									<span class="sr-only">Следующая</span>
								</a>
							</div>
						</div>
					</section>
					<!--/carousel dorm double-->
				</div>
			</div>
		</div>
	</div>

</section>

<!--contacts-->
<!--yandex map and video route-->
<section class="container / contacts" id="contacts">

	<div class="row / found-us">
		<h1>Спутник на карте</h1>
	</div>

	<div class="row / route">
		<div id="map"></div>

		<h3>Б. Дмитровка 20с1 / подъезд 4 / кв 50 / домофон 50</h3>

		<p>Мы находимся в самом центре Москвы, в  7 минутах ходьбы от станций метро Театральная (Охотный ряд, Площадь революции) и Чеховская (Пушкинская, Тверская). Рядом с нами главные достопримечательности Москвы, а также кафе, бары, кофейни, рестораны и другие модные места московских тусовок.
			Если вы едете к нам метро, выбирайте выход к улице Б. Дмитровка и идите до дома 20, строение 1. Наш подъезд № 4 выходит прямо на улицу Б.Дмитровка.</p>

		<h2>Свяжитесь с нами</h2>
		<div class="mail-phone">
			<a href="tel:+79998504416">+7 (999) 850-44-16</a>
			<a href="mailto:sputnikhostel@gmail.com">sputnikhostel@gmail.com</a>
		</div>
	</div>
</section>
<!--footer-->
<?php get_footer();?>