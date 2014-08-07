<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<div>
  <div class="row">
    <div class="12u skel-cell-important">

      <!-- Content -->
        <div id="content">
          <article class="is is-post">
            <header class="style1">
              <h2><?php print $node->title; ?></h2>
              <span class="byline">Tempus feugiat veroeros sed nullam dolore</span>
            </header>
            <a href="<?php print url('node/' . $node->nid); ?>" class="image image-featured">
              <?php print render($content['field_project_image']); ?>
            </a>
            <p>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
            odio eleifend. Duis commodo fringilla commodo. Aliquam erat volutpat. Vestibulum
            facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
            tempus euismod. Vestibulum ante ipsum primis in faucibus.</p>
            <p>Phasellus nisl nisl, varius id porttitor sed, pellentesque ac orci. Pellentesque
            habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi
            bibendum justo sed mauris vehicula malesuada aliquam elit imperdiet. Aliquam eu nibh
            lorem, eget gravida mi. Duis odio diam, luctus et vulputate vitae, vehicula ac dolor.
            Pellentesque at urna eget tellus lobortis ultrices sed non erat. Donec eget erat non
            magna volutpat malesuada quis eget eros. Nullam sodales cursus sapien, id consequat
            leo suscipit ut. Praesent id turpis vitae turpis pretium ultricies. Vestibulum sit
            amet risus elit.</p>
            <p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
            ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
            eget quam rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
            eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
            tincidunt felis sagittis eget. Donec elementum ligula dignissim sem pulvinar non semper
            odio eleifend. Duis commodo fringilla commodo. Aliquam erat volutpat. Vestibulum
            facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
            tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia.</p>
            <p>Phasellus nisl nisl, varius id porttitor sed, pellentesque ac orci. Pellentesque
            habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi
            bibendum justo sed mauris vehicula malesuada aliquam elit imperdiet. Aliquam eu nibh
            lorem, eget gravida mi. Duis odio diam, luctus et vulputate vitae, vehicula ac dolor.
            Pellentesque at urna eget tellus lobortis ultrices sed non erat. Donec eget erat non
            magna volutpat malesuada quis eget eros. Nullam sodales cursus sapien, id consequat
            leo suscipit ut. Praesent id turpis vitae turpis pretium ultricies. Vestibulum sit
            amet risus elit.</p>
          </article>
          <div>
            <div class="row">
              <div class="4u">
                <section class="is is-triple-one">
                  <header>
                    <h2>Magna pulvinar tempus</h2>
                  </header>
                  <a href="http://fav.me/d5uvswq" class="image image-full"><img src="images/pic05.jpg" alt="" /></a>
                  <p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
                  eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
                  tempus.</p>
                  <a href="#" class="button button-style1">More</a>
                </section>
              </div>
              <div class="4u">
                <section class="is is-triple-two">
                  <header>
                    <h2>Magna pulvinar tempus</h2>
                  </header>
                  <a href="http://fav.me/d5qdf2o" class="image image-full"><img src="images/pic06.jpg" alt="" /></a>
                  <p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
                  eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
                  tempus.</p>
                  <a href="#" class="button button-style1">More</a>
                </section>
              </div>
              <div class="4u">
                <section class="is is-triple-three">
                  <header>
                    <h2>Magna pulvinar tempus</h2>
                  </header>
                  <a href="http://fav.me/d5qdf2o" class="image image-full"><img src="images/pic07.jpg" alt="" /></a>
                  <p>Rutrum bibendum. Proin pellentesque diam non ligula commodo tempor. Vivamus
                  eget urna nibh. Curabitur non fringilla nisl. Donec accumsan interdum nisi, quis
                  tempus.</p>
                  <a href="#" class="button button-style1">More</a>
                </section>
              </div>
            </div>
          </div>
        </div>
      <!-- /Content -->

    </div>
  </div>
</div>
