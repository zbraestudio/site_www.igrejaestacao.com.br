<?
include('variables.php');
?>
<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
  <title>LIVRES // Movimento Cristão</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!--[if lte IE 8]><script src="js/ie/html5shiv.js"></script><![endif]-->
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/less.css" />
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
  <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

  <!-- Header -->
  <header id="header">
    <div class="inner">

      <!-- Logo -->
      <a href="<?= $url_site; ?>" class="logo <?= (isset($subpage)?'subpage':null); ?>">
        <?= file_get_contents('./images/logo.svg');  ?>
      </a>

      <!-- Nav -->
      <nav>
        <ul>
          <li><a href="#menu">Menu</a></li>
        </ul>
      </nav>

    </div>
  </header>

  <!-- Menu -->
  <nav id="menu">
    <h2>Menu</h2>
    <ul>
      <li><a href="<?= $url_site; ?>">Home</a></li>
      <li><a href="<?= $url_site . '/quem-somos'; ?>">Quem Somos</a></li>
      <li><a href="<?= $url_site . '/quiz'; ?>">Quiz</a></li>
      <li><a href="<?= $url_site . '#contato'; ?>">Contato</a></li>
    </ul>
  </nav>