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
    <div class="trait"></div>
    <p id="chp_txt"><?php the_field('section2_txt'); ?></p>
</section>


<section class="section3" style="background-image: url(<?php echo $section3_bg_img['url'] ?>)">
</section>

<section class="section4">
    <h1 id="programme">Au programme</h1>
    <div class="trait"></div>
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
    <h1 id="titre"><?php the_field('section5_titre'); ?></h1>
    <div class="trait"></div>
    
    <p id="description"><?php the_field('section5_description'); ?></p>
    <div id="orateurs"><div id="orateurs1">
        
    <div id="portrait1"><img alt="" src="<?php the_field('photo_orateur1'); ?>">
        <p class="nom"><?php the_field('nom_orateur1'); ?></p>
        <p id="description"><?php the_field('txt_orateur1'); ?></p>
        <?php $lien_orateur1 = get_field('lien_orateur1'); ?>
        
        
        <a href="<?php echo $lien_orateur1['url'] ?>">LIRE LA VIDEO</a></div>
        
        <div id="portrait2"><img alt="" src="<?php the_field('photo_orateur2'); ?>">
            <p class="nom"><?php the_field('nom_orateur2'); ?></p>
        <p id="description"><?php the_field('txt_orateur2'); ?></p>
        <?php $lien_orateur2 = get_field('lien_orateur2'); ?>
        <a href="<?php echo $lien_orateur2['url'] ?>">LIRE LA VIDEO</a>    </div>
        
        <div id="portrait3"><img alt="" src="<?php the_field('photo_orateur3'); ?>">
            <p class="nom"><?php the_field('nom_orateur3'); ?></p>
        <p id="description"><?php the_field('txt_orateur2'); ?></p>
        <a href="">LIRE LA VIDEO</a></div>
        
        <div id="portrait4"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg">
            <p class="nom">Christophe</p>
        <p id="description">Lorem ipsum calidae</p>
            
            <a href="">LIRE LA VIDEO</a></div></div>

        
    <div id="orateurs2">
        <div id="portrait5"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg">
            <p class="nom">Christophe</p>
        <p id="description">Lorem ipsum calidae</p>
        <a href="">LIRE LA VIDEO</a></div>
        
        <div id="portrait6"><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg">
            <p class="nom">Christophe</p>
        <p id="description">Lorem ipsum calidae</p>
        <a href="">LIRE LA VIDEO</a></div>
        </div></div></div>
</section>

<section class="section6">
    <h1 id="titre">INFORMATIONS PRATIQUES</h1>
    <div class="trait"></div>
    <div id="background_image" ></div>
</section>

</section>

<section class="section7">
    <h1 id="titre">VIDEOS</h1>
    <div class="trait"></div>
    <div id="grandes_videos">
        <a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video1"></a>
        
    <a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video2"></a>
    </div>
    <div id="petites_videos1">
       <div id="v1"><a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video1"></a>
           <div><p class="titre">Construction <br/> de la valeur <br/>des légumineuses</p>
           <p id="description">Marie-Benoît Magrini</p>
               </div>
        </div>
        
        <div id="v2"><a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video2"></a>
            <div><p class="titre">L'agriculture urbaine, vitrine <br/> de la modernité</p>
           <p id="description">Florent Quellier</p></div>
        </div></div>
    
        <div id="petites_videos2">
        <div id="v3"><a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video3"></a>
            <div><p class="titre">Vers une éducation agri-<br/> alimentaire</p>
           <p id="description">Julie Le Gall</p></div></div>
        
        <div id="v4"><a href=""><img alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg" id="video4"></a><div><p class="titre">Réinventer le lien entre <br/> citadins et agriculteurs</p>
           <p id="description">Nicolas Bricas</p></div>
        </div>
    </div>
    
</section>

<section class="section8">
    <h1 id="titre">ACTUS</h1>
    <div class="trait"></div>
    <div id="articles">
    <div class="ph1"><div id="article1"></div><h5>Ville et agriculture : <br/> rapprochement ou distanciation ?</h5>
    <p>Cette année, les 11e <br/>Rencontres de la Fondation <br/>Louis Bonduelle se dérouleront <br/>le 12 juin ...</p>
    <a href="" id="lien1"> Lire la suite</a></div>
    
    <div class="ph2"><div id="article2"></div><h5>Un rôle dans la transition vers <br/>des comportements durables</h5>
    <p>Les activités de la Fondation <br/>Louis Bonduelle visent à <br/> sensibiliser ses différents <br/>publics ...</p>
    <a href="" id="lien2">Lire la suite</a></div>

    <div class="ph2"><div id="article3"></div><h5>Quand la lutte contre le <br/>gaspillage alimentaire sert la<br/> lutte contre la faim</h5>
    <p>En Outaouais (Québec, <br/>Canada), des organismes anti- <br/> gaspillages ...</p>
        <a href="" id="lien3">Lire la suite</a>
    <a href="" id="lien3"></a></div>
    
    <div class="ph4"><div id="article4"></div><h5>Légumineuse et légume : <br/>quelles différences ?</h5>
    <p>Qu'est-ce qu'une légumineuse? <br/> Quels sont ses atouts ? ...</p>
        <a href="" id="lien4">Lire la suite</a></div>
    </div>
</section>
<section class="section9">

</section>
    
<?php

  }
}
?>

</div>
<?php get_footer(); ?>