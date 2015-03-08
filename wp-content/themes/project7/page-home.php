<?php //index.php is the last resort template, if no other templates match 
	// template name: home
?>
<?php get_header(); ?>

<div class="main rows">
  <div class="container homePage">

    <div id="masonry" class="featuredPosts">
    	<?php query_posts('post_type=post&posts_per_page=6'); ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div class="postContent">
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<a href="<?php the_permalink(); ?>" title="Permalink to: <?php esc_attr(the_title_attribute()); ?>" rel="bookmark">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</a>
							  
							  <div class="entry-meta">
							    <!-- <?php hackeryou_posted_on(); ?> -->
							    <p>Posted by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author_meta( 'display_name' ); ?> |</a> <?php echo get_the_date('M, d'); ?></p>
							  </div><!-- .entry-meta -->

								<?php the_post_thumbnail('large'); ?>
							  <div class="entry-content">
							    <?php the_excerpt(); ?>
							    <?php wp_link_pages(array(
							      'before' => '<div class="page-link"> Pages: ',
							      'after' => '</div>'
							    )); ?>
							  </div><!-- .entry-content -->

							</article><!-- #post-## -->
						</div>
			<?php endwhile ?>	
    </div> <!-- end #masonry -->
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>