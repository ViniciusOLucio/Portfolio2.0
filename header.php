<?php
global $theme_uri;
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Freckle+Face&family=Saira:wght@400;500;600;700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="col-100">
  <header class="container">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/Logo_Vinicius.svg" alt="">
    <nav>
      <ul>
        <li>
          <a href="" class="active">
            Home
          </a>
        </li>
        <li>
          <a href="">
            Sobre
          </a>
        </li>
        <li>
          <a href="">
            Projetos
          </a>
        </li>
        <li>
          <a href="">
            Contato
          </a>
        </li>

      </ul>
    </nav>
  </header>
  </div>
