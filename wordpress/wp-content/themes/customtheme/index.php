
<?php get_header(); 

<<<<<<< HEAD
 if ( have_posts() ) :
 get_template_part( 'content');
 else :
 get_template_part( 'content', 'none' );
 endif; 
the_post_thumbnail("thumbnail",array( "title" => get_the_title(),"alt" => get_the_title() ));
 get_sidebar(); 
=======
if ( have_posts() ) :
while ( have_posts() ) : the_post(); ?>
<article class="post">
<h2><a href="<?php the_permalink()?>"><?php the_title() ?></a></h2>
	<?php $post_meta_value = get_post_meta( $post->ID, 'test_meta_block_field', true );
					echo 'Email is: ' .$post_meta_value ; ?>
<?php the_content() ?>
</article>
>>>>>>> bf5e3206e1cb6cb6e18761b0f7903537190672b3

get_footer(); ?>
