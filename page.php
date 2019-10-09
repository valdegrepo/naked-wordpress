<?php get_header(); ?>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <article class="post error">
            <h1 class="404">Nothing posted yet</h1>
        </article>
    <?php endif; ?>

<?php get_footer(); ?>
