
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
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
    <div class="container">
        <?php print render($content['body']); ?>
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
