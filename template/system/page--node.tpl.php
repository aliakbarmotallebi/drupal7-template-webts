<div id="page-wrapper"><div id="page">
    <?php if ($main_menu): ?>
      	<div class='container'>
      	          	    <div class="menu-page-service">
		    <div class="logo-menu">
		    </div>
		<div class="menu">
			<nav>
        <?php print theme('links__system_main_menu', array('links' => $main_menu)); ?>
      </nav>
      </div></div> <!-- /.container, /.menu -->
      </div> <!-- /.container, /.menu -->
    <?php endif; ?>
    
    <?php if (isset($page['content'])) {print render($page['content']);}?>
    
    <div class="content">
        <div class="container">
        <?php print $messages; ?>
              <div id="content" class="column">
                  <div class="section">
        <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        </div>
        </div> <!-- /.section, /#content -->
        </div>
    </div>

    <footer class="footer-node">
    <?php if ($page['menu_footer_pages']): ?>
        <?php print render($page['menu_footer_pages']); ?>
    <?php endif; ?> 
	</footer>

  </div></div> <!-- /#page, /#page-wrapper -->