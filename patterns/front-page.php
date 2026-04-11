<?php
/**
 * Title: front-page
 * Slug: waterville/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"color":{"background":"#f7f5f3"},"spacing":{"padding":{"right":"2.25rem","left":"2.25rem"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group has-background" style="background-color:#f7f5f3;padding-right:2.25rem;padding-left:2.25rem"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"48px"},"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-center has-inter-font-family" style="padding-top:20px;padding-bottom:20px;font-size:48px"><?php esc_html_e('Welcome to my blog!', 'waterville');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"21px"}}} -->
<p class="has-text-align-center" style="font-size:21px"><?php esc_html_e('This is a simple theme designed for writers.', 'waterville');?></p>
<!-- /wp:paragraph -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"layout":{"contentSize":null,"type":"constrained"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:separator {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"backgroundColor":"black"} -->
<hr class="wp-block-separator has-text-color has-black-color has-alpha-channel-opacity has-black-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"medium","fontFamily":"inter","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-inter-font-family has-medium-font-size" style="font-style:normal;font-weight:400"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"23px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} /-->

<!-- wp:post-date {"datetime":"2026-02-01T00:08:55.539Z","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"metadata":{"blockVisibility":false},"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers {"fontSize":"medium"} /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"18px"},"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontFamily":"source-serif-4"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color has-source-serif-4-font-family" style="font-size:18px"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sClick here to view the full archive%2$s!', 'waterville' ), '<a href="' . esc_url( '/archive' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->