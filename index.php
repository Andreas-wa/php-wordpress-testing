<?php get_header() ?>

<div class="posts">

    <?php
        $posts = get_posts();
        foreach($posts as $post) {
            echo '<div class="posts__post">';
                echo "<marquee><h2 class='blinking'>$post->post_title - $post->post_date</h2></marquee>";

                echo get_the_author_meta('first_name', $post->post_author) ." ". get_the_author_meta('last_name', $post->post_author);

                echo '<div class="post__content">';
                echo $post->post_content;
                echo '</div>';
            echo '</div>';
        }
    ?>

</div>
<!-- LOOPEN

        if(have_posts()):
            while(have_posts()):
                the_post();
                the_title();
            endwhile;
        endif;

 -->
<?php get_footer()?>