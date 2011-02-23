<?php

function metropol_ting_search_form($form){
  $form['keys']['#prefix'] = '<div id="search">';
  $form['keys']['#suffix'] = '</div>';

  $form['submit']['#type'] = "image_button" ;
  $form['submit']['#src'] = drupal_get_path('theme','metropol')."/images/magnifier.png";
  $form['submit']['#attributes']['class'] = '';

  // Override example links.
  $links = array(
    l(t('Feltsøgning'), 'http://integrabib.dk/phmetropol/sogning.php', array('absolute' => true)),
  );
  $form['example_text']['#value'] = '<div class="example">'. theme('item_list', $links).'</div>';

  return drupal_render($form);
}

function metropol_user_login_block($form){
  $form['submit']['#type'] = "image_button" ;
  $form['submit']['#src'] = drupal_get_path('theme','metropol')."/images/login-btn.png";
  $form['submit']['#attributes']['class'] = '';


  $name = drupal_render($form['name']);
  $pass = drupal_render($form['pass']);
  $submit = drupal_render($form['submit']);
  $remember = drupal_render($form['remember_me']);

  return  $name . $pass . $submit . $remember . drupal_render($form);
}


function metropol_feed_icon($url,$title){
  if ($image = theme('image', drupal_get_path('theme', 'metropol').'/images/rss.png', t('RSS feed'), t('RSS feed'))) {
    // Transform view expose query string in to drupal style arguments -- ?library=1 <-> /1
    if ($pos = strpos($url, '?')) {
      $base = substr($url, 0, $pos);
      $parm = '';
      foreach ($_GET as $key => $value) {
        if ($key != 'q') {
          $parm .= '/' . strtolower($value);
        }
      }

      // Extra fix for event arrangementer?library=x, as it wants taks. id/lib. id
      if (isset($_GET['library'])) {
        if (arg(1) == '') {
          $parm = '/all'.$parm;
        }
      }
      $url = $base.$parm;
    }
    return '<a href="'. check_url($url) .'" class="feed-icon">'. $image .'<span>'. t('RSS') .'</span></a>';
  }
}