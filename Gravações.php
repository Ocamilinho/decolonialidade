<?php
session_start();
include_once('config.php');
if((!isset($_SESSION['email'])) and (!isset($_SESSION['senha']))){
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location:index.html');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-grava.css">
    <link rel="stylesheet" href="javascript.js">
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header-top">
                <div class="icon">
                    <a href="Login.html"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffbeeff" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                    </a>
                </div>
                <div class="header-title">
                    <p>Decolonialidade</p>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffbeeff" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                </div>
        </div>
        <div class="header-down">
            <img id="header-svg" src="wavesNegative.svg" alt="">
            <div class="header-down-cont">
                <p>blabla</p>
                <div class="vert-bar"></div>
                <p>bleble</p>
                <div class="vert-bar"></div>
                <p>bluvlu</p>
            </div>
        </div>
    </header>
    <main>
        <div class="main-hd"></div>

        <section class="tl-conteiner">

            <div class="ano-item">2019</div>


            <div id="item-01" class="tl-item">
                <div class="btn-tl"></div>
                <div class="tl-title">
                    <p class="tl-data">
                        14 de dezembro
                    </p>
                    <p class="tl-nome">
                        Decolonialidade no Brasil
                    </p>
                </div>
                <div class="tip"></div>



                <div id="tl-01" class="popover-tl">
                    <div class="popover-cont">
                        <div class="video-tl">
                            <iframe src="https://www.youtube.com/embed/TV5faBBHfkw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="desc-tl">
                            <div class="popover-title">
                                <div class="title-tl">Lorem ipsum dolor</div>
                            </div>
                            <div class="popover-desc">
                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea suscipit voluptate dolorem, ex provident veniam quae, qui praesentium animi, soluta unde. Itaque delectus accusantium non fugiat optio perspiciatis a quo.</p>
                            </div>
                            <div class="popover-tags">
                                <div class="temp">
                                    <p>Duração:</p>
                                    <p>1hr 32min</p>
                                </div>
                                <div class="membros">
                                    <p id="memb-title">Participantes:</p>
                                    <div>
                                        <p id="esp">shsgdjghsadjh</p>,
                                        <p id="mem">shsgdjghsadjh</p>.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 



                </div>
            </div>
            <div class="tl-item">
                <div class="btn-tl"></div>
                <div class="tl-title">
                    <p class="tl-data">
                        14 de dezembro
                    </p>
                    <p class="tl-nome">
                        Decolonialidade no Brasil
                    </p>
                </div>
            </div>
            <div class="tl-item">
                <div class="btn-tl"></div>
                <div class="tl-title">
                    <p class="tl-data">
                        14 de dezembro
                    </p>
                    <p class="tl-nome">
                        Decolonialidade no Brasil
                    </p>
                </div>
            </div>
            

            <div class="line"></div>

        </section>
    </main>


    <footer>
        
        <div class="footer-cont">
            <div class="about-footer">
                <div class="about-cont">
                <p class="h4"> Mais Decolonialidade</p>
                <hr>
                 <a href=""><p>Sobre nós</p></a>
                 <a href=""><p>Fale Conosco</p></a>
                 <a href=""><p>Integrantes</p></a>
                </div>
                
            </div>
            <div class="vert-bar-footer"></div>
            <div class="social-footer">
                <div class="social-cont">
                    <div class="social-cont-icon">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a href="">facebook</a>
                    </div>

                    <div class="social-cont-icon">
                        <a href="">
                             <svg id="mail" width="556px" height="556px" viewBox="0 0 192.00 192.00" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#ffffff" stroke-linejoin="round" stroke-width="14.207999999999998" d="M22 57.265V142c0 5.523 4.477 10 10 10h24V95.056l40 30.278 40-30.278V152h24c5.523 0 10-4.477 10-10V57.265c0-13.233-15.15-20.746-25.684-12.736L96 81.265 47.684 44.53C37.15 36.519 22 44.032 22 57.265Z"></path></g></svg>
                        </a>
                        <a href="">email</a>
                    </div>

                    <div class="social-cont-icon">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" class="bi bi-instagram" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                            </svg>
                        </a>
                        <a href="">instragram</a>
                    </div>


                </div>
            </div>
        </div>
    </footer>
</body>
</html>