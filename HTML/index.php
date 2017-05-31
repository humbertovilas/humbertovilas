<!DOCTYPE html>
<!-- 
Tópico do Curso: Iniciando Marcação
Começou no Vídeo: Iniciando com HTML
-->
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de HTML5</title>
        <meta name="descrption" content="Página construída no curso"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!--
        FAVICON
        STYLE
        FONT    
        -->
    </head>
    <body>
        <header> <!-- Aqui inicia o cabeçalho do site -->
            <img title="Curso de HTML 5" alt="[Curso de HTML 5]" src="img/_logo.png"/>
            <h1>Curso de HTML 5</h1>

            <ul>
                <li><a href="#home" title="Curso de HTML 5">Home</a></li>
                <li><a href="#curso" title="Sobre o Curso de HTML 5">O Curso</a></li>
                <li><a target="_blank" href="https://www.upinside.com.br/curso/html5-do-jeito-certo" title="Curso Work Series de HTML 5">Work Series</a></li>
                <li><a href="#videoaulas" title="Confira Vídeo Aulas do Curso de HTML 5">Vídeo Aula</a></li>
                <li><a href="#contato" title="Contato sobre o Curso de HTML 5">Fale Conosco</a></li>
            </ul>

        </header>
        <!--AQUI FECHA O CABEÇALHO -->
        <main> <!-- Aqui inicia o conteúdo do site -->
            <!-- Aqui inicia o destaque do site -->
            <article>
                <header>
                    <h1>Bem Vindo(a) ao Curso Gratuito de HTML5</h1>
                    <p class="tagline">Você está pronto para aprender HTML5, CSS, jQuery de forma descomplicada, gratuita e do jeito certo? Confira o nosso curso gratuito de HTML5</p>
                    <div>
                        <div class="fb-like" data-href="https://www.facebook.com/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                        <div class="fb-share-button" data-href="https://www.upinside.com.br/curso/git-workflow" data-layout="button_count" data-size="small" data-mobile-iframe="false"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.upinside.com.br%2Fcurso%2Fgit-workflow&amp;src=sdkpreparse">Compartilhar</a></div>
                    </div>
                </header>
                <div> <!-- Aqui é a div do vídeo do destaque do site -->
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TYXE-legZMU?list=PLi_gvjv-JgXq-SVk-gyVEa0r1WANGtZKn" frameborder="0" allowfullscreen></iframe>
                </div>
            </article>
            <!-- Aqui termina o destaque do site -->

            <!-- Aqui inicia o conteúdo do curso de HTML5 -->
            <section>
                <header>
                    <h1>Curso de HTML5</h1>
                    <p class="tagline">Confira o que você vai aprender no curso de HTML 5</p>
                </header>

                <article>
                    <img title="Curso de HTML5 - HTML5 e CSS" alt="[Curso de HTML5 - HTML5 e CSS]" src="img/01.jpg"/>
                    <h1>HTML e HTML 5!</h1>
                    <p>Aprenda a utilizar HTML5 do jeito certo! Segmentando seu site e distribuindo o conteúdo de forma otimizada e de ponta a ponta.</p>
                    <span><time datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('d/m/Y \a\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img title="Curso de HTML5 - HTML5, CSS e CSS3" alt="[Curso de HTML5 - HTML5, CSS e CSS3]" src="img/02.jpg"/>
                    <h1>CSS e CSS3!</h1>
                    <p>Trabalhe com produtividade e qualidade com seu CSS3.</p>
                    <span><time datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('d/m/Y \a\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img title="Curso de HTML5 - jQUERY" alt="[Curso de HTML5 - jQUERY]" src="img/03.jpg"/>
                    <h1>jQUERY!</h1>
                    <p>JavaScript? Claro, mais aqui vamos trabalhar com jQUERY. Entender a biblioteca e o uso padrão.</p>
                    <span><time datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('d/m/Y \a\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                </article>

                <article>
                    <img title="Curso Work Series - HTML5 do jeito certo!" alt="[Curso Work Series - HTML5 do jeito certo!]" src="img/04.jpg"/>
                    <h1>WORK SERIES!</h1>
                    <p>Terminou o curso de HTML5? Então agora está na hora de se tornar um ninja com a linguagens e aprender ténicas avançadas de programação.</p>
                    <span><time datetime="<?php echo date('Y-m-d'); ?>"><?php echo date('d/m/Y \a\s H:i\h\s'); ?></time> em <b>Matérias</b></span>
                </article>

                <footer>
                    <img title="Confira o curso completo de HTML5 do jeito certo!" alt="[Confira o curso completo de HTML5 do jeito certo!]" src="img/05.png"/>
                    <h1>Curso de HTML 5 do jeito certo!</h1>
                    <p>Aprenda a utilizar todo o poder do HTML5 semântico somado a avançadas técnicas de SEO para criar sites altamente lucrativos.</p>
                    <a target="_blank" title="Conheça o Curso de HTML5 do jeito certo" href="https://www.upinside.com.br/curso/html5-do-jeito-certo">Conhecer Agora!</a>
                </footer>
            </section>

            <!-- Aqui termina o conteúdo do curso de HTML5 -->
        </main>
        <!--AQUI FECHA O CONTEÚDO -->

        <footer> <!-- Aqui inicia o rodapé do site -->
            <h1>Curso de HTML 5</h1>
            <nav>
                <h1>UpInside Treinamentos</h1>
                <ul>
                    <li><a target="_blank" title="UpInside" href="//www.upinside.com.br/">UpInside</a></li>
                    <li>|</li>
                    <li><a target="_blank" title="UpInside No Facebook" href="//pt-br.facebook.com/upinside/">Facebook</a></li>
                    <li>|</li>
                    <li><a target="_blank" title="UpInside no YouTube" href="//www.youtube.com/c/RobsonVLeite">YouTube</a></li>
                    <li>|</li>
                </ul>
            </nav>
        </footer>
        <!--AQUI FECHA O RODAPÉ --> 


        <!--AQUI É A CONFIGURAÇÃO PARA USO DO FACEBOOK NO SITE --> 
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!--AQUI FECHA A CONFIGURAÇÃO PARA USO DO FACEBOOK NO SITE --> 

    </body>
</html>
