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
        <?php
        $categories = get_the_category(); //stock les categores dans la variable categories

        if ($categories):
        ?>
            <ul class="categories col-12">
                <?php 
                foreach($categories as $category): //pour chaque categories
                    if ($category->term_id != 1):
                    //on peut aussi check par rapport au slug ($category->slug)
                ?>
                    <li>
                        <a href="<?= esc_url(get_term_link($category)) ?>"><?= $category->name ?></a>
                        <!-- get_term_link : recup le lien de la category | esc_url : recupere une chaine de caractere et la "nettoie" pour qu'elle ai le bon format pour une url (supprime les " ' & etc..) -->
                    </li> <!-- recupere le nom de la categorie et l'affiche dans une balise <li> -->
                <?php 
                    endif;
                endforeach; 
                ?>
            </ul>
        <?php
        endif;
        ?>
        <?php
        $tags = get_the_tags(); //Meme bloc que pour les catégories mais pour les tags/etiquettes

        if ($tags):
        ?>
            <ul class="tags col-12">
                <?php foreach($tags as $tag): ?> 
                    <li>
                        <a href="<?= esc_url(get_term_link($tag)) ?>"><?= $tag->name ?></a>
                    </li> 
                <?php endforeach; ?>
            </ul>
        <?php
        endif;
        ?>
        
    </article>
    <?php
endif; 

get_footer(); //recupere le footer.php et l'affiche