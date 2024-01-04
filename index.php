<?php

if(!isset($_SESSION))
{
    session_start();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eight Minds</title>

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <link rel="icon" href="img/logo.jpg">
    <!-- fonte -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Normal -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- CSS custom -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <noscript>Por favor, ative o JavaScript para utilizar este site</noscript>

    <button onclick="topFunction()" id="btntopo"><i class="fas fa-chevron-up"></i></button>

    <header>
            <header>

              <nav class="nave">
                <h2 class="logo">Eight Minds</h2>
                  <nav class="navigation">
                    <a class="nav-links" href="#promo">Home</a>
                    <a class="nav-links" href="sobre.html">Sobre</a>
                    <a class="nav-links" href="games.html">Games</a>
                    <a class="nav-links" href="contato.html">Contato</a>
                    <a class="btnLogin-popup" href="login.php">Sign-up</a>
              </nav>
             </nav>

             <div class="mobile-menu-icon" id="mobile-menu-icon">
                <button onclick="menuShow()" class="botao-mobile"><img class="icon" src="assets/img/menu_white_36dp.svg" alt="Botao de abertura do menu mobile"></button>
             </div>

    </header>
      <div class="mobile-menu">
              <ul class="nav-links-mobile">
                <li><a href="#promo">Home</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="games.html">Games</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="login.php">Sign-up</a></li>
              </ul>
      </div>

    <section id="promo" class="flex">
        <div class="container">
            <span>Junte-se a batalha</span>
            <h2>Unknown Space</h2>
            <p class="text">Com gráficos vibrantes e uma trilha sonora empolgante, Unknown Space cativa os jogadores com sua atmosfera imersiva e gameplay desafiador. Seja explorando o desconhecido, combatendo ameaças intergalácticas ou conquistando a galáxia, este jogo 2D no espaço proporciona uma experiência inesquecível aos fãs de aventuras cósmicas. Prepare-se para decolar e embarcar na sua própria jornada pelas estrelas!</p>
            <div class="btn-groups flex">
                <a href="#videos">
                    <i class="fas fa-play"></i> Assista o trailer
                </a>
                <a href="games.html">
                    <i class="fas fa-gamepad"></i> Jogue gratuitamente
                </a>
            </div>
        </div>
    </section>

    <!-- header -->
    <header id="header">
        <div class="container">
            <div class="header-content">
                <div class="header-item">
                    <img src="resources/images/banner-img-1.jpg">
                    <div class="header-item-text">
                        <h2>PLAY THE ULTIMATE EDITION NOW!</h2>
                        <p class="text">Experience the complete story from the beginning to the End! Minecraft Dungeons:
                            Ultimate Edition includes the base game and all six DLCs.</p>
                        <div>
                            <small>By John Doe</small>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                </div>

                <div class="header-item">
                    <img src="resources/images/banner-img-2.jpg">
                    <div class="header-item-text">
                        <h2>PUBG: New State (Mobile) crosses 40 million pre-registrations</h2>
                        <p class="text">Kraftson is gearing up to launch its second battle royale mobile game after
                            Battlegrounds Mobile India called PUBG: New State. The game will follow the same battle
                            royale blueprints as previous titles.</p>
                        <div>
                            <small>By John Doe</small>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                </div>

                <div class="header-item">
                    <img src="resources/images/banner-img-3.jpg">
                    <div class="header-item-text">
                        <h2>Apex Legends Evolution Collection Events</h2>
                        <p class="text">Learn what a Legend can become in the Apex Legends Evolution Collection Event.
                        </p>
                        <div>
                            <small>By John Doe</small>
                            <a href="#">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- news section -->
        <section id="news">
            <div class="title">
                <div class="container">
                    <h2>
                        <i class="fas fa-rss"></i> artes
                    </h2>
                </div>
            </div>

            <div class="container">
                <!-- news latest -->
                <div class="news-latest">
                    <h3>Ultimas noticias</h3>
                    <article>
                        <div class="item-img">
                            <img src="resources/images/news-1.jpg">
                            <span>
                                <i class="fas fa-comment"></i> 10
                            </span>
                        </div>
                        <div class="item-text">
                            <a href="#" class="h1">
                                <span class="category">Recente</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit.
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis
                                quia. Officia similique omnis optio!</p>
                            <div class="date">News | Recente | 11:00 AM</div>
                        </div>
                    </article>

                    <article>
                        <div class="item-img">
                            <img src="resources/images/news-2.jpg">
                            <span>
                                <i class="fas fa-comment"></i> 10
                            </span>
                        </div>
                        <div class="item-text">
                            <a href="#" class="h1">
                                <span class="category">Recente</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit.
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis
                                quia. Officia similique omnis optio!</p>
                            <div class="date">News | Recente | 11:00 AM</div>
                        </div>
                    </article>

                    <article>
                        <div class="item-img">
                            <img src="resources/images/news-3.jpg">
                            <span>
                                <i class="fas fa-comment"></i> 10
                            </span>
                        </div>
                        <div class="item-text">
                            <a href="#" class="h1">
                                <span class="category">Recente</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit.
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis
                                quia. Officia similique omnis optio!</p>
                            <div class="date">News | Recente | 11:00 AM</div>
                        </div>
                    </article>

                    <article>
                        <div class="item-img">
                            <img src="resources/images/news-4.jpg">
                            <span>
                                <i class="fas fa-comment"></i> 10
                            </span>
                        </div>
                        <div class="item-text">
                            <a href="#" class="h1">
                                <span class="category">Recente</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit.
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis
                                quia. Officia similique omnis optio!</p>
                            <div class="date">News | Recente | 11:00 AM</div>
                        </div>
                    </article>

                    <article>
                        <div class="item-img">
                            <img src="resources/images/news-5.jpg">
                            <span>
                                <i class="fas fa-comment"></i> 10
                            </span>
                        </div>
                        <div class="item-text">
                            <a href="#" class="h1">
                                <span class="category">Recente</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit.
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis
                                quia. Officia similique omnis optio!</p>
                            <div class="date">News | Recente | 11:00 AM</div>
                        </div>
                    </article>
                </div>
                <!-- end of news latest -->

                <!-- news popular -->
                <div class="news-popular">
                    <h3>Noticias populares</h3>
                    <div class="popular-list">
                        <article>
                            <div class="item-img">
                                <img src="resources/images/news-6.jpg">
                            </div>
                            <div class="item-text">
                                <a href="#" class="h1"><span class="category">popular</span>Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit.</a>
                            </div>
                        </article>

                        <article>
                            <div class="item-img">
                                <img src="resources/images/news-7.jpg">
                            </div>
                            <div class="item-text">
                                <a href="#" class="h1"><span class="category">popular</span>Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit.</a>
                            </div>
                        </article>

                        <article>
                            <div class="item-img">
                                <img src="resources/images/news-8.jpg">
                            </div>
                            <div class="item-text">
                                <a href="#" class="h1"><span class="category">popular</span>Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit.</a>
                            </div>
                        </article>

                        <article>
                            <div class="item-img">
                                <img src="resources/images/news-9.jpg">
                            </div>
                            <div class="item-text">
                                <a href="#" class="h1"><span class="category">popular</span>Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit.</a>
                            </div>
                        </article>

                        <article>
                            <div class="item-img">
                                <img src="resources/images/news-10.jpg">
                            </div>
                            <div class="item-text">
                                <a href="#" class="h1"><span class="category">popular</span>Lorem ipsum dolor sit, amet
                                    consectetur adipisicing elit.</a>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- end of news popular -->
            </div>
        </section>
        <!-- end of news section -->

        <!-- videos section -->

        <section id="videos">
            <div class="title">
                <div class="container">
                    <h2>
                        <i class="fas fa-video"></i> Videos & Trailers
                    </h2>
                </div>
            </div>
            <div class="container">
                <article>
                    <div class="item-video">
                        <video controls loop poster="resources/videos/video-1-poster.webp">
                            <source src="resources/videos/video-1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1"><span class="category">trailer</span>Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit.</a>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit
                            facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class="item-video">
                        <video controls loop poster="resources/videos/video-2-poster.webp">
                            <source src="resources/videos/video-2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1"><span class="category">trailer</span>Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit.</a>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit
                            facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class="item-video">
                        <video controls loop poster="resources/videos/video-3-poster.webp">
                            <source src="resources/videos/video-3.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1"><span class="category">trailer</span>Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit.</a>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit
                            facere laborum laudantium, modi quos.</p>
                    </div>
                </article>

                <article>
                    <div class="item-video">
                        <video controls loop poster="resources/videos/video-3-poster.webp">
                            <source src="resources/videos/video-4.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1"><span class="category">trailer</span>Lorem ipsum dolor, sit amet
                            consectetur adipisicing elit.</a>
                        <p class="text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil reprehenderit
                            facere laborum laudantium, modi quos.</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- end of videos section -->

        <!-- reviews section -->
        <section id="reviews">
            <div class="title">
                <div class="container">
                    <h2>
                        <i class="fas fa-comments"></i> História e curiosidades
                    </h2>
                </div>
            </div>
            <div class="container">
                <article>
                    <div class="item-img">
                        <img src="resources/images/review-1.jpg">
                        <span>
                            <i class="fas fa-star"></i> 10
                        </span>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1">
                            <span class="category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia.
                            Officia similique omnis optio!</p>
                        <div class="date">Reviews | Tendencias | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class="item-img">
                        <img src="resources/images/review-2.jpg">
                        <span>
                            <i class="fas fa-star"></i> 10
                        </span>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1">
                            <span class="category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia.
                            Officia similique omnis optio!</p>
                        <div class="date">Reviews | Tendencias | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class="item-img">
                        <img src="resources/images/review-3.jpg">
                        <span>
                            <i class="fas fa-star"></i> 10
                        </span>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1">
                            <span class="category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia.
                            Officia similique omnis optio!</p>
                        <div class="date">Reviews | Tendencias | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class="item-img">
                        <img src="resources/images/review-4.jpg">
                        <span>
                            <i class="fas fa-star"></i> 10
                        </span>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1">
                            <span class="category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia.
                            Officia similique omnis optio!</p>
                        <div class="date">Reviews | Tendencias | 11:00 AM</div>
                    </div>
                </article>

                <article>
                    <div class="item-img">
                        <img src="resources/images/review-5.jpg">
                        <span>
                            <i class="fas fa-star"></i> 10
                        </span>
                    </div>
                    <div class="item-text">
                        <a href="#" class="h1">
                            <span class="category">review</span>Lorem ipsum dolor sit amet consectetur, adipisicing
                            elit.
                        </a>
                        <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, facilis quia.
                            Officia similique omnis optio!</p>
                        <div class="date">Reviews | Tendencias | 11:00 AM</div>
                    </div>
                </article>
            </div>
        </section>
        <!-- end of reviews section -->
    </main>
    <!-- end of main -->

    <!-- footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer-links-1">
                <h2>Junte-se a nos:</h2>
                <ul class="flex">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitch"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>

            <div class="footer-links-2">
                <ul class="flex">
                    <li>
                        <a href="sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href="#">Politica de privacidade</a>
                    </li>
                    <li>
                        <a href="#">Termos de uso</a>
                    </li>
                    <li>
                        <a href="contato.html">Suporte</a>
                    </li>
                </ul>
            </div>

            <p class="text">&copy; <a href="#">Eight minds</a>. All Rights Reserved.</p>
        </div>
    </footer>
    <!-- end of footer -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- custom js -->
    <script src="js/script.js"></script>
    <script src="js/main.js"></script>
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>

</body>

</html>