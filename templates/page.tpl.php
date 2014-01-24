<!--.page -->
<div role="document" class="page">

  <!--.l-header -->
  <header role="banner" class="l-header">
          
    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
        <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
      
      
	<nav class="top-bar"<?php print $top_bar_options; ?>data-topbar>
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

      <?php /*?><?php if ($breadcrumb): print $breadcrumb; endif; ?><?php */?>

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

      <?php print render($page['content']); ?>


 <?php /*?>

	<!-- Foundation Slider -->
    <?php if (theme_get_setting('slider_display','drupal_theme_foundation')): ?>
    
    
   
     <ul class="example-orbit" data-orbit>
  <li>
    <img src="img/slide1.jpg" alt="slide 1" />
    <div class="orbit-caption">
      Caption One.
    </div>
  </li>
  <li>
    <img src="img/slide2.jpg" alt="slide 2" />
    <div class="orbit-caption">
      Caption Two.
    </div>
  </li>
  <li>
    <img src="img/slide3.jpg" alt="slide 3" />
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
      
    </div><?php */?>
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



<div class="client-wrapper">
  <div class="row">
    <div class="columns large-12">
      <ul class="client-logo">
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client1.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client2.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client3.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client4.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client5.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client6.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client7.png"></a></li>
        <li><a href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/client8.png"></a></li>
      </ul>
    </div>
  </div>
</div>



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
  
   
    <section id="site_footer_second">
    <div class="row">
  <section class="large_12 site_footer_inner">
    <div class="large-6 columns small-12 site_copyright"> <a target="_blank" href="http://www.arkhitech.com/">Arkhitech</a> &copy; 2013. All rights reserved </div>
    <div class="large-6 columns small-12 footer2_right footer_social">
    	<div class="social"> 
        <a title="Twitter" href="http://twitter.com/tabvn"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/twitter.png"></a>
        <a title="Facebook" href="http://facebook.com/TabvnGroup"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/facebook.png"></a>
        <a title="Linkedin" href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/linkedin.png"></a>
        <a title="Skype" href="skype:?call"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/skype.png"></a> 
        <a title="RSS" href="#"><img alt="" src="/sites/all/themes/drupal_theme_foundation/images/rss.png"></a> 
      </div>    
    </div>
    <div class="clear"></div>
  </section>
  </div>
  <div class="clear"></div>
</section>
   
   
</div>
<!--/.page -->
