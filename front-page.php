<?php get_header();?>






<div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="images/exterior.jpg" alt="exterior" />
              <p class="flex-caption">Welcome to Pyramid!</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/curve.jpg" alt="curve"/>
              <p class="flex-caption">Year round beers</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/interior.jpg" alt="interior"/>
              <p class="flex-caption">The alehouse</p>
  	    		</li>
  	    		<li>
  	    	    <img src="images/garden.jpg" alt="garden"/>
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


<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<?php the_content(); ?>
	
<?php endwhile; endif; ?>
<h1> Seattle Alehouse</h1>
<p>
The Pyramid Alehouse in Seattle is the original location for Pryamid beer. It offers a world of extraordinary tastes waiting to be explored on draft including our year-round beers, rotating seasonals, featured selections from our sister brewery the Portland Brewing Co., as well as a few unique Pyramid offerings you won’t find anywhere else. Enjoy a pint, explore a Pyramid Sampler, or order a growler of brewery fresh beer to go. Pair your brew with a tasty selection off of our full menu of classic brew house cuisine.</p>
<small>front-page.php</small>



<?php get_footer();?>