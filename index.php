<?php get_header(); ?>
<center>
<h1>index.php</h1>
<?php if(have_posts()) : ?>

<div class="posts">    
    
    <?php while(have_posts()) : ?>
        <?php the_post(); ?>

        <div class="posts__post">
        
            <h2><a href="<?php the_permalink(); ?>"><?= the_title(); ?> - <?= get_the_date(); ?></a></h2>

        </div class="post__content">
            <?= the_category(); ?>
            <?= the_content(); ?>
            <p>Författare: 
            <?= the_author_posts_link(); ?>
            </p>
        </div>

        <?php endwhile; ?>

</div>
    
    <?php else : ?>
        
        <h1>Nya sida som inte är helt klar än.</h1>;

    <?php endif; ?>



    <?php
        // $posts = get_posts();
        // foreach($posts as $post) {
        //     echo '<div class="posts__post">';
        //         echo "<marquee><h2 class='blinking'>$post->post_title - $post->post_date</h2></marquee>";

        //         echo get_the_author_meta('first_name', $post->post_author) ." ". get_the_author_meta('last_name', $post->post_author);

        //         echo '<div class="post__content">';
        //         echo $post->post_content;
        //         echo '</div>';
        //     echo '</div>';
        // }
    ?>

<!-- LOOPEN

        if(have_posts()):
            while(have_posts()):the_post();
                the_title();
            endwhile;
        endif;


        dessa filer ligger i  
        
        fallbacks

        index.php - den sista fallback fil är alltid index.php
        home.php - för bloggflödet(startsidan) om den inte hittar home.php går den vidare till index.php
        page.php - för en enskild sida
        single.php - väljer vilka php filer man ska ha
        search.php - sidmall för sökresultat
        404.php - när en fil inte finns kommer den att skicka en vidare hit
        archive.php - 
        author.php -
        category.php -
        tag.php - 
        front-page.php - oavsett så kommer den att vara startsidan 
        sidebar.php
        
        1. front-page
        2. home.php
        3. page.php
        4. index.php
        
 -->
</center>

<?php get_footer(); ?>