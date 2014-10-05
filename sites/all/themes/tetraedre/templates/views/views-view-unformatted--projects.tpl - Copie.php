<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <?php if ($id % 3 == 0): ?>
    <?php if ($id > 0): ?>
      </div>
    <?php endif ?>
    <div class="row">
  <?php endif; ?>
  <?php print $row; ?>
<?php endforeach; ?>
