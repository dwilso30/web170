<?php get_header();?>



<main>


<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

<small>Posted on <?php the_time( 'F j, Y'); ?> by <?php the_author(); ?> <?php the_category();?> </small>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>	
		<p><?php echo get_the_excerpt(); ?><a href="<?php the_permalink(); ?>">Read More&nbsp;&raquo;</a></p>
	
<?php endwhile; endif; ?>
<small>index.php</small>


</main>
<?php get_sidebar();?>
<?php get_footer();?>
