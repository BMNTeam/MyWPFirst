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


			<?php if(have_posts()): query_posts('p=7');
				while (have_posts()):the_post()?>


					<div class="col-md-4 animation-3 personal-last-blog">
						<h3><?php the_title()?></h3>
						<h2 class="personal-header" ><?php echo get_bloginfo('name')?> </h2>
						<?php the_content()?>
						<div class="social-wrap">
							<?endwhile;endif; wp_reset_query();?>
							<ul>
								<?php if(have_posts()): query_posts('cat=3');
									while (have_posts()):the_post()?>

										<li><a href="<?php echo get_post_meta($post->ID,'soc_url',true) ?> "><i class="fa <?php echo get_post_meta($post->ID,'font_awesome',true) ?>	"></i></a></li>
									<?endwhile;endif; wp_reset_query();?>


							</ul>
						</div>
					</div>



		</div>
	</div>
</section>

<section id="resume" class="s-resume ">

	<div class="section-header">
		<h2><?php echo  get_cat_name(4)?></h2>
		<div class="s-descr-wrap">
			<div class="s-descr"><?php echo category_description(4) ?></div>
		</div>
	</div>

	<div class="resume-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 left">
					<h3><?php echo  get_cat_name(5)?></h3>
					<div class="resume-icon"><i class="icon-basic-case"></i></div>

					<?php if(have_posts()): query_posts('cat=5');
						while (have_posts()):the_post()?>
					<div class="resume-item">
						<div class="year"> <?php echo get_post_meta($post->ID,'resume_year',true)?> </div>
						<div class="resume-description"><?php echo get_post_meta($post->ID,'resume_place',true)?> <strong><?php the_title()?></strong></div>
						<?php the_content()?>
					</div>
						<?endwhile;endif; wp_reset_query();?>
				</div>
				<div class="col-md-6 col-sm-6 right">
					<h3><?php echo  get_cat_name(6)?></h3>
					<div class="resume-icon"><i class="icon-basic-book-pen"></i></div>

					<?php if(have_posts()): query_posts('cat=6');
						while (have_posts()):the_post()?>
							<div class="resume-item">
								<div class="year"> <?php echo get_post_meta($post->ID,'resume_year',true)?> </div>
								<div class="resume-description"><?php echo get_post_meta($post->ID,'resume_place',true)?> <strong><?php the_title()?></strong></div>
								<?php the_content()?>
							</div>
						<?endwhile;endif; wp_reset_query();?>

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
		<h2><?php echo get_cat_name(7)?></h2>
		<div class="s-descr-wrap">
			<div class="s-descr"><?php echo category_description(7);?></div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="filter_div controls">
				<ul>
					<li class="filter active" data-filter="none" >Все работы</li>
					<li class="filter" data-filter=".sites">Сайты</li>
					<li class="filter" data-filter=".identy">Айдентика</li>
					<li class="filter" data-filter=".logos">Логотипы</li>
				</ul>
			</div>
			<div id="portfolio_grid">

				<?php if(have_posts()): query_posts('cat=7');
					while (have_posts()):the_post()?>

				<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio-item <?php
				$tags = wp_get_post_tags($post->ID);
				if($tags){
					foreach($tags as $tag){
						echo ' '.$tag->name;
					};
				};
				?>">
					<?php the_post_thumbnail(array(400,300)); ?>
					<div class="port-item-cont">
						<h3><?php the_title()?></h3>
						<?php the_excerpt()?>
						<a href="#" class="popup-content">Посмотреть</a>
						<div class="hidden">
							<div class="portfolio-description">
								<h3>Заголовок работы</h3>
								<?php the_content()?>
								<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
								echo $large_image_url[0];
								?>" alt="Alt">
							</div>
						</div>
					</div>
				</div>
					<?endwhile;endif; wp_reset_query();?>





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
					<p><?php $options=get_option('sample_theme_options'); echo $options['phonetext'];?></p>
				</div>
				<div class="contact-box">
					<i class="contact-icon icon-basic-webpage-img-txt"></i>
					<h3>Web-сайт: </h3>
					<p><a href="<?php $options=get_option('sample_theme_options'); echo $options['sitetext'];?>"><?php $options=get_option('sample_theme_options'); echo $options['sitetext'];?></a>
						</p>
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

