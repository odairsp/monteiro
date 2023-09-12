<?php
require '../index.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Maven+Pro:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <title>Serviços de Contabilidade</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/logoNome.png" alt="Logo da Empresa de Contabilidade" width="250" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#location">Local</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section id="banner">
            <div class="container">
                <div class="banner-content text-center" id="title">
                    <h1 class="display-5">Serviços de Contabilidade Profissional</h1>
                    <p class="lead">
                        Oferecemos soluções contábeis personalizadas para o seu negócio.
                    </p>
                    <a href="#contato" class="btn btn-primary btn-lg">Entre em Contato</a>
                </div>
            </div>
        </section>

        <section id="services" class="bg-light py-5 ">
            <div class="container">
                <h2 class="text-center mb-4">Nossos Serviços</h2>
                <div class="cards-container row">

                    <div class="grid col-md-4 align-self-baseline">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Contábil</h3>
                                <div class="card-text">
                                    <ul>
                                        <li>
                                            Realizamos assessoria, consultoria e execução de toda
                                            rotina contábil.
                                        </li>
                                        <li>
                                            Elaboração dos demonstrativos Contábeis (Balanço
                                            Patrimonial, Balancete, DRE, DMPL ).
                                        </li>
                                        <li>
                                            Planejamento para enquadramento da opção tributaria
                                            (Simples Nacional, Lucro Presumido e Lucro Real).
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards_services col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Fiscal</h3>
                                <div class="card-text">
                                    <ul>
                                        <li>
                                            Apuração e cálculos dos impostos Federal, Estadual e
                                            Municipal.
                                        </li>
                                        <li>Auxilio e orientação na emissão de Notas Fiscais.</li>
                                        <li>Planejamento e transação tributaria.</li>
                                        <li>Reorganização societária e fiscal.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="cards_services col-md-4 ">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Legalização</h3>
                                <div class="card-text">
                                    <ul>
                                        <li>
                                            Emissão e renovação de Certificado Digital (eCNPJ e
                                            eCPF).
                                        </li>
                                        <li>Emissão de Certidões.</li>
                                        <li>Imposto de Renda Pessoa Física.</li>
                                        <li>Abertura e Declarações para MEI.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>

        <section id="about" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Sobre Nós</h2>
                <p class="lead text-center">
                    Somos uma equipe de profissionais experientes dedicados a fornecer
                    soluções contábeis confiáveis e de qualidade para empresas de todos
                    os tamanhos.
                </p>
            </div>
        </section>

        <section id="contato" class="bg-light py-5 d-md-flex">
            <div class="container">
                <h3 class="text-center mb-4">Entre em Contato</h3>
                <p class="lead text-center text-wrap">
                    Preencha o formulário que entraremos contato.
                </p>
                <div class="row justify-content-center">
                    <div class="col-md-9">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="text" name="nome" class="form-control" placeholder="Nome" required />
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email" required />
                            </div>
                            <div class="mb-3">
                                <textarea name="mensagem" class="form-control" placeholder="Mensagem" rows="4"
                                    required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block mb-3">
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="location" class="container-fluid p-0">
            <div class="mapouter">
                <h3 class="text-center my-5">Onde Estamos</h3>

                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com.br/maps?width=300&amp;height=300&amp;hl=en&amp;q=R. Rio de Janeiro, 201 - Cidade Intercap, Taboão da Serra - SP, 06757-290, Brazil&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                </div>
            </div>
        </section>
    </main>
    <footer class="bg-dark text-light p-4">

        <div class="row">
            <div class="container text-right">
                <h3 class="">Contatos</h3>
                <div class="">
                    <ul class="navbar-nav">
                        <li class="">
                            <a href="https://api.whatsapp.com/send?phone=5511986510161" target="_blank">

                                <i class="bi bi-whatsapp"></i>
                                <span class="mx-2">(11) 98651-0161 </span>
                            </a><a href="tel:+551142601069%20" target="_blank">

                                <span class="">
                                    <i class="bi bi-telephone"></i> </span>
                                <span class="mx-2">(11) 4137-2699 </span>
                            </a>
                        </li>
                        <li class="">

                        </li>
                        <li class="">
                            <a href="mailto:tadeu.monteiro@monteirorondo.com%20" target="_blank">
                                <span class="">
                                    <i class="bi bi-envelope"></i></span>
                                <span class="mx-2">tadeu.monteiro@monteirorondo.com </span>
                            </a>
                        </li>
                        <!-- <li class="mt-2">
              <span>
                <i class="bi bi-globe-americas"></i>
              </span>
              <span class="mx-2">Rua - Rio de Janeiro , n° 201 <br> Taboão da Serra/SP - 06757-290</span>
            </li> -->
                    </ul>
                </div>
            </div>

            <div class="small text-center mt-5">
                <p>
                    &copy; 2023 Monteiro Rondó Serviços. Todos os direitos
                    reservados.
                </p>
            </div>
        </div>


    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>