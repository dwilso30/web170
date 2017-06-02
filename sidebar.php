<aside>
<div id="sub-nav">
<h2>
	<?php 
	
	if(is_page()) { 
	
		echo get_the_title($post->post_parent); 
		
	}  else {
		
		echo 'Blog';
		
	}
		
	?>
    </h2>
    <ul>
    <?php 
	
	if(is_page()) { 
	
		if($post->post_parent) { 
			wp_list_pages(array('title_li' => '', 'child_of' => $post->post_parent, )); 
		
		} else {
			
			wp_list_pages(array('title_li' => '', 'child_of' => $post->ID, ));
			
		}
	
	} else {
	
	
		wp_list_categories(array('title_li' => '', ));
		
	
	}
	
	?>
    </ul>
    </div>
    <!--end sub nav-->
    <!--pull quote-->
    <div id="quote">
    <?php if(get_post_meta($post->ID, 'quote', true)) : ?>
    <blockquote><?php echo get_post_meta($post->ID, 'quote', true); ?></blockquote>
    <?php endif;?>
    </div>
    <!--end pull quote-->
    <!--widgets-->
    <?php dynamic_sidebar(1);?>
    <!--end widgets-->
 
       
       



</aside>
