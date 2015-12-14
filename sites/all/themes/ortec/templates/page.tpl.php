<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>


  <header class="header" id="header" role="banner">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
    <?php endif; ?>
          <div class="mobile-menu close">
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </div>
    <div id="navigation">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>

    <?php if ($site_name || $site_slogan): ?>
      <div class="header__name-and-slogan" id="name-and-slogan">
        <?php if ($site_name): ?>
          <h1 class="header__site-name" id="site-name">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
          </h1>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

    <?php if ($secondary_menu): ?>
      <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
        <?php print theme('links__system_secondary_menu', array(
          'links' => $secondary_menu,
          'attributes' => array(
            'class' => array('links', 'inline', 'clearfix'),
          ),
          'heading' => array(
            'text' => $secondary_menu_heading,
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </nav>
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </header>
<div id="page">

  <div id="main">

    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>

      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title">
          <div class="wrapper-width">
              <div class="image">
                  <?php if (isset($page_banner)) : print $page_banner; endif; ?>
              </div>
              <div class="title"><?php print $title; ?></div>
          </div>
        </h1>      
      <?php endif; ?>
      <div class="wrapper-width">
        <?php print render($title_suffix); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
      <?php print render($page['content_bottom']); ?>
      <?php print $feed_icons; ?>
    </div>



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
  <div class="wrapper-footer">
    <?php print render($page['footer']); ?>
  </div>
</div>
  <?php
    if (isset($node)) {
    if (drupal_is_front_page() || ($node->type == "webform")){ ?>
    <iframe class="map" allowfullscreen="" frameborder="0" height="450" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13505.393540614668!2d34.8786349!3d32.1948419!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb472745b8b181e01!2z15DXldeo15jXpyDXqdeZ15XXldenINem15nXldeTINeV15DXodek16fXlCDXkdeiItee!5e0!3m2!1siw!2sil!4v1449560511525" style="border:0" width="100%"></iframe>
    <?php }}
    ?>
  <div class="wrapper-bottom">
    <?php print render($page['bottom']); ?>
  </div>
