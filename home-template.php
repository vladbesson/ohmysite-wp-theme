<?php
/* Template Name: Home Page Template */

get_header(); ?>

    <main>
        <div class="home-slider">
            <div class="home-slider__wrapper">
                <div id="home-slider" class="home-slider__list">
                    <div class="home-slider__item">
                        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide2.jpg" alt=""></a>
                    </div>
                    <div class="home-slider__item">
                        <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slide1.jpg" alt=""></a>
                    </div>
                </div>

                <div class="home-slider__controls">
                    <span class="home-slider__arrow home-slider__arrow--left"></span>
                    <span class="home-slider__arrow home-slider__arrow--right"></span>
                </div>
            </div>
        </div>

        <div class="home-portfolio">
            <div class="home-portfolio__wrapper">
                <header>
                    <h2 class="secondary-title">My recent works</h2>
                </header>

                <div class="home-portfolio-slider">
                    <div class="scrollyeah">
                        <?php
                        $args = array(
                            'posts_per_page' => 10,
                            'post_type' => 'project',
                        );
                        $query = new WP_Query( $args );
                        ?>

                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            include 'template-parts/content-project.php';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-content">
            <div class="home-content__wrapper clearfix">
                <div class="about-me">
                    <header>
                        <h2 class="secondary-title">About me</h2>
                    </header>
                    <div class="clearfix">
                        <div class="about-me__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/avatar.jpg" alt="">
                        </div>
                        <div class="about-me__text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non, quae.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad alias aliquid aut beatae blanditiis corporis distinctio dolore eligendi, facere ipsum laborum magni nisi odit porro praesentium qui reiciendis repellat sit!
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid expedita fuga impedit molestiae natus perspiciatis praesentium suscipit veritatis vitae, voluptate.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="recent-blog-posts">
                    <header>
                        <h2 class="secondary-title">Recent blog posts</h2>
                    </header>
                    <ul class="recent-blog-posts__list">
                        <?php
                        $args = array(
                            'posts_per_page' => 5,
                        );
                        $query = new WP_Query( $args );
                        ?>

                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            echo '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
