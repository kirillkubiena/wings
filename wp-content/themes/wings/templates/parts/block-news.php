<div class="container">
    <h1>Novinky</h1>
    <ul>
        <?php

          $query = new WP_Query( Array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
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
            'total' => $query->max_num_pages
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

            <?php 
                endwhile; 
                wp_reset_postdata();
          endif;
        ?>
    </ul>
<div class="btn-news-preview">
    <a href="<?php echo get_page_link( get_page_by_title('novinky')); ?>#news">Zobrazit více</a>
</div>