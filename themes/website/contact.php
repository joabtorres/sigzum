<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="container pt-5 pb-5" id="contact">
    <div class="row">
        <div class="col-12">
            <h1 class="text-orange fw-bold mb-0">Contato</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= url("/"); ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Contato </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="text-center">Preencha o formulário abaixo com sua dúvida, crítica ou sugestão. <br>
                <strong class="text-orange">Será um prazer atendê-lo!</strong>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= url("/contato") ?>" class="needs-validation" novalidate>
                <?= csrf_input() ?>
                <div class="ajax_response"><?= flash() ?> </div>
                <div class="form-group mb-2">
                    <label for="cName">Nome: *</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="basic-name"><i class="fa-solid fa-user text-orange"></i></span>
                        <input type="text" class="form-control" name="name" id="cName" aria-describedby="basic-name" placeholder="Exemplo: Joab T. Alencar" required>
                        <div class="invalid-feedback">
                            Informe o nome.
                        </div>
                    </div>

                </div>
                <div class="form-group mb-2">
                    <label for="iEmail">E-mail: *</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="basic-email"><i class="fa-solid fa-envelope text-orange"></i></span>
                        <input type="email" class="form-control" name="email" id="iEmail" aria-describedby="basic-email" placeholder="Exemplo: joab.torres@gmail.com" required>
                        <div class="invalid-feedback">
                            Informe o endereço de e-mail.
                        </div>
                    </div>
                </div>
                <div class="form-group mb-2">
                    <label for="cPhone">Celular: *</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="basic-phone"><i class="fa-solid fa-mobile-screen text-orange"></i></span>
                        <input type="text" class="form-control" name="phone" id="cPhone" aria-describedby="basic-phone" placeholder="Exemplo (93) 99955-5444" required>
                        <div class="invalid-feedback">
                            Informe o número do celular.
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="cMessage">Messagem: </label>
                    <textarea name="message" id="cMessage" rows="5" class="form-control" required></textarea>
                    <div class="invalid-feedback">
                        Descreva o mótivo do contato.
                    </div>
                </div>
                <p class="text-center">
                    <button class="btn btn-primary"><i class="fa-solid fa-paper-plane me-1 text-orange"></i> Enviar</button>
                </p>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="fw-bold text-orange">FALE CONOSCO</h4>
            <p><i class="fa-solid fa-envelope me-1 text-orange"></i> cinemasala1itb@gmail.com</p>

            <p><i class="fa-solid fa-business-time me-1 text-orange"></i> De segunda a sexta-feira, das 14h às 22h, <br />
                <span class="me-4"></span>Aos sábados e domingos, das 12h às 22h.
            </p>

            <h4 class="fw-bold text-orange">EMPRESA</h4>
            <p><i class="fa-solid fa-building me-1 text-orange"></i> CINEMA SALA 1 <br>
                <span class="me-4"></span> CNPJ: 50.101.556/0001-42
            </p>

            <p><i class="fa-solid fa-location-dot me-1 text-orange"></i>Avenida Doutor Hugo de Mendonca, 515, Comercio, Itaituba - Pará - CEP 68180-005</p>

        </div>
    </div>
</section>