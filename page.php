<?php get_header(); ?>

<center>
<h1>page.php</h1>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        
            <h2><?= the_title(); ?> - <?= get_the_date(); ?></h2>
            <?= get_the_author(); ?>
            <?= the_content(); ?>

        <?php endwhile; ?>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>

</center>

<?php get_footer(); ?>
