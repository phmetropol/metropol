<!--panels-threecol-left-stacked.tpl.php-->
<div class="panel-threecol-left-stacked clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

	<div class="content-left">
      
      <?php if($content['top']):?>
			<div class="content-top">
      <div class="whitebg">
      	<?php print $content['top']; ?>
      </div>
			</div>
      <?php endif;?>

			<div class="content-middle">

				<div class="panel-left">
          <div class="whitebg">
			      <?php print $content['left']; ?>
          </div>      		
				</div>

				<div class="panel-middle">
          <div class="whitebg">
			      <?php print $content['middle']; ?>
          </div>        
				</div>

			</div>

			<div class="panel-bottomt">
      	<?php print $content['bottom']; ?>        
			</div>

	</div>

	<div class="content-right">
      <?php print $content['right']; ?>
	</div>
	
</div>

<!--/panels-threecol-left-stacked.tpl.php-->