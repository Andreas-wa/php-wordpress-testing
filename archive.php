<?php get_header(); ?>

<h1>archive.php</h1>
<a href="http://localhost/wordpress/hem/"></a>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
            <h2><?= the_title(); ?> - <?= get_the_date(); ?></h2>
            <?= get_the_author(); ?>
            <?= the_content(); ?>
            <?= the_category(); ?>

        <?php endwhile; ?>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>

    <?php get_footer(); ?>
