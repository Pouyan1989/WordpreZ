<!--put the loop code-->
<?php get_header();       /* loads the header here  */
 
 if (have_posts()):   /*it says if we have posts .do this  */

 	while(have_posts()):the_post();?>  

    <article class="post">

    	<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
    	<p class="post-info"><?php the_time('F jS,Y g:i a');?> | by <a href="<?php get_author_posts_url(get_the_author_meta('ID'));?>"><?php the_author();?></a> | Posted in 

			<?php 
			$categories=get_the_category();
			$seperator=",";
			$output='';

			if ($categories) {

				foreach ($categories as $category) {
					
					$output .='<a href="' .get_category_link($category->term_id). '">'.$category->cat_name.'</a>'.$seperator;
				}


					echo trim($output,$seperator); // will remove anything at the beggining or the end anything that resembles our seperator

			}


			?></p>
	    


	    <?php the_content();?>
	</article>
 	

	<?php endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
