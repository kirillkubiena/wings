<!-- Načtení hlavičky webu -->
<?php get_header(); ?>
        <!-- Vložení bloku div -->
        <div class="bg-news container" >
            <!-- Vložení titulku příspěvku -->
            <h2><?php the_title(); ?></h2>
            <!-- Volání funkce breadcrumb --> 
            <?php get_breadcrumb(); ?>
        </div>
    </header>
    <!-- Vložení sekce -->
    <section class="single-post">
        <!-- Vložení bloku div -->
        <div class="container">
            <!-- Vložení perexu pomocí pluginu ACF -->
            <h4><?php the_field('perex') ?></h4>
            <!-- Načtení data vytvoření příspěvku -->
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <!-- Vložení textu pomocí pluginu ACF -->
            <p><?php the_field('text'); ?></p>
            <?php 
                // Vytvoření proměnné image, do které se uloží pole 'obrazek'
                $image = get_field('obrazek');
                // Podmínka, jestli proměnná image není prázdná
                if( !empty( $image ) ): ?>
                    <!-- Vložení obrázku -->
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <!-- Ukončení podmínky -->
            <?php endif; ?>
        </div>
    </section>
<!-- Načtení patičky webu -->
<?php get_footer(); ?>

