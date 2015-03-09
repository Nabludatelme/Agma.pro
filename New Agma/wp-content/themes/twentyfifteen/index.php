<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	

    <section  class="intro black wow fadeInDown animated section2" id="lang" data-wow-duration="2s" data-wow-delay="2s" data-wow-offset="10">
		<div class="container">
			<?php $posts = get_posts("category_name=text_second&orderby=date&order=ASC&numberposts=1&post_status=publish"); ?>
						<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>	
								<div class="row">
									<div class="col-md-12 ">
				<p>
					<?php echo $post->post_title; ?></p>
				</div>
			</div>
			<div class="row">
					<div class="col-sm-10 col-md-offset-1">
						<h2><?php echo $post->post_content; ?></h2>
					</div>
			</div>
							<?php endforeach; ?>
							<?php endif; ?>	
			
			<div class= "row text_center flags_contr">
				<span class="flag-icon flag-icon-gb span1" title="Английский"></span>
				<span class="flag-icon flag-icon-az span1" title="Азербайджанский"></span>
				<span class="flag-icon flag-icon-sa span1" title="Арабский"></span>
				<span class="flag-icon flag-icon-am span1" title="Армянский"></span>
				<span class="flag-icon flag-icon-vn span1" title="Вьетнамский"></span>
				<span class="flag-icon flag-icon-ge span1" title="Грузинский"></span>
				<span class="flag-icon flag-icon-il span1" title="Иврит"></span>
				<span class="flag-icon flag-icon-es span1" title="Испанский"></span>
				<span class="flag-icon flag-icon-it span1" title="Итальянский"></span>
				<span class="flag-icon flag-icon-kz span1" title="Казахский"></span>
				<span class="flag-icon flag-icon-cn span1" title="Китайский"></span>
				<span class="flag-icon flag-icon-kr span1" title="Корейский"></span>
				<span class="flag-icon flag-icon-lv span1" title="Латышский"></span>
				<span class="flag-icon flag-icon-lt span1" title="Литовский"></span>
				<span class="flag-icon flag-icon-de span1" title="Немецкий"></span>
				<span class="flag-icon flag-icon-pt span1" title="Португальский"></span>
				<span class="flag-icon flag-icon-rs span1" title="Сербский"></span>
				<span class="flag-icon flag-icon-tr span1" title="Турецкий"></span>
				<span class="flag-icon flag-icon-ua span0" title="Украинский"></span>
				<span class="flag-icon flag-icon-fr span1" title="Французский"></span>
				<span class="flag-icon flag-icon-in span1" title="Хинди"></span>
				<span class="flag-icon flag-icon-cz span1" title="Чешский"></span>
				<span class="flag-icon flag-icon-ee span1" title="Эстонский"></span>
				<span class="flag-icon flag-icon-jp span1" title="Японский"></span>
				
			</div>
			
			
			
			<div class="row text_center">
					 <?php $posts = get_posts("category_name=on_second_page&orderby=date&order=ASC&numberposts=6&post_status=publish"); ?>
					 <?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>
				
								<?php $text = get_field(href); ?>
								
								<div class="col-sm-2">
									<a href="<?php if($text!="") { echo $text; } ?>" title="<?php echo $post->post_content; ?>">
									<div class="float_left">
										<?php echo "<img align=left src='".(wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), full)[0])."' width=100 height=100>"; ?>
									</div>
									<span><?php echo $post->post_content; ?></span>
									</a>
								</div>
							<?php endforeach; ?>
							<?php endif; ?>	
					
                </div>
		</div>	
    </section>

    <section  class="intro black bg_light wow fadeInDown animated section3" data-wow-duration="2s" data-wow-delay="2s" data-wow-offset="10" id="price" data-wow-offset="10">
		
		<div class="container site_show">
			<h2 >
			Мы разработали 2 понятных тарифа:
			</h2>
			<div class="row">
				<?php $posts = get_posts("category_name=select_calc&orderby=date&order=ASC&numberposts=2&post_status=publish"); ?>
					 <?php if ($posts) : ?>
							<?php $counter = false;?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>									
									
									<div class="col-sm-6 calc_block">
										<div class="text_centers">
											<?php echo "<img align=left src='".(wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), full)[0])."' height=50>"; ?>
										</div>
										
										
										<?php echo $post->post_content; ?>
										<div class="block_down">
											<button class="btn <?php if ($counter==false){ echo "form_4"; $counter=true; }else{echo "form_5";}?>">Рассчитать</button>
										</div>
										
									</div>
							
							<?php endforeach; ?>
							<?php endif; ?>	
		</div>	
		</div>
		<div class="container site_hidden">
			<div class="row">
			<div class="col-sm-10 col-md-offset-1">
					
			
			<select class="translate_lang" >
				<option value="en">Английский</option>
				<option value="es">Испанский</option>
				<option value="fr">Французский</option>
				<option value="de">Немецкий</option>
				<option value="it">Итальянский</option>
				<option value="pr">Португальский</option>
				<option value="sr">Сербский</option>
				<option value="ch">Чешский</option>
				<option value="gr">Грузинский</option>
				<option value="uk">Украинский</option>
				<option value="lt">Латышский</option>
				<option value="lu">Литовский</option>
				<option value="et">Эстонский</option>
				<option value="az">Азербайджанский</option>
				<option value="ar">Армянский</option>
				<option value="kz">Казахский</option>
				<option value="tr">Турецкий</option>
				<option value="hi">Хинди</option>
				<option value="iv">Иврит</option>
				<option value="jp">Японский</option>
				<option value="ci">Китайский</option>
				<option value="kr">Корейский</option>
				<option value="vt">Вьетнамский</option>
				<option value="ab">Арабский</option>
			</select>
			</div>
			<div class="col-sm-10 col-md-offset-1">
				<span class="slider_button slider_button_left active"> С русского</span>
				<span  class="slider_button slider_button_right"> На русский</span>
				<div id="slider" class="col-sm-6"></div>
				
			</div>
			<div class="col-sm-10 col-md-offset-1">
			<select class="translate_type">
				<option value="mar">Маркетинговый</option>
				<option value="mar">Юридический</option>
				<option value="tech">Технический</option>
				<option value="med">Медицинский</option>
				<option value="hud">Художественный</option>
				<option value="mar">Аудио-Видео</option>
			</select>
			</div>
			<div class="col-sm-10 col-md-offset-1">
				<input class="include_form" type="text" class=""  placeholder="Количество страниц">		
			</div>
			<div class="col-sm-10 col-md-offset-1">
				<div class="width_calc">
					<p class="text-center class_left">1 страница = 1800 символов </p>
					<button class="btn form_calc" style="float: right;">Рассчитать</button>	
				</div>
			</div>
			<div class="col-sm-10 col-md-offset-1">
				<p class="text-center result_left form_result"></p>
			</div>
				<button class="btn form_exit">Вернуться к выбору тарифов</button>		
			</div>
			</div>

    </section>

<section  class="intro black wow fadeInDown animated section4" data-wow-duration="2s" data-wow-offset="10" id = "clients">
		<div class="container">

			<div class="row">
				<div class="col-md-12 no_margin_agma">
				<h2>
					Совместно с <a href="http://agma.pro" title="Lenta.ru" >Lenta.ru</a> мы сделали более 50 материалов
					</h2>
				</div>
			</div>
			<div class="row">
					<div class="col-sm-8 col-md-offset-2">
						<p style="text-align: center; margin-bottom: 5%;">Вот 3 наших любимых:</p>
					</div>
			</div>
			<div class="row">
                 <div class="col-md-4 col-sm-4 portfolio-item">
                    <a target="blank" href="http://lenta.ru/articles/2014/11/14/chewingobama/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                             
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/obama.jpg" class="img-responsive" alt="Документ дня: Фишка Обамы">
                    </a>
                    <div class="portfolio-caption">
                      
                        <p class="text-muted">Документ дня: Фишка Обамы</p>
                    </div>
                </div>
				 <div class="col-md-4 col-sm-4 portfolio-item">
                    <a target="blank" href="http://lenta.ru/articles/2014/11/17/chinese/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                               
                            </div>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about/chine.jpg" class="img-responsive" alt="США надо свыкнуться с мыслью, что на первом месте будем мы">
                    </a>
                    <div class="portfolio-caption">
                        <p class="text-muted">США надо свыкнуться с мыслью, что на первом месте будем мы</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 portfolio-item">
                    <a target="blank" href="http://lenta.ru/articles/2014/11/07/europegazprom/" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                              
                            </div>
                        </div>
                         <img src="<?php echo get_template_directory_uri(); ?>/img/about/truba.jpg" class="img-responsive" alt="На другом конце трубы">
                    </a>
                    <div class="portfolio-caption">
                       
                        <p class="text-muted">На другом конце трубы</p>
                    </div>
                </div>
               
              
            </div>
			<div class="row">
					<div class="col-sm-8 col-md-offset-2">
						<h2>Наши специалисты сотрудничали с:</h2>
					</div>
			</div>
			<div class="row">
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/micro.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/mac.jpg" class="img-responsive" alt="">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/bp.jpg" class="img-responsive" alt="" style = "height: 75px;" >
						</div>
					</div>
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/exxon.jpg" class="img-responsive" alt="" style = "height: 150px; margin-top: -30px;">
						</div>
					</div>
						<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/sam.jpg" class="img-responsive" alt="" style = "width: 90%; margin-top: -20px;">
						</div>
					</div>

					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/yok.jpg" class="img-responsive" alt=""  style = "margin-top: 20px;">
						</div>
					</div>
				</div>
					<!--new-->
				<div class="row row_last">
				
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/mas.jpg" class="img-responsive" alt=""  style = "height: 50px;">
						</div>
					</div>
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/del.jpg" class="img-responsive" alt="">
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/fer.jpg" class="img-responsive" alt="" style = "height: 75px;">
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/hit.jpg" class="img-responsive" alt="" >
						</div>
					</div>
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/ind.jpg" class="img-responsive" alt=""  style = "width: 90%; ">
						</div>
					</div>
					
					<div class="col-sm-2">
						<div class="float_left">
							 <img src="<?php echo get_template_directory_uri(); ?>/img/sch.png" class="img-responsive" alt=""  >
						</div>
					</div>
			</div>
			</div>
    </section>
<section  class="intro black bg_light wow fadeInDown animated section5" id = "spec">
	<div class="container">
		<div class="row">
			<h2>Наш небольшой шаг навстречу</h2>
			<div class = "col-sm-8 col-md-offset-2">
				<div>
					<img src = "<?php echo get_template_directory_uri(); ?>/img/present.png" title="Наш подарок" height="300px">
				</div>
				<span class="text-center call_to_action">Пять первых страниц перевода бесплатно</span>
				
			</div>
		</div>	
		<div class="row">
			
		 
		
	<div class="col-sm-12">
	
		<p class="text-center no_margin_bottom">
					<?php $posts = get_posts("category_name=contact_phone&orderby=date&numberposts=1&post_status=publish"); ?>
			<?php if ($posts) : ?>
			<nobr>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			<span class="contacts animation4s hoveropacity06 item_form_right">
            <?php echo $post->post_content; ?> 
			</span>
			<?php endforeach; ?>
			<?php endif; ?>		
			
							
							<?php $posts = get_posts("category_name=contact_mail&orderby=date&numberposts=1&post_status=publish"); ?>
							<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							<span  class="contacts animation4s hoveropacity06 item_form_right" > 
            				<?php echo $post->post_content; ?> 
							<?php endforeach; ?>
								</span>
							</nobr>
							<?php endif; ?>
				</p>

		<h4>Или мы вам перезвоним</h4>
		<div class="col-sm-6 col-md-offset-3">
			<?php echo do_shortcode('[contact-form-7 id="64" title="Заголовок"]'); ?> 
			
			
		
	</div>
</section>



<?php get_footer(); ?>
