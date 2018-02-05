<!--we beging with copying the content of the index.php-->
<?php get_header();     

 if (have_posts()):   /*it says if we have posts .do this  */
 	?>


 	<h2><?php 

 	if (is_category()){

 		single_cat_title();

 	}elseif (is_tag()){

		single_tag_title();

 	}elseif (is_author()){
 
 		the_post();
 		echo 'auhtor archives:'.get_the_author();
 		rewind_posts();

 	}elseif (is_day()){

 		echo 'daily archives:'.get_the_date();

 	}elseif (is_month()){

 		echo 'monthly archives:'.get_the_date('F Y');

 	}elseif (is_year()){

 		echo 'yearly:'.get_the_date('Y');

 	}else {

 		echo "Archives";
 	}


 	?></h2>

 	<?php
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
	    


	    <?php the_content();?>  <!--or you can use the_excerpt();-->


	</article>
 	

	<?php endwhile;

else:

		echo'<p>no content found <p>';     /* and if we do not have posts , print this one   */

endif;

 get_footer(); ?>
 
