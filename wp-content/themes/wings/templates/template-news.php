<?php 
    /* Template Name: PageNews */ 
    get_header();
?>
        <div class="bg-news container">
            <h1>Novinky</h1>
        </div>
    </header>
    <section class="news-page" id="news">
        <div class="container">
            <ul>
                <?php

                    $query = new WP_Query( Array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'orderby'         => 'date',
                        'order'           => 'DSC',
                        'paged' => get_query_var('paged') ? get_query_var('paged') : 1
                    ));

                    // Paginator args
                    $paginator_args = array(
                        'prev_next'     => false,
                        'end_size'      => "1",
                        'mid_size'      => '2',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $query->max_num_pages,
                        'prev_next' => True,
                        'prev_text' => __( '<< Předchozí' ),
                        'next_text' => __( 'Další >>' )
                    );

                    if($query->have_posts()):
                    while($query->have_posts()):
                        $query->the_post(); ?>

                <li class="card">
                    <?php if(get_the_post_thumbnail_url()): ?>
                        <div class="card-image">
                            <a href="<?php the_permalink(); ?>">
                                <img class="card-image-img" src="<?php the_post_thumbnail_url(); ?>" />
                            </a>
                        </div>
                    <?php endif; ?>
                    <div class="card-content">
                        <p class="news-perex"><?php the_field('perex') ?></p>
                        <div class="card-content-wrapper">
                            <a class="link-archive" href="<?php the_permalink(); ?>">Pokračovat</a>
                            <p class="card-content-wrapper-date"><?php echo get_the_date(); ?></p>
                        </div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
                <div class="news-page-paginator">
                    <?php echo paginate_links($paginator_args); ?>
                </div>
            <?php wp_reset_postdata();
            endif; ?>
        </div>
    </section>
<?php get_footer(); ?>
