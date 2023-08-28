<?php

// Header Part
get_header();

// WordPress Loop Start
while(have_posts()) : the_post();
    the_title();
    the_content();
endwhile;

// WordPress End Loop
// Footer Part
get_footer();

?>