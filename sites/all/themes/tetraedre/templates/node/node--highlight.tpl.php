<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="title"><?php print $node->title; ?></div>
<div class="container">
  <div class="row">
    <div class="12u">

      <article id="intro" class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

          <p class="style2">
            <?php print html_entity_decode(render($content['field_body'])); ?>
          </p>

      </article>

    </div>
  </div>
</div>
