<?php get_header(); ?>

<div class="container">
<section class="section8">
    <div>
        <h1>ACTUS</h1>
        <div class="flex">
<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();   ?>

            <div class="rect">
                <?php the_post_thumbnail(); ?> 
                <p><b><?php the_title(); ?></b><p>
                <p class="p"><?php the_content(); ?></p>
                <center><a href="<?php the_permalink(); ?>" ><button class="b">Lire la suite</button></a></center>
                <p class="p2"><?php echo get_the_date(); ?></p>
            </div>
           

<?php
  }
}
?>
        </div>            
    </div>
</section>
</div>
<br><br><br>

<?php get_footer(); ?>
