<?php

/**
 * Main template file
 * 
 * @package ayodoya
 */

get_header();
?>


<div id="primary">
    <main id="main" class="site-main" role="main">
        <?php 
        if (have_posts()): 
        ?>
            <div class="container">
                <?php
                // To display the Blog page Title
                if (is_home() && !is_front_page()){
                ?>
                    <header class="mb-5 mt-3">
                        <h1 class="page-title">
                            <?php single_post_title(); ?>
                        </h1>

                    </header>
                <?php
                }
                ?>
                <div class="row ">
                    <?php
                    // to display the blogs list in row box
                    $index = 0;
                    $no_of_columns = 2;

                    //Start the loop
                    while (have_posts()) : the_post();
                        if (0 === $index % $no_of_columns) {
                    ?>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php
                        }
                        get_template_part('template-parts/content');
                        $index++;

                        if ((0 !== $index) && (0 === $index % $no_of_columns)) {
                            ?>
                            </div>
                    <?php
                        }
                    endwhile;
                    ?>
                </div>
            
        <?php 
        else :
            get_template_part('template-parts/content-none');
        
        endif; 
        ?>

    </div>

    </main>
</div>

<?php
get_footer();
?>