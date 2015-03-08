<?php get_header(); ?>

<div class="main row">
  <div class="container archiveContainer">

    <div class="content archiveContent">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <?php get_template_part( 'loop', 'tag' ); ?>
    </div> <!-- /.content -->

   <div class="singleSidebar">
     <?php get_sidebar(); ?>
   </div>

  </div><!-- /.container -->
</div><!-- /.main -->

<?php get_footer(); ?>