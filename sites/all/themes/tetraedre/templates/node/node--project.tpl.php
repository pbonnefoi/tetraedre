<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
          <section id="features" class="project-top">
            <div class="feature-list faces">
              <div>
                <div class="row">
                  <div class="12u">
                    <div class="main">
                      <section id="features">
                        <div class="feature-list">
                          <div class="row">
                            <div class="6u project-parts">
                            <section class="highlight highlight-three project-head">
                              <div class="taxo">
                                <?php print render($content['field_domaines']); ?>
                              </div>
                              <h3><?php print $node->title; ?></h3>
                              <div class="project-subtitle">
                                <h4><?php print render($content['field_place']); ?></h4>
                                <h5>- <?php print render($content['field_customer']); ?> -</h5>
                              </div>
                            </section>
                            </div>
                            <div class="6u project-parts">
                              <div class="project-description">
                                <?php print render($content['body']); ?>
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
          </section>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="wrapper wrapper-likestyle3">
  <div class="title"><?php print t('Gallery'); ?></div>
  <div class="container">
    <div class="row">
      <div class="12u">
        <div class="main">
          <div class="images-wrapper">
            <div class="project-pictures">
              <?php foreach ($content['field_project_image']['#items'] as $key => $image): ?>
                <?php if ($image['width'] <= 960 && $image['width'] > 500): ?>
                  <div class="large">
                    <a href="<?php print url('node/' . $node->nid); ?>" class="image image-featured">
                      <?php print render(field_view_value('node', $node, 'field_project_image', $image)); ?>
                    </a>
                  </div>
                <?php else: ?>
                  <div class="narrow">
                    <a href="<?php print url('node/' . $node->nid); ?>" class="image image-featured">
                      <?php print render(field_view_value('node', $node, 'field_project_image', $image)); ?>
                    </a>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
            </div>
          </div>
