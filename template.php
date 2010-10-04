<?php



function metropol_ting_search_form($form){
   
  $form['submit']['#type'] = "image_button" ;
  $form['submit']['#src'] = drupal_get_path('theme','metropol')."/images/magnifier.png";
  $form['submit']['#attributes']['class'] = '';

  return drupal_render($form);
}
