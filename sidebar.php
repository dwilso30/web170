<aside>
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