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

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
      
    $banner_register_link = get_field('banner_register_link');
    $banner_background_image = get_field('banner_background_image');
    $section3_bg_img = get_field('section3_bg_img');
      
?>
<section class="section1" style="background-image: url(<?php echo $banner_background_image['url'] ?>)">
    <p id="banner_baseline"> <?php the_field('banner_baseline'); ?> </br></p>

    <p id="banner_title_brown"><?php the_field('banner_title_brown'); ?></p>

    <p id="banner_title_green"><?php the_field('banner_title_green'); ?></p>

    <a href="<?php echo $banner_register_link['url'] ?>" id="banner_register_link"><?php echo $banner_register_link['title']; ?></a>
    
</section>

<section class="section2">
    <h1 id="conference"><?php the_field('section2_title'); ?></h1>
    <p id="chp_txt"><?php the_field('section2_txt'); ?></p>
</section>


<section class="section3" style="background-image: url(<?php echo $section3_bg_img['url'] ?>)">
</section>

<section class="section4">
    <h1 id="programme">Au programme</h1>
    <div id="colonnes">
        
    <div id="vegetaux"><h1 id="titre"><?php the_field('title1_program'); ?></h1>
    <?php 
        $programs = get_field('program_elements');
        foreach($programs as $program){
            echo $program['hour'];
            echo $program['description'] ."<br/>";
        }
        ?></div>
    <div id="activites"> <h1 id="titre"> <?php the_field('title2_program'); ?></h1>
    <?php 
        $programs = get_field('program_elements2');
        foreach($programs as $program){
            echo $program['hour'];
            echo $program['description'] ."<br/>";
        }
        ?></div>
        </div>
    
     <?php $section4_link = get_field('section4_link'); ?>
    
    <a href="<?php echo $section4_link['url'] ?>" id="section4_link"><?php echo $banner_register_link['title']; ?></a>
</section>

<section class="section5">
    <h1 id="titre">Les orateurs</h1>
    <p id="">Lorem ipsum calidae por portittor et sit amet dolor callis</p>
</section>

<section class="section6">
</section>

<section class="section7">
</section>

<section class="section8">
</section>    
    
<?php

  }
}
?>

</div>

<?php get_footer(); ?>