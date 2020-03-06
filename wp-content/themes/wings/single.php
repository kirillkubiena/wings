<?php get_header(); ?>
        <div class="bg-news container" >
            <h2><?php the_title(); ?></h2>
            <?php get_breadcrumb(); ?>
        </div>
    </header>
    <section class="single-post">
        <div class="container">
            <h4><?php the_field('perex') ?></h4>
            <p class="post-date"><?php echo get_the_date(); ?></p>
            <p><?php the_field('text'); ?></p>
            <?php 
                $image = get_field('obrazek');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>