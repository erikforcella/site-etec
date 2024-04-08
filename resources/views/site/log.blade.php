<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logística</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      body {
        background: black;
      }

      .div-1 {
        background-image: url("{{ asset('img/contabilidade-img.jpg') }}");
        height: 100vh;
        width: 100%;

        display:flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .log {
        height: 325px;
        width: 750px;
      }

      .container {
        padding: 1rem;
      }
    </style>
</head>
<body>
<!--navbar-->
<nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <a class="navbar-brand text-danger" href="#">ETEC da Zona Leste</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('site.index') }}">Início</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.adm') }}">Administração</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.contabilidade') }}">Contabilidade</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.ads') }}">Análise e Desenvolvimento de Sistemas</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.adsams') }}">Análise e Desenvolvimento de Sistemas - AMS</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.log') }}">Logística</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.rh') }}">Recursos Humanos</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.juridico') }}">Serviços Jurídicos</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Instituição
          </a>
          <ul class="dropdown-menu bg-dark">
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
            <li><a class="dropdown-item bg-dark text-light" href="{{ route('site.contato') }}">Contato</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('site.departamentos') }}">Departamentos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('site.vestibulinho') }}">Vestibulinho</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('site.oportunidades') }}">Oportunidades</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--navbar-->

<div class="div-1">
  <h1 class="text-white">Logística</h1>
  <h3 class="text-light">“Cada desafio é uma oportunidade de otimizar, coordenar e conectar. Prepare-se para trilhar caminhos eficientes e fazer a diferença nos bastidores que movem o mundo.”</h3>
</div>

<div class="container bg-black">
  <div class="row">
    <div class="col-md-6">
      <h1 class="text-white">Sobre o Curso</h1>
      <p class="text-light">
      O TÉCNICO EM LOGÍSTICA é o profissional que colabora na gestão dos processos de planejamento, operação e controle de programação nas áreas de produção de bens e serviços, de compras, de armazenagem, de estoques, de movimentação e de expedição. Viabiliza o transporte e a distribuição de materiais e produtos, coordena a manutenção de máquinas e de equipamentos e executa as funções, utilizando tecnologia de informação. Identifica metodologias, sistemas, procedimentos, equipamentos e estabelece critérios para seleção e utilização adequada. Elabora tabelas, interpreta gráficos e mapeia o custeio das áreas produtivas envolvidas. Implementa os procedimentos de controle de custos, qualidade, segurança e higiene do trabalho no sistema logístico. Atua em equipe, segundo princípios éticos e cidadãos.
      </p>
    </div>
    <div class="col-md-6">
      <img class="img-fluid ads-img" src="{{ asset('img/log.jpg') }}" alt="Imagem Administração">
    </div>
  </div>
</div>

<!--Footer-->
<footer class="footer">
  <section class="bg-black bg-gradient py-5 py-xl-8 py-xxl-9 border-top border border-black">
    <div class="container overflow-hidden">
      <div class="row gy-5 gy-md-0">
        <div class="col-xs-12 col-md-7 order-1 order-md-0">
          <div class="copyright text-center text-md-start text-white">
            &copy; 2024. Todos os Direitos Reservados.
          </div>
          <div class="credits text-light text-center text-md-start mt-2 fs-7">
            Construído por <a href="https://github.com/erikforcella" class="link-secondary text-light text-decoration-none">Érik Forcella</a>
          </div>
        </div>

        <div class="col-xs-12 col-md-5 order-0 order-md-1">
          <ul class="nav justify-content-center justify-content-md-end">
            <li class="nav-item">
              <a class="nav-link link-dark" href="https://web.facebook.com/Eteczonalesteoficial/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook text-light" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark" href="https://www.youtube.com/@etecdazonaleste2949">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-youtube text-light" viewBox="0 0 16 16">
                  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark" href="https://twitter.com/EtecZona">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter text-light" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link link-dark" href="https://www.instagram.com/eteczonalesteoficial/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram text-light" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</footer>
</body>
</html>