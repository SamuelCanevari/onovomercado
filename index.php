<!DOCTYPE html>
<html class="html" lang="pt-BR" prefix="og: https://ogp.me/ns#" itemscope itemtype="http://schema.org/WebPage">

<head>

    <meta charset="UTF-8">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Template editável</title>

    <style id='wp-block-library-theme-inline-css' type='text/css'>
        .wp-block-audio figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-audio figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-code {
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Menlo, Consolas, monaco, monospace;
            padding: .8em 1em
        }

        .wp-block-embed figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-embed figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .blocks-gallery-caption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .blocks-gallery-caption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-image figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-image figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-pullquote {
            border-top: 4px solid;
            border-bottom: 4px solid;
            margin-bottom: 1.75em;
            color: currentColor
        }

        .wp-block-pullquote__citation,
        .wp-block-pullquote cite,
        .wp-block-pullquote footer {
            color: currentColor;
            text-transform: uppercase;
            font-size: .8125em;
            font-style: normal
        }

        .wp-block-quote {
            border-left: .25em solid;
            margin: 0 0 1.75em;
            padding-left: 1em
        }

        .wp-block-quote cite,
        .wp-block-quote footer {
            color: currentColor;
            font-size: .8125em;
            position: relative;
            font-style: normal
        }

        .wp-block-quote.has-text-align-right {
            border-left: none;
            border-right: .25em solid;
            padding-left: 0;
            padding-right: 1em
        }

        .wp-block-quote.has-text-align-center {
            border: none;
            padding-left: 0
        }

        .wp-block-quote.is-large,
        .wp-block-quote.is-style-large,
        .wp-block-quote.is-style-plain {
            border: none
        }

        .wp-block-search .wp-block-search__label {
            font-weight: 700
        }

        :where(.wp-block-group.has-background) {
            padding: 1.25em 2.375em
        }

        .wp-block-separator.has-css-opacity {
            opacity: .4
        }

        .wp-block-separator {
            border: none;
            border-bottom: 2px solid;
            margin-left: auto;
            margin-right: auto
        }

        .wp-block-separator.has-alpha-channel-opacity {
            opacity: 1
        }

        .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
            width: 100px
        }

        .wp-block-separator.has-background:not(.is-style-dots) {
            border-bottom: none;
            height: 1px
        }

        .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
            height: 2px
        }

        .wp-block-table thead {
            border-bottom: 3px solid
        }

        .wp-block-table tfoot {
            border-top: 3px solid
        }

        .wp-block-table td,
        .wp-block-table th {
            padding: .5em;
            border: 1px solid;
            word-break: normal
        }

        .wp-block-table figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-table figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-video figcaption {
            color: #555;
            font-size: 13px;
            text-align: center
        }

        .is-dark-theme .wp-block-video figcaption {
            color: hsla(0, 0%, 100%, .65)
        }

        .wp-block-template-part.has-background {
            padding: 1.25em 2.375em;
            margin-top: 0;
            margin-bottom: 0
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #fff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, #9b51e0 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, #7adcb4 0%, #00d082 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, #cf2e2e 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, #eee 0%, #a9b8c3 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, #4aeadc 0%, #9778d1 20%, #cf2aba 40%, #ee2c82 60%, #fb6962 80%, #fef84c 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, #ffceec 0%, #9896f0 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, #fecda5 0%, #fe2d2d 50%, #6b003e 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, #ffcb70 0%, #c751c0 50%, #4158d0 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, #fff5cb 0%, #b6e3d4 50%, #33a7b5 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, #caf880 0%, #71ce7e 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, #020381 0%, #2874fc 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important
        }
    </style>

    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="style5.css">
    <link rel="stylesheet" href="style6.css">
    <link rel="stylesheet" href="style7.css">



    <script type='text/javascript' src='https://onovomercado.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
    <script type='text/javascript' src='https://onovomercado.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
    <link rel="https://api.w.org/" href="https://onovomercado.com/wp-json/" />
    <link rel="alternate" type="application/json" href="https://onovomercado.com/wp-json/wp/v2/pages/550" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://onovomercado.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://onovomercado.com/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 6.0" />
    <link rel='shortlink' href='https://onovomercado.com/?p=550' />
    <link rel="alternate" type="application/json+oembed" href="https://onovomercado.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fonovomercado.com%2Fo-bom-e-velho-marketing%2F" />
    <link rel="alternate" type="text/xml+oembed" href="https://onovomercado.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fonovomercado.com%2Fo-bom-e-velho-marketing%2F&#038;format=xml" />

    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important
        }
    </style>
    <style type="text/css">
        #site-header.has-header-media .overlay-header-media {
            background-color: rgba(0, 0, 0, .5)
        }
    </style>

    <style>
        .btn-default {
            font-family: inherit;
            font-size: 1rem;
            max-width: 12.5rem;
            height: 3.875rem;
            width: 14.5rem;
            border-radius: .25rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            text-decoration: none;
            letter-spacing: .125rem;
            color: #fff;
            cursor: pointer;
            -webkit-transition: ease-in-out .2s;
            transition: ease-in-out .2s
        }

        .btn-default:hover {
            background: #f4417c;
            color: #fff
        }

        header {
            height: 4rem;
            width: 100vw;
            margin: 0 auto;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            -ms-flex-pack: distribute;
            -webkit-box-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-transition: ease-in-out .2s;
            transition: ease-in-out .2s
        }

        header .content-header {
            width: 81%;
            max-width: 480px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        header .content-header img {
            height: 25px
        }

        header .content-header .access-header a {
            font-size: 1.685rem;
            text-decoration: none;
            position: relative;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            font-size: 12px;
            font-family: "Gilroy", sans-serif
        }

        header .content-header .access-header a:last-of-type {
            background-color: #e0004d;
            margin-left: 10px;
            padding: 8px 12px;
            border-radius: 4px
        }

        header .content-header .access-header a:last-of-type:hover {
            opacity: .8
        }

        header .content-header .access-header .enter-header:hover {
            color: #e0004d
        }

        .onm-courses-cta-video {
            height: 100%;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        @media screen and (max-width:360px) {
            header .content-header .access-header a:last-of-type {
                display: none
            }
        }

        @media screen and (min-width:1024px) {
            header {
                height: 60px;
                width: 100%;
                margin: 0 auto;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: center
            }

            header .content-header {
                width: 90%;
                max-width: 102.5rem;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: justify;
                -ms-flex-pack: justify;
                justify-content: space-between
            }

            header .content-header img {
                height: 40px
            }

            header .content-header .access-header a {
                font-size: 14px;
                text-decoration: none;
                position: relative;
                color: #fff;
                text-transform: uppercase;
                font-weight: 600;
                -webkit-transition: ease-in-out .2s;
                transition: ease-in-out .2s
            }

            header .content-header .access-header a:last-of-type {
                background-color: #e0004d;
                margin-left: 10px;
                padding: 12px 29px;
                border-radius: 4px
            }

            header .content-header .access-header a:last-of-type:hover {
                background-color: #f4417c
            }
        }
    </style>

</head>

<?php

$header_logo = 'imagens/header-logo.png';
$header_textoEntrar = 'Entrar';
$header_linkEntrar = 'https://portal.onovomercado.com.br/login';
$header_comeceAgora = 'Comece Agora';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$section1_texto1 = 'CURSO EXCLUSIVO DO PLANO ANUAL';
$section1_texto2_negrito = 'Aprenda os fundamentos do marketing tradicional';
$section1_texto2_normal = 'com Ricardo Poli';
$section1_texto3 = 'EXPERIMENTE GRÁTIS';
$section1_textoBotao = 'COMECE AGORA';
$section1_backgroundDesktop = 'imagens/section1-backgroundDesktop.png';
$section1_backgroundMobile = 'imagens/section1-backgroundMobile.png';
$section1_logo = 'imagens/section1-logo.png';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$section2_linkVideoYT = 'https://www.youtube-nocookie.com/embed/KLipeskiKhU';
$section2_titulo1 = 'Aprenda com quem sabe';
$section2_texto1 = 'Todo mundo quer saber o que existe de mais moderno no marketing digital. Mas você é capaz de enxergar o mundo através dos olhos do marketing tradicional? Demanda e consumo, desejos e necessidades, produto e serviço, marca e posicionamento - o meio pode até mudar, mas os fundamentos permanecem. <br><br> Chegou a hora de aprendê-los com o Ricardo Poli e colocar em prática no seu negócio.';
$section2_titulo2 = 'Conheça mais sobre o seu professor';
$section2_texto2 = 'A característica mais marcante de Ricardo Poli é seu carisma, permeada por uma contradição intrínseca. Seus alunos sempre o reconheceram pela dicotomia do “divertido, mas muito exigente”.
        <br><br> Engenheiro de formação, possui notória formação em Marketing e Comunicação pela ESPM, tendo atuado em outras grandes instituições.
        <br><br> Um grande professor e um grande curso, disponível agora para assinantes anuais d’O Novo Mercado.';
$section2_textoBotao = 'QUERO VENDER TODOS OS DIAS';
$section2_imagem = 'imagens/section2-imagem.jpg';

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$section3_titulo1cima = 'Veja mais sobre o curso';
$section3_titulo1baixo = 'O Bom e Velho Marketing';
$section3_texto1 = '13 aulas | Total: 8h21';

$section3_titulo2 = 'Conheça o programa do curso';
$section3_texto2 = 'INTRODUÇÃO - 11:48';

$section3_cursos = '

MÓDULO I – MARKETING//Aula 01 - A concepção de marketing//24:38;
//Aula 02 - A concepção de marketing//24:38;
//Aula 03 - A concepção de marketing//24:38;
//Aula 04 - A concepção de marketing//24:38;
//Aula 05 - A concepção de marketing//24:38;
//Aula 06 - A concepção de marketing//24:38;
MÓDULO II – MARKETING//Aula 07 - A concepção de marketing//24:38

';


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>

<body class="page-template page-template-templates page-template-template-bevm page-template-templatestemplate-bevm-php page page-id-550 wp-embed-responsive oceanwp-theme sidebar-mobile default-breakpoint has-sidebar content-right-sidebar has-topbar has-breadcrumbs">

    <link data-optimized="1" rel="stylesheet" href="https://onovomercado.com/wp-content/litespeed/css/ee4a636428f871409215dcd1e9d253b4.css?ver=253b4">
    <link data-optimized="1" rel="stylesheet" href="https://onovomercado.com/wp-content/litespeed/css/52ee3006dd2bc8570f682c05c50fe833.css?ver=fe833">
    <link data-optimized="1" rel="stylesheet" href="https://onovomercado.com/wp-content/litespeed/css/50ab5251ea0bc0d017bbb5851064b8d7.css?ver=4b8d7">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://dimsemenov.com/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>

    <div class="template-cursos">
        <!-- HEADER -->
        <header id="header">
            <div class="content-header">
                <a href="https://onovomercado.com.br/">
                    <picture>
                        <source srcset="<?= $header_logo ?>" media="(min-width: 1024px)" id="logo-desk">
                        <img src="<?= $header_logo ?>" alt="Logo">
                    </picture>
                </a>
                <div class="access-header">
                    <a href="<?= $header_linkEntrar ?>" class="enter-header"><?= $header_textoEntrar ?></a>
                    <a href="#onm-home-plans"><?= $header_comeceAgora ?></a>
                </div>
            </div>
        </header>

        <!-- SECTION 1 -->
        <section class="onm-courses-cta-video">
            <div class="video-background-wrapper">
                <picture>
                    <source srcset="<?= $section1_backgroundMobile ?>" media="(min-width: 200px) and (max-width: 1023px)">
                    <source srcset="<?= $section1_backgroundDesktop ?>" media=" (min-width: 1024px)">
                    <img src="<?= $section1_backgroundDesktop ?>" alt="Background" />
                </picture>
            </div>
            <div class="content-cta1-video">
                <div class="cta1-infos-video">
                    <p class="exclusive"><?= $section1_texto1 ?></p>
                    <picture>
                        <img src="<?= $section1_logo ?>" alt="Logo" class="logo-top" />
                    </picture>
                    <h1><strong><?= $section1_texto2_negrito ?> </strong><?= $section1_texto2_normal ?></h1>
                    <div class="content-btn">
                        <a href="#onm-home-plans" class="btn-default"><?= $section1_textoBotao ?></a>
                        <span><?= $section1_texto3 ?></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 2 -->
        <section class="onm-courses-teacher">
            <div class="content-teacher">
                <div class="video-teacher">
                    <iframe width="560" height="315" src="<?= $section2_linkVideoYT ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="content-about">
                    <h2><?= $section2_titulo1 ?></h2>
                    <p><?= $section2_texto1 ?></p>
                </div>
                <div class="about-teacher">
                    <div class="infos-teacher">
                        <img src="<?= $section2_imagem ?>" alt="">
                        <div>
                            <p>
                                <span><?= $section2_titulo2 ?></span>
                                <?= $section2_texto2 ?>
                            </p>
                            <a href="#onm-home-plans" class="btn-default"><?= $section2_textoBotao ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 -->
        <section class="onm-courses-accordeon">
            <div class="content-accordeon">
                <div class="title-accordeon">
                    <h2><?= $section3_titulo1cima ?><br><?= $section3_titulo1baixo ?></h2>
                    <p class="sub-title-accordeon"><?= $section3_texto1 ?></p>
                    <h2><?= $section3_titulo2 ?></h2>
                    <p class="sub-title-accordeon"><?= $section3_texto2 ?></p>
                </div>
                <ul class="list">
                    <?php
                    $itens = explode(";", $section3_cursos);
                    $num_linhas = count($itens);

                    foreach ($itens as $item) {
                        if ($item !== "") {
                            $array_item = explode("//", $item); ?>

                            <li class="accordeon">
                                <?php
                                if ($array_item[0] !== "") { ?>
                                    <span class="module"><?= $array_item[0] ?></span>
                                <?php
                                }
                                ?>
                                <div class="onm-accordeon-item">
                                    <p class="onm-accordeon-item-title"><?= $array_item[1] ?></p>
                                    <span><?= $array_item[2] ?></span>
                                </div>
                            </li>
                        <?php
                        }
                    }
                    if ($num_linhas > 5) { ?>
                        <li class="load-more" id="load-more">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/google-passo-a-passo/load-spinner.svg" alt="">
                            <span>carregar mais aulas</span>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </section>

        <section class="onm-home-carousel-classes">
            <div class="content-carousel-classes">
                <div class="title">
                    <h2>
                        Explore todos os cursos que fazem parte da assinatura anual
                    </h2>
                </div>

                <div class="owl-posts owl-carousel owl-theme">
                    <div class="item">
                        <a href="https://onovomercado.com.br/o-bom-e-velho-marketing/">
                            <img src="/wp-content/themes/o-novo-mercado/img/velho-marketing/banner-polly.jpg" alt="Bom e velho marketing">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/monte-seu-ifood/">
                            <img src="/wp-content/themes/o-novo-mercado/img/ifood/banner-ifood.jpg" alt="ifood">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/formacao-basica/">
                            <img src="/wp-content/themes/o-novo-mercado/img/banner-formacao-basica.png" alt="Formação Básica em Marketing Digital">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/youtube-levado-a-serio/">
                            <img src="/wp-content/themes/o-novo-mercado/img/banner-coutinho.jpg" alt="Youtube Levado a Sério">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/sua-loja-na-internet/">
                            <img src="/wp-content/themes/o-novo-mercado/img/slni/banner-curso-sabrina.jpg" alt="Sua Loja na Internet">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/nunca-pare-de-vender/">
                            <img src="/wp-content/themes/o-novo-mercado/img/banner-leandro-ladeira.png" alt="Nunca pare de vender">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/trafego-do-zero/">
                            <img src="/wp-content/themes/o-novo-mercado/img/img-thumb-trafego-do-zero.png" alt="Tráfego do Zero">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/google-passo-a-passo/">
                            <img src="/wp-content/themes/o-novo-mercado/img/img-thumb-google-passo-a-passo.png" alt="Google Passo a Passo">
                        </a>
                    </div>
                    <div class="item">
                        <img src="/wp-content/themes/o-novo-mercado/img/banner-aulas-semanais.png" alt="aulas Semanais">
                    </div>
                    <div class="item">
                        <img src="/wp-content/themes/o-novo-mercado/img/onm-home-posts-icaro.jpg" alt="Masterclasses">
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/sem-medo-de-escrever/">
                            <img src="/wp-content/themes/o-novo-mercado/img/onm-home-carrocel-3.png" alt="Sem medo de escrever">
                        </a>
                    </div>
                    <div class="item">
                        <img src="/wp-content/themes/o-novo-mercado/img/img-thumb-pit-stop.png" alt="Pit stop">
                    </div>
                    <div class="item">
                        <img src="/wp-content/themes/o-novo-mercado/img/img-thumb-caixa-ferramentass.png" alt="Caixa de ferramentas">
                    </div>
                    <div class="item">
                        <a href="https://onovomercado.com.br/home-office/">
                            <img src="/wp-content/themes/o-novo-mercado/img/onm-home-carrocel-2.png" alt="Home Office">
                        </a>
                        <!-- <div class="info-class">
                    <h3>Home Office</h3>
                    <p>Você sabe organizar um ambiente profissional e encontrar oportunidades de trabalho sem sair de casa? Aprenda a trabalhar de casa e esteja pronto para a economia do futuro.</p>
                </div> -->
                    </div>

                </div>
            </div>
        </section>

        <style>
            .onm-home-carousel-classes {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                background: 0 0
            }

            .onm-home-carousel-classes .content-carousel-classes {
                width: 81%;
                max-width: 480px;
                margin-top: 0
            }

            .onm-home-carousel-classes .content-carousel-classes .title {
                margin-top: 50px
            }

            .onm-home-carousel-classes .content-carousel-classes .title h2 {
                line-height: 1.2;
                font-size: 2.25rem;
                text-align: center;
                color: #fff;
                margin-bottom: 2.5rem;
                font-weight: 700
            }

            .onm-home-carousel-classes .content-carousel-classes .title h2 span {
                color: #fff
            }

            .onm-home-carousel-classes .content-carousel-classes .title p {
                text-align: center;
                line-height: 1.2;
                margin-top: 1rem;
                margin-bottom: 4rem;
                font-size: 1.25rem
            }

            .onm-home-carousel-classes .content-carousel-classes .static-img {
                width: 100%;
                -o-object-fit: contain;
                object-fit: contain
            }

            .onm-home-carousel-classes .content-carousel-classes .owl-posts .item .info-class {
                display: none
            }

            .onm-home-carousel-classes .content-carousel-classes .owl-posts .owl-nav .right-arrow {
                position: absolute;
                background-image: url(/wp-content/themes/o-novo-mercado/img/arrow-carousel.svg);
                background-position: center;
                background-repeat: no-repeat;
                height: 50px;
                width: 50px;
                top: 50%;
                left: 90%;
                -webkit-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
                z-index: 10
            }

            .onm-home-carousel-classes .content-carousel-classes .owl-posts .owl-nav .left-arrow {
                position: absolute;
                background-image: url(/wp-content/themes/o-novo-mercado/img/arrow-carousel.svg);
                background-position: center;
                background-repeat: no-repeat;
                height: 50px;
                width: 50px;
                top: 50%;
                right: 78%;
                -webkit-transform: translate(-50%, -50%) rotate(180deg);
                transform: translate(-50%, -50%) rotate(180deg);
                z-index: 10
            }

            .onm-home-carousel-classes .content-carousel-classes .owl-posts-desk {
                display: none
            }

            @media (min-width:1024px) {
                .onm-home-carousel-classes .content-carousel-classes {
                    width: 90%;
                    max-width: 1640px;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: inherit
                }

                .onm-home-carousel-classes .content-carousel-classes .title {
                    width: 100%;
                    position: relative;
                    margin-top: 50px;
                    bottom: 0
                }

                .onm-home-carousel-classes .content-carousel-classes .title h2 {
                    margin-bottom: 2.5rem
                }

                .onm-home-carousel-classes .content-carousel-classes .title .sub-title {
                    display: none
                }

                .onm-home-carousel-classes .content-carousel-classes .title .sub-title-desk {
                    display: inherit;
                    text-align: start;
                    max-width: 900px;
                    margin-top: 0
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .item .info-class {
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    opacity: 0;
                    width: 100%;
                    display: inherit;
                    background: #21212198;
                    height: 50%;
                    padding: 0 60px;
                    -webkit-transition: ease-in .2s;
                    transition: ease-in .2s
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .item .info-class h3 {
                    font-size: 1.25rem;
                    margin-top: 42px;
                    font-weight: 700;
                    color: #fff
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .item .info-class p {
                    font-size: 1rem;
                    margin-top: 1rem;
                    padding-right: 25px;
                    line-height: 1.5;
                    overflow-x: auto;
                    height: 160px;
                    color: #fff
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .item:hover .info-class {
                    opacity: 1
                }

                .onm-home-carousel-classes .content-carousel-classes .static-img {
                    display: none
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .owl-nav .right-arrow {
                    left: 103%
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts {
                    display: flex;
                    justify-content: center;
                    max-width: 1230px
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts .owl-nav .left-arrow {
                    right: 100%
                }

                .onm-home-how-works .bg-posters {
                    display: none
                }

                .onm-home-how-works .bg-posters-desk {
                    display: flex;
                    position: absolute;
                    top: 0
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts-desk {
                    display: -ms-grid;
                    display: grid;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    grid-template-columns: repeat(3, auto);
                    grid-row-gap: 15px;
                    grid-column-gap: 15px
                }

                .onm-home-carousel-classes .content-carousel-classes .owl-posts-desk .item img {
                    width: 100%;
                    height: 100%;
                    -o-object-fit: cover;
                    object-fit: cover
                }
            }
        </style>

        <section class="onm-courses-job-marketing">
            <div class="content-job-marketing">
                <picture>
                    <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/npdv/macbook.png" alt="O Novo Mercado">
                </picture>
                <div class="infos-job-marketing">
                    <h2>Membro Anual tem acesso ao Mercado de Trabalho</h2>
                    <p>Seja pago pelo seu trabalho ou consiga clientes rapidamente usando nossa área exclusiva de
                        oportunidades.</p>
                    <p>Todos os dias dezenas de pessoas conseguem trocar serviços por dinheiro usando o Mercado de
                        Trabalho.</p>
                    <a href="#onm-home-plans" class="btn-default">quero ter acesso</a>
                </div>
            </div>
        </section>

        <section class="onm-courses-about-us">
            <div class="content-about-us">
                <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/smartphone.png" alt="smartphone">
                <div class="infos-about-us">
                    <h2>O Novo Mercado: somos a escola de marketing mais completa do Brasil</h2>
                    <p>Mais de 30 mil alunos já estão criando o próprio caminho e construindo negócios, relacionamentos,
                        famílias, sonhos e possibilidades por meio da internet, chegou a sua vez.</p>
                    <p>Você não precisa levar anos para aprender uma nova habilidade.</p>
                </div>
                <a href="#onm-home-plans" class="btn-default">comece agora</a>

            </div>
        </section>

        <section class="onm-captura-testimony">
            <div class="content-testimony">
                <div class="testimony-title">
                    <h2>Nós fizemos a diferença na história dos nossos alunos</h2>
                    <p class="sub-title">
                        Veja como O Novo Mercado foi fundamental para a evolução e o amadurecimento desses três
                        negócios. São apenas alguns exemplos das transformações que ocorrem diariamente entre os
                        nossos quase trinta mil alunos.
                    </p>
                </div>
                <div class="owl-testimony owl-carousel owl-theme slider">
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-comoFunciona-depoimentos-fernanda.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Depois de seguir o Ícaro e virar aluna ONM ajudei meus pais a criarem uma empresa de
                                    empadas e alcançarem a independência financeira!

                                    <span>Obrigada!</span>
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Barbara Reis</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-comoFunciona-depoimentos-carla.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Fiz minha primeira live cozinhando ao vivo e a proposta agradou a quem participava,
                                    foi uma forma de eu encerrar o desafio. Todos os participantes pediram para eu dar
                                    continuidade aos vídeos ao vivo. Estou feliz porque foi através do ONN que eu tive a
                                    coragem de começar.
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Carla Betânia</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-comoFunciona-depoimentos-felipe.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Eu já aprendi bastante coisa. Tenho dois empregos e filhos mas, mesmo assim, me
                                    reorganizei e fiz um primeiro lançamento. Sair da inércia fez diferença. Saber mais
                                    sobre tipos de infoprodutos, modelos de lançamento, perfil de demanda, etc. Tudo tem
                                    ajudado muito nesse processo de reinvenção minha. Valeu!
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Felipe Freitas</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-assine-am-depoimento1.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Entrei no ONM com o objetivo de aumentar a cartela de clientes (sou Advogada).
                                    Melhorei minha
                                    comunicação; melhorei como filha, irmã e esposa e como profissional; virei
                                    autoridade; sou procurada por
                                    outros advogados para dar mentoria e hoje faturo 3x mais do que antes. Não é só
                                    sobre marketing!
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Barbara Reis</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-assine-am-depoimento2.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Sou Personal Trainer e quando assinei o ONM já tinha um faturamento legal, mas com o
                                    excesso de informação sobre marketing digital não fazia nada direito. Decidi seguir
                                    apenas os conteúdos do ONM e de lá pra cá faturei mais de 500 mil. Nada me motiva
                                    mais do que a famosa frase do Ícaro: “me deem 10 anos”.
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Thais de Araújo</p>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="onm-testimony-card">
                            <img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/onm-assine-am-depoimento3.png" alt="">
                            <div class="onm-testimony-depoimento">
                                <p>
                                    Há alguns anos eu era vendedor de espetinhos. Entrei no Mark Digital há mais ou
                                    menos 4 anos. Nos últimos 12 meses, eu e minha sócia (somente com o formato
                                    desafio), fizemos mais de R$300.000. (Trezentos MIl) Obrigado turma!
                                </p>
                            </div>
                            <div class="onm-depoimentos-autor">
                                <p>Nikollas Hessel</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="onm-captura-plans" id="onm-home-plans">
            <div class="content-plans">
                <div class="plans-title">
                    <h2>Veja as vantagens de ser membro anual:</h2>
                    <!-- <p class="plans-sub-title">
                    <span>Este curso faz parte da assinatura anual.</span><br>Assine agora e tenha acesso a este curso exclusivo, além de todo conteúdo<br> d´O Novo Mercado.
                </p> -->
                </div>
                <div class="card">
                    <div class="content-card">
                        <div class="title-plan">
                            <span class="type-plan">anual</span>
                            <p class="value">R$79,90<span>/mês*</span></p>
                            <p>*cobrado anualmente</p>
                        </div>
                        <ul class="grid-one">
                            <li>Aula semanal Ao Vivo</li>
                            <li>Arquivo com mais de 250 aulas</li>
                            <li>Caixa de Ferramentas (aulas práticas)</li>
                            <li>Módulo Pit Stop (aulas de até 15 min)</li>
                            <li>Acesso ao grupo fechado</li>
                            <li>Aulas legendadas</li>
                            <li>App com aulas offline</li>
                            <li>Transcrições e materiais de apoio</li>

                        </ul>
                        <span class="module-curse">cursos</span>
                        <ul class="grid-two">
                            <li>Formação Básica em Marketing Digital</li>
                            <li>Tráfego do Zero</li>
                            <li>Sem Medo de Escrever</li>
                            <li>Google Passo a Passo</li>
                            <li>Home Office</li>
                            <li>Masterclasses Exclusivas</li>
                            <li>Nunca Pare de Vender</li>
                            <li>Sua Loja na Internet</li>
                        </ul>
                        <span class="module-curse">mercado de trabalho</span>
                        <ul class="grid-tree">
                            <li>Contratar profissionais</li>
                            <li>Oferecer serviços</li>
                        </ul>
                        <div class="container-btn">
                            <a href="https://pay.hotmart.com/I11728780W?off=jwn1nzud&amp;checkoutMode=10&amp;split=12&amp;email=undefined&amp;_ga=2.144627317.1974962860.1618834603-349499969.1610737874&amp;_gac=1.27386830.1616601948.CjwKCAjwxuuCBhATEiwAIIIz0XK3QVgG9xpr-7JON1wrHSZlLy1bagI4zqclk5aeg9dPAsgnzbdyzhoC5AsQAvD_BwE&amp;bid=1618863879568" class="btn-default">experimente grátis</a>
                            <span>7 dias grátis para experimentar</span>
                        </div>
                    </div>
                    <div class="payment-icons">
                        <ul>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-01.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-02.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-03.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-04.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-05.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-06.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-07.svg" alt=""></li>
                            <li><img src="https://onovomercado.com/wp-content/themes/o-novo-mercado/img/icones-cartoes-08.svg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <body>
            <div class="onm-faq">
                <p class="onm-faq-title">Perguntas frequentes</p>
                <div class="onm-faq-section">
                    <!-- <p class="onm-faq-subtitle">Teste grátis</p> -->
                    <div>
                        <p>Como assinar</p>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">O que está incluído no plano anual?</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                No plano anual você tem acesso a aula ao vivo semanal, e ao arquivo completo com mais de
                                260 aulas com temas sobre: marketing digital, copywriting, gestão de tráfego,
                                negociação, vendas, redes sociais, Instagram para negócios e muito mais.<br><br>

                                Além disso, você tem acesso aos cursos <strong>Formação Básica em Marketing Digital,
                                    Home Office e Sem Medo de Escrever</strong>, aos módulos <strong>Caixa de
                                    Ferramentas</strong> e <strong>Pit Stop</strong>, além de todos os cursos exclusivos
                                ONM Experts com alguns dos maiores nomes do mercado digital como: Ícaro de Carvalho,
                                Leandro Ladeira, Pedro Sobral, Tiago Tessmann, Sabrina Nunes e Camilo Coutinho.<br><br>
                                Você também tem acesso ao nosso aplicativo exclusivo, aulas offline, legenda,
                                transcrição e material de apoio em todas as aulas, e a nossa comunidade fechada de
                                membros.<br><br>
                                E ainda pode contratar profissionais ou oferecer seus serviços no <strong>Mercado de
                                    Trabalho</strong>.
                            </p>
                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Teste de 7 dias</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Para fazer o teste de 7 dias você deve assinar O Novo Mercado por meio de cartão de
                                crédito ou PayPal, manter selecionada a opção de 7 dias grátis e, então, antes de vencer
                                o prazo de 7 dias, realizar o cancelamento da assinatura.
                            </p>
                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Fidelidade</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Não exigimos fidelidade.<br><br>
                                Ao adquirir nossa assinatura no modelo de mensalidade, você pode cancelar quando quiser,
                                sem que seja necessário continuar por mais de um mês.<br><br>
                                O mesmo ocorre para a assinatura no modelo anual, que você pode cancelar no momento que
                                desejar, sem que seja necessário continuar por mais de um ano.
                            </p>
                        </div>
                        <p>Acesso</p>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Problema no acesso às aulas</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Tentou acessar e recebeu um aviso para configurar o pagamento ou entrar em contato com o
                                produtor?<br><br>
                                Fique tranquilo, esse não é o local de acesso! Para acessar as aulas, clique em Entrar,
                                no topo dessa mesma página.<br><br>
                                Caso não lembre a sua senha, é só utilizar a função Esqueceu sua senha?.<br><br>
                                Se aparecer a mensagem “Você está sem acesso, por favor contate o suporte”, logo após o
                                login, envie um e-mail para contato@onovomercado.com.br, pois há um problema com seu
                                pagamento.
                            </p>
                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Por onde começar? Quais aulas assistir?</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Em nosso portal, temos um módulo chamado Comece por Aqui.<br><br>
                                Ali, explicamos sobre a origem da nossa escola, damos dicas de livros e também sobre
                                como utilizar nossa Lista de aulas.<br><br>
                                Nessa lista, apresentamos roteiros de aulas para diversos perfis pré-traçados.
                                Identifique qual é seu perfil e bons estudos!
                            </p>
                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Acesso ao Grupo</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Temos um grupo exclusivo para alunos, localizado no Facebook. Enviamos o link de acesso
                                a esse grupo no e-mail de boas-vindas.<br><br>
                                Tanto alunos de O Novo Mercado como alunos do curso Transformando Palavras em Dinheiro
                                têm acesso a ele. Para participar, basta acessar por lá e solicitar a entrada.<br><br>
                                Todos os participantes devem seguir os Termos de uso. Aqueles que desrespeitarem as
                                regras serão removidos por nossa equipe de moderação.<br><br>
                                Mas, não se assuste: essas regras visam, basicamente, o respeito mútuo e a manutenção do
                                foco do grupo, que é crescimento profissional.
                            </p>
                        </div>
                        <p>Pagamentos</p>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Formas de Pagamento</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Trabalhamos com as seguintes formas de pagamento:<br><br>

                                - Cartão de crédito, em até 12x sem juros<br>
                                - Cartão Virtual Caixa<br>
                                - Boleto à vista<br>
                                - Conta Hotmart<br>
                                - PayPal<br>
                                - Samsung Pay
                            </p>
                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Cancelamento</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">
                                Aqui é tudo muito simples, você pode cancelar a sua assinatura quando quiser. Basta
                                seguir o tutorial que preparamos para você clicando aqui ou copiando o seguinte link no
                                seu navegador:<a href="https://onovomercado.zendesk.com/hc/pt-br/articles/360044717552-Como-cancelar-a-minha-assinatura ">https://onovomercado.zendesk.com/hc/pt-br/articles/360044717552-Como-cancelar-a-minha-assinatura
                                </a><br><br>
                                Se puder, por favor, ajude-nos a melhorar respondendo <a href="https://www.questionpro.com/t/AQFWPZgtyQ">aqui</a>. É rapidinho:<br><br>
                                E atenção: o cancelamento retira seu acesso instantaneamente. Recomendamos que você
                                verifique sua data de renovação, para saber quando cancelar sem perder nenhum dia.
                            </p>

                        </div>
                        <div class="onm-faq-box">
                            <div class="onm-faq-item">
                                <p class="onm-faq-item-title">Reembolso</p>
                                <div id="onm-faq-seta">
                                    <svg class="onm-faq-svg">
                                        <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"></path>
                                    </svg>
                                </div>
                            </div>
                            <p class="onm-faq-reposta">

                                Quem escolhe a opção de teste de sete dias pode cancelar sua assinatura dentro desse
                                período, sem que ela seja cobrada. Caso você tenha perdido o prazo de cancelamento, não
                                faremos reembolso. Exigimos dos nossos alunos o mesmo respeito com que os tratamos.
                                Portanto, fique atento ao prazo.<br><br>

                                Sobre o plano anual: você pode solicitar ao nosso suporte o reembolso proporcional ao
                                período entre a data do cancelamento e o término da assinatura anual, com retenção de
                                30% do sobre as mensalidades vincendas a título de multa pela rescisão
                                antecipada.<br><br>

                                Em caso de outra necessidade, contate o suporte através do e-mail
                                <strong>contato@onovomercado.com.br</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .onm-faq {
                    background-color: #041e42;
                    color: #fff;
                    width: 100%;
                    margin: 0 auto;
                    padding: 0 0 20px
                }

                .onm-faq a {
                    color: #ff1654;
                    font-weight: 700
                }

                .onm-faq-title {
                    font-weight: 700;
                    font-size: 40px;
                    text-align: center;
                    padding-bottom: 62px
                }

                .onm-faq-section {
                    margin: 0 auto;
                    width: 42%
                }

                .onm-faq-subtitle {
                    font-size: 16px;
                    text-align: left
                }

                .onm-faq-box {
                    background-color: #021124;
                    margin: 15px 0;
                    transition: .4s
                }

                .onm-faq-box:hover,
                .onm-faq-active {
                    background-color: #0b1b2e
                }

                .onm-faq-active {
                    padding-bottom: 20px
                }

                .onm-faq-active .onm-faq-svg {
                    transform: rotate(-180deg)
                }

                .onm-faq-item {
                    align-items: center;
                    cursor: pointer;
                    display: flex;
                    flex-flow: row;
                    justify-content: space-between;
                    padding: 20px 30px
                }

                .onm-faq-item-title {
                    font-weight: 700
                }

                .onm-faq-item-title,
                .onm-faq-item-resp,
                .onm-faq p {
                    color: #fff;
                    margin: 0
                }

                .onm-faq-svg {
                    fill: #ff1654;
                    height: 24px;
                    transition: .4s ease;
                    width: 24px
                }

                .onm-faq-reposta {
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height .2s ease-out;
                    padding: 0 30px
                }

                @media screen and (max-width:990px) {
                    .onm-faq-section {
                        width: 85%;
                        padding: 0
                    }

                    .onm-faq-title {
                        line-height: 1.3
                    }
                }
            </style>

            <script>
                var faq_item = document.getElementsByClassName("onm-faq-item");
                var i;
                for (i = 0; i < faq_item.length; i++) {
                    faq_item[i].addEventListener("click", function() {
                        var box = this.parentElement;
                        var reposta = this.nextElementSibling;
                        if (reposta.style.maxHeight) {
                            reposta.style.maxHeight = null;
                            box.classList.remove("onm-faq-active");
                        } else {
                            reposta.style.maxHeight = reposta.scrollHeight + "px";
                            box.classList.add("onm-faq-active");
                        }
                    });
                }
            </script>
        </body>

        <section class="footer">
            <div class="content-footer">
                <div class="links-footer">
                    <div class="logo-footer">
                        <svg width="178" height="52" viewBox="0 0 178 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M37.2096 11.8138C34.0495 10.7067 30.7343 10.1072 27.387 10.0376C27.387 10.0376 25.1127 9.98821 24.9507 9.98821C27.1326 7.96949 29.5943 6.27679 32.2596 4.96253L40.3711 13.0826C40.3359 13.0685 38.3644 12.2297 37.2096 11.8138ZM39.3783 37.3793C35.3688 38.7144 31.1314 39.2259 26.9198 38.8831C22.7082 38.5404 18.609 37.3504 14.8676 35.3845C14.5789 26.3058 17.1701 18.5241 22.7116 12.272C24.0385 12.1109 25.3746 12.0379 26.7111 12.0535C30.6719 14.9721 33.885 18.7892 36.087 23.1915C38.2889 27.5939 39.4169 32.4561 39.3783 37.3793ZM12.8538 34.2215C12.8627 36.8481 13.0865 39.4695 13.5227 42.0596L1.04561 29.5694C0.376046 28.8978 0 27.9877 0 27.0389C0 26.0901 0.376046 25.18 1.04561 24.5084L24.8944 0.627611C25.2969 0.224815 25.8427 -0.00146484 26.4118 -0.00146484C26.9809 -0.00146484 27.5267 0.224815 27.9292 0.627611L30.7457 3.44707C27.4378 5.32642 24.4009 7.64796 21.7188 10.3477C21.7188 10.3477 20.4162 11.7997 19.6768 12.7724C16.1914 17.3541 12.8468 24.3252 12.8538 34.2215ZM21.3597 49.9047L16.0647 44.6041C15.5623 42.3342 15.2095 40.0338 15.0085 37.7176C22.5989 41.3629 31.2832 42.0097 39.329 39.5291C39.329 39.5291 40.864 39.0004 41.371 38.8172C41.878 38.6339 42.7018 38.2815 43.42 37.9502L31.471 49.9047C30.1292 51.2452 28.311 51.9981 26.4153 51.9981C24.5197 51.9981 22.7014 51.2452 21.3597 49.9047ZM51.4893 29.8654C48.6041 32.7676 45.172 35.0676 41.3921 36.6321C41.3255 32.014 40.2944 27.461 38.3651 23.2657C36.4357 19.0704 33.6509 15.3256 30.1895 12.272C34.0416 12.7347 37.7726 13.9183 41.1879 15.7611C44.8283 17.5303 48.5883 21.252 51.8062 24.5225C52.4681 25.1966 52.8373 26.1051 52.8334 27.0503C52.8294 27.9955 52.4526 28.9009 51.7851 29.5694C51.6724 29.6751 51.5738 29.7808 51.4893 29.8654Z" fill="#E7004C" />
                                <path class="letter" d="M68.4238 16.4882C68.421 14.9382 68.8778 13.4222 69.7363 12.1322C70.5948 10.8422 71.8164 9.83633 73.2464 9.24187C74.6764 8.64741 76.2505 8.49114 77.7693 8.79286C79.2881 9.09457 80.6833 9.84069 81.7782 10.9367C82.8731 12.0328 83.6184 13.4294 83.9198 14.9498C84.2212 16.4702 84.0651 18.0459 83.4713 19.4774C82.8775 20.9089 81.8726 22.1318 80.584 22.9913C79.2954 23.8507 77.7809 24.3079 76.2325 24.3052C75.2041 24.3158 74.1839 24.1209 73.2317 23.7318C72.2795 23.3428 71.4144 22.7674 70.6872 22.0394C69.9599 21.3114 69.3851 20.4454 68.9965 19.4922C68.6078 18.539 68.4131 17.5177 68.4238 16.4882ZM80.2601 16.4882C80.2701 15.9552 80.1739 15.4255 79.977 14.9302C79.7802 14.4348 79.4866 13.9837 79.1136 13.6032C78.7406 13.2228 78.2955 12.9205 77.8045 12.7142C77.3134 12.5079 76.7862 12.4016 76.2537 12.4016C75.7211 12.4016 75.1939 12.5079 74.7028 12.7142C74.2118 12.9205 73.7667 13.2228 73.3937 13.6032C73.0207 13.9837 72.7272 14.4348 72.5303 14.9302C72.3334 15.4255 72.2372 15.9552 72.2472 16.4882C72.2372 17.0212 72.3334 17.5509 72.5303 18.0462C72.7272 18.5416 73.0207 18.9927 73.3937 19.3732C73.7667 19.7536 74.2118 20.0559 74.7028 20.2622C75.1939 20.4685 75.7211 20.5748 76.2537 20.5748C76.7862 20.5748 77.3134 20.4685 77.8045 20.2622C78.2955 20.0559 78.7406 19.7536 79.1136 19.3732C79.4866 18.9927 79.7802 18.5416 79.977 18.0462C80.1739 17.5509 80.2701 17.0212 80.2601 16.4882Z" fill="#ffff" />
                                <path class="letter" d="M105.545 14.8037V23.8965H101.729V15.276C101.729 13.2601 100.517 12.2239 98.7994 12.2239C96.9335 12.2239 95.5463 13.3164 95.5463 15.8962V23.8894H91.73V9.08725H95.5463V10.7437C96.0453 10.0526 96.7117 9.49977 97.4827 9.13726C98.2538 8.77476 99.1042 8.61445 99.9542 8.67138C103.095 8.67138 105.545 10.8635 105.545 14.8037Z" fill="#ffff" />
                                <path class="letter" d="M105.96 16.4882C105.958 14.9382 106.414 13.4222 107.273 12.1322C108.131 10.8422 109.353 9.83633 110.783 9.24187C112.213 8.64741 113.787 8.49114 115.306 8.79286C116.825 9.09457 118.22 9.84069 119.315 10.9367C120.41 12.0328 121.155 13.4294 121.456 14.9498C121.758 16.4702 121.602 18.0459 121.008 19.4774C120.414 20.9089 119.409 22.1318 118.121 22.9913C116.832 23.8507 115.318 24.3079 113.769 24.3052C112.741 24.3158 111.721 24.1209 110.768 23.7318C109.816 23.3428 108.951 22.7674 108.224 22.0394C107.497 21.3114 106.922 20.4454 106.533 19.4922C106.144 18.539 105.95 17.5177 105.96 16.4882ZM117.79 16.4882C117.8 15.9552 117.703 15.4255 117.507 14.9302C117.31 14.4348 117.016 13.9837 116.643 13.6032C116.27 13.2228 115.825 12.9205 115.334 12.7142C114.843 12.5079 114.316 12.4016 113.783 12.4016C113.251 12.4016 112.723 12.5079 112.232 12.7142C111.741 12.9205 111.296 13.2228 110.923 13.6032C110.55 13.9837 110.257 14.4348 110.06 14.9302C109.863 15.4255 109.767 15.9552 109.777 16.4882C109.767 17.0212 109.863 17.5509 110.06 18.0462C110.257 18.5416 110.55 18.9927 110.923 19.3732C111.296 19.7536 111.741 20.0559 112.232 20.2622C112.723 20.4685 113.251 20.5748 113.783 20.5748C114.316 20.5748 114.843 20.4685 115.334 20.2622C115.825 20.0559 116.27 19.7536 116.643 19.3732C117.016 18.9927 117.31 18.5416 117.507 18.0462C117.703 17.5509 117.8 17.0212 117.79 16.4882Z" fill="#ffff" />
                                <path class="letter" d="M135.562 9.08716L129.943 23.8893H125.599L119.98 9.08716H124.177L127.754 19.4487L131.359 9.08716H135.562Z" fill="#ffff" />
                                <path class="letter" d="M133.971 16.4882C133.968 14.9382 134.425 13.4222 135.283 12.1322C136.142 10.8422 137.363 9.83633 138.793 9.24187C140.223 8.64741 141.797 8.49114 143.316 8.79286C144.835 9.09457 146.23 9.84069 147.325 10.9367C148.42 12.0328 149.165 13.4294 149.467 14.9498C149.768 16.4702 149.612 18.0459 149.018 19.4774C148.424 20.9089 147.419 22.1318 146.131 22.9913C144.842 23.8507 143.328 24.3079 141.779 24.3052C140.751 24.3158 139.731 24.1209 138.779 23.7318C137.826 23.3428 136.961 22.7674 136.234 22.0394C135.507 21.3114 134.932 20.4454 134.543 19.4922C134.155 18.539 133.96 17.5177 133.971 16.4882ZM145.8 16.4882C145.81 15.9552 145.714 15.4255 145.517 14.9302C145.32 14.4348 145.026 13.9837 144.653 13.6032C144.28 13.2228 143.835 12.9205 143.344 12.7142C142.853 12.5079 142.326 12.4016 141.793 12.4016C141.261 12.4016 140.734 12.5079 140.243 12.7142C139.752 12.9205 139.307 13.2228 138.934 13.6032C138.561 13.9837 138.267 14.4348 138.07 14.9302C137.873 15.4255 137.777 15.9552 137.787 16.4882C137.777 17.0212 137.873 17.5509 138.07 18.0462C138.267 18.5416 138.561 18.9927 138.934 19.3732C139.307 19.7536 139.752 20.0559 140.243 20.2622C140.734 20.4685 141.261 20.5748 141.793 20.5748C142.326 20.5748 142.853 20.4685 143.344 20.2622C143.835 20.0559 144.28 19.7536 144.653 19.3732C145.026 18.9927 145.32 18.5416 145.517 18.0462C145.714 17.5509 145.81 17.0212 145.8 16.4882Z" fill="#ffff" />
                                <path class="letter" d="M90.3712 33.7997V42.9207H86.5548V34.0676C86.5548 32.3195 85.6676 31.2552 84.0693 31.2552C82.3864 31.2552 81.3161 32.3829 81.3161 34.6033V42.9207H77.4998V34.0676C77.4998 32.3195 76.6126 31.2552 75.0142 31.2552C73.3876 31.2552 72.2329 32.3829 72.2329 34.6033V42.9207H68.4165V28.1185H72.2329V29.6904C72.6923 29.0361 73.3114 28.5106 74.0312 28.1639C74.7511 27.8172 75.5476 27.6608 76.345 27.7097C77.1448 27.6677 77.941 27.8434 78.6489 28.2182C79.3569 28.5931 79.9501 29.153 80.3656 29.8384C80.8605 29.1394 81.5245 28.5775 82.2954 28.2053C83.0662 27.833 83.9188 27.6625 84.7734 27.7097C88.1532 27.6956 90.3712 30.0992 90.3712 33.7997Z" fill="#ffff" />
                                <path class="letter" d="M98.9474 39.8686C99.5757 39.8935 100.201 39.7729 100.775 39.5161C101.349 39.2594 101.856 38.8734 102.257 38.3884L105.334 40.1646C104.611 41.1923 103.641 42.0211 102.514 42.5743C101.387 43.1275 100.138 43.3872 98.8841 43.3295C93.9129 43.3295 90.7795 39.925 90.7795 35.5125C90.7432 34.4762 90.9204 33.4435 91.3 32.4786C91.6796 31.5138 92.2535 30.6375 92.9859 29.9043C93.7184 29.171 94.5938 28.5965 95.5576 28.2166C96.5215 27.8366 97.5531 27.6592 98.5883 27.6956C102.968 27.6956 106.073 31.1564 106.073 35.5125C106.072 36.0399 106.023 36.566 105.925 37.0844H94.772C95.3071 39.0368 96.9407 39.8686 98.9474 39.8686ZM102.264 34.1239C102.118 33.2655 101.665 32.4893 100.991 31.9396C100.316 31.3899 99.4647 31.1041 98.5954 31.1353C97.6964 31.0728 96.8057 31.3425 96.092 31.8933C95.3783 32.4441 94.8911 33.2377 94.7227 34.1239H102.264Z" fill="#ffff" />
                                <path class="letter" d="M114.981 27.8154V32.0799C113.002 31.8402 110.488 32.7284 110.488 35.8368V42.9137H106.672V28.1115H110.488V30.6561C110.844 29.7704 111.47 29.0195 112.276 28.5096C113.083 27.9998 114.029 27.7569 114.981 27.8154Z" fill="#ffff" />
                                <path class="letter" d="M114.981 35.5126C114.957 34.4795 115.142 33.4524 115.526 32.4932C115.91 31.5341 116.485 30.6628 117.215 29.9321C117.945 29.2015 118.815 28.6266 119.773 28.2421C120.731 27.8577 121.757 27.6718 122.789 27.6956C124.136 27.6718 125.464 28.0146 126.631 28.6875C127.798 29.3604 128.76 30.338 129.415 31.516L126.134 33.4403C125.816 32.8248 125.331 32.312 124.734 31.9615C124.137 31.6109 123.453 31.4369 122.761 31.4596C121.704 31.4794 120.697 31.9136 119.957 32.6689C119.216 33.4242 118.801 34.4402 118.801 35.4985C118.801 36.5568 119.216 37.5728 119.957 38.3281C120.697 39.0834 121.704 39.5176 122.761 39.5374C123.455 39.5694 124.143 39.4027 124.746 39.0569C125.348 38.711 125.839 38.2004 126.162 37.5849L129.471 39.481C128.606 40.9581 127.279 42.1085 125.694 42.7543C124.11 43.4001 122.357 43.5052 120.707 43.0534C119.058 42.6015 117.602 41.6179 116.567 40.2548C115.532 38.8916 114.974 37.2249 114.981 35.5126Z" fill="#ffff" />
                                <path class="letter" d="M145.293 28.1116V42.9138H141.477V41.1657C140.897 41.8777 140.159 42.4441 139.321 42.8198C138.484 43.1955 137.57 43.3701 136.654 43.3296C132.717 43.3296 129.464 39.9251 129.464 35.5127C129.464 31.1002 132.717 27.6957 136.654 27.6957C137.57 27.656 138.484 27.8309 139.321 28.2065C140.158 28.5822 140.896 29.1482 141.477 29.8597V28.1116H145.293ZM141.477 35.5127C141.487 34.9675 141.388 34.4259 141.187 33.9193C140.986 33.4127 140.685 32.9514 140.304 32.5624C139.922 32.1733 139.467 31.8642 138.965 31.6532C138.463 31.4423 137.923 31.3336 137.379 31.3336C136.834 31.3336 136.295 31.4423 135.793 31.6532C135.29 31.8642 134.835 32.1733 134.454 32.5624C134.072 32.9514 133.772 33.4127 133.571 33.9193C133.369 34.4259 133.271 34.9675 133.281 35.5127C133.271 36.0578 133.369 36.5995 133.571 37.106C133.772 37.6126 134.072 38.0739 134.454 38.463C134.835 38.8521 135.29 39.1611 135.793 39.3721C136.295 39.5831 136.834 39.6917 137.379 39.6917C137.923 39.6917 138.463 39.5831 138.965 39.3721C139.467 39.1611 139.922 38.8521 140.304 38.463C140.685 38.0739 140.986 37.6126 141.187 37.106C141.388 36.5995 141.487 36.0578 141.477 35.5127Z" fill="#ffff" />
                                <path class="letter" d="M161.707 22.1907V42.9137H157.89V41.1656C157.321 41.8813 156.59 42.4508 155.757 42.8272C154.925 43.2035 154.015 43.3757 153.102 43.3296C149.138 43.3296 145.885 39.9251 145.885 35.5126C145.885 31.1002 149.138 27.6957 153.102 27.6957C154.015 27.6472 154.926 27.8184 155.759 28.1949C156.592 28.5714 157.323 29.1422 157.89 29.8596V22.1907H161.707ZM157.89 35.5126C157.9 34.9675 157.802 34.4258 157.6 33.9193C157.399 33.4127 157.099 32.9514 156.717 32.5623C156.336 32.1732 155.88 31.8642 155.378 31.6532C154.876 31.4422 154.337 31.3336 153.792 31.3336C153.247 31.3336 152.708 31.4422 152.206 31.6532C151.704 31.8642 151.249 32.1732 150.867 32.5623C150.486 32.9514 150.185 33.4127 149.984 33.9193C149.783 34.4258 149.684 34.9675 149.694 35.5126C149.684 36.0577 149.783 36.5994 149.984 37.106C150.185 37.6125 150.486 38.0738 150.867 38.4629C151.249 38.852 151.704 39.1611 152.206 39.3721C152.708 39.583 153.247 39.6917 153.792 39.6917C154.337 39.6917 154.876 39.583 155.378 39.3721C155.88 39.1611 156.336 38.852 156.717 38.4629C157.099 38.0738 157.399 37.6125 157.6 37.106C157.802 36.5994 157.9 36.0577 157.89 35.5126Z" fill="#ffff" />
                                <path class="letter" d="M162.354 35.5126C162.351 33.9626 162.808 32.4466 163.666 31.1566C164.525 29.8667 165.747 28.8607 167.177 28.2663C168.607 27.6718 170.181 27.5156 171.7 27.8173C173.218 28.119 174.614 28.8651 175.708 29.9611C176.803 31.0572 177.549 32.4538 177.85 33.9742C178.151 35.4946 177.995 37.0703 177.402 38.5019C176.808 39.9334 175.803 41.1563 174.514 42.0157C173.226 42.8751 171.711 43.3324 170.163 43.3296C169.134 43.3409 168.114 43.1464 167.161 42.7576C166.209 42.3688 165.343 41.7934 164.616 41.0653C163.889 40.3371 163.314 39.4709 162.925 38.5174C162.537 37.5639 162.343 36.5423 162.354 35.5126ZM174.19 35.5126C174.175 34.7233 173.928 33.9559 173.479 33.3067C173.03 32.6575 172.4 32.1553 171.667 31.8631C170.935 31.5708 170.132 31.5015 169.36 31.6637C168.588 31.826 167.882 32.2126 167.328 32.7753C166.775 33.3379 166.4 34.0514 166.25 34.8265C166.1 35.6016 166.182 36.4038 166.485 37.1325C166.788 37.8613 167.3 38.4842 167.955 38.9233C168.611 39.3624 169.381 39.5981 170.17 39.6008C170.706 39.6129 171.24 39.5148 171.737 39.3128C172.235 39.1108 172.686 38.809 173.062 38.4261C173.439 38.0432 173.733 37.5872 173.927 37.0861C174.121 36.5851 174.211 36.0496 174.19 35.5126Z" fill="#ffff" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="178" height="52" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <ul>
                        <li>Sobre</li>
                        <li><a href="#_">Quem somos</a></li>
                        <li><a href="/imprensa/">Imprensa</a></li>

                        <li><a href="/politica-de-privacidade" target="_blank">Privacidade</a></li>

                        <li><a href="/termos-de-uso" target="_blank">Termos de Uso</a></li>
                    </ul>
                    <span class="line-split"></span>
                    <ul>
                        <li>Ajuda</li>
                        <li><a href="/contato/" target="_blank">Contato</a></li>
                        <li><a href="https://onovomercado.zendesk.com/hc/pt-br" target="_blank">Suporte</a></li>
                        <li><a href="/representantes-comerciais/" target="_blank">Representantes Comerciais</a></li>
                    </ul>
                    <span class="line-split"></span>
                    <ul>
                        <li>Explore</li>
                        <li><a href="/blog/" target="_blank">Blog</a></li>
                        <li><a href="/como-funciona/" target="_blank">Como Funciona</a></li>
                        <li><a href="/nossas-aulas/" target="_blank">Nossas Aulas</a></li>
                    </ul>
                    <span class="line-split"></span>
                    <ul class="apps">
                        <li>Download</li>
                        <li><a href="https://apps.apple.com/br/app/keynote/id1545448132" target="_blank">
                                <img src="/wp-content/themes/o-novo-mercado/img/apple-store-home-footer.png" alt="Baiaxr aplicativo na AppStore">
                            </a></li>
                        <li><a href="https://play.google.com/store/apps/details?id=br.com.onovomercado" target="_blank">
                                <img src="/wp-content/themes/o-novo-mercado/img/google-play-home-footer.png" alt="Baiaxr aplicativo na PlayStore">
                            </a></li>
                    </ul>
                </div>

                <div class="social-media">
                    <a href="https://www.instagram.com/onovomercado/" aria-label="Instagram d'O Novo Mercado" target="_blank">
                        <!-- <img src="/wp-content/themes/o-novo-mercado/img/logo-instagram-white.svg" alt="instagram"> -->
                        <svg class="svg-instagram" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.87727 0.06C6.94364 0.0109091 7.28364 0 10 0C12.7164 0 13.0564 0.0118182 14.1218 0.06C15.1873 0.108182 15.9145 0.278182 16.5509 0.524545C17.2173 0.776364 17.8218 1.17 18.3218 1.67909C18.8309 2.17818 19.2236 2.78182 19.4745 3.44909C19.7218 4.08545 19.8909 4.81273 19.94 5.87636C19.9891 6.94455 20 7.28455 20 10C20 12.7164 19.9882 13.0564 19.94 14.1227C19.8918 15.1864 19.7218 15.9136 19.4745 16.55C19.2236 17.2174 18.8303 17.822 18.3218 18.3218C17.8218 18.8309 17.2173 19.2236 16.5509 19.4745C15.9145 19.7218 15.1873 19.8909 14.1236 19.94C13.0564 19.9891 12.7164 20 10 20C7.28364 20 6.94364 19.9882 5.87727 19.94C4.81364 19.8918 4.08636 19.7218 3.45 19.4745C2.78266 19.2236 2.17802 18.8302 1.67818 18.3218C1.16944 17.8224 0.775741 17.2181 0.524545 16.5509C0.278182 15.9145 0.109091 15.1873 0.06 14.1236C0.0109091 13.0555 0 12.7155 0 10C0 7.28364 0.0118182 6.94364 0.06 5.87818C0.108182 4.81273 0.278182 4.08545 0.524545 3.44909C0.776112 2.78189 1.17011 2.17756 1.67909 1.67818C2.17822 1.16955 2.78225 0.775858 3.44909 0.524545C4.08545 0.278182 4.81273 0.109091 5.87636 0.06H5.87727ZM14.0409 1.86C12.9864 1.81182 12.67 1.80182 10 1.80182C7.33 1.80182 7.01364 1.81182 5.95909 1.86C4.98364 1.90455 4.45455 2.06727 4.10182 2.20455C3.63545 2.38636 3.30182 2.60182 2.95182 2.95182C2.62004 3.27459 2.36471 3.66753 2.20455 4.10182C2.06727 4.45455 1.90455 4.98364 1.86 5.95909C1.81182 7.01364 1.80182 7.33 1.80182 10C1.80182 12.67 1.81182 12.9864 1.86 14.0409C1.90455 15.0164 2.06727 15.5455 2.20455 15.8982C2.36455 16.3318 2.62 16.7255 2.95182 17.0482C3.27455 17.38 3.66818 17.6355 4.10182 17.7955C4.45455 17.9327 4.98364 18.0955 5.95909 18.14C7.01364 18.1882 7.32909 18.1982 10 18.1982C12.6709 18.1982 12.9864 18.1882 14.0409 18.14C15.0164 18.0955 15.5455 17.9327 15.8982 17.7955C16.3645 17.6136 16.6982 17.3982 17.0482 17.0482C17.38 16.7255 17.6355 16.3318 17.7955 15.8982C17.9327 15.5455 18.0955 15.0164 18.14 14.0409C18.1882 12.9864 18.1982 12.67 18.1982 10C18.1982 7.33 18.1882 7.01364 18.14 5.95909C18.0955 4.98364 17.9327 4.45455 17.7955 4.10182C17.6136 3.63545 17.3982 3.30182 17.0482 2.95182C16.7254 2.62006 16.3325 2.36474 15.8982 2.20455C15.5455 2.06727 15.0164 1.90455 14.0409 1.86ZM8.72273 13.0827C9.43605 13.3797 10.2303 13.4197 10.9699 13.1961C11.7095 12.9725 12.3485 12.499 12.7778 11.8566C13.2071 11.2142 13.4001 10.4426 13.3237 9.67373C13.2473 8.90485 12.9064 8.18634 12.3591 7.64091C12.0102 7.29225 11.5884 7.02528 11.1239 6.85922C10.6595 6.69317 10.164 6.63215 9.67318 6.68056C9.18233 6.72897 8.70832 6.88562 8.28528 7.13921C7.86223 7.3928 7.50068 7.73704 7.22664 8.14714C6.9526 8.55723 6.7729 9.02299 6.70047 9.51087C6.62804 9.99876 6.66468 10.4966 6.80776 10.9687C6.95084 11.4407 7.1968 11.8751 7.52793 12.2407C7.85906 12.6062 8.26711 12.8938 8.72273 13.0827ZM6.36545 6.36545C6.84275 5.88816 7.40938 5.50955 8.033 5.25124C8.65661 4.99293 9.325 4.85998 10 4.85998C10.675 4.85998 11.3434 4.99293 11.967 5.25124C12.5906 5.50955 13.1573 5.88816 13.6345 6.36545C14.1118 6.84275 14.4905 7.40938 14.7488 8.033C15.0071 8.65661 15.14 9.325 15.14 10C15.14 10.675 15.0071 11.3434 14.7488 11.967C14.4905 12.5906 14.1118 13.1573 13.6345 13.6345C12.6706 14.5985 11.3632 15.14 10 15.14C8.63678 15.14 7.3294 14.5985 6.36545 13.6345C5.40151 12.6706 4.85998 11.3632 4.85998 10C4.85998 8.63678 5.40151 7.3294 6.36545 6.36545ZM16.28 5.62545C16.3983 5.51388 16.493 5.37971 16.5585 5.23089C16.624 5.08206 16.6589 4.92161 16.6613 4.75903C16.6637 4.59645 16.6334 4.43504 16.5723 4.28437C16.5111 4.1337 16.4204 3.99683 16.3054 3.88185C16.1904 3.76688 16.0536 3.67614 15.9029 3.61502C15.7522 3.55389 15.5908 3.52361 15.4282 3.52598C15.2657 3.52835 15.1052 3.56332 14.9564 3.62881C14.8076 3.69431 14.6734 3.789 14.5618 3.90727C14.3448 4.1373 14.226 4.44284 14.2306 4.75903C14.2352 5.07522 14.3629 5.37716 14.5865 5.60077C14.8101 5.82437 15.1121 5.95203 15.4282 5.95664C15.7444 5.96125 16.05 5.84245 16.28 5.62545Z" fill="white" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/onovomercadooficial/" aria-label="Facebook d'O Novo Mercado" target="_blank">
                        <!-- <img src="/wp-content/themes/o-novo-mercado/img/logo-facebook-white.svg" alt="facebook"> -->
                        <svg class="svg-facebook" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.65188 0C1.6289 0 0 1.6289 0 3.65188V16.3481C0 18.3711 1.6289 20 3.65188 20H10.5331V12.1813H8.46564V9.36626H10.5331V6.96126C10.5331 5.07176 11.7547 3.33688 14.5688 3.33688C15.7081 3.33688 16.5506 3.44626 16.5506 3.44626L16.4844 6.07502C16.4844 6.07502 15.6251 6.0669 14.6875 6.0669C13.6727 6.0669 13.51 6.53446 13.51 7.31066V9.36628H16.565L16.4319 12.1813H13.51V20H16.3481C18.3711 20 20 18.3711 20 16.3482V3.6519C20 1.62892 18.3711 2e-05 16.3481 2e-05H3.65186L3.65188 0Z" fill="white" />
                        </svg>
                    </a>
                    <a href="https://www.linkedin.com/school/onovomercadoescola/" aria-label="linkedin d'O Novo Mercado" target="_blank">
                        <!-- <img src="/wp-content/themes/o-novo-mercado/img/logo-linkedin-white.svg" alt="linkedin"> -->
                        <svg class="svg-linkedin" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1.4325C0 0.64125 0.6575 0 1.46875 0H18.5312C19.3425 0 20 0.64125 20 1.4325V18.5675C20 19.3587 19.3425 20 18.5312 20H1.46875C0.6575 20 0 19.3587 0 18.5675V1.4325ZM6.17875 16.7425V7.71125H3.1775V16.7425H6.17875ZM4.67875 6.4775C5.725 6.4775 6.37625 5.785 6.37625 4.9175C6.3575 4.03125 5.72625 3.3575 4.69875 3.3575C3.67125 3.3575 3 4.0325 3 4.9175C3 5.785 3.65125 6.4775 4.65875 6.4775H4.67875ZM10.8138 16.7425V11.6988C10.8138 11.4288 10.8337 11.1587 10.9137 10.9662C11.13 10.4275 11.6238 9.86875 12.4538 9.86875C13.54 9.86875 13.9738 10.6962 13.9738 11.9113V16.7425H16.975V11.5625C16.975 8.7875 15.495 7.4975 13.52 7.4975C11.9275 7.4975 11.2137 8.3725 10.8138 8.98875V9.02H10.7938C10.8004 9.00957 10.8071 8.99915 10.8138 8.98875V7.71125H7.81375C7.85125 8.55875 7.81375 16.7425 7.81375 16.7425H10.8138Z" fill="white" />
                        </svg>
                    </a>
                    <a href="https://youtube.com/onovomercado" aria-label="YouTube d'O Novo Mercado" target="_blank">
                        <!-- <img src="/wp-content/themes/o-novo-mercado/img/logo-youtube-white.svg" alt="youtube"> -->
                        <svg class="svg-youtube" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 0C0.2236 0 0 1.13506 0 10C0 18.8649 0.2236 20 13 20C25.7764 20 26 18.8649 26 10C26 1.13506 25.7764 0 13 0ZM17.1665 10.4338L11.3295 13.1558C10.8186 13.3922 10.4 13.1273 10.4 12.5636V7.43636C10.4 6.87403 10.8186 6.60779 11.3295 6.84416L17.1665 9.56623C17.6774 9.80519 17.6774 10.1948 17.1665 10.4338Z" fill="white" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="copyright">
                <p>© 2022 O Novo Mercado - Todos os Direitos Reservados</p>
            </div>
        </section>

        <style>
            :root {
                --footer-bg: transparent;
                --footer-text: #fff;
                --footer-hover: #e0004d
            }

            .footer {
                font-size: 10px
            }

            .footer ul,
            ol {
                font-family: 'Gilroy', sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box
            }

            .footer p {
                font-family: 'Gilroy', sans-serif;
                letter-spacing: 0
            }

            .footer .content-footer {
                font-family: 'Gilroy', sans-serif;
                width: 83%;
                max-width: 380px;
                margin: 0 auto;
                position: relative
            }

            .footer .content-footer:before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 1px;
                background: -webkit-gradient(linear, right top, left top, color-stop(50%, #e7004c), to(rgba(22, 252, 155, 0)));
                background: linear-gradient(270deg, #e7004c 50%, rgba(22, 252, 155, 0) 100%)
            }

            .footer .content-footer .logo-footer {
                width: 100%;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 51px
            }

            .footer .content-footer .logo-footer img {
                width: 178px;
                height: 52px
            }

            .footer .content-footer .links-footer {
                display: flex;
                flex-direction: column;
                align-items: center;
                margin-bottom: 54px
            }

            .footer .content-footer .links-footer ul {
                list-style: none;
                text-align: center;
                margin-top: 30px
            }

            .footer .content-footer .links-footer .line-split {
                display: none
            }

            .footer .content-footer .links-footer ul a {
                text-decoration: none
            }

            .footer .content-footer .links-footer ul li {
                margin: 10px 0;
                font-size: 1rem;
                font-size: 1.15em;
                line-height: 1;
                color: var(--footer-text)
            }

            .footer .content-footer .links-footer ul a {
                color: var(--footer-text)
            }

            .footer .content-footer .links-footer ul li:first-of-type {
                margin: 0 0 20px;
                font-size: 1.25rem;
                font-size: 1.4em
            }

            .footer .content-footer .links-footer ul img {
                min-width: 135px;
                max-width: 143px
            }

            .footer .content-footer .links-footer a .links {
                font-size: 12px;
                margin: .625rem 0
            }

            .footer .content-footer .links-footer .apps {
                display: flex;
                flex-direction: column;
                align-items: center
            }

            .footer .content-footer .links-footer .apps li {
                margin: 0 0 10px
            }

            .footer .content-footer .social-media {
                width: 100%;
                display: flex;
                justify-content: center
            }

            .footer .content-footer .social-media span {
                font-size: .675rem;
                margin-right: 80px;
                text-align: center
            }

            .footer .content-footer .social-media svg {
                width: 18px;
                height: 18px;
                margin: 0 8px;
                transition: ease-in-out .2s
            }

            .footer .content-footer .social-media .svg-instagram:hover path {
                fill: #e1306c
            }

            .footer .content-footer .social-media .svg-facebook:hover path {
                fill: #4267b2
            }

            .footer .content-footer .social-media .svg-linkedin:hover path {
                fill: #0e76a8
            }

            .footer .content-footer .social-media .svg-youtube:hover path {
                fill: red
            }

            .footer .content-footer .social-media a:last-of-type img {
                margin-right: 0;
                width: auto
            }

            .footer .copyright {
                width: 100%;
                padding: 2.5rem 0 3.75rem;
                padding: 4em 0 6em;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .footer .copyright p {
                text-align: center;
                margin-bottom: 0
            }

            @media (min-width:1024px) {
                .footer .content-footer {
                    width: 85%;
                    max-width: 1640px;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    -webkit-box-sizing: border-box;
                    box-sizing: border-box
                }

                .footer .content-footer .logo-footer {
                    width: 230px;
                    margin-right: 40px;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-pack: start;
                    -ms-flex-pack: start;
                    justify-content: flex-start;
                    margin-bottom: 3.125rem;
                    padding-top: 0
                }

                .footer .content-footer .logo-footer img {
                    min-width: 230px
                }

                .footer .content-footer .links-footer {
                    width: 100%;
                    list-style: none;
                    display: flex;
                    flex-direction: row;
                    align-items: flex-start;
                    justify-content: space-between;
                    margin-top: 51px;
                    margin-bottom: 54px
                }

                .footer .content-footer .links-footer a {
                    text-decoration: none;
                    color: var(--footer-text);
                    position: relative
                }

                .footer .content-footer .links-footer ul {
                    margin: 0 10px;
                    text-align: start;
                    font-size: 14px
                }

                .footer .content-footer .links-footer .line-split {
                    display: initial;
                    width: 100%;
                    height: 1px;
                    margin-top: 10px;
                    max-width: 6.6875rem;
                    background: linear-gradient(270deg, rgba(255, 255, 255, .2) 50%, rgba(22, 252, 155, 0) 100%)
                }

                .footer .content-footer .links-footer ul li a {
                    position: relative;
                    transition: color .2s
                }

                .footer .content-footer .links-footer ul li a:hover {
                    color: var(--footer-hover)
                }

                .footer .content-footer .links-footer a .links {
                    font-size: 12px;
                    margin: .625rem 0
                }

                .footer .content-footer .apps {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    margin-left: 150px
                }

                .footer .content-footer .links-footer .apps>a {
                    margin-bottom: 0
                }

                .footer .content-footer .apps a img {
                    -o-object-fit: contain;
                    object-fit: contain
                }

                .footer .content-footer .social-media {
                    flex: 1;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                    margin-bottom: 0
                }

                .footer .content-footer .social-media span {
                    margin-top: 2px;
                    margin-bottom: 0;
                    margin-right: 2rem;
                    font-size: .875rem
                }

                .footer .content-footer .social-media svg {
                    width: 24px;
                    min-height: 20px
                }

                .footer .content-footer .social-media svg path {
                    transition: fill .2s
                }

                .footer .content-footer .links-footer .apps {
                    align-items: flex-start
                }

                .footer .copyright {
                    width: 100%;
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center
                }

                .footer .copyright p {
                    font-size: .875rem;
                    font-size: 1.4em;
                    margin-bottom: 0
                }
            }
        </style>

    </div>
    <script src="https://onovomercado.com/wp-content/themes/o-novo-mercado/inc/owlcarousel/jquery.min.js"></script>
    <script src="https://onovomercado.com/wp-content/themes/o-novo-mercado/inc/owlcarousel/owl.carousel.min.js"></script>
    <script>
        // Scoll set background Header

        var bannerTop = document.querySelector(".onm-courses-cta-video");
        var containerHeight = bannerTop.offsetHeight;
        var colorHeader = document.getElementById("header");


        window.addEventListener('scroll', function() {
            setColorHeader();
        });

        function setColorHeader() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = containerHeight;
            let scrolled = (winScroll / height) * 100;
            if (scrolled > 2 && scrolled <= 4000) {
                colorHeader.classList.add("header-blur");
            } else {
                colorHeader.classList.remove("header-blur");
            }
        }

        // Set title Caroucel Banners
        var titleCaroucel = document.querySelector('.content-carousel-classes .title h2')
        titleCaroucel.innerHTML = "Explore todos os cursos exclusivos para membros anuais:";
        $(document).ready(function() {
            $('.play-cta1').magnificPopup({
                type: 'iframe'
            });
        });

        //Accordeon Ementa

        // Caroucel Anual
        $('.owl-posts').owlCarousel({
            dots: false,
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<span class='left-arrow'></span>", "<span class='right-arrow'></span>"],
            responsive: {
                0: {
                    items: 1.5
                },
                1000: {
                    items: 3
                }
            }
        });

        $('.owl-testimony').owlCarousel({
            dots: true,
            loop: true,
            center: true,
            nav: true,
            margin: 15,
            autoplay: true,
            navText: ["<span class='left-arrow'></span>", "<span class='right-arrow'></span>"],
            responsive: {
                0: {
                    items: 1
                },
                1024: {
                    items: 3
                }
            }
        });

        //Botão carregar mais aulas

        const loadmore = document.getElementById('load-more');
        let currentItems = 5;
        loadmore.addEventListener('click', (e) => {
            const elementList = [...document.querySelectorAll('.list .accordeon')];
            for (let i = currentItems; i < currentItems + 5; i++) {
                if (elementList[i]) {
                    elementList[i].style.display = 'block';
                }
            }
            currentItems += 5;

            // Load more button will be hidden after list fully loaded
            if (currentItems >= elementList.length) {
                event.target.style.display = 'none';
            }
        })
    </script>

    <style>
        .onm-popup-termos {
            font-family: "Gilroy", sans-serif;
            width: 100%;
            height: 100%;
            display: none;
            align-items: flex-end;
            position: fixed;
            bottom: 0;
            opacity: 0;
            color: #f5f5f5;
            background: #001840cc;
            z-index: 9999999;
            animation: fadein 1s;
            animation-fill-mode: forwards
        }

        @keyframes fadein {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .onm-popup-termos-wrap {
            background: #df034d
        }

        .onm-popup-termos-row {
            width: min(1300px, 90%);
            margin: 0 auto;
            padding: 1rem 0;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .onm-popup-termosL {
            width: min(84rem, 100%);
            display: flex;
            justify-content: flex-start
        }

        .onm-popup-termos p {
            font-size: 14px;
            font-weight: 400;
            line-height: 1.4;
            margin: 0 auto;
            color: #fff
        }

        .onm-popup-termosL a {
            text-decoration: underline;
            transition: all .3s;
            color: #fff
        }

        .onm-popup-termosL a:hover {
            color: #aecffd
        }

        .onm-popup-termosR {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 20rem
        }

        .onm-popup-termos-btn {
            background: #021229;
            border: 2px solid #021229;
            border-radius: 4px;
            color: #fff;
            display: inline-block;
            font-size: 1rem;
            font-weight: 700;
            text-align: center;
            padding: 1rem 4rem;
            margin: 1rem;
            cursor: pointer
        }

        .onm-popup-termos-btn:hover {
            border: 2px solid #021229;
            box-shadow: 0 3px 6px #02122966;
            color: #ffffffe6
        }

        .onm-popup-termos-btn:after {
            display: none
        }

        @media screen and (max-width:767px) {
            .onm-popup-termos-row {
                flex-direction: column
            }

            .onm-popup-termosL {
                margin: 0 auto
            }

            .onm-popup-termos p {
                font-size: 10px;
                line-height: 1.5;
                font-weight: 400
            }

            .onm-popup-termosR {
                width: auto
            }

            .onm-popup-termos-btn {
                margin: 1rem auto 0;
                font-size: 12px;
                padding: 8px 4rem
            }
        }
    </style>

    <div class="onm-popup-termos">
        <div class="onm-popup-termos-wrap">
            <div class="onm-popup-termos-row">
                <div class="onm-popup-termosL">
                    <p>Utilizamos cookies e outras tecnologias semelhantes para melhorar a sua experiência em nossos
                        serviços, personalizar publicidade e recomendar conteúdo de seu interesse em nossa plataforma e
                        em serviços de terceiros. Ao navegar pelo site, você autoriza a empresa O Novo Mercado a coletar
                        estes dados e utilizá-los para estes fins. Consulte nossa <a href="https://onovomercado.com.br/politica-de-privacidade/" target="_blank">Política de
                            Privacidade e Proteção de Dados</a> e os <a href="https://onovomercado.com.br/termos-de-uso/" target="_blank">Termos e Condições de
                            Uso</a> para mais detalhes.</p>
                </div>
                <div class="onm-popup-termosR">
                    <div class="onm-popup-termos-btn onm-botao">ACEITAR</div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            /* Pop-up that shows the privacy agreement every time a new page is opened */
            let popupAviso = document.querySelector('.onm-popup-termos')
            let popupAvisoBtn = document.querySelector('.onm-popup-termos-btn')
            let onmBody = document.body
            let onmPathName = window.location.pathname

            if (localStorage.getItem('aceitePrivacidade')) {
                loadPixels()
            } else {
                if (onmPathName != '/termos-de-uso/' && onmPathName != '/politica-de-privacidade/') {
                    // Mostra modal de Aceite
                    popupAviso.style.display = 'flex'

                    // Lock scroll
                    window.addEventListener('scroll', noScroll)
                }
            }

            popupAvisoBtn.addEventListener("click", () => {
                popupAviso.parentNode.removeChild(popupAviso)
                localStorage.setItem('aceitePrivacidade', 'true');

                // Remove listener to re-enable scroll
                window.removeEventListener('scroll', noScroll);

                loadPixels()
            })

            function noScroll() {
                window.scrollTo(0, 0);
            }

            function loadPixels() {
                window.setTimeout(() => {
                    /* Google Tag Manager */
                    (function(w, d, s, l, i) {
                        w[l] = w[l] || [];
                        w[l].push({
                            'gtm.start': new Date().getTime(),
                            event: 'gtm.js'
                        });
                        var f = d.getElementsByTagName(s)[0],
                            j = d.createElement(s),
                            dl = l != 'dataLayer' ? '&l=' + l : '';
                        j.async = true;
                        j.src =
                            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                        f.parentNode.insertBefore(j, f);
                    })(window, document, 'script', 'dataLayer', 'GTM-PFR7J3M');
                    onmBody.insertAdjacentHTML("beforeend", `<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PFR7J3M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>`);
                    /* End Google Tag Manager */

                    /* Zendesk Tag */
                    window.setTimeout(() => {
                        var cc_script = document.createElement('script');
                        cc_script.src = "https://static.zdassets.com/ekr/snippet.js?key=294780ac-451f-4aca-b17c-292905a7febf";
                        cc_script.id = "ze-snippet";
                        onmBody.appendChild(cc_script)
                    }, 3000);
                }, 1000)
            }
        });
    </script>

    <script type='text/javascript' src='https://onovomercado.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
    <script type='text/javascript' src='https://onovomercado.com/wp-content/themes/oceanwp/assets/js/third/magnific-popup.min.js?ver=1.0' id='magnific-popup-js'></script>
    <script type='text/javascript' src='https://onovomercado.com/wp-content/themes/oceanwp/assets/js/third/lightbox.min.js?ver=1.0' id='oceanwp-lightbox-js'></script>
    <script type='text/javascript' id='oceanwp-main-js-extra'>
        /* <![CDATA[ */
        var oceanwpLocalize = {
            "isRTL": "",
            "menuSearchStyle": "drop_down",
            "sidrSource": "#sidr-close, #site-navigation, #mobile-menu-search",
            "sidrDisplace": "1",
            "sidrSide": "left",
            "sidrDropdownTarget": "icon",
            "verticalHeaderTarget": "icon",
            "customSelects": ".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src='https://onovomercado.com/wp-content/themes/oceanwp/assets/js/main.min.js?ver=1.0' id='oceanwp-main-js'></script>
    <!--[if lt IE 9]>
<script type='text/javascript' src='https://onovomercado.com/wp-content/themes/oceanwp/assets/js//third/html5.min.js?ver=1.0' id='html5shiv-js'></script>
<![endif]-->
</body>

</html>
<!-- Page supported by LiteSpeed Cache 4.6 on 2022-07-15 12:24:56 -->