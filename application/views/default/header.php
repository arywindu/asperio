<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <script src="<?php echo base_url(); ?>res/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>res/css/additionalCss.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="<?php echo base_url(); ?>res/js/trigger.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
        <title><?php echo $title_web ?></title>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-4ZE3SG3TTG"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-4ZE3SG3TTG');
        </script>

    </head>

    <body>
            <div>
                <!-- NAV BAR -->
                <nav class="navbar navbar-right navbar-expand-lg bg-light navbar-light fixed-top">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <img src="<?php echo base_url(); ?>res/src/logo.png" width="120px">
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <div class="ml-auto navbar-nav pr-3">
                    <a style="margin-right: 100px;" class="nav-item nav-link font-weight-bold" href="<?php echo site_url('ctrl/index'); ?>">Home</a>
                    <li class="nav-item dropdown">
                        <a style="margin-right: 80px;" class="nav-link dropdown-toggle font-weight-bold" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Resources
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="<?php echo site_url('ctrl/katalog'); ?>" >Katalog</a>
                          <a class="dropdown-item" href="<?php echo site_url('ctrl/menuArtikel'); ?>">Artikel</a>
                        </div>
                      </li>
                      <a style="margin-right: 100px;" class="nav-item nav-link font-weight-bold" href="<?php echo site_url('ctrl/webinar'); ?>">Webinar</a>               
                  </div>
                </div>
              </nav>