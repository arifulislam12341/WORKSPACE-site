<?php
/**
 * Displays footer site info
 *
 * @package Film Maker Lite
 * @subpackage film_maker_lite
 */

?>
<div class="site-info">
    <div class="container">
        <p><?php film_maker_lite_credit();?> <?php echo esc_html(get_theme_mod('film_maker_lite_footer_text',__('By Themespride','film-maker-lite'))); ?></p>
    </div>
</div>