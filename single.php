<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

        <article>
            <h1><?php the_title(); ?></h1>

            <?php the_time('m.d.Y'); ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>

            <?php echo get_the_category_list(); ?>
            <?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?>
        </article>

    <?php endwhile; ?>

    <?php if ( comments_open() || '0' != get_comments_number() ) comments_template( '', true ); ?>


<?php else : ?>
    <article class="post error">
            <h1 class="404">Nothing has been posted like that yet</h1>
    </article>
<?php endif; ?>

<?php get_footer(); ?>
