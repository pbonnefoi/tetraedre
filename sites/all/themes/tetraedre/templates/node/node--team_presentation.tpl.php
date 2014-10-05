<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
          <section id="features">
            <div class="feature-list faces">
              <div>
                <div class="row">
                  <div class="12u">
                    <div class="main">
                      <section id="features">
                        <div class="feature-list">
                          <?php foreach ($content['field_team_member']['#items'] as $key => $team_member): ?>
                            <?php if ($key % 2 == 0): ?>
                              <?php if ($key > 0): ?>
                                </div>
                              <?php endif ?>
                              <div class="row">
                            <?php endif; ?>
                            <?php $team_member = node_view($team_member['entity'], 'teaser'); ?>
                            <?php print render($team_member); ?>
                          <?php endforeach; ?>
                        </div>
                      </section>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper wrapper-style2">
  <div class="title"><?php print t('Partners'); ?></div>
  <div class="container">
    <div class="row">
      <div class="12u">
        <div class="main">
          <section id="features">
            <div class="full-quote">
              <p class="style1"><?php print render($content['body']); ?></p>
            </div>
            <div class="feature-list">
              <div>
                <?php foreach ($content['field_picto_block']['#items'] as $key => $picto_block): ?>
                  <?php if ($key % 4 == 0): ?>
                    <?php if ($key > 0): ?>
                      </div>
                    <?php endif ?>
                    <div class="row">
                  <?php endif; ?>
                  <?php $picto_block = node_view($picto_block['entity'], 'teaser'); ?>
                  <?php print render($picto_block); ?>
                <?php endforeach; ?>
              </div>
            </div>
          </section>
