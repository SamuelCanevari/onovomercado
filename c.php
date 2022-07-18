<?php

$corBotaoPrincipal = '#1cb1ff';

?>


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
            background-color: <?= $corBotaoPrincipal ?>
        }
    }
</style>