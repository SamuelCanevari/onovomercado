<?php

$corFundoLado = '#077f6f';
$corFundoMeio = '#141a61';

$corBotaoPrincipal = '#1cb1ff';

$header_corBlur = '#050939';

$section2_corBordaVideo = '#00b1ff';

$section3_corBackground = '#030F21';
$section3_corBordaCard = '#e7004c';
$section3_corSpanCard = '#e7004c';
$section3_corBotao = '#e7004d';

$section6_corBackground = '#1081b2';

$section7_corBordaCard = '#1081b2';

$section8_corBackgroungCard = "#094ba5";

$section9_corBordaPerguntas = '#e7004c';


?>
<style>
    @import url("/wp-content/themes/o-novo-mercado/font/gilroy.css");
    @import url("/wp-content/themes/o-novo-mercado/font/sybarite-huge.css");
    @import url("/wp-content/themes/o-novo-mercado/inc/magnific-popup/magnific-popup.css");

    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box
    }

    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline
    }

    input,
    textarea {
        -webkit-appearance: none;
        -webkit-border-radius: 0
    }

    ul,
    ol {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    html {
        font-size: 16px;
        font-family: "Gilroy", sans-serif;
        scroll-behavior: smooth
    }

    body {
        background: linear-gradient(90deg, <?= $corFundoLado ?> 0%, <?= $corFundoMeio ?> 47.57%, <?= $corFundoLado ?> 93.19%);
        font-family: "Gilroy", sans-serif;
        color: #fff
    }

    .header-blur {
        background: <?= $header_corBlur ?>80;
        mix-blend-mode: normal;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        -webkit-transition: ease-in-out .2s;
        transition: ease-in-out .2s
    }

    .btn-default {
        font-family: inherit;
        font-size: 1rem;
        max-width: 12.5rem;
        height: 5rem;
        width: 14.5rem;
        display: flex;
        display: -webkit-box;
        display: -ms-flexbox;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-decoration: none;
        font-weight: 700;
        color: #fff;
        cursor: pointer;
        -webkit-transition: ease-in-out .2s;
        transition: ease-in-out .2s;
        background: #e7004c;
        box-shadow: 0px 0px 20px #e7004c;
        border-radius: .25rem
    }

    .btn-default:hover {
        opacity: .8;
        background: #e7004c
    }

    .template-cursos header .content-header .access-header a:last-of-type {
        background: <?= $corBotaoPrincipal ?>;
        box-shadow: 0px 0px 20px <?= $corBotaoPrincipal ?>
    }

    .onm-courses-cta-video {
        height: 100vh !important;
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .onm-courses-cta-video .content-cta1-video {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: center;
        -ms-flex-align: center;
        justify-content: inherit;
        align-items: center;
        width: 81%;
        height: 100%;
        max-width: 26.25rem;
        margin-bottom: 5.875rem
    }

    .onm-courses-cta-video .video-background-wrapper {
        width: 100vw;
        height: 100vh;
        overflow: hidden;
        position: absolute;
        left: 0;
        z-index: -1
    }

    .onm-courses-cta-video .video-background-wrapper img {
        width: 100vw;
        height: 100vh;
        min-height: 600px;
        -o-object-fit: cover;
        object-fit: cover
    }

    .onm-courses-cta-video .content-cta1-video .play-cta1 {
        margin-bottom: 2rem
    }

    .onm-courses-cta-video .content-cta1-video .img-teacher {
        position: absolute;
        z-index: -1;
        top: 64px;
        object-fit: contain;
        height: 50%;
        filter: opacity(.5)
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-top: 5%
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .exclusive {
        text-transform: uppercase;
        font-weight: 500;
        font-size: 12px;
        margin-bottom: 2rem
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .title-small {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 0;
        letter-spacing: 5.6px;
        text-transform: uppercase
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .title-cta1 {
        font-weight: 700;
        font-size: 6.25rem;
        margin: 0;
        text-transform: uppercase;
        color: #fff;
        font-family: "Sybarite-Huge", sans-serif
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .title-cta1 {
        text-align: center;
        font-size: 60px;
        margin: 0
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .logo-top {
        margin-bottom: 2rem
    }

    .template-cursos h1 {
        font-size: 1.25rem;
        line-height: 1.5;
        text-align: center;
        margin: 0 0 1.875rem;
        color: #fff
    }

    .template-cursos h1 strong {
        font-weight: 700
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .content-btn {
        display: grid;
        place-items: center;
        max-width: 302px;
        width: 100%
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .content-btn .btn-default {
        font-weight: 700;
        font-size: 1.375rem;
        width: 100%;
        max-width: 302px;
        background: <?= $corBotaoPrincipal ?>;
        box-shadow: 0px 0px 20px <?= $corBotaoPrincipal ?>
    }

    .onm-courses-cta-video .content-cta1-video .cta1-infos-video .content-btn span {
        text-transform: uppercase;
        text-align: center;
        font-weight: 500;
        font-size: 14px;
        margin-top: 14px
    }

    .onm-courses-teacher .content-teacher {
        display: -ms-grid;
        display: grid;
        place-items: center
    }

    .onm-courses-teacher .content-teacher .content-about {
        max-width: 26.25rem;
        z-index: 10;
        display: flex;
        flex-direction: column
    }

    .onm-courses-teacher .content-teacher .content-about h2 {
        font-size: 2rem;
        color: #fff;
        font-weight: 700
    }

    .onm-courses-teacher .content-teacher .content-about p {
        text-align: left;
        margin: 1.25rem 0;
        line-height: 1.5;
        font-size: 1rem
    }

    .onm-courses-teacher .content-teacher .about-teacher .infos-teacher div .btn-default {
        font-weight: 700;
        -webkit-transition: ease-in-out .2s;
        transition: ease-in-out .2s;
        letter-spacing: 1px;
        text-align: center;
        width: 100%;
        padding: 0 30px;
        box-sizing: border-box;
        font-size: 1.125rem;
        margin-top: 3.375rem;
        max-width: 30.4375rem;
        height: 4.0625rem;
        background: <?= $corBotaoPrincipal ?>;
        box-shadow: 0px 0px 20px <?= $corBotaoPrincipal ?>;
        border-radius: 5px
    }

    .onm-courses-accordeon {
        display: -ms-grid;
        display: grid;
        place-items: center;
        background: <?= $section3_corBackground ?>
    }

    .onm-courses-accordeon .content-accordeon {
        width: 81%;
        max-width: 26.25rem;
        display: -ms-grid;
        display: grid;
        place-items: center;
        margin-bottom: 7.5rem
    }

    .onm-courses-accordeon .content-accordeon .list {
        width: 100%;
        max-width: 600px;
        margin: 0
    }

    .onm-courses-accordeon .content-accordeon .title-accordeon h2 {
        text-align: center;
        font-size: 26px;
        color: #fff;
        margin: 5rem 0 1rem;
        font-weight: 700
    }

    .onm-courses-accordeon .content-accordeon .title-accordeon .sub-title-accordeon {
        text-align: center;
        color: #e7004c;
        margin: 0 0 2.0625rem
    }

    .onm-courses-accordeon .content-accordeon .play-accordeon {
        margin: .6875rem 0 1rem
    }

    .onm-courses-accordeon .content-accordeon .duration-course {
        color: #f1cf6d;
        font-weight: 500;
        margin-bottom: 1.25rem;
        text-transform: uppercase;
        text-align: center
    }

    .onm-courses-accordeon .content-accordeon .accordeon {
        margin: 10px 0;
        -webkit-transition: .4s;
        transition: .4s;
        list-style: none
    }

    .onm-courses-accordeon .content-accordeon .accordeon:nth-child(-n+5) {
        display: block
    }

    .onm-courses-accordeon .content-accordeon .accordeon .module {
        color: #ffff;
        margin: 2rem 0 16px;
        display: block;
        font-size: 14px;
        font-weight: 600
    }

    .onm-courses-accordeon .content-accordeon .load-more img {
        margin-right: 10px
    }

    .onm-courses-accordeon .content-accordeon .load-more span {
        font-size: 16px
    }

    .onm-courses-accordeon .content-accordeon .load-more:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-active .onm-accordeon-reposta {
        padding-bottom: 40px;
        background-color: #0b0c42;
        -webkit-transition: ease-out .2s;
        transition: ease-out .2s
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-active .onm-accordeon-svg {
        -webkit-transform: rotate(-180deg);
        transform: rotate(-180deg)
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-item {
        background-color: transparent;
        border: solid 1px;
        box-shadow: 0px 0px 5px <?= $section3_corBordaCard ?>;
        border: 1px solid <?= $section3_corBordaCard ?>;
        border-radius: 5px;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        flex-direction: row;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 20px
    }

    .onm-courses-accordeon .content-accordeon .accordeon {
        margin: 10px 0;
        -webkit-transition: .4s;
        transition: .4s;
        list-style: none;
        display: none
    }

    .onm-courses-accordeon .content-accordeon .load-more {
        background: -webkit-gradient(linear, left top, right top, color-stop(1.13%, <?= $section3_corBotao ?>), to(rgba(231, 0, 76, .04)));
        background: linear-gradient(90deg, <?= $section3_corBotao ?> 1.13%, rgba(231, 0, 76, .04) 100%);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 1rem;
        margin-top: 20px;
        cursor: pointer;
        position: relative
    }

    .onm-courses-accordeon .content-accordeon .load-more img {
        margin-right: 10px
    }

    .onm-courses-accordeon .content-accordeon .load-more span {
        font-size: 16px;
        color: #fff
    }

    .onm-courses-accordeon .content-accordeon .load-more:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-item-title {
        font-weight: 400
    }

    .onm-courses-accordeon .content-accordeon span {
        color: <?= $section3_corSpanCard ?>;
        margin-left: 15px
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-item-title,
    .onm-courses-accordeon .content-accordeon .onm-accordeon-item-resp,
    .onm-courses-accordeon .content-accordeon .onm-accordeon p {
        color: #fff;
        margin: 0
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-svg {
        fill: #fff;
        height: 24px;
        -webkit-transition: .4s ease;
        transition: .4s ease;
        width: 24px
    }

    .onm-courses-accordeon .content-accordeon .onm-accordeon-reposta {
        max-height: 0;
        font-size: .875rem;
        overflow: hidden;
        -webkit-transition: max-height .2s ease-out;
        transition: max-height .2s ease-out;
        padding: 0 20px
    }

    @media screen and (max-width:990px) {
        .onm-courses-accordeon .content-accordeon .onm-accordeon-section {
            width: 85%;
            padding: 0
        }

        .onm-courses-accordeon .content-accordeon .onm-accordeon-title {
            line-height: 1.3
        }
    }

    .onm-courses-teacher {
        display: -ms-grid;
        display: grid;
        place-items: center
    }

    .onm-courses-teacher .content-teacher {
        width: 81%;
        max-width: 26.25rem;
        margin-top: -20px;
        margin-bottom: 6.25rem;
        display: -ms-grid;
        display: grid;
        place-items: center
    }

    .onm-courses-teacher .content-teacher h2 {
        text-align: left;
        width: 75%;
        font-size: 1.625rem;
        margin-bottom: 10px;
        color: #fff;
        font-weight: 700
    }

    .onm-courses-teacher .content-teacher .video-teacher {
        margin-bottom: 4.6875rem
    }

    .onm-courses-teacher .content-teacher .video-teacher .youtube {
        position: relative
    }

    .onm-courses-teacher .content-teacher .video-teacher iframe {
        width: 100%;
        height: 10.625rem
    }

    .onm-courses-teacher .content-teacher .about-teacher .infos-teacher img {
        width: 251px;
        height: 349px;
        margin-bottom: 1.75rem
    }

    .onm-courses-teacher .content-teacher .about-teacher .infos-teacher p span {
        font-size: 1.625rem;
        font-weight: 700;
        display: block;
        margin-bottom: 1.875rem
    }

    .onm-courses-job-marketing {
        display: -ms-grid;
        display: grid;
        place-items: center
    }

    .onm-courses-job-marketing .content-job-marketing {
        width: 81%;
        max-width: 26.25rem;
        margin-bottom: 9.375rem
    }

    .onm-courses-job-marketing .content-job-marketing img {
        width: 100%
    }

    .onm-courses-job-marketing .content-job-marketing .infos-job-marketing h2 {
        margin: 1.25rem 0 1.75rem;
        font-weight: 700;
        font-size: 1.625rem;
        color: #fff
    }

    .onm-courses-job-marketing .content-job-marketing .infos-job-marketing p {
        font-size: 1.125rem;
        margin-bottom: 20px
    }

    .onm-courses-job-marketing .content-job-marketing .infos-job-marketing .btn-default {
        margin-top: 50px;
        font-size: 1.125rem;
        font-weight: 700;
        width: 100%;
        max-width: 100%;
        height: 4.0625rem;
        background: <?= $corBotaoPrincipal ?>;
        box-shadow: 0px 0px 20px <?= $corBotaoPrincipal ?>
    }

    .onm-courses-job-marketing .content-job-marketing .infos-job-marketing span {
        text-transform: uppercase;
        font-size: 1.125rem;
        color: #f1cf6d;
        font-weight: 500
    }

    .onm-courses-about-us {
        background: <?= $section6_corBackground ?>;
        display: grid;
        place-items: center;
        position: relative;
        overflow-x: clip
    }

    .onm-courses-about-us .content-about-us img {
        width: 110vw;
        max-width: 480px;
        display: flex;
        margin: 0 auto;
        position: absolute;
        overflow: hidden;
        left: -50px;
        top: -3.125rem
    }

    .onm-courses-about-us .content-about-us {
        width: 81%;
        max-width: 30rem;
        position: relative;
        margin-bottom: 4.375rem
    }

    .onm-courses-about-us .content-about-us .infos-about-us {
        margin-top: 80%
    }

    .onm-courses-about-us .content-about-us .infos-about-us h2 {
        color: #fff;
        font-size: 1.625rem;
        font-weight: 700;
        margin-bottom: 3.125rem
    }

    .onm-courses-about-us .content-about-us .infos-about-us p {
        font-size: 1rem;
        line-height: 1.5;
        margin-bottom: 1.875rem
    }

    .onm-courses-about-us .content-about-us .btn-default {
        width: 100%;
        height: 4.0625rem;
        max-width: 23.4375rem;
        margin: 0 auto;
        font-size: 1.125rem;
        background: <?= $corBotaoPrincipal ?>;
        box-shadow: 0px 0px 20px <?= $corBotaoPrincipal ?>
    }

    .onm-captura-testimony {
        margin: 3.125rem 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .onm-captura-testimony .content-testimony {
        width: 81%;
        max-width: 30rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .onm-captura-testimony .content-testimony .testimony-title {
        text-align: center;
        line-height: 1.2;
        margin-bottom: 3.125rem
    }

    .onm-captura-testimony .content-testimony .testimony-title h2 {
        font-weight: 700;
        font-size: 1.5625rem;
        margin-bottom: .875rem;
        color: #fff
    }

    .onm-captura-testimony .content-testimony .testimony-title p {
        font-size: 1rem
    }

    .onm-captura-testimony .content-testimony .testimony-title p span {
        font-weight: 700
    }

    .onm-captura-testimony .content-testimony .slider {
        width: 300px;
        padding-right: 15px;
        padding-left: 15px
    }

    .onm-captura-testimony .content-testimony .slide {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 1.875rem
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card {
        width: 230px;
        height: 311px;
        margin: .625rem 0;
        border-radius: .625rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: transparent;
        position: relative
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border-radius: 10px;
        padding: 1px;
        background: -webkit-gradient(linear, left bottom, left top, color-stop(21%, rgba(224, 0, 102, 0)), color-stop(45%, <?= $section7_corBordaCard ?>), color-stop(68%, <?= $section7_corBordaCard ?>));
        background: linear-gradient(0deg, rgba(224, 0, 102, 0) 21%, <?= $section7_corBordaCard ?> 45%, <?= $section7_corBordaCard ?> 68%);
        -webkit-mask: -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff)) content-box, -webkit-gradient(linear, left top, left bottom, color-stop(0, #fff));
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card img {
        width: 90%;
        height: 100.87px;
        border-radius: .625rem;
        -o-object-fit: cover;
        object-fit: cover;
        position: absolute;
        top: -2.5rem
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento {
        overflow-y: auto;
        padding: 0 5px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        height: 12.5rem;
        width: 195px;
        margin-top: 4.5rem
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: transparent
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento::-webkit-scrollbar {
        width: 6px;
        background-color: transparent
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento::-webkit-scrollbar-thumb {
        border-radius: 5px;
        background-color: #e0004d
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento p {
        font-size: .75rem;
        font-weight: 400;
        line-height: 1.5;
        margin-right: 5px
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-depoimentos-autor {
        width: 100%;
        text-align: left;
        margin-left: 2rem;
        margin-top: 1rem
    }

    .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-depoimentos-autor p {
        font-size: 1rem;
        font-weight: 700
    }

    .onm-captura-testimony .content-testimony .left-arrow {
        background-image: url(https://onovomercado.com/wp-content/themes/o-novo-mercado/img/left-arrow.svg);
        background-repeat: no-repeat;
        height: 2rem;
        position: absolute;
        width: 2rem;
        margin-right: .9375rem;
        z-index: 10;
        cursor: pointer;
        top: 38%;
        left: 1%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .onm-captura-testimony .content-testimony .right-arrow {
        background-image: url(https://onovomercado.com/wp-content/themes/o-novo-mercado/img/next-arrow.svg);
        background-repeat: no-repeat;
        height: 2rem;
        position: absolute;
        width: 2rem;
        margin-left: .9375rem;
        z-index: 10;
        cursor: pointer;
        top: 38%;
        right: -12%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .onm-captura-testimony .content-testimony .slick-dots {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        position: relative;
        left: 4px;
        top: -85px;
        margin: 0;
        list-style-type: none
    }

    .onm-captura-testimony .content-testimony .slick-dots li {
        margin: 0 .25rem
    }

    .onm-captura-testimony .content-testimony .slick-dots button {
        display: block;
        width: 1rem;
        height: 1rem;
        padding: 0;
        border: solid 1px #e0004d;
        border-radius: 100%;
        background-color: transparent;
        text-indent: -9999px
    }

    .onm-captura-testimony .content-testimony .slick-dots li.slick-active button {
        background-color: #e0004d
    }

    .owl-theme .owl-dots {
        position: relative
    }

    .owl-theme .owl-dots .owl-dot span {
        background: 0 0 !important;
        border: solid 1px #e7004c;
        padding: 2px
    }

    .owl-theme .owl-dots .owl-dot:hover span,
    .owl-theme .owl-dots .owl-dot.active span {
        background: #e7004c !important
    }

    .onm-captura-plans {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .onm-captura-plans .content-plans {
        width: 81%;
        max-width: 30rem
    }

    .onm-captura-plans .content-plans .plans {
        color: #e7004c;
        text-align: center;
        text-transform: uppercase;
        font-family: "Gilroy-bold";
        font-size: .875rem
    }

    .onm-captura-plans .content-plans .plans-title {
        text-align: center;
        line-height: 1.2
    }

    .onm-captura-plans .content-plans .plans-title h2 {
        font-size: 2rem;
        margin-bottom: .875rem;
        font-weight: 700;
        color: #fff
    }

    .onm-captura-plans .content-plans .plans-title p {
        font-weight: 500;
        font-size: 1rem
    }

    .onm-captura-plans .content-plans .plans-title span {
        color: #f1cf6d
    }

    .onm-captura-plans .content-plans .card {
        height: auto;
        max-width: 19.625rem;
        margin: 2.5rem auto 0
    }

    .onm-captura-plans .content-plans .card .content-card {
        border-radius: 10px;
        background: linear-gradient(180deg, <?= $section8_corBackgroungCard ?> 0%, rgba(9, 75, 165, 0) 100%);
        display: -ms-grid;
        display: grid;
        place-items: center;
        height: auto;
        width: 100%
    }

    .onm-captura-plans .content-plans .card .content-card .title-plan {
        display: -ms-grid;
        display: grid;
        place-items: center;
        margin-bottom: 2.0625rem
    }

    .onm-captura-plans .content-plans .card .content-card .title-plan .type-plan {
        text-transform: uppercase;
        font-size: 1.125rem;
        color: #f1cf6d;
        margin: 2rem 0 0;
        font-weight: 400
    }

    .onm-captura-plans .content-plans .card .content-card .title-plan p:last-of-type {
        text-transform: uppercase;
        font-size: 12px;
        margin: 0
    }

    .onm-captura-plans .content-plans .card .content-card .container-btn span:last-of-type {
        color: #f1cf6d;
        text-transform: uppercase;
        font-family: "Gilroy";
        margin: 1rem 0;
        font-weight: 700;
        font-size: 14px
    }

    .onm-captura-plans .content-plans .card .content-card .value {
        font-size: 2rem;
        margin: 0 0 10px;
        font-weight: 800;
        text-align: center
    }

    .onm-captura-plans .content-plans .card .content-card .value span {
        text-transform: uppercase;
        font-family: "Gilroy";
        margin-bottom: .525rem;
        font-weight: 700;
        font-size: 16px;
        color: #fff
    }

    .onm-captura-plans .content-plans .card .content-card .module-curse {
        width: 100%;
        margin: 16px 0 0 52px;
        text-transform: capitalize;
        font-weight: 700
    }

    .onm-captura-plans .content-plans .card .content-card ul {
        list-style: none;
        width: 100%;
        margin: 0
    }

    .onm-captura-plans .content-plans .card .content-card ul li {
        margin: 0;
        font-size: 1rem;
        width: 100%;
        padding: .625rem 16px .625rem 52px;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        position: relative;
        text-align: start
    }

    .onm-captura-plans .content-plans .card .content-card ul li:before {
        content: "";
        position: absolute;
        background: url(https://onovomercado.com/wp-content/themes/o-novo-mercado/img/check.svg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: contain;
        width: 20px;
        height: 20px;
        top: 9px;
        margin-left: -1.8rem;
        border-radius: 1rem
    }

    .onm-captura-plans .content-plans .card .content-card .container-btn {
        margin: 45px 0 -3rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 16.25rem
    }

    .onm-captura-plans .content-plans .card .content-card .btn-default {
        height: 4.0625rem;
        width: 100%;
        max-width: 17.5rem;
        font-size: 1.125rem;
        text-transform: uppercase;
        font-weight: 700;
        background: #e7004c;
        box-shadow: 0px 0px 20px #e7004c
    }

    .onm-captura-plans .content-plans .card .payment-icons {
        margin: 50px 0
    }

    .onm-captura-plans .content-plans .card .payment-icons ul {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        list-style: none;
        margin: 15px 0
    }

    .onm-captura-plans .content-plans .card .payment-icons ul li {
        margin: 5px 12.5px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .onm-captura-plans .content-plans .card .payment-icons ul li img {
        max-height: 50px;
        max-width: 50px;
        width: 40px;
        -webkit-filter: opacity(.5);
        filter: opacity(.5)
    }

    .template-cursos .onm-faq {
        background-color: transparent !important;
        margin-bottom: 7.0625rem
    }

    .template-cursos .onm-faq-box {
        background-color: transparent;
        box-shadow: 0px 0px 5px <?= $section9_corBordaPerguntas ?>;
        border: 1px solid <?= $section9_corBordaPerguntas ?>;
        border-radius: 5px
    }

    .template-cursos .onm-faq-box:hover,
    .onm-faq-active {
        background: 0 0
    }

    .template-cursos .onm-faq-box .onm-faq-svg {
        fill: <?= $section9_corBordaPerguntas ?>
    }

    .template-cursos .onm-faq .onm-faq-section div p {
        font-size: 1rem;
        font-weight: 400
    }

    .template-cursos .onm-faq .onm-faq-section>div>p {
        margin: 68px 0 0;
        font-weight: 400
    }

    .template-cursos .footer .content-footer:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: #e7004c
    }

    @media screen and (max-width:320px) {
        .onm-captura-testimony .content-testimony .left-arrow {
            left: 5%
        }

        .onm-captura-testimony .content-testimony .right-arrow {
            right: -5%
        }
    }

    @media screen and (min-width:580px) {
        .onm-courses-about-us .content-about-us .infos-about-us {
            margin-top: 60%
        }
    }

    @media screen and (min-width:1024px) {
        .onm-courses-cta-video {
            height: 100vh
        }

        .onm-courses-cta-video .content-cta1-video {
            width: 90%;
            max-width: 102.5rem;
            height: 100vh;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 0
        }

        .onm-courses-cta-video .video-background-wrapper {
            height: 100vh;
            top: 0
        }

        .onm-courses-cta-video .content-cta1-video .play-cta1 {
            margin: 1rem 0 2rem
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video {
            margin-top: 0;
            align-items: start;
            max-width: 26.25rem
        }

        .onm-courses-cta-video .content-cta1-video .img-teacher {
            max-height: 100%;
            position: relative;
            height: 100%;
            width: 60%;
            filter: opacity(1)
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video .title-small {
            font-size: 1.625rem;
            letter-spacing: 9.1px
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video .title-cta1 {
            text-align: start;
            font-size: 6.25rem
        }

        .template-cursos h1 {
            font-size: 1.625rem;
            line-height: 1.5;
            margin: 0 0 2rem;
            max-width: 22.3125rem;
            width: 100%;
            font-weight: 300;
            text-align: start
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video .content-btn .btn-default {
            width: 22.8125rem;
            max-width: 22.8125rem;
            height: 5rem;
            font-size: 26px
        }

        .onm-courses-teacher .content-teacher .content-about {
            width: 100%;
            max-width: 41.5625rem;
            margin-bottom: 110px
        }

        .onm-courses-teacher .content-teacher .content-about h2 {
            font-size: 2.875rem;
            margin: 0 0 20px
        }

        .onm-courses-teacher .content-teacher .content-about p {
            font-size: 1.25rem;
            text-align: center;
            line-height: 1.4
        }

        .onm-courses-accordeon .content-accordeon {
            width: 90%;
            max-width: 102.5rem;
            margin: 9.0625rem 0 11.5rem
        }

        .onm-courses-accordeon .content-accordeon .title-accordeon {
            display: -ms-grid;
            display: grid;
            place-items: center
        }

        .onm-courses-accordeon .content-accordeon .title-accordeon h2 {
            font-size: 2.25rem;
            color: #fff;
            margin: 0 0 2.0625rem;
            max-width: 32.625rem
        }

        .onm-courses-accordeon .content-accordeon .title-accordeon .sub-title-accordeon {
            width: 85%;
            font-size: 1.25rem
        }

        .onm-courses-accordeon .content-accordeon .onm-accordeon-item-title {
            font-size: 1.25rem
        }

        .onm-courses-accordeon .content-accordeon .play-accordeon {
            margin: 30px 0 10px
        }

        .onm-courses-accordeon .content-accordeon .duration-course {
            margin-bottom: 50px
        }

        .onm-courses-teacher .content-teacher {
            width: 90%;
            max-width: 102.5rem;
            margin-top: -50px
        }

        .onm-courses-teacher .content-teacher h2 {
            text-align: center;
            font-size: 2.25rem;
            width: 100%;
            margin: 0 auto;
            color: #fff;
            margin-bottom: 1.9375rem
        }

        .onm-courses-teacher .content-teacher .video-teacher {
            width: 52.75rem;
            max-width: 60.3125rem;
            margin-bottom: 3.4375rem;
            z-index: 1;
            position: relative
        }

        .onm-courses-teacher .content-teacher .video-teacher:before {
            content: "";
            position: absolute;
            width: 120%;
            height: 87%;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 0px 20px <?= $section2_corBordaVideo ?>;
            border: 2px solid <?= $section2_corBordaVideo ?>;
            border-radius: 5px;
            z-index: -2
        }

        .onm-courses-teacher .content-teacher .video-teacher iframe {
            width: 100%;
            max-width: 52.75rem;
            height: 29.75rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher img {
            order: 2;
            width: 449px;
            height: 625px
        }

        .onm-courses-teacher .content-teacher .about-teacher {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center
        }

        .onm-courses-teacher .content-teacher .about-teacher h2 {
            display: block;
            margin-bottom: 2.5rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 6.875rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher p {
            max-width: 33.75rem;
            font-size: 1.25rem;
            margin: 0 123px 0 0;
            line-height: 1.5;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher div .btn-default {
            width: 100%;
            font-size: 1.375rem;
            margin-top: 3.375rem;
            max-width: 30.4375rem;
            height: 5rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher p span {
            font-size: 2.25rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher picture {
            width: 60%;
            max-width: 36.875rem
        }

        .onm-courses-teacher .content-teacher .about-teacher .infos-teacher picture img {
            max-width: 100%;
            margin: 0
        }

        .template-cursos .onm-home-carousel-classes .content-carousel-classes {
            max-width: 1000px;
            margin-top: 7.5rem;
            margin: 7.5rem 0
        }

        .template-cursos .onm-home-carousel-classes .content-carousel-classes .title {
            max-width: 582px;
            margin: 0 auto
        }

        .onm-courses-job-marketing .content-job-marketing {
            width: 90%;
            max-width: 102.5rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 2.5rem
        }

        .onm-courses-job-marketing .content-job-marketing .infos-job-marketing {
            max-width: 28.4375rem
        }

        .onm-courses-job-marketing .content-job-marketing .infos-job-marketing h2 {
            font-size: 2.25rem
        }

        .onm-courses-job-marketing .content-job-marketing .infos-job-marketing p {
            font-size: 1.25rem;
            max-width: 24.875rem;
            line-height: 1.5
        }

        .onm-courses-job-marketing .content-job-marketing .infos-job-marketing .btn-default {
            max-width: 23.875rem;
            height: 5rem;
            font-size: 1.375rem
        }

        .onm-courses-job-marketing .content-job-marketing picture {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2;
            width: 100%;
            max-width: 42.5rem
        }

        .onm-courses-job-marketing .content-job-marketing picture source {
            width: 100%;
            height: 100%
        }

        .onm-courses-about-us .content-about-us {
            width: 90%;
            max-width: 102.5rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 7.8125rem
        }

        .onm-courses-about-us .content-about-us img {
            width: 100%;
            max-width: 38.75rem;
            left: initial
        }

        .onm-courses-about-us .content-about-us .infos-about-us {
            margin-top: 380px;
            max-width: 52.75rem;
            display: grid;
            place-items: center
        }

        .onm-courses-about-us .content-about-us .infos-about-us h2 {
            font-size: 2.25rem;
            max-width: 38.75rem
        }

        .onm-courses-about-us .content-about-us .infos-about-us p {
            font-size: 1.25rem
        }

        .onm-courses-about-us .content-about-us .infos-about-us p:last-child {
            margin-bottom: 5.3125rem
        }

        .onm-courses-about-us .content-about-us .btn-default {
            width: 369px;
            height: 5rem;
            font-size: 1.375rem
        }

        .onm-captura-testimony {
            margin: 0
        }

        .onm-captura-testimony .content-testimony {
            max-width: 78.75rem;
            margin: 7.25rem 0 6.25rem
        }

        .onm-captura-testimony .content-testimony .testimony-title {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            max-width: 920px;
            margin: 0 auto 3.2rem auto
        }

        .onm-captura-testimony .content-testimony .testimony-title h2 {
            font-size: 2.25rem;
            font-weight: 700;
            text-align: center
        }

        .onm-captura-testimony .content-testimony .testimony-title p {
            font-size: 18px;
            margin-top: 1rem;
            text-align: center
        }

        .onm-captura-testimony .content-testimony .slider {
            width: 80%
        }

        .onm-captura-testimony .content-testimony .slider .slide {
            padding-top: 7rem
        }

        .onm-captura-testimony .content-testimony .slider .slide .onm-testimony-card {
            width: 18.75rem;
            height: 25.25rem
        }

        .onm-captura-testimony .content-testimony .slider .slide .onm-testimony-card img {
            width: 90%;
            height: 12.5rem;
            top: -7.5rem
        }

        .onm-captura-testimony .content-testimony .slider .slide .onm-testimony-depoimento {
            width: 90%;
            height: 20.375rem;
            margin-top: 6.5rem
        }

        .onm-captura-testimony .content-testimony .slide .onm-testimony-card .onm-testimony-depoimento p {
            font-size: .875rem
        }

        .onm-captura-testimony .content-testimony .slider .slide .onm-testimony-depoimento p span {
            display: block;
            margin-top: 2rem
        }

        .onm-captura-testimony .content-testimony .slider .owl-dots {
            margin: 1rem 0 0
        }

        .onm-captura-testimony .content-testimony .slider .left-arrow {
            height: 2rem;
            top: 38%;
            left: -15px
        }

        .onm-captura-testimony .content-testimony .slider .right-arrow {
            height: 2rem;
            width: 2rem;
            top: 38%;
            right: -5%
        }

        .onm-captura-plans .content-plans {
            max-width: 102.5rem;
            width: 90%;
            padding-bottom: 100px
        }

        .onm-captura-plans .content-plans .plans-title h2 {
            font-size: 2.25rem;
            max-width: 411px;
            margin: 0 auto
        }

        .onm-captura-plans .content-plans .plans-title p {
            font-size: 20px
        }

        .onm-captura-plans .content-plans .card {
            max-width: 48.75rem;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-top: 0
        }

        .onm-captura-plans .content-plans .card .content-card {
            height: auto;
            width: 48.75rem;
            padding: 0 20px
        }

        .onm-captura-plans .content-plans .card .content-card .value {
            font-size: 2.875rem;
            margin-bottom: 0
        }

        .onm-captura-plans .content-plans .card .content-card .value span {
            font-size: 1.25rem
        }

        .onm-captura-plans .content-plans .card .content-card .module-curse {
            margin: 5px 0 0 52px
        }

        .onm-captura-plans .content-plans .card .content-card .grid-one {
            -webkit-column-count: 2;
            column-count: 2
        }

        .onm-captura-plans .content-plans .card .content-card .grid-two {
            -webkit-column-count: 2;
            column-count: 2
        }

        .onm-captura-plans .content-plans .card .content-card .grid-tree {
            -webkit-column-count: 2;
            column-count: 2
        }

        .onm-captura-plans .content-plans .card .content-card .container-btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: -4rem;
            width: 22rem
        }

        .onm-captura-plans .content-plans .card .content-card .container-btn .btn-default {
            width: 100%;
            max-width: 23rem;
            height: 5rem;
            font-weight: 700;
            font-size: 1.375rem
        }

        .onm-captura-plans .content-plans .card .payment-icons {
            display: block;
            height: 9.375rem
        }

        .onm-captura-plans .content-plans .card .payment-icons ul {
            list-style: none
        }

        .onm-captura-plans .content-plans .card .payment-icons ul li {
            margin-top: 2.5rem
        }

        .onm-captura-plans .content-plans .card .payment-icons ul li img {
            width: 40px;
            margin: 0 5px;
            -webkit-filter: opacity(.5);
            filter: opacity(.5)
        }

        .template-cursos .onm-faq {
            padding-top: 100px
        }

        .template-cursos .onm-faq .onm-faq-section {
            width: 60%
        }

        .template-cursos .onm-faq .onm-faq-section div p {
            font-size: 1.25rem;
            font-weight: 400
        }
    }

    @media screen and (min-width:1200px) {
        .onm-courses-cta-video .video-background-wrapper img {
            width: 100vw;
            height: auto
        }
    }

    @media screen and (min-width:1440px) {
        .onm-courses-cta-video .content-cta1-video .cta1-infos-video .content-btn .btn-default {
            width: 22.8125rem;
            max-width: 22.8125rem
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video {
            max-width: 33.5rem;
            width: 100%
        }

        .onm-courses-cta-video .content-cta1-video .cta1-infos-video .logo-top {
            width: 500px;
            margin-bottom: 2rem
        }
    }
</style>