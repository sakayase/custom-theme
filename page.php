<?php 
get_header(); //recupere le header.php

if ( have_posts() ) : // syntaxe if // endif plutot que if {} pour le code dans le html (a la manière des balises html)
    the_post(); //initialise le post
    ?>
    <article class="roc">
            <h2 class="col-12"><?php the_title(); //affiche le titre du post ?> </h2> 
        <?php if (has_post_thumbnail()): ?>
        <div class="col-12">
            <?php the_post_thumbnail('medium_large'); ?>
        </div>
        <?php endif; ?>
        <div class="col-12">
            <?php the_content(); //affiche le contenu du post ?>
        </div> 
        
    </article>
    <?php
endif; 

get_footer(); //recupere le footer.php et l'affiche