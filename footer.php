<?php

/**
 * Footer Template
 * 
 * @package Ayodoya
 */
?>

<footer>
<div class="container">
    <?php 
        if(is_active_sidebar('sidebar-2')){
            ?>
            <aside>
                <?php dynamic_sidebar('sidebar-2'); ?>
            </aside>
        <?php
        }
    ?>
</div>
</footer> 



<!-- End of div id:content -->
</div>
<!-- End of div id:page -->
</div>
<?php wp_footer(); ?>
</body>
</html>