<?php get_header(); ?>

<?php
if (have_posts()):
    while (have_posts()):
        the_post();
        ?>
        <main class="main">
            <div class="wrapper">
                <?php the_content(); ?>
            </div>
        </main>
    <?php    
    endwhile;
endif;
?>

<?php get_footer(); ?>