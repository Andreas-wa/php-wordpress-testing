<?php get_header() ?>

<div class="posts">

    <?php
        $posts = get_posts();
        foreach($posts as $post) {
            echo '<div class="posts__post">';
                echo "<h2>$post->post_title - $post->post_date</h2>";

                echo get_the_author_meta('first_name', $post->post_author) ." ". get_the_author_meta('last_name', $post->post_author);

                echo '<div class="post__content">';
                echo $post->post_content;
                echo '</div>';
            echo '</div>';
        }
    ?>

</div>

<?php get_footer()?>