<?php 
    /* Template Name: PageNews */ 
    get_header();
?>
        <div class="bg-news container">
            <h1>Novinky</h1>
        </div>
    </header>
    <section class="news-preview">
        <?php include('templates/parts/block-news.php'); ?>
    </section>
<?php get_footer(); ?>
