<?php

  use App\Controllers\routeController;
  $routeController = new routeController();

?>

<!DOCTYPE html>
<html lang="es">

  <head>
      <!-- Disable cache -->
      <meta http-equiv="Expires" content="0">
      <meta http-equiv="Last-Modified" content="0">
      <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
      <meta http-equiv="Pragma" content="no-cache">

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="prepárate para la mega promo">
      <link href="assets/css/socicon.css" rel="stylesheet" type="text/css" media="all" />
      <link href="assets/css/entypo.css" rel="stylesheet" type="text/css" media="all" />
      <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
      <link href="assets/css/custom.css?<?php echo date('Ymdhiiss')?>" rel="stylesheet" type="text/css" media="all" />
      <link href="assets/css/jquery.flipTimer.css" rel="stylesheet" type="text/css" media="all" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link href="assets/css/bootstrap-social.css" rel="stylesheet" type="text/css" media="all" />
      <link href="assets/css/sweetalert.css" rel="stylesheet" type="text/css" media="all" />
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TJWMXS4');</script>
        <!-- End Google Tag Manager -->
     
      <title><?php echo APP_NAME; ?></title>
      
  </head>

  <body>
      <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJWMXS4"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
      
    <?php
        $routeController->actionCatcherController();
    ?>
      
     

      
  
  </body>
</html>


