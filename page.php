<?php get_header(); 

//it is the same as index but it works the way that if we want to have different configuration for each page when clicked and selected .here we have defined it that it outputs the title with no hyperlink and the title is larger. (page.php) powers out all pages

 if (have_posts()): while(have_posts()):the_post(); ?>

	<article class="post page">    <!--article is and independent tag used for things like posting -->


		<?php if (has_children() OR $post->post_parent > 0) {?>


			<nav class="site-nav children-links clearfix">

				<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id());?>"><?php echo get_the_title(get_top_ancestor_id());?></a></span>


					<ul>

						<?php $args=array('child_of'=>get_top_ancestor_id(),'title_li'=>'');//'child_of'=>$post->ID :it means get the children of the viewing page  .get_top_ancestor_id() is a custom function to show the children of children  ?>  

						<?php wp_list_pages($args);?>

					</ul>

			</nav>
 		

		<?php } ?>

		<h2><?php the_title();?></h2>

	    <?php the_content();?>

	 </article>    
		
 <?php endwhile;
	
else :
	    echo '<p>No content found</p>';
    
    endif;

 get_footer();
 
?>