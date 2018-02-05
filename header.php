<!DOCTYPE html>
<html<?php language_attributes();?>>        <!--specifies which language is being used -->

<head>     
    <meta charset="<?php bloginfo('charset');?>">          <!--displays the encoding for pages and feed in seeting reading-->
    <meta name="viewport" content="width=device-width">     <!--makes our site responsive-->
    <title>
        <?php bloginfo('name');?>    <!--this our website name not optimal for search engine-->
    </title>
    <?php wp_head();?>  <!--if we later add any plugins to wordpress this will play a role -->
</head>

<body <?php body_class();?>>    <!--lets us target different pages with css easily-->
    <div class="container">

        <!--site header-->
        <header class="site-header">

      <Div class="hd-search">
        <?php get_search_form(); ?>

      </Div>



            <h1><a href="<?php echo home_url();?>"><?php bloginfo('name');?></a></h1>  
            <h5><?php bloginfo('description');?><?php if (is_page('Blog')){ ?>    <!--this is conditional logic in case if we wanna affect only the blog page-->

                - thank you for watching our work 

                <?php }?></h5>  
			<nav class="site-nav">
			  <?php
			    $args=array('theme_location'=>'primary'); // loads the top header menu her that we have chosen as primary in admin panel
				?>
			 <?php wp_nav_menu($args);?> <!--outputs all the pages with this function ,but he have modified to put out desired pages with the argument-->
			</nav>
			
        </header>
        <!--/site-header-->