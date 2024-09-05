<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-8 blog-main">

      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); // CORREGIDO ?>
        
        <?php get_template_part('content', get_post_format()); ?>

          
        <?php endwhile; ?>
      <?php else : ?>
        <p><?php _e('No hay entradas'); ?></p> <!-- CORREGIDO _e() en lugar de __() -->
      <?php endif; ?>
    </div><!-- /.blog-main -->
<?php get_footer(); ?>
