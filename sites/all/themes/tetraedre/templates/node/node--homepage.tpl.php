<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
global $base_root;
?>
          <!-- Features -->
          <section id="features">
            <header class="style1">
              <h2><?php print render($content['field_title']); ?></h2>
              <p class="byline"><?php print render($content['field_subtitle']); ?></p>
            </header>
            <div class="feature-list faces">
              <div>
                <div class="row">
                  <?php if ($faces): ?>
                    <?php foreach ($faces as $key => $face): ?>
                      <div class="3u">
                        <section class="is is-triple-one">
                          <header>
                            <h2><?php print render($face) ?></h2>
                          </header>
                          <img src="<?php print $base_root . '/' . drupal_get_path('theme', 'tetraedre'); ?>/images/face<?php print ($key + 1); ?>PNG24.png">
                        </section>
                      </div>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
              </div>
            </div>
            <div class="full-quote">
              <p class="quote"><?php print html_entity_decode(render($content['field_team_presentation'])); ?></p>
              <p class="style1"><?php print render($content['field_quote_author']); ?></p>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper wrapper-style2">
  <div class="title"><?php print t('Fields of activity'); ?></div>
  <div class="container">
    <div class="row">
      <div class="12u">
        <div class="main">
          <section id="features">
            <div class="feature-list">
              <div>
                <?php foreach ($content['field_picto_block']['#items'] as $key => $picto_block): ?>
                  <?php if ($key % 2 == 0): ?>
                    <?php if ($key > 0): ?>
                      </div>
                    <?php endif ?>
                    <div class="row">
                  <?php endif; ?>
                  <?php $picto_block = node_view($picto_block['entity']); ?>
                  <?php print render($picto_block); ?>
                <?php endforeach; ?>
              </div>
            </div>
          </section>
          <!-- /Features -->

