<?php
/**
  * @package WordPress
  * @subpackage Toolbox
  */
?>

<?php get_header(); ?>

<div id="primary">
  <div id="content">

    <?php get_template_part( 'loop', 'index' ); ?>

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
