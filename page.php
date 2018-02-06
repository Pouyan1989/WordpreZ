<?php get_header(); 

//it is the same as index but it works the way that if we want to have different configuration for each page when clicked and selected .here we have defined it that it outputs the title with no hyperlink and the title is larger. (page.php) powers out all pages

 if (have_posts()): while(have_posts()):the_post(); 

	get_template_part('content', 'page');
		
  endwhile;
	
else :
	    echo '<p>No content found</p>';
    
    endif;

 get_footer();
 
?>