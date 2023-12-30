<?php
// Template Name: Home
?>
<?php get_header(); ?>
<section class="hero sessao container">

  <div class="hero-txt">
  <div class="hero-txt-h1">
  <h1 id="textoH1">
    Vinicius um
    <span id="web-designer">
      web designer
    </span> e
    <span id="front-end-developer">
      front-end developer
    </span>
  </h1>
</div>

<script>
  function typeWriter(elemento) {
    const textoArray = elemento.innerHTML.split('');
    elemento.innerHTML = '';
    textoArray.forEach((letra, i) => {
      setTimeout(() => elemento.innerHTML += letra, 75 * i);
    });
  }

  const titulo = document.querySelector(' h1');
  typeWriter(titulo);
</script>

    <div class="hero-txt-p">
      <p>
        Bem-vindo ao meu espaço digital! Sou Vinícius, um desenvolvedor front-end apaixonado por transformar ideias em experiências memoráveis.
      </p>
    </div>
    <div class="btn">
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

<!-- sobre -->
<section id="sobre">
  <div class="introducao_conteudo container">
    <div class="introducao_conteudo-txt">
      <span>
        #
      </span>
      <h2>
        sobre
      </h2>
    </div>
    <div class="introducao_conteudo_wrapper"></div>

  </div>

  <div class="col-100">
    <div class="sobre container">
      <div class="sobre-img">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/Ilustração-Vinicius-feito-por-Cauã-Parreira.svg" alt="">
      </div>
      <!-- fim div img -->
      <div class="sobre-text">
        <div>
          <ul class="icons">
            <!-- icon-1 -->
            <li class="icon">
              <i class="fa-brands fa-square-js"></i>
            </li>
            <!-- icon-2 -->
            <li class="icon">
              <i class="fa-brands fa-react"></i>
            </li>
            <!-- icon-3 -->
            <li class="icon">
              <i class="fa-brands fa-node-js"></i>
            </li>
            <!-- icon-4 -->
            <li class="icon">
              <i class="fa-brands fa-hotjar"></i>
            </li>
            <!-- icon-5 -->
            <li class="icon">
              <i class="fa-brands fa-python"></i>
            </li>
          </ul>
        </div>
        <!-- fim icons -->
        <div class="sobre-txt">
          <h3>
            Olá, eu sou o Vinícius!
          </h3>
          <!-- p-1 -->
          <p>
            Sou um desenvolvedor front-end, minha especialidade está na criação de websites, com foco em atender advogados
            no entanto, estou preparado para atender qualquer tipo de demanda.


          </p>
          <!-- p2 -->
          <p>
            Tenho colaborado com clientes de diversas áreas, adaptando-me a diferentes contextos e garantindo a entrega de soluções personalizadas e de qualidade.
          </p>
          <!-- p3 -->
          <p>
            <span>
              Estou aqui para ajudar a construir a presença online que você deseja.
            </span>
          </p>
          <div class="btn">
            <a href="" class="btn-secundario">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/ReadIcon.svg" alt="">
              Meu resumo
            </a>
          </div>
        </div>
      </div>
      <!-- fim txt -->
    </div>
  </div>
</section>
<!-- fim sobre -->


<section id="projetos" class="sessao">

<div class="introducao_conteudo container">
    <div class="introducao_conteudo-txt">
      <span>
        #
      </span>
      <h2>
        projetos
      </h2>
    </div>
    <div class="introducao_conteudo_wrapper"></div>

  </div>
  <!-- fim introducao -->
    <div class="projetos container">
      <ul class="lista-projetos">
        <li class="card-projeto">
          <div class="card-projeto-img">
            <a href="https://harturobessa.com.br" target="_blank">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ReadIcon.svg" alt="">
            </a>
          </div>
          <div class="card-projeto-txt">
            <p>
              <span>

              </span>
            </p>
            <h2>

            </h2>
            <h3>

            </h3>

            <div class="btn">
            <a href="" class="btn-secundario">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/ArrowIcon.svg" alt="">
              Ver mais
            </a>
          </div>
          </div>
        </li>

      </ul>
    </div>
</section>

<?php get_footer(); ?>
