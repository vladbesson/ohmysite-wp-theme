<?php
/* Template Name: Portfolio Template */

get_header(); ?>

    <main>
        <div class="page portfolio">
            <div class="page__wrapper">
                <header class="page__header">
                    <h1 class="page__title">Portfolio</h1>
                </header>

                <div class="portfolio__list clearfix">
                    <?php
                    $args = array(
                        'posts_per_page' => 5,
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
    </main>

<?php
get_footer();
