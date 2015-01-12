<?php
/*
Template Name: Content
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">                 
     		<div class="u-gridCol9">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--home" id="post-<?php the_ID(); ?>">
						<h4 class="content-titel"><?php the_title(); ?></h4>
						<hr class="hr-titel">
						<div>
							<?php the_content(); ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>

     		</div>
     		
     		<div class="u-gridCol3">
				<?php include_once('side.php'); ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>