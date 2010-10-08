<?php
// $Id$

/**
 * @file page.tpl.php
 * Main page template file for the dynamo theme.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<!--
  Dynamo!
-->
<head>
<!--<meta http-equiv="X-UA-Compatible" content="IE=8; chrome=1" />-->
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body class="<?php print $body_classes; ?><?php if (!empty($admin)) print ' '.admin;  ?>">
<?php 
/*adds support for for the admin module*/
  if (!empty($admin)) print $admin; 
?>

<?php if ($help OR $messages) { ?>
  <div id="drupal-messages">
    <div id="messages-hide">
      <a href="#"><?php print t('hide'); ?></a>
    </div>

    <?php print $help ?>
    <?php print $messages ?>

    </div>
<?php } ?>
<div id="wrap">
  <div id="page">
    <div class="toparea">
      <div class="cfw line">
        <div class="size1of2 unit">
          <h1 id="site-name">
            <a href="<?php print $base_path; ?>" title="<?php print t('Home'); ?>" rel="home">
              <?php print $site_name; ?>
            </a>
          </h1>
        </div>
        <div class="lastUnit unit">
            <h2 class="phmetropol-link">
              <a href="http://phmetropol.dk" title="Professionshøjskolen Metropol">
                Professionshøjskolen Metropol
              </a>
            </h2>
        </div>
      </div>
      <div class="cfw line">
        <div class="size1of2 unit"><p class="search-label"><?print t('Søg her');?></p><?php print $search ?></div>
        <div class="lastUnit unit"><?php print $account; ?></div>
      </div>
      
      <?php if (arg(0) != 'user'  && $tabs): ?>
        <div class="cfw line">
        <?php print $tabs; ?>
        </div>
    <?php endif; ?>
      
    </div>
    
    <div class="menubar">
      <div class="cfw line">
      <?php if ($primary_links): ?>
        <?php print theme('links', $primary_links,array('class' => 'main-menu')); ?>
      <?php endif; ?>
      </div>
    </div>
    <div class="contentarea">
      <div class="content-area-bg">
        <div class="cfw line">
          <div class="ribbon">
          <?php print $breadcrumb; ?>
          </div>
          <div class="contentwrap">
            <!-- Content Start -->
              <?php print $content; ?>
            <!-- Content End -->
          </div>
          <div class="content-shadow"> </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <div class="cfw footer-menu line">
    <?php print $footer_menu;?> 
  </div>
  <div class="blackend">
    <dl class="cfw clear-block">
      <dt>Professionshøjskolen Metropol </dt>
      <dd>Købmagergade 62, 3 </dd>
    
      <dd>1150 København K </dd>
      <dd>+45 72 48 75 00 </dd>
      <dd>
        <a href="mailto:info@phmetropol.dk">info@phmetropol.dk</a> </dd>
      <dd>
        <a href="/Sitetools/Sitemap">Sitemap</a>
      </dd>
  <!--<dd>
        <a href="http://www.phmetropol.dk/Om+Metropol/EAN+numre">CVR og EAN-nummer</a>
      </dd> -->
      <dd class="logo">
        <a href="http://phmetropol.dk" title="Professionshøjskolen Metropol">
  	      Professionshøjskolen Metropol
  	    </a>
      </dd>
    </dl>
  </div>
</div>
<?php print $closure; ?>
</body>
</html>
