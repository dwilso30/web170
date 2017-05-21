<!--header.php-->
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
  <!--toggle menu-->
   <script type="text/javascript" charset="utf-8">
	$(window).load(function(){
		$("#toggle").click(function(){
			$("#navigation").toggle();
		});
	});
	<!--end toggle-->	
    </script>
<!-- start wp head fxn-->
<?php wp_head();?>

</head>


<body <?php body_class();?>>

<div id="header">
<a href="<?php echo get_settings('home');?>"><img src="<?php bloginfo('template_directory');?>/images/banner.jpg" id="banner" alt="banner"></a>
</div>

<!--nav
<div id="navigation">

<ul id="nav">
<li><a href="#">About</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Events</a></li>
<li><a href="#">Contact</a></li>
</ul>
</div>
-->
<!--wp menu-->
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'div', 'container_id' => 'navigation' )); ?>


   

<div id="wrapper">
