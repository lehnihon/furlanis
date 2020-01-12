<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo get_site_icon_url(); ?>" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body>
  <div id="nav-fullscreen" class="overlay">
    <a href="javascript:void(0)" class="menu-close">&times;</a>
    <div class="overlay-content">
      <a href="#sobre">Yorimichi Izakaya</a>
      <a href="#destaques">Destaques</a>
      <a href="#localizacao">Localização</a>
      <a href="#contato">Contato</a>
    </div>
  </div>
  <div id="header">
    <div id="header-top" class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 ml-sm-auto">
            <span class="mr-sm-1">Central de Atendimento: 11 2653-3662</span>
            <span class="mr-sm-3">WhatsApp: 11 97313-6862</span>
            <a class="mr-1" target="_blank" href="#"><i class="fab fa-instagram"></i></a>
            <a class="mr-1" target="_blank" href="#"><i class="fab fa-twitter"></i></a>
            <a class="mr-1" target="_blank" href="#"><i class="fab fa-facebook-square"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div id="header-main">
      <div class="container">
        <div class="row my-3">
          <div class="col-sm-3 col-8">
            <img class="img-fluid " src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>" />
          </div>
          <div class="col-sm-8 col-4 ml-sm-auto">
            <nav class="my-sm-1">
              <div class="nav-item d-none d-sm-inline-block">
                <a href="#">Página Inicial</a>
              </div>
              <div class="nav-item d-none d-sm-inline-block">
                <a href="#">Sobre a Furlanis Imóveis</a>
              </div>
              <div class="nav-item d-none d-sm-inline-block">
                <a href="#">Receba Novidades</a>
              </div>
              <div class="nav-item d-none d-sm-inline-block">
                <a href="#">Fale Conosco</a>
              </div>
              <div class="nav-item">
                <a href="#" class="menu-open">
                  <div class="menu-hamb" >
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                  </div>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

