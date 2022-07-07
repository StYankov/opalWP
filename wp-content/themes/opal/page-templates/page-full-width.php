<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<main class="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>
<?php
get_footer();
