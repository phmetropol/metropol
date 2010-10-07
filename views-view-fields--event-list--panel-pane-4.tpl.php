<?php
// $Id$

// Prepare a couple of variables.
$start = date_make_date($fields['field_datetime_value']->raw);
$price = ($fields['field_entry_price_value']->raw < 1) ? t('Free') : intval($fields['field_entry_price_value']->raw) . ' kr.';
?>
<div class="calendar-leafs">

  <p class="time"><?php print dynamo_datef($start, 'j. M, Y');?> Kl. <?php print dynamo_datef($start, ' H.i'); ?></p>

  <div class="info">
    <span><?php print $fields['field_library_ref_nid']->content; ?></span>
    <h4><?php print $fields['title']->content; ?></h4>
    <?php #print $price; ?>
  </div>

</div>

