<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post();
        
        echo "<div class='formulaire'>";
        echo"<h3>Contact </h3>";
        echo do_shortcode( '[contact-form-7 id="224" title="Formulaire de contact 1"]' ); 
        echo "</div>";

    ?>




<?php
  }
}
?>

</div>

<?php get_footer(); ?>
