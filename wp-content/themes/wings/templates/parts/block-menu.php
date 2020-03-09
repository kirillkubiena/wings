<div class="menu-cards-wrapper container">
    <div class="container">
        <ul class="hookah-card" id="hookah-menu">
            <li class="hookah-card-img">
                <img src="<?php bloginfo('template_url') ?>/images/menu-hookah.jpg" alt="hookah" />
                <h2>Dýmky</h2>
            </li>
            <li class="hookah-card-menu">
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
                            <p><?php the_sub_field('nazev_alko'); ?><br>(<?php the_sub_field('poznamka_alko') ?>) <span><?php the_sub_field('cena_alko'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_whiskey'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_whiskey') ):
                        while ( have_rows('polozky_whiskey') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_whiskey'); ?> <span><?php the_sub_field('cena_whiskey'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_gin'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_gin') ):
                        while ( have_rows('polozky_gin') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_gin'); ?> <span><?php the_sub_field('cena_gin'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_vodka'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_vodka') ):
                        while ( have_rows('polozky_vodka') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_vodka'); ?> <span><?php the_sub_field('cena_vodka'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_rum'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_rum') ):
                        while ( have_rows('polozky_rum') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_rum'); ?> <span><?php the_sub_field('cena_rum'); ?>,-</span></p>
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
                            <p><?php the_sub_field('nazev_alko'); ?><br>(<?php the_sub_field('poznamka_alko') ?>) <span><?php the_sub_field('cena_alko'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_whiskey'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_whiskey') ):
                        while ( have_rows('polozky_whiskey') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_whiskey'); ?> <span><?php the_sub_field('cena_whiskey'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_gin'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_gin') ):
                        while ( have_rows('polozky_gin') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_gin'); ?> <span><?php the_sub_field('cena_gin'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_vodka'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_vodka') ):
                        while ( have_rows('polozky_vodka') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_vodka'); ?> <span><?php the_sub_field('cena_vodka'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
                <h2><?php the_field('nadpis_rum'); ?></h2>
                <div class="line"></div>
                <div><?php
                    if( have_rows('polozky_rum') ):
                        while ( have_rows('polozky_rum') ) : the_row(); ?>
                            <p><?php the_sub_field('nazev_rum'); ?> <span><?php the_sub_field('cena_rum'); ?>,-</span></p>
                        <?php endwhile;
                    else : ?>
                        <p>Nenašly se žádné položky :(</p>
                    <?php endif;

                ?></div>
            </li>
        </ul>
    </div>
</div>