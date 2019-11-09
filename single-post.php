<?php get_header(); ?>
<div class="main">

    <div class="blog-col blog-left-col blog-col-single ">
        <div class="col-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post-single">
                        <div class="post-single-description">
                            <h2 class="post-single-title"><?php the_title(); ?></h2>
                            <div class="post-single-subtitle">
                                <span>
                                    By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?> in &nbsp;
                                    <span class="categories">
                                        <small> <?php the_category(' '); ?> </small>
                                    </span>
                                </span>

                                <span>
                                    <img src="<?php bloginfo('template_url'); ?>/public/img/icons/social/facebook.png" alt="" />
                                    <img src="<?php bloginfo('template_url'); ?>/public/img/icons/social/twitter.png" alt="" />
                                </span>
                            </div>
                            <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail("full", array('class' => 'post-single-img'));
                                    } ?>

                            <div class="post-single-text">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>


        </div>
    </div>

    <div class="blog-col blog-right- blog-single-right-col">
        <div class="col-content">
            <h2>Related Content</h2>
            <div class="related-box">

                <?php

                        $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
                        if ($related) foreach ($related as $post) {
                            setup_postdata($post); ?>
                    <div class="post">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink() ?>">
                                <?php the_post_thumbnail("large", array('class' => 'post-img')); ?>
                            </a>
                        <?php   }
                                    ?>
                        <div class="post-description">
                            <div class="post-title"><?php the_title(); ?></div>
                        </div>
                    </div>

                <?php }
                        wp_reset_postdata();
                        ?>
            </div>
        </div>
    </div>

<?php endwhile;
else : ?>
<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


</div>
<?php get_footer(); ?>