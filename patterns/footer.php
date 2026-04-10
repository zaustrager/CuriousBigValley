<?php
/**
 * Title: footer
 * Slug: waterville/footer
 * Inserter: no
 */
?>
<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"30px"}}}} -->
<div class="wp-block-group" style="padding-top:80px;padding-bottom:30px"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"fontSize":"medium","fontFamily":"source-serif-4"} -->
<p class="has-text-align-center has-link-color has-source-serif-4-font-family has-medium-font-size"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Proudly Powered by %1$sWordPress%2$s%3$sWaterville by Z. Austrager', 'waterville' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->