<?php 
get_header(); //recupere le header.php 
?>

<?php
if ( have_posts() ) : // syntaxe if // endif plutot que if {} pour le code dans le html (a la manière des balises html)
    while ( have_posts() ) : 
        the_post(); //initialise le post (le met dans $post (variable globale de wp)) incrmente un compteur, lorsqu'il est supérieur à la taille de la liste des post, have_post() renvoie false
        ?>
        <article class="row"> 
            <div class="col-8 order-2">
                <h2><a href="<?php the_permalink()?>"><?php the_title(); //affiche le titre du post ?></a></h2> 
                <!-- the_permalink() crée le permalien vers le post actuel (the_post()) -->
                <?php
                $categories = get_the_category(); //stock les categores dans la variable categories

                if ($categories):
                ?>
                    <ul class="categories">
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
                    <ul class="tags">
                        <?php foreach($tags as $tag): ?> 
                            <li>
                                <a href="<?= esc_url(get_term_link($tag)) ?>"><?= $tag->name ?></a>
                            </li> 
                        <?php endforeach; ?>
                    </ul>
                <?php
                endif;
                ?>
            </div>
            <div class="col-2 order-1">
            <?php if (has_post_thumbnail()): ?>
                <a href="<?php the_permalink()?>"><?php the_post_thumbnail('thumbnail'); ?></a>
            <?php endif; ?>
            </div>
            
        </article>
        <?php
    endwhile; 
endif; 
?>
</div>
<?php
get_footer(); //recupere le footer.php et l'affiche