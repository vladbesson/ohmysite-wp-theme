<?php

get_header(); ?>

    <main>
        <div class="page portfolio-item">
            <div class="page__wrapper">
                <?php the_post(); ?>
                <header class="page__header">
                    <h1 class="page__title"><?php the_title(); ?></h1>
                </header>

                <div class="portfolio-item__wrapper clearfix">
                    <div class="portfolio-item__right">
                        <?php the_field('project_text'); ?>
                    </div>

                    <div class="portfolio-item__left">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
