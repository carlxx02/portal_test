<?php get_header(); ?>

<div class="container">
    <div class="left-column">
        <div class="featured-content">
            <h2>Featured Content</h2>
            <!-- Display slider for featured posts -->
            <?php
            $featured_posts = new WP_Query(array(
                'post_type'      => 'post',
                'category_name'  => 'ns_featured_post',
                'posts_per_page' => 4,
            ));

            if ($featured_posts->have_posts()) :
                while ($featured_posts->have_posts()) : $featured_posts->the_post(); ?>
                    <div class="featured-post">
                        <h3><?php the_title(); ?></h3>
                        <span><?php the_category(', '); ?></span>
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No featured posts found.</p>
            <?php endif; ?>
        </div>

        <div class="news-content">
            <h2>NEWS Content</h2>
            <!-- Display the latest 5 posts -->
            <?php
            $news_posts = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 5,
            ));

            if ($news_posts->have_posts()) :
                while ($news_posts->have_posts()) : $news_posts->the_post(); ?>
                    <div class="news-post">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No news posts found.</p>
            <?php endif; ?>
        </div>

        <div class="pagination">
            <?php
            echo paginate_links(array(
                'prev_text' => __('&laquo; Previous'),
                'next_text' => __('Next &raquo;'),
            ));
            ?>
        </div>
    </div>

    <div class="right-column">
        <div class="events">
            <h2>Events</h2>
            <!-- Display the latest 3 events -->
            <?php
            $events = new WP_Query(array(
                'post_type'      => 'events',
                'posts_per_page' => 3,
            ));

            if ($events->have_posts()) :
                while ($events->have_posts()) : $events->the_post(); ?>
                    <div class="event">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No events found.</p>
            <?php endif; ?>
        </div>

        <div class="categories">
            <h2>Categories</h2>
            <?php wp_list_categories(); ?>
        </div>

        <div class="archives">
            <h2>Archives</h2>
            <?php wp_get_archives(); ?>
        </div>

        <div class="tags">
            <h2>Tags</h2>
            <?php wp_tag_cloud(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
