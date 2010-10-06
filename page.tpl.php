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
<?endif;?>
  
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
  <div class="cfw footer-menu line">
    <?php print $footer_menu;?>
  
  </div>
</div>

<div class="footerarea">

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


<?php #print $footer; ?>

</div>





<!-- 




<div id="container" class="clearfix">

    <div id="page" class="minheight">
      <div id="page-inner" class="clearfix">


        

        <div id="pageheader">
          <div id="pageheader-inner">
            
            <div id="top" class="clearfix">

              <div id="search" class="left">
                <?php print $search ?>
              </div>

              <div id="account" class="left">
                <?php print $account; ?>
              </div>  

            </div>

            <div id="navigation">
              <div id="navigation-inner">
                <?php if ($primary_links){ ?>
                  <?php print theme('links', $primary_links); ?>
                <?php } ?>
              </div>
            </div>

            <?php print $breadcrumb; ?>
          </div>
        </div>
        
        <div id="pagebody" class="clearfix">
          <div id="pagebody-inner" class="clearfix">

            <?php if ($left) { ?>
              <div id="content-left">
                <?php print $left; ?>
              </div>
            <?php } ?>

            <div id="content">
              <div id="content-inner">

                <?php
                  /*if were in the user pages add the tabs in the top*/
                  if (arg(0) == 'user' && is_numeric(arg(1)) && $tabs){
                    print '<div class="tabs-user">' . $tabs . '</div>';
                  }
                ?>

                <div id="content-main">
                  <?php print $content; ?>
                </div>
                
                <?php
                  if (arg(0) != 'user'  && $tabs){
                    print '<div class="tabs">' . $tabs . '</div>';
                  }
                ?>


              </div>
            </div>

            <?php if ($right) { ?>
              <div id="content-right">
                <?php print $right; ?>
              </div>
            <?php } ?>

          </div>
        </div>

        <div id="pagefooter">
          <div id="pagefooter-inner" class="clearfix">

            <div class="left first">
              <?php print $footer_one; ?>
            </div>

            <div class="left">
              <?php print $footer_two; ?>
            </div>

            <div class="left">
              <?php print $footer_three; ?>             
            </div>

            <div class="left">
              <?php print $footer_four; ?>              
              <?php print $footer; ?>
            </div>
      
          </div>
        </div>

      </div>
    </div>

</div>

 -->

<?php print $closure; ?>
</body>
</html>
