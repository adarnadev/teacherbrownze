<?php
/*
Template Name: about
*/
get_header(); ?>
<body class="regbg">
<div class="texture">
		<div id="topcloud">
		</div>

				<div id="pagewrap">
					<?php if(have_posts()) : while( have_posts()) : the_post();?>

					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>


				<?php endwhile;?>
				<?php else: ?>

					<p> No posts here ;) </p>

				<?php endif; ?>

				</div>


	<div id="bot">
		<?php get_template_part(nav,menu); ?> 
		<div id="botcloud">
		</div>
	</div>
	
</div>
<?php get_footer();?>