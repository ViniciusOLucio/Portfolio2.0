<?php
// Template Name: Home
?>
<?php get_header(); ?>
<section class="hero sessao container">

  <div class="hero-txt">
    <div class="hero-txt-h1">
      <h1>
        Vinicius um
        <span>
          web designer
        </span> e
        <span>
          front-end developer
        </span>
      </h1>
    </div>
    <div class="hero-txt-p">
      <p>
        Bem-vindo ao meu espaço digital! Sou Vinícius, um desenvolvedor front-end apaixonado por transformar ideias em experiências memoráveis.
      </p>
    </div>
    <div class="hero-btn">
      <!-- btn 1 -->
      <div class="hero-btn-1">
        <a href="" class="btn-secundario">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ReadIcon.svg" alt="">
          Meu resumo
        </a>
      </div>
      <!-- btn 2 -->
      <div class="hero-btn-2">
        <a href="" class="btn-principal">
          Entre em contato
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ArrowIcon.svg" alt="">
        </a>
      </div>
      <!--  -->
    </div>
  </div>

  <div class="hero-img">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/teclado.svg" alt="">
    <div class="hero-card">
      <div class="hero-card-bolinha"></div>
      <p>Atualmente trabalhando em
        <a href="">
          Studio Modus
        </a>
      </p>
    </div>
  </div>

</section>


<?php get_footer(); ?>
