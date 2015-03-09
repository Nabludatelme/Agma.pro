<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer wow animated fadeInDown" role="contentinfo" data-wow-duration="2s" data-wow-delay="5s" data-wow-offset="10">
		<div class="container">
<div class="row">
<div class="col-md-4 widget">
<div class="widget-body">

	
<?php
$menuParameters = array(
'menu' => 'mainmenu',
	
'container' => false,
'echo' => false,
	'depth' =>2
);


echo strip_tags(wp_nav_menu($menuParameters), '<a> <li> <ul>')?>

	
<p class="text-left">
	ООО «АГМА», 2015
</p>	
	
</div>
</div>
<div class="col-md-4 widget">
	<div class="footer_center">
		<img class = "logo_footer" src="<?php echo get_template_directory_uri(); ?>/images/logo_white.png" width="150" alt="АГМА - Современное агентство переводов с человеческим лицом">
	</div>
</div>
<div class="col-md-4 widget">
<div class="widget-body text-right">
	<?php $posts = get_posts("category_name=contact_phone&orderby=date&numberposts=1&post_status=publish"); ?>
			<?php if ($posts) : ?>
			<nobr>
			<?php foreach ($posts as $post) : setup_postdata ($post); ?>
			<a class="animation4s hoveropacity06 item_form_right" href="tel:<?php echo str_replace( array(' ','-','+','(',')'),'',$post->post_content); ?>" title="Наш телефон">
            <?php echo $post->post_content; ?> 
			</a></nobr><br>
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
	
	
	
	
                <div class="footer_socials">
                    <a href="https://www.facebook.com/nabludatelme" class="footer_fb borderround" title="Мы в Facebook">
                        <span></span>
                    </a>
                    <a href="http://vk.com/nabludatelme" class="footer_vk borderround" title="Мы в ВКонтакте">
                        <span></span>
                    </a>
                    <a href="https://twitter.com/nabludatelme" class="footer_tw borderround" title="Мы в Twiiter">
                        <span></span>
                    </a>
                </div>

</div>
</div>
</div> <!-- /row of widgets -->
</div>
	</footer><!-- .site-footer -->






<?php
					if ( is_front_page() && is_home() ) : ?>
	<div class="footer_button wow fadeInDown animated" data-wow-offset="10">
		<div class="container">
			
			<div class = "button_right">
				<span>Оформить заказ</span>		
			</div>
			
			<div class="order_form">
				<h2>
					Оформление заказа
				</h2>
				<?php echo do_shortcode('[contact-form-7 id="65" title="Форма в футтере"]'); ?> 
			</div>
		</div>
			
	</div>

<?php endif;?>

	
		
		



<?php wp_footer(); ?>

</body>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-58030161-1', 'auto');
  ga('send', 'pageview');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter27755526 = new Ya.Metrika({id:27755526,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });
    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";
    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>

 <!-- jQuery -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>




    <!-- Custom Theme JavaScript -->

	<script>
		
			$(".phone").mask("+7 (999) 999-9999");

		
		
		$("nav .menu-item-has-children").each(function(){
$(this).addClass("dropdown");
$(this).find("a").eq(0).each(function(){
$(this).append('<b class="caret"></b>');

});
});
$("nav .sub-menu").each(function(){
$(this).addClass("dropdown-menu");
});
$("nav .current_page_parent").each(function(){
$(this).addClass("active");
});
$("nav .current_page_item").each(function(){
$(this).addClass("active");
});

	$(".intro").css("height",  $("html").height()+"px");

	$(".navbar.navbar-custom.navbar-fixed-top").fadeIn("300");
			
			var height = 0;
	$(".calc_block").each(function() {
		if ($(this).height() > height) {
			height = $(this).height();
		}
	});
	height = height + 90;
	$(".calc_block").css("min-height", height + "px");
		
		$("#slider").slider({
		value: 0, //Значение, которое будет выставлено слайдеру при загрузке
		min: 0, //Минимально возможное значение на ползунке
		max: 1, //Максимально возможное значение на ползунке
		step: 1, //Шаг, с которым будет двигаться ползунок
		slide: function(event, ui){
			
		}
	});	
		
		
	$("select").chosen({disable_search: true});
		
	</script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
	 <script src="<?php echo get_template_directory_uri(); ?>/js/grayscale.js"></script>





</html>
