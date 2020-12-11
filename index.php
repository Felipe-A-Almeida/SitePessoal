<?php
require_once "init.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felipe Almeida</title>
    <link rel="stylesheet" type="text/css" href="<?= URL_BASE ?>includes/bootstrap/css/bootstrap.min.css">
    <style>
        @font-face{
            font-family: 'MuseoModerno';
            src: url("<?= URL_BASE ?>includes/fonts/MuseoModerno/MuseoModerno-VariableFont_wght.ttf");
        }
        .menu ul{
            list-style-type:none;    
            padding-top:1%;        
        }
        .menu ul li{            
            display: inline;
            margin-left: 25px;
            font-size: 35px;
            font-family: MuseoModerno;
        }
        #menu-logo{
            width: 110px;
        }
        .home-logo{
            width: 100%;
        }
        .center{
            text-align:center;
        }
        .separator{
            height: 30px;
        }
        .separator-x2{
            height: 60px;
        }
        .block-padding{
            padding-left:45px;
            padding-right:45px;
        }
        #menu-block{
            background: linear-gradient(0deg, rgb(0 0 0) 0%, rgba(0,0,0,1) 35%, rgb(33 33 33) 100%);
            color: white;
        }
        #home-block{
            background-image: url("<?= URL_BASE ?>images/home-block-background.png");
            background-size: 100% 100%;
        }
        .blue-fieldset{
            border: 1px solid #1daef3;
            border-radius: 15px;
            padding:15px;
            color:#1daef3;                        
        }
        .blue-fieldset legend{
            width: fit-content;
            text-align: center;
            padding-left: 5%;
            padding-right: 5%;
        }
    </style>
</head>
<body>
    <div id="menu-block">
        <div class="row menu">
            <ul>
                <li>
                    <img id="menu-logo" src="<?= URL_BASE ?>images/logo_fundo_transparente_branco.png"> 
                </li>
                <li>
                   Início 
                </li>
                <li>
                    Sobre
                </li>
                <li>
                    Portfólio
                </li>
                <li>
                    Contato
                </li>
            </ul>
        </div>
    </div>
    <div id="home-block" class="block-padding page-block">
        <div class="row center">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Front-End
                            </legend>
                            <p>Criação de Landing Pages e Websites utilizando as linguagens HTML, CSS, JavaScript, e frameworks Jquery, Bootstrap, Highcharts, DataTables entre outros.</p>
                        </fieldset>
                    </div>
                </div>
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Back-End
                            </legend>
                            <p>Implementação de scripts orientado a objetos para comunicação com bancos de dados, áreas de acesso restrito e dashboards de informações utilizando as linguagens PHP ou Flutter, juntamente com a metodologia Ajax e a arquitetura REST</p>
                        </fieldset>
                    </div>
                </div>                
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Desktop
                            </legend>
                            <p>Criação de Softwares Desktop utilizando a linguagem Python, como por exemplo: sistemas de gerenciamento, cadastros, dashboards, webcrawling para busca, leitura e armazenamento de dados, entre várias outras possibilidades.</p>
                        </fieldset>
                    </div>
                </div>
                <div class="separator-x2"></div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <img class="home-logo" src="<?= URL_BASE ?>images/logo_fundo_transparente_colorido.png">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Front-End
                            </legend>
                            <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                        </fieldset>
                    </div>
                </div>    
                <div class="separator-x2"></div>      
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Back-End
                            </legend>
                            <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                        </fieldset>
                    </div>
                </div>                
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="separator-x2"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento Mobile
                            </legend>
                            <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
                        </fieldset>
                    </div>
                    <div class="separator-x2"></div>
                </div>
            </div>
        </div>
    </div>
    <hr>    
    <div id="about-block" class="block-padding page-block">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-6 profile-photo center">
                <img src="<?= URL_BASE ?>images/logo.png" alt="profile-photo">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-6 block-padding">
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>
        </div>
    </div>
    <hr>
    <div id="portfolio-block" class="block-padding">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 center">
                <h3>Portfólio</h3>
            </div>
        </div>        
    </div>
</body>
</html>
<script src="<?= URL_BASE ?>/includes/jquery/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.page-block').css('height', $(window).height());
        // Comma, not colon ----^
    });
    $(window).resize(function(){
        $('.page-block').css('height', $(window).height());
        // Comma, not colon ----^
    });
</script>