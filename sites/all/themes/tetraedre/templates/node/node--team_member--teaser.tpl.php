<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div class="6u node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <section>
    <div class="header-profile">
      <div class="image image-full"><?php print render($content['field_photo_profil']); ?></div>
      <h3><?php print $node->title; ?></h3>
      <h4><?php print render($content['field_poste']); ?></h4>
    </div>
    <div class="profile-lists">
      <h4><?php print t('Studies'); ?></h4>
      <ul class="default-list">
        <?php foreach ($content['field_formation']['#items'] as $key => $formation): ?>
          <li><?php print $formation['safe_value']; ?></li>
        <?php endforeach; ?>
      </ul>
      <h4><?php print t('Experience'); ?></h4>
      <ul class="default-list">
        <?php foreach ($content['field_experience']['#items'] as $key => $experience): ?>
          <li><?php print $experience['safe_value']; ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </section>
</div>
