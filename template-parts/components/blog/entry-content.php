<?php 

/**
 * Template for entry content
 * 
 * To be used inside WordPress The Loop
 * 
 * @package Ayodoya
 */
?>

<div class="entry-content">

<?php 
    if(is_single()){
        the_content(
           sprintf(
                wp_kses(
                     __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'ayodoya'),
                     [
                        'span' => [
                            'class' => []
                        ]
                     ]
                        ),
                        the_title('<span class="screen-reader-text">"', '"</span>', false)

           ) 
        );

        //for the pagination of pagebreaks 
        wp_link_pages(
            [
                'before' => '<div class="page-links">' . esc_html__('Pages', 'ayodoya'),
                'after' => '</div>',
            ]
            );
    }
    else{
        ayodoya_the_excerpt(200);
        printf( '<br>' );
        echo ayodoya_excerpt_more();
    }
?>
</div>
