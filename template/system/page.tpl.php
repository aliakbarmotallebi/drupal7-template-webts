
<div id="page-wrapper"><div id="page">

    <?php if ($main_menu): ?>

      	<div class='container'>
      	    <div class="menu-page-service">
		    <div class="logo-menu">
		    </div>
		    
		<div class="menu menu-article">
			<nav>
        <?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>
      </nav>
      </div></div> <!-- /.container, /.menu -->
    <?php endif; ?>
    <div>
    </div>
    </div>
    <div class="row">
        <div class="parent-img-header">
            <div class="img-header">
                 <img class="img-responsive" src="http://webts.ir/sites/all/themes/webts/asset/img/Untitled-1.jpg">
                <div class="title-img-header ">
                <?php print $title; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="content"><div class="container">
        <?php print render($node_content['author']); ?>
        <?php print $messages; ?>
              <div id="content" class="column">
                  <div class="section">
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        </div></div> <!-- /.section, /#content -->
        <?php if (isset($page['content'])) {print render($page['content']);}?>
    </div></div>


    <footer class="footer-node">
    <?php if ($page['menu_footer_pages']): ?>
        <?php print render($page['menu_footer_pages']); ?>
    <?php endif; ?> 
	</footer>

  </div></div> <!-- /#page, /#page-wrapper -->
