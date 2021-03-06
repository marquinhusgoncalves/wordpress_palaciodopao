<?php get_header(); ?>

	<h1 class = "title">entre em contato com a gente</h1>

	<div class = "clearfix" style = "background-color: white">

		<div class = "box-contact formulario col-xs-12 col-md-6" id = "respond">
			<div><?php echo do_shortcode("[contact-form-7 id='358' title='Formulário de contato 1']"); ?></div>
			<a class = "clearfix" style = "font-size: 1.2em; font-weight: 800; display: table-row" href = "mailto:contato@palaciodopao.com.br">Ou clique aqui e envie um e-mail</a>
		</div>

		<div class = "box-contact col-xs-12 col-md-6">
			<div><img src = "<?php bloginfo('stylesheet_directory');?>/img/pagamento.png"></div>
		</div>
	</div>

	<div id = "map-canvas"></div>

<?php get_footer(); ?>

<script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script src = "<?php bloginfo('stylesheet_directory');?>/js/map.min.js"></script>
<script>
	$('.wpcf7-textarea').attr({ rows: '3' });
	$('.your-name input').attr({ placeholder: 'Seu nome (obrigatório)' });
	$('.your-email input').attr({ placeholder: 'Seu e-mail (obrigatório)' });
	$('.your-tel input').attr({ placeholder: 'Telefone' });
	$('.your-message textarea').attr({ placeholder: 'Sua mensagem' });
</script>