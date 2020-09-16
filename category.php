<?php get_header(); ?>

<h1>category.php</h1>
<a href="http://localhost/wordpress/hem/">start sidan</a>

<br>

<?= wp_list_categories(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                
        <h2><a href="<?php the_permalink(); ?>"><?= the_title(); ?> - <?= get_the_date(); ?></a></h2>
            <?= the_content(); ?>
            <p>Författare:
            <?= the_author_posts_link(); ?></p>


        <?php endwhile; ?>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>

    <?php get_footer(); ?>
