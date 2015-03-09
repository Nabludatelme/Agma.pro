<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Агенство переводов агма">
    <meta property="og:url" content="http://agma.pro" />
    
	<!-- icons -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-152x152.png" />
	
	
	
	
	
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/chosen.jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput-1.2.2.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/chosen.jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/sweet-alert.min.js"></script>
   

	
	


    <title>Агенство переводов агма</title> 
 
	
	 

    <!-- Custom Fonts -->
 
	
	
	
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	    <!-- Custom CSS -->
   <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link href="<?php echo get_template_directory_uri(); ?>/css/chosen.min.css" rel="stylesheet">
	
	<link href="<?php echo get_template_directory_uri(); ?>/flags/css/flag-icon.css" rel="stylesheet">
   <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
	 <link href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/sweet-alert.css" rel="stylesheet">
	
	
	
    <link href="<?php echo get_template_directory_uri(); ?>/css/grayscale.css" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
				<?php
					if ( is_front_page() && is_home() ) : ?>
						<!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top wow animated fadeInDown" role="navigation"   data-wow-delay="2" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll"  href="<?php echo get_home_url(); ?>">
                   	<img src="<?php echo get_template_directory_uri(); ?>/images/logo_white.png" width="150" alt="АГМА - Современное агентство переводов с человеческим лицом">
                </a>
            </div>

      
               
<?php wp_nav_menu(array(
'menu' => 'mainmenu', // название меню, мы его писали в админке, в поле, скриншот которого, на картинке выше.
'container' => 'nav', // контейнер для меню, по умолчанию 'div', в нашем случае указано 'nav', чтобы не создавать контейнер - пишем false.
'container_class' => 'collapse navbar-collapse navbar-center', // класс для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
'container_id' => '', // id для для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
'menu_class' => 'nav navbar-nav', // класс для меню. этот класс добавится к тегу <ul>
'menu_id' => '', // id для меню. этот id добавится к тегу <ul>
)); ?>
				
				<div class="form_right">
			
			<?php $posts = get_posts("category_name=contact_phone&orderby=date&numberposts=1&post_status=publish"); ?>
			<?php if ($posts) : ?>
			<nobr>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			<a class="animation4s hoveropacity06 item_form_right" href="tel:<?php echo str_replace( array(' ','-','+','(',')'),'',$post->post_content); ?>" title="Наш телефон">
            <?php echo $post->post_content; ?> 
			</a></nobr>
			<?php endforeach; ?>
			<?php endif; ?>		
			
			
							
							<?php $posts = get_posts("category_name=contact_mail&orderby=date&numberposts=1&post_status=publish"); ?>
							<?php if ($posts) : ?>
							<nobr>
							
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							
								
							<a  class="animation4s hoveropacity06 item_form_right" href="mailto:<?php echo str_replace( array(''),'',$post->post_content); ?>"> 
            				<?php echo $post->post_content; ?> 
							<?php endforeach; ?>
								</a>
							</nobr>
							<?php endif; ?>

		</div>
               
           
        </div>
        <!-- /.container -->
		
    </nav>

    <!-- Intro Header -->
    <header class="intro  wow fadeInDown animated">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
						 <?php $posts = get_posts("category_name=header_first&orderby=date&order=ASC&numberposts=1&post_status=publish"); ?>
						<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>	
								 <h1 class="brand-heading"><?php echo $post->post_title; ?></h1>
								 <p class="intro-text"><?php echo $post->post_content; ?></p>
							<?php endforeach; ?>
							<?php endif; ?>	
                    </div>
				 </div>
				 <div class="row text_center">
					 <?php $posts = get_posts("category_name=on_first_page&orderby=date&order=ASC&numberposts=6&post_status=publish"); ?>
					<?php if ($posts) : ?>
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>	
								<div class="col-sm-2">
									<div class="float_left">
										<?php echo "<img align=left src='".(wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID ), full)[0])."' width=140 height=140>"; ?>
									</div>
									<span><?php echo $post->post_content; ?></span>
								</div>
							<?php endforeach; ?>
							<?php endif; ?>	
					
                </div>
            </div>
        </div>
    </header>
					<?php else : ?>
	
	
	
	
	<nav class="navbar navbar-custom navbar-fixed-top black_color" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll"  href="<?php echo get_home_url(); ?>">
                   	<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" width="150" alt="АГМА - Современное агентство переводов с человеческим лицом">
                </a>
            </div>

      
               
<?php wp_nav_menu(array(
'menu' => 'mainmenu', // название меню, мы его писали в админке, в поле, скриншот которого, на картинке выше.
'container' => 'nav', // контейнер для меню, по умолчанию 'div', в нашем случае указано 'nav', чтобы не создавать контейнер - пишем false.
'container_class' => 'collapse navbar-collapse navbar-center', // класс для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
'container_id' => '', // id для для контейнера <div> или <nav>, если класс не нужен, ничего не пишем.
'menu_class' => 'nav navbar-nav', // класс для меню. этот класс добавится к тегу <ul>
'menu_id' => '', // id для меню. этот id добавится к тегу <ul>
)); ?>
				
				<div class="form_right">
			
			<?php $posts = get_posts("category_name=contact_phone&orderby=date&numberposts=1&post_status=publish"); ?>
			<?php if ($posts) : ?>
			<nobr>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			<a class="animation4s hoveropacity06 item_form_right" href="tel:<?php echo str_replace( array(' ','-','+','(',')'),'',$post->post_content); ?>" title="Наш телефон">
            <?php echo $post->post_content; ?> 
			</a></nobr>
			<?php endforeach; ?>
			<?php endif; ?>		
			<br>
			
							
							<?php $posts = get_posts("category_name=contact_mail&orderby=date&numberposts=1&post_status=publish"); ?>
							<?php if ($posts) : ?>
							<nobr>
							
							<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							
								
							<a  class="animation4s hoveropacity06 item_form_right" href="mailto:<?php echo str_replace( array(''),'',$post->post_content); ?>"> 
            				<?php echo $post->post_content; ?> 
							<?php endforeach; ?>
								</a>
							</nobr>
							<?php endif; ?>

		</div>
               
           
        </div>
        <!-- /.container -->
		
    </nav>
					<?php endif;
				?>
<body <?php body_class(); ?>>

	

			
	
