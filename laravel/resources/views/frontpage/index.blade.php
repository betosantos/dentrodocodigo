@extends('partials.master')

@section('conteudo')


@include('partials.hero')


<section id="about" class="about">
  <div class="container">

    <div class="row content">
      <div class="col-lg-6">
        <h3><b>Consultoria Especializada em Tecnologia da Informação.</b></h3>
        <br />
        <h5 style="text-align: justify;">A tecnologia da informação tem espaço desde o suporte nos processos, até as tomadas de decisões. Com a TI é possível fazer uma gestão mais assertiva e encontrar soluções inovadoras. Além disso, a tecnologia da informação possibilita o monitoramento de dados, melhoria ao acesso das informações necessárias e acompanhamento da produtividade de uma empresa.</h5>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <p>
          Principais benefícios competitivos do uso da tecnologia da informação nas empresas:
        </p>
        <ul>
          <li><i class="ri-check-double-line"></i> Visão Estratégica </li>
          <li><i class="ri-check-double-line"></i> Produtividade </li>
          <li><i class="ri-check-double-line"></i> Controle e Integração</li>
          <li><i class="ri-check-double-line"></i> Segurança </li>
          <li><i class="ri-check-double-line"></i> Produtividade e Eficiência </li>
        </ul>
        <p class="fst-italic">
          Transformar a sua empresa entregando mais segurança e autonomia, diminuindo os custos e aumentando a sua produtividade.
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<section id="clients" class="clients section-bg">
  <div class="container">

    <div class="row">

      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
      </div>
      <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
      </div>

    </div>
  </div>
</section><!-- End Clients Section -->

<section id="servicos" class="services">
  <div class="container">

    <div class="row">
      <div class="col-md-6">
        <div class="icon-box">
          <i class="bi bi-briefcase"></i>
          <h4><a href="#">Consultoria</a></h4>
          <p>Mais de 12 anos de experiência na área de tecnologia da informação, planejamento,desenvolvimento, implantação e suporte de pequenos, médios e grandes projetos.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-card-checklist"></i>
          <h4><a href="#">Desenvolvimento</a></h4>
          <p>Desenvolvimento de sistemas Web, sites pessoais e corporativos e portal de conteúdo dinâmico atraves de login e senha de acesso com banco de dados.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-bar-chart"></i>
          <h4><a href="#">Gerenciamento e Gestão</a></h4>
          <p>Administração de recursos e ambientes tecnolóogicos, disponibilidade e alta-performance do seu ambinete de Tecnologia da Informação, integração e controle.</p>
        </div>
      </div>
      <div class="col-md-6 mt-4 mt-md-0">
        <div class="icon-box">
          <i class="bi bi-binoculars"></i>
          <h4><a href="#">Marketing Digital e SEO </a></h4>
          <p>Destaque e colocação de sites nos principais mecanismos de busca do mercados. Campnahas de marketing e divulgação.</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->
@endsection
