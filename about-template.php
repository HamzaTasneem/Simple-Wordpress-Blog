<?php
/*
Template Name: About Page Template
*/
get_header(); ?>
<div class="main">
    <div class=" self-col self-left-col ">

        <div class="col-content">

            <!-- strart of wp-loop -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="left-col">
                        <h2>About Me</h2>
                        <div class="myself-text">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="mid-col">
                        <h2>&zwnj;&zwnj;&zwnj;&zwnj;</h2>
                        <div class="myself-box">
                            <?php if (has_post_thumbnail()) { ?>
                                <?php the_post_thumbnail("medium", array('class' => 'myself-img')); ?>
                            <?php } ?>
                        </div>
                        <div class="exp-bar-div">
                            <div class="exp-bar">
                                <div class="exp-bar-text"><span style="text-align: left;">Experience</span> 4+ Years
                                </div>
                                <div class="exp-bar-outer">
                                    <div class="exp-bar-inner"></div>
                                </div>
                            </div>

                        </div>
                        <div class="follow-box">
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/facebook.png" alt=""></a>
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/twitter.png" alt=""></a>
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/linkedin.png" alt=""></a>
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/pinterest.png" alt=""></a>
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/Github.png" alt=""></a>
                            <a href="#"><img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/social/Instagram.png" alt=""></a>
                        </div>

                    </div>

                    <div class="right-col">
                        <h2>My Skills</h2>
                        <div class="skills">
                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>Nodejs</span> <span>45%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:45%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>PHP</span> <span>70%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:70%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>MySQL & MongoDB</span> <span>65%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:65%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>Wordpress: Theme & Plugin</span> <span>70%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:70%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>Javascript & JQuery</span> <span>75%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:75%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span> Skills: HTML5, CSS3, Bootstrap</span>
                                        <span>75%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:75%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>Tools: 3D Modeling, Photoshop, IoT</span>
                                        <span>25%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:25%;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skills-bar-box">
                                    <div class="skill-text"><span>Java</span>
                                        <span>15%</span></div>
                                    <div class="skill-bar">
                                        <div class="bar-back" style="width:15%;"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                <?php endwhile;
                else : ?>
                <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>


        </div>
    </div>
    <div class=" self-col self-mid-col ">
        <div class="col-content">

            <div class="left">
                <div class="myservices-box">
                    <h2>Services</h2>
                    <div class="services">

                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/web dev/web dev 1.png" alt="Person" width="96" height="96">
                            Web Development
                        </div>

                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/web design/web design1.jpg" alt="Person" width="96" height="96">
                            Web Designing
                        </div>
                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/desktop dev/desktop dev1.png" alt="Person" width="96" height="96">
                            Desktop Development
                        </div>
                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/mob dev/mob dev resized.jpg" alt="Person" width="96" height="96">
                            Mobile Development
                        </div>
                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/data science/data science dev 2.jpg" alt="Person" width="96" height="96">
                            Data Sciences
                        </div>
                        <div class="chip">
                            <img src="/blog/wp-content/themes/ht_blog_theme/public/img/icons/services/social marketing/social marketing resized.jpg" alt="Person" width="96" height="96">
                            Social Marketing
                        </div>

                    </div>

                </div>
            </div>
            <div class="right">
                <h2>Contact Form</h2>
                <form action="#" style="max-width:500px;margin:auto">

                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Name" name="usrnm">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <input class="input-field" type="text" placeholder="Email" name="email">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-key icon"></i>
                        <input class="input-field" type="text" placeholder="Subject" name="psw">
                    </div>

                    <div class="input-container">
                        <i class="fa fa-envelope icon"></i>
                        <textarea class="input-field" rows="7" placeholder="Message Here" name="psw"></textarea>
                    </div>

                    <button type="submit" class="btn">Register</button>
                </form>

            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>