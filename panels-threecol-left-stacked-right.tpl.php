<!-- panels-threecol-left-stacked-right.tpl.php -->
<div class="panel-threecol-left-stacked-right clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

		<div class="content-left">

      <div class="whitebg clear-block">

        <?php if($content['top']):?>
				<div class="content-top">
	      	<?php print $content['top']; ?>
				</div>
        <?php endif; ?>
				<div class="content-middle">

					<div class="panel-left">
				      <?php print $content['left']; ?>      		
					</div>

					<div class="panel-middle">
				      <?php print $content['middle']; ?>        
					</div>

				</div>

				<div class="panel-bottomt">
	      	<?php print $content['bottom']; ?>        
				</div>
      </div>

		</div>

		<div class="content-right">
	      <?php print $content['right']; ?>
		</div>


</div>

<!-- / panels-threecol-left-stacked-right.tpl.php -->