
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
					<?php print render($content['field_image_articles']); ?>
				</div>
				<div class="container part-info-article">
					<div class="titel-article-part-node">
					    <h1 class="titel-article-part"><?php print $title; ?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="meta-bar">
	    <div class="meta-nav">
	        <ul class="meta-list">
	            <li class="info-author user-author"> <i class="fa fa-user" aria-hidden="true"></i><?php if ($node->uid): $node_author = user_load($node->uid); print  $node_author->field_flname['und'][0]['value']; endif;?></li>
                <li class="info-author date-release-author"> <i class="fa fa-clock-o" aria-hidden="true"></i><?php if ($display_submitted): print  jdate( "F j, Y",$node->created); endif;?></li>
                <li class="grouping grouping-articles"><i class="fa fa-folder-open-o" aria-hidden="true"></i><?php print render($content['field_grouping_articles']); ?></li>
                <li class="grouping grouping-article"><i class="fa fa-tags" aria-hidden="true"></i><?php print render($content['field_key_word_articles']); ?></li>
	        </ul>
	    </div>
	</div>
    <div class="container">
        <div class="social-sharing">
            <?php print render($content['links']); ?>
        </div>
        <?php print render($content['body']); ?>
        <div class="source-article">
            <?php print render($content['field_source']); ?>  
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
