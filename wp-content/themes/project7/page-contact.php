<?php //index.php is the last resort template, if no other templates match 
	// template name: contact
?>
<?php get_header(); ?>

<div class="main rows">
  <div class="container">

    <div class="content">
        <div class="content contactContent">
        		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    					  <div class="entry-content">
    					    <?php the_content(); ?>
    					    <?php wp_link_pages(array(
    					      'before' => '<div class="page-link"> Pages: ',
    					      'after' => '</div>'
    					    )); ?>
    					  </div><!-- .entry-content -->

        		<?php endwhile ?>	

        </div> <!--/.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>