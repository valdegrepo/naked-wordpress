<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <?php the_post_thumbnail('large'); ?>

            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <?php the_time('m/d/Y'); ?>
            <?php if( comments_open() ) : ?>
                <?php comments_popup_link( __( 'Comment', 'break' ), __( '1 Comment', 'break' ), __( '% Comments', 'break' ) ); ?>
            <?php endif; ?>

            <?php the_content( 'Continue...' ); ?>
            <?php wp_link_pages(); ?>

            <?php echo get_the_category_list(); ?>
            <?php echo get_the_tag_list( '| &nbsp;', '&nbsp;' ); ?>
        </article>

    <?php endwhile; ?>

    <?php previous_posts_link( 'newer' ); ?>
    <?php next_posts_link( 'older' ); ?>

<?php else : ?>
    <article class="post error">
        <h1 class="404">Nothing has been posted like that yet</h1>
    </article>
<?php endif; ?>

<?php get_footer();  ?>
