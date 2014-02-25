<?php get_header(); ?>
<div id="pagewrap">
	<img src="<?php bloginfo('template_directory'); ?>/img/ahdigitallogo.png" />
	<div id="blogcontent">
		<?php if(have_posts()) : while( have_posts()) : the_post();?>
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 46 ); ?>
		<div id="postinfo">
		<h2><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
		<span>Posted by <?php the_author(); ?>  on: <?php the_time('F j, Y'); ?></span>
		</div>

		<?php the_content(); ?>
		
		<br>
		<p>Categories: <?php the_category(', '); ?> </p>
		<hr class="bloghr">
	<?php endwhile;?>
<?php else: ?>

	<p> No posts here ;). </p>

<?php endif; ?>
</div>

<div id="balloonbar">
	<h3 style="text-align:center"> Learn about Filipino Language & Culture! Download Now </h3>
	<div class="app-desc">
		<img src="<?php bloginfo('template_directory'); ?>/img/aspicon.png" />
		<h4> Araw sa Palengke </h4>
		<p> Experience the sights, smells, and sounds of Araw sa Palengke (A Day in the Market) through this interactive storybook. Kid-tested and Bi-lingual (Filipino & English) </p> 

	</div>
	<div class="app-desc">
		<img src="<?php bloginfo('template_directory'); ?>/img/btwicon.png" />
		<h4>  But That Won't Wake me Up </h4>
		<p> Watch the pages of this award-winning story come to life in a dream-like virtual experience. But that Won't Wake Me Up! is kid-tested and Bilingual (Filipino & English).</p>			
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
