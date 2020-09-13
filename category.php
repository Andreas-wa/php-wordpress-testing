<?php get_header(); ?>

<h1>category.php</h1>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?= the_category(); ?>
        
        <h2><a href="<?php the_permalink(); ?>"><?= the_title(); ?> - <?= get_the_date(); ?></a></h2>
            <?= get_the_author(); ?>
            <?= the_content(); ?>

        <?php endwhile; ?>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>

    <?php get_footer(); ?>
