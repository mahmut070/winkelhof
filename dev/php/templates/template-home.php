<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

	<div class="Slider"> <!-- Dit is de slider in de onderkant header -->
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.png" >
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slider1.png" >
	</div>   <!-- einde slider van de onderkant header -->  


	<div class="welkom-tekst-area">
		<div class="u-gridContainer">
			<h2>Welkom op de site van <span class="blauwe-tekst">Dierenkliniek Winkelhof!</span></h2>

			<p>Van harte welkom op de nieuwe site van Dierenkliniek Winkelhof. Onze kliniek is een goed geoutillieerde praktijk en wij behandelen uitsluitend gezelschaps-dieren. Ons team bestaat uit 4 betrokken dierenartsen en 5 paraveterinaire assistentes. Op de site kunt u informatie vinden over ons team, onderzoek- en 
				behandelingsmogelijkheden, openingstijden, aan diersoort gerelateerde informatie etcetera. Wij werken, met uitzondering van 3 ochtendspreekuren per 
				week, dagelijks op afspraak.
			</p>
		</div>
	</div>


	<!--<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article class="Content Content--home" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			<div>
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		</article>
	<?php endwhile; endif; ?>
	</div>
-->
<?php get_footer(); ?>
