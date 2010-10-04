<!--panels-threecol-33-34-33-stacked.tpl.php-->

<div class="panel-threecol-33-34-33-stacked clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>  

  <?php if (!empty($content['top'])): ?>
  <div class="panel-top">
    <?php print $content['top']; ?>  
  </div>
  <?php endif; ?>

  <div class="panel-content line">
  
    <div class="size1of2 unit light-bg pane-left">
      <?php print $content['left']; ?>  
    </div>
    <div class="size1of4 unit light-bg pane-middle">
      <?php print $content['middle']; ?>  
    </div>

    <div class="size1of4 unit light-bg pane-right">
      <?php print $content['right']; ?>  
    </div>

  </div>

  <?php if (!empty($content['bottom'])): ?>
  <div class="panel-bottom">
    <?php print $content['bottom']; ?>  
  </div>
  <?php endif; ?> 


</div>
<!-- / panels-threecol-33-34-33-stacked.tpl.php-->