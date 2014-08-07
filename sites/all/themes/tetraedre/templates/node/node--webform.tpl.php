<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<section class="footer-one">
  <header>
    <h2><?php print $node->title; ?></h2>
    <?php print render($content['body']); ?>
  </header>
  <?php print render($content['webform']); ?>
</section>
