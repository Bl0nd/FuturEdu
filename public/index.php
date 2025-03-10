<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="site">
    <meta name="author" content="Fernanda">
    <title>FutureEdu</title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet">
</head>

<body>
    <header id="topo-fixo">
        <div class="site">
            <section class="banner">
                <div class="redeSocial">
                    <ul>
                        <li><a href="#"><i class="fas fa-phone-alt"></i></a>+55 11 91234-5678</li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></a>Av. Paulista,1000 - São Paulo, SP,
                            Brasil</li>
                    </ul>
                    <!-- redes sociais -->
                    <ul>
                        <h3>Encontre-nos em: </h3>
                        <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- logo -->
                <div class="container">
                    <a href="#">
                        <h1 class="logo">Logo FutureEdu</h1>
                    </a>

                    <!--  menu -->
                    <nav class="menu">
                        <ul>
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Cursos + </a></li>
                            <li><a href="#">Sobre + </a></li>
                            <li><a href="#">Contato</a></li>

                            <button type="button" class="btnE"><i class='bx bxs-user'></i>ENTRAR</button>
                            <button type="button" class="btnC"><i class='bx bxs-group' ></i>CADASTRAR-SE</button>
                        </ul>
                    </nav>
                </div>

                <!-- banner -->
                <div class="bannerI">
                    <div class="text">
                        <h2>Educação para o futuro</h2>
                        <h1>Transforme seu Conhecimento <br>
                            com a FutureEdu</h1>
                        <h4>Cursos online e presenciais com especialistas renomados. Desenvolva habilidades essenciais e
                            conquiste novas oportunidades no mercado de trabalho !</h4>
                    </div>

                    <div class="img">
                        <img src="asserts/img/01.png" alt="">
                    </div>
                </div>
            </section>
        </div>
    </header>

    <main>
        <!-- carrosell -->
        <div class="carroselC">
            <div class="carrosel-wrapper">
                <div class="carrosel">
                    <img class="carrosel-img" src="asserts/img/c-sharp.png" alt="C Sharp">
                    <img class="carrosel-img" src="asserts/img/css.png" alt="CSS">
                    <img class="carrosel-img" src="asserts/img/excel.png" alt="Excel">
                    <img class="carrosel-img" src="asserts/img/git.png" alt="Git">
                    <img class="carrosel-img" src="asserts/img/html.png" alt="HTML">
                    <img class="carrosel-img" src="asserts/img/js.png" alt="JavaScript">
                    <img class="carrosel-img" src="asserts/img/c++.png" alt="C++">
                    <img class="carrosel-img" src="asserts/img/ts.png" alt="TypeScript">
                    <img class="carrosel-img" src="asserts/img/mysql.png" alt="MySQL">
                    <img class="carrosel-img" src="asserts/img/php.png" alt="PHP">
                </div>
            </div>
        </div>


        <div class="popular">
            <h3>Categorias Populares</h3>
            <h2>Principais Categorias de Desenvolvimento</h2>
            <nav>
                <ul>
                    <li>
                        <a href="#"><img src="asserts/img/Desenvolvimento-Web.png" alt="Desenvolvimento Web"></a>
                        <p>Desenvolvimento Web</p>
                        <span>35 Cursos</span>
                    </li>
                    <li>
                        <a href="#"><img src="asserts/img/JavaScript-e-Frameworks.png"
                                alt="JavaScript e Frameworks"></a>
                        <p>JavaScript e Frameworks</p>
                        <span>42 Cursos</span>
                    </li>
                    <li>
                        <a href="#"><img src="asserts/img/Python-e-Ciência-de-Dados.png" alt="Ciência de Dados"></a>
                        <p>Ciência de Dados</p>
                        <span>28 Cursos</span>
                    </li>
                    <li>
                        <a href="#"><img src="asserts/img/PHP-e-Desenvolvimento-Back-End.png"
                                alt="Desenvolvimento Back-End"></a>
                        <p>Desenvolvimento Back-End</p>
                        <span>30 Cursos</span>
                    </li>
                    <li>
                        <a href="#"><img src="asserts/img/Banco-de-Dados-e-SQL.png" alt="Banco de Dados e SQL"></a>
                        <p>Banco de Dados e SQL</p>
                        <span>25 Cursos</span>
                    </li>
                    <li>
                        <a href="#"><img src="asserts/img/Desenvolvimento-Mobile-e-PWA.png"
                                alt="Desenvolvimento Mobile e PWA"></a>
                        <p>Desenvolvimento Mobile e PWA</p>
                        <span>20 Cursos</span>
                    </li>
                </ul>
                <button>Ver todas as categorias</button>
            </nav>
        </div>

        <div class="destaque">
            <h3>Cursos em Destaque</h3>
            <h2>Escolha um Curso para Começar</h2>

            <div class="cards">
                <!-- CARD 1 -->
                <div class="card">
                    <img class="cursoI" src="asserts/img/Desenvolvimento-Web.png" alt="Desenvolvimento Web">
                    <h4 class="titulo">Desenvolvimento Web</h4>
                    <div class="cardT">
                        <span class="avaliacoes">★★★★★ (12 avaliações)</span>
                        <p class="descricao">
                            Fundamentos de HTML, CSS e JavaScript para Web.
                        </p>
                        <div class="info">
                            <span class="aulas">25 Aulas</span>
                            <span class="modo">| Curso Online</span>
                        </div>
                        <div class="professor">
                            <img class="professorI" src="asserts/img/Carlos-Silva.png" alt="Carlos Silva">
                            <span class="nome">Carlos Silva</span>
                        </div>
                        <a href="#" class="btn-saiba-mais">Saiba Mais</a>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="card">
                    <img class="cursoI" src="asserts/img/JavaScript-e-Frameworks.png" alt="JavaScript e Frameworks">
                    <h4 class="titulo">JavaScript e Frameworks</h4>
                    <div class="cardT">
                        <span class="avaliacoes">★★★★★ (15 avaliações)</span>
                        <p class="descricao">
                            JavaScript moderno e principais frameworks front-end.
                        </p>
                        <div class="info">
                            <span class="aulas">30 Aulas</span>
                            <span class="modo">| Curso Online</span>
                        </div>
                        <div class="professor">
                            <img class="professorI" src="asserts/img/Mariana-Rocha.png" alt="Mariana Rocha">
                            <span class="nome">Mariana Rocha</span>
                        </div>
                        <a href="#" class="btn-saiba-mais">Saiba Mais</a>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="card">
                    <img class="cursoI" src="asserts/img/PHP-e-Desenvolvimento-Back-End.png" alt="PHP e MySQL">
                    <h4 class="titulo">PHP e MySQL</h4>
                    <div class="cardT">
                        <span class="avaliacoes">★★★★★ (10 avaliações)</span>
                        <p class="descricao">
                            Criação de aplicações web com PHP e MySQL.
                        </p>
                        <div class="info">
                            <span class="aulas">28 Aulas</span>
                            <span class="modo">| Curso Online</span>
                        </div>
                        <div class="professor">
                            <img class="professorI" src="asserts/img/Lucas-Fernandes.png" alt="Lucas Fernandes">
                            <span class="nome">Lucas Fernandes</span>
                        </div>
                        <a href="#" class="btn-saiba-mais">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="sobre">
            <div class="faixa"></div>
            <img src="asserts/img/instalacoes.png" alt="Instalações">
            <div class="conteudo">
                <h3>Sobre a FutureEdu</h3>
                <h2>Qualificação Profissional e <br> Habilidades para o Futuro</h2>
                <p>Na FutureEdu, conectamos tecnologia e aprendizado para preparar você para o mercado de trabalho.
                    Oferecemos cursos dinâmicos e atualizados, com foco em desenvolvimento de software, análise de
                    dados e inovação digital. Nossa metodologia combina ensino interativo, práticas reais e
                    certificações reconhecidas.</p>

                <div class="cardS">
                    <div class="prof">
                        <img src="asserts/img/Carlos-Silva.png" alt="Carlos Silva">
                    </div>
                    <div class="cardText">
                        <h4>Instrutores Especializados</h4>
                        <p>Nosso Professores são profissionais no mercado, trazendo experiência real para dentro da sala
                            de
                            aula.</p>
                    </div>
                </div>

                <div class="cardS">
                    <div class="prof">
                        <img src="asserts/img/Mariana-Rocha.png" alt="Mariana Rocha">
                    </div>
                    <div class="cardText">
                        <h4>Certificação Valorizada</h4>
                        <p>Ao concluir nossos cursos, você recebe um certificado que comprova suas habilidades e
                            impulsiona
                            sua
                            carreira.</p>
                    </div>
                </div>

                <div class="cardS">
                    <div class="prof">
                        <img src="asserts/img/Lucas-Fernandes.png" alt="Lucas Fernandes">
                    </div>
                    <div class="cardText">
                        <h4>Aulas Online e Flexiveis</h4>
                        <p>Estude no seu ritmo com nossa plataforma moderna e acessível de qualquer lugar.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

    </footer>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JavaScript -->
    <script src="/asserts/js/script.js"></script>
</body>

</html>