<?php get_header(); ?>
<div id="pagewrap">
	<img src="<?php bloginfo('template_directory'); ?>/img/ahdigitallogo.png" />
	<div id="blogcontent">
		<?php if(have_posts()) : while( have_posts()) : the_post();?>
			<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
			<a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
			Posted by <?php the_author(); ?> in: <?php the_category(', '); ?> on: <?php the_time('F j, Y'); ?>
			<?php the_content(); ?>

			<hr class="bloghr">
		<?php endwhile;?>
		<?php else: ?>

			<p> No posts here ;). </p>

		<?php endif; ?>
	</div>

	<div id="balloonbar">
		<h3 style="text-align:center">  Check out our new Apps! </h3>
		<div class="app-desc">
			<img src="<?php bloginfo('template_directory'); ?>/img/aspicon.png" />
			<h4> Araw sa Palengke </h4>
			<p> This is our app hello hello hello hello </p> 

		</div>
		<div class="app-desc">
			<img src="<?php bloginfo('template_directory'); ?>/img/btwicon.png" />
			<h4>  But That Won't Wake me Up </h4>
			<p> This is our second app hello hello hello </p>			
		</div>

	</div>
</div>

<!-- <div class="turnpage">
	<div class="alignright">
		<?php previous_posts_link('Next Entries &raquo;') ?>
	</div>
	<div class="alignleft">
		<?php next_posts_link('&laquo; Previous Entries') ?>
	</div>
</div> -->

<?php get_footer(); ?>
