<!-- views-view-fields article-list.tpl.php -->

<?php if($fields['tid']->content): ?>
<div class="subject"><?php print $fields['tid']->content; ?> </div>
<?php endif; ?>

<div class="meta">
   <?php if($fields['field_library_ref_nid']->content){ ?>
   <ul>
     <li><?php print $fields['field_library_ref_nid']->content; ?></li>
   </ul>
   <?php } ?>

  <?php print $fields['created']->content; ?>

  <?php if($fields['name']->content){ ?>
    <i><?php print t('by'); ?></i>
    <span class="author"><?php print $fields['name']->content; ?></span>
  <?php } ?>

  <?php 
     if($fields['comment_count']->raw >= "1"){
       print "(". $fields['comment_count']->content .")";
     }  
  ?>

</div>

<h2><?php print $fields['title']->content; ?></h2>

<?php 
if($fields['field_teaser_value']->content OR $fields['body']->content){
?>
  <p>
  <?php print $fields['field_teaser_value']->content; ?>  
  <?php print $fields['body']->content; ?>    
  </p>
<?php } ?>


<?php if($fields['edit_node']->content){ ?>
  <?php print $fields['edit_node']->content; ?>
<?php } ?>

