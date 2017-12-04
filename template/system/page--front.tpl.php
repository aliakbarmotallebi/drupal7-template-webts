<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
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
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<div id="page-wrapper"><div id="page">

	<?php if ($main_menu): ?>
	      	<div class='container'>
      	    <div class="menu-page-service">
		    <div class="logo-menu">
		        	<img class="img-responsive" src="http://webts.ir/sites/all/themes/webts/asset/img/logo.png">
		    </div>
		<div class="menu">
			<nav>
        <?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>
      </nav>
      </div></div> <!-- /.container, /.menu -->
      </div>
<!--		<div class="background-menu-front">
			<div class='container'>
				<div class="part-top-menu">
					
					<div class="address-part-top">
						<p>
							اراک خیابان طالقانی
						</p>
					</div>
					<div class="user-part-top">
						<i class="fa fa-tags" aria-hidden="true"></i>
					</div>
				</div>
				<div class="part-bottom-menu">
				    <div class="part-logo col-md-3">
    

						<div class="logo-menu">
							<img class="img-responsive" src="http://webts.ir/sites/all/themes/webts/asset/img/logo.png">
						</div>
					</div>
					<div class="part-nav col-md-9">
						<div class="social-network">
							<span>
								<i class="fa fa-telegram" aria-hidden="true"></i>
							</span>
							<span>
								<i class="fa fa-tags" aria-hidden="true"></i>
							</span>
						</div> 
						<div class="menu">
							<nav>
								<?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>
							</nav>
						</div>
</div>

				</div></div>
				</div>--> <!-- /.container, /.menu -->
			<?php endif; ?>
			<header>
				<div class="css-script-ads">
					<div class="row">
						<div class="col-md-12 no-padding">
							<div class="header-video">
								<div class="background-video"></div> 
								<video id="myFilm-video" autoplay="" loop="" muted="">
									<source src="sites/all/themes/webts/asset/video/111111.mp4" type="video/mp4" data-default="1sites/all/themes/webts/asset/video/111111.mp4">
									</video>
								</div>  
							</div>
						</div>
					</div>
				</header>
				<div class="Introduction-service-parts">
					<div class="row">
						<div class="element">
							<div class="text-Introduction">
								<!--<p>-->
									<!--	خدماتی که ما به شما میدهیم-->
									<!--</p>-->
								</div>
							</div>
						</div>
					</div>
					
					<?php if ($breadcrumb): ?>
						<div id="breadcrumb"><?php print $breadcrumb; ?></div>
					<?php endif; ?>

					<?php print $messages; ?>
					
					
					<div class="content">
						<div class="row">
							<div class="service-parts">
								<div class="container">
									<div class="service-part">
										<?php if ($page['service']): ?>
											<?php print render($page['service']); ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="introductions">
								<div class="container">
									<?php if ($page['product']): ?>
										<?php print render($page['product']); ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="archive">
								<div class="container">
									<div class="content-archive col-md-6">
										<?php if ($page['archive_two']): ?>
											<?php print render($page['archive_two']); ?>
										<?php endif; ?>
									</div>
									<div class="archive-one col-md-6"> 
										<?php if ($page['archive_one']): ?>
											<?php print render($page['archive_one']); ?>
										<?php endif; ?>
									</div>
								</div>
							</div> 
						</div> 
						<div class="row">
							<div class="articles">
								<div class="articles-content col-md-12 no-padding"> 
									<div class=" container">
										<?php if ($page['catagory']): ?>
											<?php print render($page['catagory']); ?>
										<?php endif; ?> 
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="img-top-footer">
								<img src="sites/all/themes/webts/asset/img/footer1.png">	
							</div>
						</div>
					</div><!-- /.content -->
					
					<footer>
						<div class="container">
							<div class="footer-bar">
								<p class="submit-close" ></p>
								<p class="submit-max" ></p>
								<p class="submit-min" ></p>
							</div>
							<div class="footer-body">
								<div class=" container">
									<div class="foo-bo">
										<div class="col-md-4 col-sm-6 col-xs-12">
											<?php if ($page['copyright']): ?>
												<?php print render($page['copyright']); ?>
											<?php endif; ?> 
										</div>
										<div class="col-md-2 col-sm-6 col-xs-12">
											<?php if ($page['desgin_type']): ?>
												<?php print render($page['desgin_type']); ?>
											<?php endif; ?> 
										</div>
										<div class="col-md-2 col-sm-6 col-xs-12">
											<?php if ($page['menu_footer']): ?>
												<?php print render($page['menu_footer']); ?>
											<?php endif; ?> 
										</div>
										<div class="col-md-4 col-sm-6 col-xs-12">
											<?php if ($page['article_footer']): ?>
												<?php print render($page['article_footer']); ?>
											<?php endif; ?> 
										</div>
									</div>
								</div>
							</div>
						</div>
					</footer>
				</div></div> <!-- /#page, /#page-wrapper -->

