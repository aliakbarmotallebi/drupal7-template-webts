
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  
   	<div class="info-article">
		<div class="row">
			<div class="col-md-12 no-padding">
				<div class="header-node-article">
					<?php print render($content['field_internal_page_image_servic']); ?>
				</div>
				<div class="container part-info-article">
					<div class="titel-article-part-node">
					    <h1 class="titel-article-part"><?php print $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="content-page-servise">
    <div class="container">
        <div class="social-sharing">
            <?php print render($content['links']); ?>
        </div>
        <?php hide($content['field_home_image_service']); ?>
        <?php print render($content['body']); ?>
    </div>
    </div>

  
  <div class="content"<?php print $content_attributes; ?>>
    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php print render($content['comments']); ?>
</div>
