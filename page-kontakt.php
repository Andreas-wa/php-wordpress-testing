<?php get_header(); ?>

<h1>page-kontakt.php</h1>
<a href="http://localhost/wordpress/hem/">start sidan</a>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
            <h2><?= the_title(); ?> - <?= get_the_date(); ?></h2>
            <p>Författare:
            <?= the_author_posts_link(); ?></p>
            <?= the_content(); ?>

        <?php endwhile; ?>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>

<?php get_footer(); ?>