<div id = "carousel-index" class = "carousel slide" data-ride = "carousel">
	<!-- Indicators -->
	<ol class = "carousel-indicators">
		<li data-target = "#carousel-index" data-slide-to = "0" class = "active"></li>
		<li data-target = "#carousel-index" data-slide-to = "1"></li>
		<li data-target = "#carousel-index" data-slide-to = "2"></li>
	</ol>
	<!-- Wrapper for slides -->
	<div class = "carousel-inner" role = "listbox">
		<div class = "item active">
			<img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/novos-horarios.jpg" alt = "Novos Horários de Funcionamento">
		</div>
		<div class = "item">
			<img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/paobaby.jpg" alt = "Pão Baby">
		</div>
		<div class = "item">
			<a href = "<?php get_site_url(); ?>/lanches/"><img src = "<?php bloginfo('stylesheet_directory');?>/img/_banner/beirutes-lanches.jpg" alt = "Beirutes e Lanches"></a>
		</div>
	</div>
	<!-- Controls -->
	<a class = "left carousel-control" href = "#carousel-index" role = "button" data-slide = "prev">
		<span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
		<span class = "sr-only">Previous</span>
	</a>
	
	<a class = "right carousel-control" href = "#carousel-index" role = "button" data-slide = "next">
		<span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
		<span class = "sr-only">Next</span>
	</a>
</div>