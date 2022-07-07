<?php
/**
 * Template Name: Page Boxed
 */

get_header();
?>
<main class="main-content">
    <div class="grid-container">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>
<?php
get_footer();
