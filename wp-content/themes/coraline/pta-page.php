<?php
/**
 * Template Name: PTA news
 * @package WordPress
 * @subpackage Coraline
 * @since Coraline 1.0
 */

get_header(); ?>

<div id="content-container">
<div id="content" role="main">

<?php /* Get the page's post first */
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'coraline' ), 'after' => '</div>' ) ); ?>
<?php edit_post_link( __( 'Edit', 'coraline' ), '<span class="edit-link">', '</span>' ); ?>
</div><!-- .entry-content -->
</div><!-- #post-## -->

<?php endwhile; endif; ?>

<h2>Recent News</h2>

<?php /* Now display posts in pta-news category */
$pta_news = new WP_Query('category_name=pta-news&posts_per_page=10');
if ( $pta_news->have_posts() ) : while ( $pta_news->have_posts() ) : $pta_news->the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-content">
<?php the_content(); ?>
<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'coraline' ), 'after' => '</div>' ) ); ?>
<?php edit_post_link( __( 'Edit', 'coraline' ), '<span class="edit-link">', '</span>' ); ?>
</div><!-- .entry-content -->
</div><!-- #post-## -->

<?php comments_template( '', true ); ?>

<?php endwhile; endif; 
/* Restore the global $post variable for others to use */
wp_reset_postdata(); ?>

</div><!-- #content -->
</div><!-- #content-container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>