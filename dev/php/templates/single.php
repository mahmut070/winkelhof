<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">                 
     		<div class="u-gridCol9">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h4 class="content-titel"><?php the_title(); ?></h4>
						<hr class="hr-titel">
					</article>
				<?php endwhile; endif; ?>


				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<p><?php the_time('d-m-Y'); ?></p>

						<div>
							<?php the_content(); ?>
						</div>
					</article>
					

				<?php endwhile; else: ?>

					<p><?php _('Sorry, no posts matched your criteria.'); ?></p>

				<?php endif; ?>


     		</div>
     		
     		<div class="u-gridCol3">
     			<div class="sidebar-block">
	     			<div class="mail-area">
	     				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.svg" > <br>
	     				<a href="/contact">STEL EEN <br> VRAAG</a>
	     			</div>

	     			<div class="route-area">
	     				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/route.svg" > <br>
	     				<a href="/route">ROUTE</a>
	     			</div>
     			</div>

     			<div class="sidebar-block-middle">
	     			<div class="nieuws-area">
	     				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/nieuws.svg" >
	     			</div>

	     			<div class="nieuws-area-link">
	     				<a href="/nieuws">BEKIJK HET LAATSTE <br> NIEUWS</a>
	     			</div>
     			</div>

     			<div class="sidebar-block-bottom">
     				<div class="fb-like-box" data-href="https://www.facebook.com/dierenkliniekwinkelhof" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
     			</div>

			</div>
		</div>
	</div>


<?php get_footer(); ?>