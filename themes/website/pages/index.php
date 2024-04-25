<?php require "header.php"; ?>
<main>
  <div id="carouselHomePage" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselHomePage" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/banner-1.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
      <div class="carousel-item">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
      <div class="carousel-item">
        <img src="assets/images/banner.jpg" class="d-block w-100" alt="Cinema Sala 1">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomePage" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHomePage" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container padding-section">
    <div class="row">
      <div class="col">
        <h3 class="text-center fw-bolder mb-5"><i class="fa-solid fa-clapperboard text-orange me-1"></i>Filmes em exibição</h3>
      </div>
    </div>
    <div class="row align-items-center justify-content-center d-lg-none">
      <div class="col-12 d-flex flex-column">
        <img src="assets/images/filme-cartaz.jpg" class="d-block m-auto img-movies" alt="Titulo do filme - Cinema Sala01">
        <div class="text-center"><span class="p-1 ps-2 pe-2 me-1 mt-1 bg-dark text-white rounded d-inline-block" title="Exibição em: 2D">2D</span> <span class="p-1 ps-2 pe-2 me-1 mt-1 bg-orange text-white rounded d-inline-block" title="Não indicado para menores de 14 anos.">14</span></div>

        <a href="" class="btn btn-success mt-1"><i class="fa-solid fa-bullhorn"></i> Informações</a>
        <a href="" class="btn btn-danger mt-1"><i class="fa-brands fa-youtube"></i> Trailer</a>
      </div>
      <div class="col-12 mt-1">
        <table class="table table-bordered table-striped">
          <thead>
            <tr class="bg-dark text-white">
              <td colspan="2">
                <h5 class="pt-2 pb-2 mb-0 text-center"><i class="fa-solid fa-clapperboard text-orange me-1"></i> Planeta dos Macacos: O Reinado</h5>
              </td>
            </tr>
            <tr class="bg-secondary text-white">
              <td class="text-center align-middle">Dias/Sessões</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="align-middle text-center">Quinta-feira - 09/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Sexta-feira - 10/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Sábado - 11/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Domingo - 12/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Segunda-feira - 13/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Terça-feira - 14/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>
            <tr>
              <td class="align-middle text-center">Quarta-feira - 15/04/2024 <br><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span> </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>

    <div class="row  d-none d-md-none d-lg-block">
      <div class="col">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0 me-md-3">
            <img src="assets/images/filme-cartaz.jpg" alt="Titulo do filme - Cinema Sala01" class="img-movies">
            <div class="text-center"><span class="p-1 ps-2 pe-2 me-1 mt-1 bg-dark text-white rounded d-inline-block" title="Exibição em: 2D">2D</span> <span class="p-1 ps-2 pe-2 me-1 mt-1 bg-orange text-white rounded d-inline-block" title="Não indicado para menores de 14 anos.">14</span></div>
            <a href="" class="btn btn-success d-block mt-1"><i class="fa-solid fa-bullhorn"></i> Informações</a>
            <a href="" class="btn btn-danger d-block mt-1"><i class="fa-brands fa-youtube"></i> Trailer</a>
          </div>
          <div class="flex-grow-1">
            <table class="table table-bordered table-striped">
              <thead>
                <tr class="bg-dark text-white">
                  <td colspan="2">
                    <h5 class="pt-2 pb-2 mb-0"><i class="fa-solid fa-clapperboard text-orange me-1"></i> Planeta dos Macacos: O Reinado </h5>
                  </td>
                </tr>
                <tr class="bg-secondary text-white">
                  <td width="250px">Dias</td>
                  <td>Sessões</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="align-middle">Quinta-feira - 09/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Sexta-feira - 10/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Sábado - 11/04/2024 </td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Domingo - 12/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Segunda-feira - 13/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Terça-feira - 14/04/2024 </td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
                <tr>
                  <td class="align-middle">Quarta-feira - 15/04/2024</td>
                  <td class="align-middle"><span class="btn btn-primary m-1 me-2">16:00h</span> <span class="btn btn-primary m-1 me-2">18:00h</span> <span class="btn btn-primary m-1 me-2">20:00h</span> <span class="btn btn-primary m-1 me-2">22:00h</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" class="img-marketing" alt="Anuncie aqui - Cinema Sala 01"></div>
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" class="img-marketing" alt="Anuncie aqui - Cinema Sala 01"></div>
      <div class="col-md-4 mb-1"><img src="assets/images/marketing-anuncio.jpg" class="img-marketing" alt="Anuncie aqui - Cinema Sala 01"></div>
    </div>
  </div>
</main>

<?php require "footer.php"; ?>