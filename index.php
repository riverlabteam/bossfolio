<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
    <section class="app">
        <header class="sticky">
            <section class="container app_header">
                <a href="<?php echo get_home_url(); ?>" title="<?php echo get_bloginfo('name'); ?>" class="logo notranslate">
                    <span>b</span>
                    <span>o</span>
                    <span>s</span>
                    <span>s</span>
                    <span class="special">.</span>
                    <span>r</span>
                    <span>i</span>
                    <span>v</span>
                    <span>e</span>
                    <span>r</span>
                    <span>l</span>
                    <span>a</span>
                    <span>b</span>
                </a>
                <div class="menu">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="28" height="28"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"/></svg>
                </div>
                <nav class="menu_container">
                    <div class="right notranslate">
                        <div class="close_menu">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="35" height="35"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 10.586l4.95-4.95 1.414 1.414-4.95 4.95 4.95 4.95-1.414 1.414-4.95-4.95-4.95 4.95-1.414-1.414 4.95-4.95-4.95-4.95L7.05 5.636z"/></svg>
                        </div>
                        <ul>
                            <li>
                                <a href="<?php echo get_home_url(); ?>">home</a>
                            </li>
                            <li>
                                <a href="#">github</a>
                            </li>
                            <li>
                                <a href="#">linkedin</a>
                            </li>
                            <li>
                                <a href="#">telegram</a>
                            </li>
                        </ul>
                        <footer>
                            <div class="contacts">
                                <ul>
                                    <li>
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"/></svg></span>
                                        <a href="mailto:contato@riverlab.org">contato@riverlab.org</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="music_waves">
                                <div></div><div></div><div></div><div></div><div></div>
                            </div>
                        </footer>
                    </div>
                </nav>
            </section>
        </header>
        <section class="sections">
            <section class="sticky_sidebar">
                <aside class="container">
                    <section class="sidebar">
                        <div class="circles"></div>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 16.172l5.364-5.364 1.414 1.414L12 20l-7.778-7.778 1.414-1.414L11 16.172V4h2v12.172z" class="irru" fill="rgba(255,255,255,1)"/></svg>
                        </div>
                    </section>
                </aside>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//001.png);">
                <div class="container special_animation">
                    <h3 class="description"><?php echo __('“A melhor maneira de prever o futuro é criá-lo.”', 'bossfolio'); ?></h3>
                    <span>— <?php echo __('Abraham Lincoln', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//002.png);">
                <div class="container">
                    <h2 class="description"><?php echo __('Meu nome é ', 'bossfolio'); ?><span class="notranslate">“River”</span></h2>
                    <span class="notbolder"><?php echo __('Sou um desenvolvedor fullstack, pesquisador de cybersegurança e estudante de ciência da computação.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//003.png);">
                <div class="container">
                    <h1 class="description"><?php echo __('Especialista PHP e Consultor Back End.', 'bossfolio'); ?></h1>
                    <span class="notbolder"><?php echo __('Com quase 10 anos de experiência em PHP, já construí aplicações e sites que estiveram entre os 100 sites mais acessados do Brasil segundo o Alexa website Ranking e Similarweb.', 'bossfolio'); ?><br><br><?php echo __('Sou colaborador da documentação do Wordpress e alguns outros projetos internet à fora.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//004.png);">
                <div class="container">
                    <h3 class="description notranslate">Res, non Verba.</h3>
                    <span class="notbolder"><?php echo __('Alguns dos projetos que tenho um carinho especial por ter desenvolvido ou feito parte.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//005.png);">
                <div class="container">
                    <h3 class="description notranslate">alpha Canis Majoris</h3>
                    <span class="notbolder"><?php echo __('“Sirius” é um template Wordpress orientado à objetos e atualizado com recursos do PHP8.1 com suporte à Child Themes.', 'bossfolio'); ?><br><br><?php echo __('Conta com um sistema de cache próprio, API interna, sistema de usuários e integração com as APIs do TheMovieDB e reCaptcha.', 'bossfolio'); ?><br><br><?php echo __('Atualmente é utilizado por alguns sites que estão entre os 500 mais acessados do Brasil segundo o Similarweb.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//006.png);">
                <div class="container">
                    <h3 class="description notranslate">Energiza-Con 22</h3>
                    <span class="notbolder"><?php echo __('Esse é o maior evento de cultura nerd do alto sertão baiano, que traz 11 horas de diversão, interação e lazer para todos que participam.', 'bossfolio'); ?><br><br><?php echo __('Em 2019 foi o responsável por trazer o Youtuber Muca Muriçoca à cidade de Paulo Afonso e realizar a maior edição do evento!', 'bossfolio'); ?><br><br><?php echo __('A organização preza pela divulgação da cultura nerd e quer torna-la um expoente cultural na região.', 'bossfolio'); ?><br><?php echo __('Ao ver isso, Eu sabia que precisava desenvolver tecnologia em parceria com eles.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img//007.png);">
                <div class="container">
                    <h3 class="description notranslate">N.A.C. by Riverlab</h3>
                    <span class="notbolder"><?php echo __('Nossa coleção de APIs para E-Commerce em uma só dashboard.', 'bossfolio'); ?><br><br><?php echo __('O N.A.C. é feito com uma API interna RestFul que integra e faz o laço entre as APIs da Nuvemshop, Pré-Postagem e Correios.', 'bossfolio'); ?><br><br><?php echo __('Com nossa API inteiramente em PHP, construimos uma Dashboard assíncrona e leve que foi projetada inicialmente para ser usada por apenas uma loja e que logo precisou ser remodelada para suportar uma lista com algumas das maiores lojas de produtos nerd do País.', 'bossfolio'); ?></span>
                </div>
            </section>
            <section class="section">
                <div class="container">
                    <h3 class="description"><?php echo __('Atualmente não estou disponível para nenhum projeto', 'bossfolio'); ?> =)</h3>
                </div>
            </section>
        </section>
    </section>

<!--
               __  
              / _) 
       .-^^^-/ /   
    __/       /    
   <__.|_|-|_|     
-->
<?php wp_footer(); ?>
</body>
</html>