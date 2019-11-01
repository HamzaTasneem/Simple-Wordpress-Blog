<?php get_header(); ?>
<div class="main">

    <div class="blog-col blog-left-col ">
        <div class="col-content">
            <div class="posts">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="post">
                            <?php if (has_post_thumbnail()) { ?>

                                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail("medium", array('class' => 'post-img')); ?>
                                </a>
                            <?php } ?>

                            <div class="post-description">
                                <div class="post-title" description="<?php the_content(); ?>">
                                    <span><?php the_title(); ?> </span>
                                    
                                </div>
                                <div class="post-metadata">
                                <small class="author"><?php the_time('F jS, Y'); ?> by <b><?php the_author_posts_link(); ?></b></small>
                                    <p class="categories">
                                        <small> <?php the_category(' '); ?> </small>
                                    </p>
                                </div>

                            </div>
                        </div>

                    <?php endwhile;
                    else : ?>
                    <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="blog-col blog-right-col blog-right-col-summary">
        <div class="col-content">
            <div class="most-viewed-box">
                <div class="most-viewed-content">
                    <img class="most-viewed-img" src="<?php bloginfo('template_url'); ?> /public/img/icons/mouse-hover.gif" alt="">
                    <div class="most-viewed-title">Hover over any post to see its preview.</div>
                    <div class="most-viewed-text"></div>
                    <div id="postOverview" 
                        src="<?php bloginfo('template_url'); ?> /public/img/icons/mouse-hover.gif" 
                        text="Hover over any post to see its preview." 
                         >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>