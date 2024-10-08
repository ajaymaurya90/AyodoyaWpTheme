<?php

/**
 * Single Post Page Template
 * 
 * @package ayodoya;
 */
get_header();
?>

<div id="primary">
    <main id="main" class="site-main" role="main">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <?php 
                    if (have_posts()){  
                    ?>
                        <div class="post-wrap">
                        <?php
                            // To display the Blog page Title
                            if (is_home() && !is_front_page()) {
                            ?>
                                <header class="mb-5 mt-3">
                                    <h1 class="page-title">
                                        <?php single_post_title(); ?>
                                    </h1>
                                </header>
                            <?php
                            }
                            //Show post content
                            while (have_posts()) : the_post();
                                get_template_part('template-parts/content');

                            endwhile;
                        ?>
                        </div>
                    <?php    
                    }
                    else {
                        get_template_part('template-parts/content-none');
                    }
                    ?>
                    <!-- Next and previous post link for page navigation -->
                    <div class="pre-link"><?php previous_post_link(); ?></div>
                    <div class="next-link"><?php next_post_link(); ?></div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php get_footer() ?>