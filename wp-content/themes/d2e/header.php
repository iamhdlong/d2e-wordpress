<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body class="size-1140">
<?php  global $d2e_theme; ?>
 <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <a href="../design/"><?php echo $d2e_theme->get_options('text_logo'); ?></a>
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <?php $d2e_theme->get_left_menu();  ?>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="<?php bloginfo('home') ?>"><?php echo $d2e_theme->get_options('text_logo'); ?></a>
                     </li>
                  </ul>
                  <?php $d2e_theme->get_right_menu();  ?>
               </div>
            </div>
         </nav>
      </header>
      