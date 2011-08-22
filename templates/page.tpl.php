<?php
// $Id$

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
 ?>
<?php if($page['outside_top']) { ?>
<div id="outside-top"><?php print render($page['outside_top']); ?></div><!-- #outside-top -->
<?php } ?>

<div id="wrapper-container">
  
  <div id="container">
  
    <header id="header-page" class="clearfix">
      
      <?php if($page['header_top']) { ?>
      <div id="header-top" class="clearfix"><?php print render($page['header_top']); ?></div><!--#header-top-->
      <?php } ?>
      
      <?php if($logo || $site_name || $site_slogan || $page['header']) { ?>
      
      <div id="header-middle" class="clearfix">
        
        <?php if($logo || $site_name || $site_slogan) { ?>
        
        <div id="logo">
        
					<?php if($logo) { ?>
          <a id="logo" href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"> <img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>" /> </a>
          <?php } ?>
          
          <?php if($site_name) { ?>
            <h1 title="<?php print $site_name; ?>" id="site-name"><a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>"><?php print $site_name; ?></a></h1>
          <?php } ?>
          
          <?php if($site_slogan) { ?>         
          <h2 title="<?php print $site_slogan; ?>" id="site-slogan"><?php print $site_slogan; ?></h2>
          <?php } ?>
        
        </div>
        
        <?php } ?>
        
        <?php print render($page['header']); ?> 
        
      </div><!--#header-middle-->
      
      <?php } ?>
     
      <?php if($page['header_bottom']) { ?>
      <div id="header-bottom" class="clearfix"><?php print render($page['header_bottom']); ?></div><!--#header-bottom-->
      <?php } ?>
      
    </header><!-- #header-page -->
    
    <?php if($page['preface_top']) { ?>
    <div id="preface-top" class="clearfix"><?php print render($page['preface_top']); ?></div><!-- #preface-top -->
    <?php } ?>
    
    <div class="wrapper-columns-outside">
      
      <div id="main">

        <?php if($page['preface_bottom']) { ?>
        <div id="preface-bottom" class="clearfix"><?php print render($page['preface_bottom']); ?></div><!-- #preface-bottom -->
        <?php } ?>
        
        <div class="wrapper-columns-inside">
          
          <div id="wrapper-content">

            <?php if($page['content_top']) { ?>
            <div id="content-top" class="clearfix"> <?php print render($page['content_top']); ?> </div><!-- #content-top -->
            <?php } ?>

            <div id="content-middle" class="clearfix">

              <?php if($breadcrumb) { ?>
              <nav id="breadcrumb"><?php print $breadcrumb; ?> </nav><!-- #breadcrumb -->
              <?php } ?>

              <?php if($page['highlighted']){ ?>
              <div id="highlighted"><?php print render($page['highlighted']); ?></div><!-- #highlighted -->        
              <?php } ?>

              <?php print render($title_prefix); ?>
              <?php if($title) { print '<h2 class="page-title"><span>'. $title .'</span></h2>'; } ?>
              <?php print render($title_suffix); ?>

              <?php if($tabs) { ?>
              <div id="tabs"><?php print render($tabs); ?></div>
              <?php } ?>

              <?php if($messages) { ?>
              <div id="messages" class="clear"><?php print $messages; ?></div><!-- #messages -->
              <?php } ?>

              <?php if($page['help']) { ?>
              <div id="help"><?php print render($page['help']); ?></div><!-- #help -->
              <?php } ?>

              <?php if($action_links){ ?>
              <div id="action-links">
                <ul><?php print render($action_links); ?></ul>
              </div><!-- #action-links -->
              <?php } ?>


              <?php print render($page['content']); ?> 

              <span class="clear"></span> 

            </div><!-- #content-middle -->

            <?php if($page['content_bottom']) { ?>
            <div id="content-bottom" class="clearfix"><?php print render($page['content_bottom']); ?></div><!-- #content-bottom -->
            <?php } ?>

          </div><!-- #wrapper-content -->

          <?php if($page['sidebar_second']){ ?>
          <aside id="sidebar-second" class="sidebar"> <?php print render($page['sidebar_second']) ?> </aside><!-- #sidebar-second -->
          <?php } ?>
        
        </div>
        
        <?php if($page['postscript_top']) { ?>
        <div id="postscript-top" class="clearfix"><?php print render($page['postscript_top']); ?></div><!-- #postscript-top -->
        <?php } ?>

      </div><!-- #main -->
      
      <?php if($page['sidebar_first']) { ?>
      <aside id="sidebar-first" class="sidebar"><?php print render($page['sidebar_first']); ?> </aside><!-- #sidebar-first -->
      <?php } ?>
      
    </div>
    
    <?php if($page['postscript_bottom']) { ?>
    <div id="postscript-bottom" class="clearfix"><?php print render($page['postscript_bottom']); ?></div><!-- #postscript-bottom -->
    <?php } ?>
    
    <footer id="footer-page" class="clearfix">
      
      <?php if($page['footer_top']) { ?>
      <div id="footer-top" class="clearfix"><?php print render($page['footer_top']); ?></div> <!-- #footer-top -->
      <?php } ?>
      
      <?php if($page['footer']) { ?>
      <div id="footer-middle" class="clearfix"><?php print render($page['footer']); ?></div><!-- #footer-middle -->
      <?php } ?>
      
      <?php if($feed_icons || $page['footer_bottom']) { ?>
      <div id="footer-bottom" class="clear"> <?php print $feed_icons ?> <?php print render($page['footer_bottom']); ?> </div><!-- #footer-bottom -->
      <?php } ?>
       
    </footer><!-- #footer-page -->
  
  </div><!-- #container -->   

</div><!-- #wrapper-container -->

<?php if($page['outside_bottom']) { ?>
<div id="outside-bottom" class="clear"><?php print render($page['outside_bottom']); ?></div>
<!-- #outside-bottom -->
<?php } ?>