<?php get_header();?>



<main>


<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2> <?php the_title(); ?></h2>
<small>Posted on <?php the_time( 'F j, Y'); ?> by <?php the_author(); ?> <?php the_category(', ');?>. </small>		
		<?php the_content(' ');?>
        
		
	
<?php endwhile; endif; ?>
<small>single.php</small>


</main>
<?php get_sidebar();?>
<?php get_footer();?>
