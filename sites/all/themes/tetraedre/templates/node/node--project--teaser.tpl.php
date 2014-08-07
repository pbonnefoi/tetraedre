<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="4u">
  <section class="highlight highlight-three">
    <!--<a href="<?php print url('node/' . $node->nid); ?>" class="image image-full">--><div class="image image-full"><?php print render($content['field_project_image']); ?></div><!--</a>-->
    <h3><!--<a href="<?php print url('node/' . $node->nid); ?>">--><?php print $node->title; ?><!--</a>--></h3>
    <div class="project-subtitle">
      <h4><?php print render($content['field_place']); ?></h4>
      <h5>- <?php print render($content['field_customer']); ?> -</h5>
    </div>
    <?php print render($content['body']); ?>
    <!--<ul class="actions">
      <li><a href="<?php print url('node/' . $node->nid); ?>" class="button button-style1"><?php print t('Discover'); ?></a></li>
    </ul>-->
  </section>
</div>
