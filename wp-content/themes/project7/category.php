<?php get_header(); ?>

<div class="main row">
  <div class="container archiveContainer">
    <div class="content archiveContent">

      <h1>Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>

    </div> <!-- /.content -->

    <div class="singleSidebar">
      <?php get_sidebar(); ?>
    </div>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>