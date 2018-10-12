<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->



		<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="contato" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

			<h3>Contato</h3>
			<p>
				contato@psicodelia.org
			</p>

			<div class="follow">

							<h3>Acompanhe</h3>
							<a class="facebook" href="https://www.facebook.com/psicodelia.org" target="_blank"><i class="fab fa-facebook-f"></i></a>
							<a class="instagram" href="http://instagram.com/psicodelia_org" target="_blank"><i class="fab fa-instagram"></i></a>
							<a class="twitter" href="https://twitter.com/psicodelia" target="_blank"><i class="fab fa-twitter"></i></a>
							<a class="twitter" href="https://soundcloud.com/psicodelia" target="_blank"><i class="fab fa-soundcloud"></i></a>

			</div>


		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->



<?php wp_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/11anos/js/jquery.countdown.js"></script>

<script type="text/javascript">
(function($) {

	$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 100) {
        $(".main-menu").addClass("darkHeader");
    } else {
        $(".main-menu").removeClass("darkHeader");
    }
});

$( document ).ready(function() {

		/* menu mobile */
		$('ul.menu').click(function(){
			$('#site-navigation').toggleClass('toggled');
		});

		AOS.init({
			easing: 'ease-out-back',
			duration: 1000,
			offset: 200,
			once: true,
			disable: window.innerWidth < 1024,
		});

	 $('#dias').countdown('2018/12/01', function(event) {
	 		 $(this).html(event.strftime('%D'));
	 });
	 $('#horas').countdown('2018/12/01', function(event) {
	 		 $(this).html(event.strftime('%H'));
	 });
	 $('#minutos').countdown('2018/12/01', function(event) {
	 		 $(this).html(event.strftime('%M'));
	 });
	 $('#segundos').countdown('2018/12/01', function(event) {
	 		 $(this).html(event.strftime('%S'));
	 });

	 /* previne compra de ingresso com campo em branco */
	 $('form.cart').submit(function() {
	    if ($.trim($(".custom_nome input").val()) === "" || $.trim($(".custom_rg input").val()) === "") {
	        alert('Por favor preencha os campos "Nome" e "RG"');
	        return false;
	    }
	});

	 /* mensagem no checkout */
	 $('.woocommerce-checkout .entry-content .woocommerce-cart-form').append('<div class="woocommerce-info compre">Gostaria de incluir outro ingresso ao seu pedido? <a href="http://psicodelia.org/11anos/#tickets">Clique aqui para comprar!</a></div>');



});
})(jQuery);

</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125069957-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125069957-1');
</script>


</body>
</html>
