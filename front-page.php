<?php get_header();?>






<div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="<?php bloginfo('template_directory');?>/exterior.jpg" alt="exterior" />
              <p class="flex-caption">Welcome to Pyramid!</p>
  	    		</li>
  	    		<li>
  	    	    <img src="<?php bloginfo('template_directory');?>/curve.jpg" alt="curve"/>
              <p class="flex-caption">Year round beers</p>
  	    		</li>
  	    		<li>
  	    	    <img src="<?php bloginfo('template_directory');?>/interior.jpg" alt="interior"/>
              <p class="flex-caption">The alehouse</p>
  	    		</li>
  	    		<li>
  	    	    <img src="<?php bloginfo('template_directory');?>/garden.jpg" alt="garden"/>
              <p class="flex-caption">Pregame!</p>
  	    		</li>
          </ul>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="js/dropdown.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

 <!-- Begin Widgets -->
    <main>
        <h2> Seattle Alehouse</h2>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="article-<?php the_ID(); ?>" class="article">
        <?php the_content(); ?>
        </article>
        <?php endwhile; endif; ?>
        <small>front-page.php</small>
        </main>
      
       <aside>
            <h2>Latest News:</h2>
            <ul class="news">
            <?php rewind_posts();  ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' =>'news')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
            </ul>
             <h2>Latest Articles:</h2>
            <ul class="art">
            <?php rewind_posts();  ?>
            <?php query_posts(array('posts_per_page' => '4', 'category_name' =>'articles')); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; endif; ?>
            </ul>
            
        </aside>




<?php get_footer();?>
