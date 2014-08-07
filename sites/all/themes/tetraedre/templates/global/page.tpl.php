<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<!-- Header Wrapper -->
<div id="header-wrapper" class="wrapper">
  <div class="container">
    <div class="row">
      <div class="12u">

        <header class="header" id="header" role="banner">

          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <div class="header__name-and-slogan" id="name-and-slogan">

              <?php if ($site_slogan): ?>
                <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>

          <?php print render($page['header']); ?>

        </header>

      </div>
    </div>
  </div>
</div>
<!-- /Header Wrapper -->

<?php if ($highlight): ?>
  <!-- Intro Wrapper -->
  <div id="intro-wrapper" class="wrapper wrapper-style1">
    <?php print render($highlight); ?>
  </div>
  <!-- /Intro Wrapper -->
<?php endif ?>

<!-- Main Wrapper -->
<div class="wrapper wrapper-style3">
  <?php if ($title): ?>
    <div class="title"><h1><?php print $title; ?></h1></div>
  <?php endif; ?>
  <div class="container">
    <div class="row">
      <div class="12u">

        <div id="main">

          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>

          <?php
            // Render the sidebars to see if there's anything in them.
            $sidebar_first  = render($page['sidebar_first']);
            $sidebar_second = render($page['sidebar_second']);
          ?>

          <?php if ($sidebar_first || $sidebar_second): ?>
            <aside class="sidebars">
              <?php print $sidebar_first; ?>
              <?php print $sidebar_second; ?>
            </aside>
          <?php endif; ?>

        </div>

      </div>
    </div>
  </div>
</div>

<?php if ($projects): ?>
  <!-- Highlights Wrapper -->
  <div class="wrapper wrapper-style3">
    <div class="title"><?php print t('Latest Projects'); ?></div>
    <div class="container">
      <div class="row">
        <div class="12u">

          <!-- Highlights -->
            <div id="highlights">
              <div>
                <div class="row">
                  <?php foreach ($projects as $key => $project): ?>
                    <?php print render($project); ?>
                  <?php endforeach ?>
                </div>
              </div>
            </div>
          <!-- /Highlights -->

        </div>
      </div>
    </div>
  </div>
  <!-- /Highlights Wrapper -->
<?php endif ?>

<!-- Footer Wrapper -->
<div id="footer-wrapper" class="wrapper">
  <div class="title"><?php print t('Contact'); ?></div>
  <div class="container">
    <div class="row">
      <div class="12u">
        <div id="footer">
          <div>
            <div class="row">
              <div class="6u">

                <!-- Contact Form -->
                <?php $contact_form = node_view(node_load(9)); ?>
                <?php print render($contact_form); ?>
                <!-- /Contact Form -->

              </div>
              <div class="6u">

              <!-- Contacts -->
              <section class="footer-two">
                <div class="feature-list feature-list-small">
                  <div>
                    <div class="row">
                      <div class="6u">
                        <section>
                          <h3 class="fa fa-envelope"><?php print t('E-mail'); ?></h3>
                          <p>
                            <strong>Noémie Grégoire</strong> : <br /><a href="mailto:ngregoire@atelier-tetraedre.com" class="email">ngregoire@atelier-tetraedre.com</a><br />
                            <strong>Claire Holvoet-Verlaut</strong> : <br /><a href="mailto:cholvoet@atelier-tetraedre" class="email">cholvoet@atelier-tetraedre</a>
                          </p>
                        </section>
                      </div>
                      <div class="6u">
                        <section>
                          <h3 class="fa fa-phone"><?php print t('Phone'); ?></h3>
                          <p>
                            <strong>Noémie Grégoire</strong> : <br /><span class="phone"><?php print variable_get('tetraedre_phone_1', '+33 6 32 11 02 10'); ?><br /></span>
                            <strong>Claire Holvoet-Verlaut</strong> : <br /><span class="phone"><?php print '+33 6 21 13 15 77'; ?></span>
                          </p>
                        </section>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            <!-- /Contacts -->
            </div>
          </div>
        </div>
        <hr />
      </div>
    <!-- /Footer -->

    <!-- Copyright -->
      <div id="copyright">
        <span>
          &copy; <a href="http://gregoirenoemie.wix.com/my-work-on-line">Noémie Grégoire</a> & Claire Holvoet-Vermaut - Paris 2014. Website <a href="http://www.pierre-bonnefoi.com/">Pierre Bonnefoi</a>.
        </span>
      </div>
    <!-- /Copyright -->
      </div>
    </div>
  </div>
</div>
<!-- /Footer Wrapper -->

<?php print render($page['bottom']); ?>
