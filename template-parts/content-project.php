<div class="portfolio__item">
    <div class="portfolio__item portfolio-item">
        <?php if(has_post_thumbnail()) { ?>
        <div class="portfolio-item__img">
            <?php echo get_the_post_thumbnail(); ?>
        </div>
        <?php }; ?>
        <div class="portfolio-item__link">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
    </div>
</div>