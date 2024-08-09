<?php 
/**
 * Template part for displaying message that post can not be found
 * 
 * @package Ayodoya
 */
?>

<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"> <?php esc_html_e('Nothing Found', 'ayodoya')?></h1>
    </header>

    <div class="page-content">
        <?php 
            if(is_home() && current_user_can('publish_posts')){
            ?>
                <p><?php 
                    printf(
                        wp_kses(
                            __('Ready to publish your first post? <a href="%s">Get Started here</a>', 'ayodoya'), 
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                                ),
                            esc_url(admin_url('post-new.php'))
                    )
                ?>
                </p>
            <?php
            }elseif(is_search()){
                ?>
                <p><?php esc_html_e('Sorry, nothing matched with your search item, Please try again with different keyword', 'ayodoya' )?></p>
                <?php 
                get_search_form();
            } else{
                ?>
                <p><?php esc_html_e('It seems that we can not find what you are looking for, perhaps search can help', 'ayodoya' )?></p>
                <?php 
                get_search_form();
            }
        ?>
    </div>
</section>
