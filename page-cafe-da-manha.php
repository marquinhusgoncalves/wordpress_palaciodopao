<?php get_header(); ?>

<div class = "botao"><a href = "#">lista de produtos</a></div>
<header class = "menulateral clearfix"><?php wp_nav_menu(array('theme_location' => 'extra-menu',));?></header>

<div class = "marcadagua"><?php include('header_produtos.php') ?></div>

<div class = "bg-cardapio">
	<div class = "clearfix produto cardapio">
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_copa/03.jpg" alt = "café da manhã" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_copa/02.jpg" alt = "café da manhã" /></div>
		<div class = "col-lg-6"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_copa/04.jpg" alt = "café da manhã" /></div>
	</div>
</div>

<?php get_footer(); ?>