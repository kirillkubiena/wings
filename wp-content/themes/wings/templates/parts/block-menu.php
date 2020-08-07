<div class="menu-cards-wrapper container">
    <div class="container">
        <ul class="hookah-card" id="hookah-menu">
            <li class="hookah-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-hookah.jpg" alt="hookah" />
                <h2>Dýmky</h2>
            </li>
            <li class="hookah-card-menu">
                <h2><?php the_field('nadpis_dymky'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_dymky') ):
                        while ( have_rows('polozky_dymky') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_dymky'); ?><br/>(<?php the_sub_field('poznamka_dymky'); ?>) <span><?php the_sub_field('cena_dymky'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;
                ?></div>
            </li>
        </ul>
        <ul class="tea-card">
            <li class="tea-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-tea.jpg" alt="tea" />
                <h2>Čaj</h2>
            </li>
            <li class="tea-card-menu">
                <h2><?php the_field('nadpis_caj'); ?></h2>
                <div class="line"></div>
                <p><?php the_field('text_caj'); ?></p>
                <div><?php
                    if( have_rows('polozky_caj') ):
                        while ( have_rows('polozky_caj') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_caj'); ?> <span><?php the_sub_field('cena_caj'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
            </li>
        </ul>
        <ul class="meal-card">
            <li class="meal-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-meal.jpg" alt="meal" />
                <h2>Jídlo</h2>
            </li>
            <li class="meal-card-menu">
                <h2><?php the_field('nadpis_pizza'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_pizza') ):
                        while ( have_rows('polozky_pizza') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_pizza'); ?> <span><?php the_sub_field('cena_pizza'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_triangles'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_triangles') ):
                        while ( have_rows('polozky_triangles') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_triangles'); ?> <span><?php the_sub_field('cena_triangles'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_pochutiny'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_pochutiny') ):
                        while ( have_rows('polozky_pochutiny') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_pochutiny'); ?> <span><?php the_sub_field('cena_pochutiny'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
            </li>
        </ul>
    </div>
    <div class="container">
        <ul class="coffee-card" id="coffee-menu">
            <li class="coffee-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-coffee.jpg" alt="coffee" />
                <h2>Káva</h2>
            </li>
            <li class="coffee-card-menu">
                <h2><?php the_field('nadpis_kava'); ?></h2>
                <div class="line"></div>
                <p><?php the_field('text_kava'); ?></p>
                <div><?php
                    if( have_rows('polozky_kava') ):
                        while ( have_rows('polozky_kava') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_kavy'); ?><br>(<?php the_sub_field('poznamka_kava'); ?>) <span><?php the_sub_field('cena_kava'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
            </li>
        </ul>
        <ul class="other-card">
            <li class="other-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-other.jpg" alt="other" />
                <h2>Ostatní</h2>
            </li>
            <li class="other-card-menu">
                <h2><?php the_field('nadpis_nealko'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_nealko') ):
                        while ( have_rows('polozky_nealko') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_nealko'); ?> <span><?php the_sub_field('cena_nealko'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_alko'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_alko') ):
                        while ( have_rows('polozky_alko') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_alko'); ?> <span><?php the_sub_field('cena_alko'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_piva'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_piva') ):
                        while ( have_rows('polozky_piva') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_piva'); ?> <span><?php the_sub_field('cena_piva'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_cervene_vina'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_cervene_vina') ):
                        while ( have_rows('polozky_cervene_vina') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_cervene_vina'); ?> <span><?php the_sub_field('cena_cervene_vina'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_bile_vina'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_bile_vina') ):
                        while ( have_rows('polozky_bile_vina') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_bile_vina'); ?> <span><?php the_sub_field('cena_bile_vina'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_drinky'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_drinky') ):
                        while ( have_rows('polozky_drinky') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_drinky'); ?> <span><?php the_sub_field('cena_drinky'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
            </li>
        </ul>
    </div>
</div>