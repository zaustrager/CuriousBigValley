<?php
/**
 * Title: 404
 * Slug: waterville/404
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"color":{"background":"#f7f5f3"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group has-background" style="background-color:#f7f5f3;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);font-size:48px"><?php esc_html_e('404 Error.', 'waterville');?></h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"fontSize":"large","fontFamily":"inter"} -->
<h3 class="wp-block-heading has-text-align-center has-inter-font-family has-large-font-size" style="padding-top:0;padding-bottom:0"><?php esc_html_e('Page Not Found.', 'waterville');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"21px"}}} -->
<p class="has-text-align-center" style="font-size:21px"><?php esc_html_e('This page/post doesn\'t seem to exist, or maybe it is in another location.', 'waterville');?></p>
<!-- /wp:paragraph --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->