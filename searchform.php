<!--if wordpress detect this page it will use the configurations of here for the search box .othrwise it will usee the default configurations it is better to web search for formalize or css normalized to level everything in all browsers-->

<form action="<?php echo home_url( '/' );?>" method="get" role="search">
<div>
    <label class="screen-reader-text" for="s"> Search for :</label>
    <input type="text" name="s" id="s" value="" placeholder="<?php the_search_query();?>" />
    <input type="submit" id="searchsubmit" alt="Search" value="Search" />
</div>
</form>