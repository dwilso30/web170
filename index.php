<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('description');?> <br> | <?php bloginfo('name'); ?></title>

<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" >
</script> 
<![endif]-->
<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/flexslider.css" type="text/css" media="screen" />
<link href="<?php bloginfo('stylesheet_url');?>" type="text/css" rel="stylesheet">
<link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">

<meta name="viewport" content="width=device-width, intial-scale=1">
   		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>
    
 
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
    
   
    
    
  <script src="../js/modernizr.js"></script>

  <style type="text/css">
    .flex-caption {
      width: 96%;
      padding: 2%;
      left: 0;
      bottom: 0;
      background: #8e273a;
      color: #ebe4c4;
      text-shadow: 0 -1px 0 rgba(0,0,0,.3);
      font-size: 14px;
      line-height: 18px;
    }
    li.css a {
      border-radius: 0;
    }
  </style>
<!-- start wp head fxn-->
<?php wp_head();?>

</head>


<body <?php body_class();?>>

<header>
<a href="../index.html">
<img src="<?php bloginfo('template_directory');?>/images/banner.jpg" id="banner" alt="banner"></a>
</header>

<nav>
<ul id="nav">
<li><a href="#">About</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Events</a></li>
<li><a href="#">Contact</a></li>
</ul>
</nav>
    <!--++++++++++ START MOBILE NAVIGATION ++++++++-->
    <button class="nav-button">Toggle Navigation</button>
    <div class="mobile-logo">
      <a href="../index.html" title="Home">
            <img src="../images/logo-small.png" alt="small logo">
        </a>
    </div>

 <ul class="primary-nav">
			<li><a href="#">About</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
   

    <script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});
		});
    </script>

<div id="wrapper">



<!--flexslider--
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

  <!-- FlexSlider --
  
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
  <!--end flexslider-->
<main>


<?php 
if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		
		<?php the_content(); ?>
	
<?php endwhile; endif; ?>
<small>index.php</small>


</main>
<aside>


<h3>Featured Beers</h3>
        
        <p>These beers are produced in small batches by our brewer Kim Brusco. They change seasonally and are only found exclusively at the Seattle Alehouse. The current selections are listed below:
        </p>
       
        <h3>Mctut Stout</h3>
      
        <h3>Hancock Bitter</h3>
       
        <h3>Nitro Red </h3>
        
        <h3>Citrus IPA</h3>
        
        <h3>Winter Bock</h3>
        
         <h3>Blonde Altbier</h3>
       
       


</aside>
</div>
<footer>

<div id="footer-inner">
<div id="left">
<h3 >Hours of Operation</h3>
<ul class="hours">
<li>Monday-Thursday: 11am-10pm</li>
<li>Friday-Saturday: 11am-11pm</li>
<li>Sunday: 11am-9pm</li>
</ul>
<h3 >Address</h3>
<ul class="address">
<li>1201 1st Ave S</li>
<li>Seattle, WA 98134</li>
</ul>
<h3 >Phone</h3>
<ul class="phone">
<li>206-682-3377</li>
</ul>

<ul class="social">
<li>
<a href="https://www.facebook.com/PyramidSEA/?fref=ts"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
<li><a href="https://twitter.com/pyramidsea"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
<li><a href="https://www.instagram.com/pyramidbrew/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="https://www.youtube.com/user/pyramidbrew"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
<li><a href="https://www.yelp.com/biz/pyramid-breweries-seattle"><i class="fa fa-yelp" aria-hidden="true"></i></a></li>
</ul>


</div><!--end div id left-->
<div id="right">
<img src="<?php bloginfo('template_directory');?>/images/map.jpg" alt="map" id="map">

</div><!--end div id right-->
</div><!--end footer-inner-->
 <ul id="copy">
	<li> Copyright &copy; 2016</li>
	<li> All Rights Reserved</li>
	<li><a href=""> Designed by DW</a></li>
</ul>
</footer>
<!-- wp footer fxn-->
<?php wp_footer(); ?>
</body>
</html>
