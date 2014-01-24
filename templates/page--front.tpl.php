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


<!-- Foundation Slider -->
    <?php if (theme_get_setting('slider_display','drupal_theme_foundation')): ?>
    
    
   
     <ul class="example-orbit" data-orbit>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide1.jpg" alt="slide 1" />
    <!--<div class="orbit-caption">
      Caption One.
    </div>-->
  </li>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide2.jpg" alt="slide 2" />
    
  </li>
  <li>
    <img src="<?php print base_path() . drupal_get_path('theme', 'drupal_theme_foundation') ;?>/images/slide3.jpg" alt="slide 3" />
   
  </li>
</ul>
    
    <?php endif; ?>
    <!-- End of Foundation Slider -->


<div id="highlightedRegion" class="dark" align="center">
<div class="row">
<blockquote>
    <p>"We are a company that colaborate with clients Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lorem ipsum smit dolor, consectetuer adipiscing elit"</p>
</blockquote>
</div>
</div>


<div class="row">
<div class="home_service large-4 medium-4 small-12">
  <div class="s_title s_color_1">
    <div class="st_in">
      <h2>Responsive Design</h2>
    </div>
  </div>
  <div class="service_text s_users">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
  <div class="clear"></div>
  <div class="service_text s_heart">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
</div>
<!-- End service -->

<div class="home_service large-4 medium-4 small-12">
  <div class="s_title s_color_2">
    <div class="st_in">
      <h2>Profoundly Customizable</h2>
    </div>
  </div>
  <div class="service_text s_magic">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
  <div class="clear"></div>
  <div class="service_text s_brush">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
</div>
<!-- End service -->

<div class="home_service large-4 medium-4 small-12">
  <div class="s_title s_color_3">
    <div class="st_in">
      <h2>Clean & Modern Design</h2>
    </div>
  </div>
  <div class="service_text s_mobile">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
  <div class="clear"></div>
  <div class="service_text s_monitor">
    <p>Scola somnis angelorum haec sed dominum oculos ut sua in fuerat se vero cum unde non solutionem ascendens.</p>
  </div>
</div>
</div>
</div>




<div class="row">
<div class="featured"> 
  <!--left col -->
  <div class="large-8 columns alpha">
    <h3>Key Features</h3>
    <p class="key">Proin nibh magna, ullamcorper a semper ut, sodales et nisi. Nam convallis augue sagittis eros fringilla quis malesuada tortor accumsan. Ut tempor ultricies neque eu hendrerit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis neque a nunc gravida non egestas leo condimentum. Vestibulum id consectetur augue.</p>
    
    <!--//row-->
    <div class="row">
      <div class="large-6 columns alpha">
        <div class="featured-title">
          <p><img alt="Creative Solutions" src="/sites/all/themes/drupal_theme_foundation/images/light.png"><strong>Creative Solutions</strong></p>
        </div>
        <p class="key">Vestibulum a gravida lectus. Nulla facilisi. Donec dignissim, libero quis sagittis vestibulum, sapien dolor pellentesque orci, vel lacinia quam somnisi sodales orci. </p>
      </div>
      <!--// column-->
      <div class="large-6 columns omega">
        <div class="featured-title">
          <p><img alt="Information Protection" src="/sites/all/themes/drupal_theme_foundation/images/vault.png"><strong>Information Protection</strong></p>
        </div>
        <p class="key">Suspendisse mollis, erat sit amet dapibus bibendum, turpis massa euismod tellus, in dictum nisi magna quis odio. Duis metus, nec scelerisque lorem hendrerit ut. </p>
      </div>
      <!--// column-->
     <p></p>
    </div>
    
    
    <div class="row">
      <div class="large-6 columns alpha">
        <div class="featured-title">
          <p><img alt="Strategic Planning" src="/sites/all/themes/drupal_theme_foundation/images/strategy.png"><strong>Strategic Planning</strong></p>
        </div>
        <p class="key">Vestibulum a gravida lectus. Nulla facilisi. Donec dignissim, libero quis sagittis vestibulum, sapien dolor pellentesque orci, vel lacinia quam somnisi sodales orci. </p>
      </div>
      <!--// column-->
      <div class="large-6 columns omega">
        <div class="featured-title">
          <p><img alt="Clean Programming" src="/sites/all/themes/drupal_theme_foundation/images/cog.png"><strong>Clean Programming</strong></p>
        </div>
        <p class="key">Suspendisse mollis, erat sit amet dapibus bibendum, turpis massa euismod tellus, in dictum nisi magna quis odio. Duis metus, nec scelerisque lorem hendrerit ut. </p>
      </div>
      <!--// column-->
      <p class="rm"><a title="Read more" href="/about" class="button">Read more</a></p>
    </div>
    <!--//row--></div>
  <!--// left col-->
  <div class="large-4 columns omega">
    <div class="testimonial-block">
      <h3>Our Clients Say</h3>
      <div class="row test">
        <h5>Mark Waterman:</h5>
        <blockquote>
          <p class="key quote">Morbi at dictum quam. Vestibulum quis semper arcu. Proin eu lectus erat. Donec tincidunt enim ac felis mollis blandit. La mauris facilisis consequat leo, faucibus bibendum justo tincidunt sed.</p>
        </blockquote>
      </div>
      <!--// row-->
      <div class="row test">
        <h5>Jessica Regalbuto:</h5>
        <blockquote>
          <p class="key quote">Suspendisse mollis, erat sit amet dapibus bibendum, turpis massa euismod tellus, in dictum nisi magna quis odio. Sed posuere justo vitae ligula vestibulum placerat, in dictum nisi magna quis odio.</p>
        </blockquote>
      </div>
      <!--// row-->
      <p class="rm2"><a href="#" title="More testimonials" class="button">More testimonials</a></p>
    </div>
  </div>
  <!--// right col --> </div></div>




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
