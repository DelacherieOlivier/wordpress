<?php get_header(); ?>

<div class="container single">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
 
    the_post(); ?>
    
    <div class="single">
      <center> <?php the_post_thumbnail(); ?> </center>
        <h1><?php the_title(); ?> </h1>
        <p><?php the_content(); ?> </p>
    </div>
    
    <?php
  }
}
?>
</div>
<?php get_footer(); ?>