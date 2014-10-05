<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="picto-teaser 3u node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <section>
    <?php print render($content['field_picto']); ?>
    <h3><?php print $node->title; ?></h3>
  </section>
</div>
