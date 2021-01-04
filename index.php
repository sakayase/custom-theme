<?php 
get_header(); //recupere le header.php

if ( have_posts() ) : // syntaxe if // endif plutot que if {} pour le code dans le html (a la manière des balises html)
    while ( have_posts() ) : 
        the_post(); //initialise le post
        ?>
        <article> 
            <div>
                <h2><?php the_title(); //affiche le titre du post ?> </h2> 
            </div>
            <div>
                <?php the_post_thumbnail(); ?>
            </div>
            <div>
                <?php the_content(); //affiche le contenu du post ?>
            </div> 
        </article>
        <?php
    endwhile; 
endif; 

get_footer(); //recupere le footer.php et l'affiche