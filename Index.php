<?php get_header()?>
<section id="about" class="s-about bg-light">

	<div class="section-header">
		<h2> <?php echo  get_cat_name(2)?> </h2>
		<div class="s-descr-wrap">
			<div class="s-descr"> <?php echo category_description(2)?> </div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<?php if(have_posts()): query_posts('p=4');
			while (have_posts()):the_post()?>



			<div class="col-md-4 col-md-push-4 animation-2">
				<h3>Фото</h3>
				<div class="about-photo">
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="popup" href="
						<?$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
						echo $large_image_url[0];?>"
						 title="<?php the_title_attribute();  ?>">
							<?php the_post_thumbnail(array(220,220)); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>

			<div class="col-md-4 col-md-pull-4 animation-1">
				<h3><?php the_title()?></h3>
				<?php the_content()?>
			</div>
			<?endwhile;endif; wp_reset_query();?>


			<?php if(have_posts()): query_posts('p=4');
				while (have_posts()):the_post()?>
					<?php the_title()?>
					<?php the_content()?>
				<?endwhile;endif; wp_reset_query();?>

			<div class="col-md-4 animation-3 personal-last-blog">
				<h3>Персональная информация</h3>
				<h2 class="personal-header" ><?php echo get_bloginfo('name')?> </h2>
				<ul>
					<li>Профессиональное создание сайтов</li>
					<li>Разрботка дизайна</li>
					<li>HTML верстка</li>
					<li>Посадка на CMS WordPress</li>
					<li>День рождения 11 января 1991 года </li>
					<li>Номер телефона: +7 918 753 1801</li>
					<li>E-mail: <a href="mailto:maksim_bender08@mail.ru">maksim_bender08@mail.ru</a></li>
				</ul>
				<div class="social-wrap">
					<ul>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
						<li><a href="#"><i class="fa fa-github	"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="resume" class="s-resume ">

	<div class="section-header">
		<h2>Резюме</h2>
		<div class="s-descr-wrap">
			<div class="s-descr">Мои знания и достижения</div>
		</div>
	</div>

	<div class="resume-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 left">
					<h3>Работа</h3>
					<div class="resume-icon"><i class="icon-basic-case"></i></div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 right">
					<h3>Учеба</h3>
					<div class="resume-icon"><i class="icon-basic-book-pen"></i></div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
					<div class="resume-item">
						<div class="year">2007-2012</div>
						<div class="resume-description">ООО Лесопторг <strong>Программист</strong></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime adipisci minus veniam odit praesentium, porro nisi, culpa quibusdam unde temporibus quasi repudiandae dolorum ut dolorem!</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

		</div>
	</div>
</section>

<section id="portfolio" class="s-portfolio bg-dark">

	<div class="section-header">
		<h2>Портфолио</h2>
		<div class="s-descr-wrap">
			<div class="s-descr">Мои последние работы</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="filter_div controls">
				<ul>
					<li class="filter active" data-filter="none" >Все работы</li>
					<li class="filter" data-filter=".category-1">Сайты</li>
					<li class="filter" data-filter=".category-2">Айдентика</li>
					<li class="filter" data-filter=".category-3">Логотипы</li>
				</ul>
			</div>
			<div id="portfolio_grid">

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/1.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/1.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/1.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/1.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/2.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/2.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/3.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/3.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/4.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/4.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item category-1">
					<img src="img/portfolio/5.jpg" alt="Alt">
					<div class="port-item-cont">
						<h3>Заголовок работы</h3>
						<p>Описание работы</p>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, dolore nam explicabo dolores ducimus doloremque odit et magnam ratione iure necessitatibus vitae quasi porro ea, perspiciatis dolorem. Totam, dolore, necessitatibus?</p>
								<img src="img/portfolio/5.jpg" alt="Alt">
							</div>
						</div>
					</div>
				</div>




			</div>

		</div>
	</div>
</section>


<section id="contacts" class="s-contacts bg-light">

	<div class="section-header">
		<h2>Контакты</h2>
		<div class="s-descr-wrap">
			<div class="s-descr">Оставьте ваши сообщения</div>
		</div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-6">
				<div class="contact-box">
					<i class="contact-icon icon-basic-geolocalize-05"></i>
					<h3>Адрес: </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
				<div class="contact-box">
					<i class="contact-icon icon-basic-smartphone"></i>
					<h3>Телефон: </h3>
					<p>+7 918 753 1801</p>
				</div>
				<div class="contact-box">
					<i class="contact-icon icon-basic-webpage-img-txt"></i>
					<h3>Web-сайт: </h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>
			</div>

			<div class="col-md-6 col-sm-6">
				<form action="" class="main-form">

					<label class="form-group">
						<span class="color_element">*</span> Ваше имя:
						<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" >
						<span class="help-block text-danger"></span>
					</label>

					<label class="form-group">
						<span class="color_element">*</span> Ваш e-mail:
						<input type="email" name="email" placeholder="Ваш e-mail" data-validation-email-message="Введите коректный email">
						<span class="help-block text-danger"></span>
					</label>

					<label class="form-group">
						<span class="color_element">*</span> Ваше сообщение:
						<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели текст сообщения"></textarea>
						<span class="help-block text-danger"></span>
					</label>


					<button>Отправить</button>
				</form>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>

