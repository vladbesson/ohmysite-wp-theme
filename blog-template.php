<?php
/* Template Name: Blog Page Template */

get_header(); ?>

    <main>
        <div class="page blog-page">
            <div class="page__wrapper clearfix">
                <div class="page__content">
                    <header class="page__header">
                        <h1 class="page__title">Blog</h1>
                    </header>

                    <div class="blog-page__list">
                        <?php
                        $args = array(
                            'posts_per_page' => 5,
                        );
                        $query = new WP_Query( $args );
                        ?>

                        <?php
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            include 'template-parts/content-single.php';
                        }
                        ?>

                    </div>
                </div>

                <div class="page__sidebar">
                    <section class="widget widget_recent_entries">
                        <h2>Recent Posts</h2>
                        <ul>
                            <li><a href="/post.html">Easy Steps To Better Icon Design</a></li>
                            <li><a href="/post.html">Design Principles To Evaluate Your Product</a></li>
                            <li><a href="/post.html">A Little Journey Through (Small And Big) E-Commerce Websites</a></li>
                            <li><a href="/post.html">Powerful Workflow Tips, Tools And Tricks For Web Designers</a></li>
                        </ul>
                    </section>

                    <section class="widget widget_categories">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="/blog.html">Graphic design</a></li>
                            <li><a href="/blog.html">UX design</a></li>
                            <li><a href="/blog.html">Traveling</a></li>
                            <li><a href="/blog.html">Lifehacks</a></li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </main>

<?php
get_footer();
