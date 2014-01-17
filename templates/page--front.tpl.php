<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">
          
    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      
      
	<nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <!-- Title Area -->
            <li class="name">
              <h1>
                <a href="http://www.arkhitech.com">
                  Arkhitech
                </a>
              </h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          
        <section class="top-bar-section">
          <?php if ($top_bar_main_menu) :?>
            <?php print $top_bar_main_menu; ?>
          <?php endif; ?>
          <?php if ($top_bar_secondary_menu) :?>
            <?php print $top_bar_secondary_menu; ?>
          <?php endif; ?>
          </section></nav>
          
          
      <?php if ($top_bar_classes): ?>
        </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>






    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
      <section class="row <?php print $alt_header_classes; ?>">

        <?php if ($linked_logo): print $linked_logo; endif; ?>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name" class="element-invisible">
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
        <?php endif; ?>

        <?php if ($alt_main_menu): ?>
          <nav id="main-menu" class="navigation" role="navigation">
            <?php print ($alt_main_menu); ?>
          </nav> <!-- /#main-menu -->
        <?php endif; ?>

        <?php if ($alt_secondary_menu): ?>
          <nav id="secondary-menu" class="navigation" role="navigation">
            <?php print $alt_secondary_menu; ?>
          </nav> <!-- /#secondary-menu -->
        <?php endif; ?>

      </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <section class="l-header-region row">
        <div class="large-12 columns">
          <?php print render($page['header']); ?>
        </div>
      </section>
      <!--/.l-header-region -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <main role="main" class="row l-main">
    <div class="<?php print $main_grid; ?> main columns">
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
          <?php print render($page['highlighted']); ?>
        </div>
      <?php endif; ?>

      <a id="main-content"></a>

      <?php if ($breadcrumb): print $breadcrumb; endif; ?>

      <?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>

      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>

      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

      <?php /*?><?php print render($page['content']); ?><?php */?>
      
      <?php if (!drupal_is_front_page()) { ?>
<?php print $content_zone; ?>
<?php } ?>


	


	<!-- Foundation Slider -->
    <?php if (theme_get_setting('slider_display','drupal_theme_foundation')): ?>
    
    
   
     <ul class="example-orbit" data-orbit>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide1.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide2.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide3.jpg" alt="slide 3" />
    <div class="orbit-caption">
      Caption Three.
    </div>
  </li>
</ul>
    
    
    
    
	<!--<div id="slider">
      <ul class="example-orbit" data-orbit>
        <li> <img src="img/slide1.jpg" alt="slide 1" />
          <div class="orbit-caption"> What separates design from art is that design is meant to be functional. </div>
        </li>
        <li> <img src="img/slide2.jpg" alt="slide 2" />
          <div class="orbit-caption"> As a rule, conventions only become conventions if they work. </div>
        </li>
        <li> <img src="img/slide3.jpg" alt="slide 3" />
          <div class="orbit-caption"> Content is king, but marketing is queen, and runs the household. </div>
        </li>
      </ul>
    </div>    -->
    <?php endif; ?>
    <!-- End of Foundation Slider -->
      
    </div>
    <!--/.l-main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> l-sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> l-sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.l-main-->

  <?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
    <!--.l-footer-->
    <footer class="l-footer panel row" role="contentinfo">
      <?php if (!empty($page['footer_first'])): ?>
        <div id="footer-first" class="large-4 columns">
          <?php print render($page['footer_first']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_middle'])): ?>
        <div id="footer-middle" class="large-4 columns">
          <?php print render($page['footer_middle']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_last'])): ?>
        <div id="footer-last" class="large-4 columns">
          <?php print render($page['footer_last']); ?>
        </div>
      <?php endif; ?>

      <?php if ($site_name) :?>
        <div class="copyright large-12 columns">
          &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
        </div>
      <?php endif; ?>
    </footer>
    <!--/.footer-->
  <?php endif; ?>

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
