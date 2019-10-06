
<?php get_header(); 

 if ( have_posts() ) :
 get_template_part( 'content');
 else :
 get_template_part( 'content', 'none' );
 endif; 
the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));
 get_sidebar(); 

get_footer(); ?>
