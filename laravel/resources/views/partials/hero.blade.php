<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 3 -->
      <div class="carousel-item" style="background-image: url({{ asset('frontpage/assets/img/slide/ti.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Tecnologia da Informação</h2>
            <p class="animate__animated animate__fadeInUp">Não importa o tamanho do seu negócio ou empresa, a tecnologia da informação é essencial para que ela cresça e melhore os seus resultados. </p>
            <a href="{{ route('servicos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Conheça</a>
          </div>
        </div>
      </div>

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url({{ asset('frontpage/assets/img/slide/consultor.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Consultoria Especializada </h2>
            <p class="animate__animated animate__fadeInUp">O uso da Tenologia é essencial para manter-se no mercado corporativo, contar com serviços e soluções personalizados e otimizados focados nas necessidades de cada negócio.</p>
            <a href="{{ route('servicos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Conheça</a>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" style="background-image: url({{ asset('frontpage/assets/img/slide/dev.jpg') }})">
        <div class="carousel-container">
          <div class="container">
            <h2 class="animate__animated animate__fadeInDown">Desenvolvimento Web </h2>
            <p class="animate__animated animate__fadeInUp">Criação de sites profissionais, personalizados, gerenciáveis e administráveis. Sites para empresas, profissionais liberais e pessoais, para divulgar seus produtos e/ou serviços. Fácil de administrar e atualizar.</p>
            <a href="{{ route('servicos') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Conheça</a>
          </div>
        </div>
      </div>


    </div>
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</section><!-- End Hero -->
