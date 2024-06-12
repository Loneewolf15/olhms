<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->

  <link rel="shortcut icon" href="<?php echo URLROOT ?>/assets/images/logo-olhms.ico">
  <meta name="csrf-token" content="RSsJRcpmYKe3DqipuXNE5efrgDvfQNUrwUyQJw9b">
  <title><?php echo $data['title'] ?></title>
  <link rel="stylesheet" href="<?php echo URLROOT ?>/assets/css/bootstrap.min.css">
  <link href="<?php echo URLROOT ?>/assets/css/all.css" rel="stylesheet">
  <link href="<?php echo URLROOT ?>/assets/css/owl.carousel.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="<?php echo URLROOT ?>/assets/css/switcher.css"> -->
  <link rel="stylesheet" href="<?php echo URLROOT ?>/assets/rsplugin/css/settings.css">
  <!-- Jquery Fancybox CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/assets/css/jquery.fancybox.min.css" media="screen" />
  <link href="<?php echo URLROOT ?>/assets/css/animate.css" rel="stylesheet">
  <style>
    .innerHeading-wrap {
      padding: 150px 0;
      background: url("<?php echo URLROOT ?>/assets/images/s<?php echo rand(1, 4) ?>x.jpg") no-repeat top;
      background-size: cover;
      text-align: center;
    }

    .innerHeading-wrap.background {
      filter: grayscale(100%);
      /* brightness(40%); */

    }
  </style>
  <link href="<?php echo URLROOT ?>/assets/css/style.css" rel="stylesheet" id="colors">
  <link href="<?php echo URLROOT ?>/assets/https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap" rel="stylesheet">
  <link href="<?php echo URLROOT ?>/assets/https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/assets/admin/assets/pages/notification/notification.css">
  <link href="<?php echo URLROOT ?>/assets/dist/css/select2.min.css" rel="stylesheet" />
  <link href="<?php echo URLROOT ?>/assets/admin/bower_components/jquery.filer/css/jquery.filer.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo URLROOT ?>/assets/admin/bower_components/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
  <link href="<?php echo URLROOT ?>/assets/css/select2.min.css" rel="stylesheet" />

  <style type="text/css">
    .card {
      position: relative;
      margin-bottom: 1.5rem;
      width: 100%;
    }

    .power-ribbon-top-left {
      top: -6px;
      left: -9px;
    }

    .power-ribbon {
      width: 56px;
      height: 56px;
      overflow: hidden;
      position: absolute;
      z-index: 10;
    }

    .power-ribbon-top-left span {
      right: -5px;
      top: 1px;
      transform: rotate(-45deg);
    }

    .power-ribbon span {
      position: absolute;
      display: block;
      width: 82px;
      padding: 8px 0;
      color: #fff;
      font: 500 16px/1 Lato, sans-serif;
      text-shadow: 0 1px 1px rgb(0 0 0 / 20%);
      text-transform: capitalize;
      text-align: center;
    }

    .badge {
      display: inline-block;
      padding: .25em .4em;
      font-size: 50%;
      font-weight: 300;
      line-height: 1;
      text-align: center;
      white-space: nowrap;
      vertical-align: baseline;
      border-radius: 3px;
    }

    .btn {
      display: inline-block;
      font-weight: 400;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      border: 1px solid transparent;
      padding: .375rem .75rem;
      font-size: 80%;
      line-height: 1.84615385;
      border-radius: 3px;
      transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    .mr-5 a {
      font-size: 85%;
    }
  </style>

  <script type="text/javascript">
    var base_url = ""
  </script>
</head>

<body style="background: #f8eda545;">