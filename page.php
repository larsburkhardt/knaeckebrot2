<?php get_header(); ?>

<?php 
    $sidebar_main = is_active_sidebar('sidebar-1');
?>

<main>
    <div class="container">
        <?php while(have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>

                <h1><?php the_title(); ?></h1>

                <?php if(get_the_post_thumbnail() !== '') : ?>
                <div>
                    <?php the_post_thumbnail('full', ['class' => 'post__thumbnail']); ?>
                </div>
                <?php endif; ?>


                <div><?php the_content(); ?></div>
                
            </article>

        <?php endwhile; ?>

        <?php if($sidebar_main) : ?>
            <?php get_sidebar('sidebar-1'); ?>
        <?php endif; ?>


    </div>
</main>


<?php get_footer(); ?>