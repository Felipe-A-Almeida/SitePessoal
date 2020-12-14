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
        .separator-x5{
            height: 300px;
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
        #about-block{
            background-image: url("<?= URL_BASE ?>images/about-block-background.png");
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
        .white-text{
            font-size: 25px;
            color: white;
        }
        .about-photo{
            width: 430px;
        }
        #portfolio-block{
            background-color: black;
        }
        .block-title{
            color:white;
            font-size: 45px;
        }
        .white-background{
            background-color: white;
        }
        .mold{
            min-height: 350px;
            margin-top:50px;
        }
        #contact-block{
            background-image: url("<?= URL_BASE ?>images/home-block-background.png");
            background-size: 100% 100%;
        }
        .label-contact{
            color: white;
            font-size: 16px;
        }
        .input-text{
            background-color:black;
            border: 0px solid white;
            border-bottom: 1px solid white;
            transition: 0.3s;
            max-width: 950px;
        }
        .input-text:focus{
            background-color:rgba(0,1,10,1);
            border: 0px solid white;
            border-bottom: 2px solid white;
            box-shadow: 0px 0px 5px white;
            transition: 0.3s;
        }
        .submit-button{
            width:100%;
            background: rgb(12,32,51);
            background: linear-gradient(90deg, rgba(12,32,51,1) 0%, rgba(9,45,59,1) 50%, rgba(1,58,87,1) 100%);
            border-color: white;
            max-width: 450px;
            font-size: 18px;
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
                            <p>Implementação de scripts orientado a objetos para áreas de acesso restrito e dashboards de informações utilizando as linguagens PHP ou Python juntamente com a metodologia Ajax e a arquitetura REST</p>
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
                            <p>Criação de Softwares Desktop utilizando a linguagem Python, como por exemplo: sistemas de gerenciamento, cadastros, dashboards, webcrawling para busca, leitura e armazenamento de dados</p>
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
                                Desenvolvimento Mobile
                            </legend>
                            <p>Elaboração de aplicações para dispositivos móveis utilizando Flutter, Java ou Cordova, com foco tanto em aplicações independentes, quanto em integrações com sistemas Web.</p>
                        </fieldset>
                    </div>
                </div>    
                <div class="separator-x2"></div>      
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Sites WordPress
                            </legend>
                            <p>Desenvolvimento de sites utilzando a ferramenta WordPress juntamente com seus plugins e temas com foco em landing pages e lojas de e-commerce</p>
                        </fieldset>
                    </div>
                </div>                
                <div class="separator-x2"></div>
                <div class="row">
                    <div class="separator-x2"></div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <fieldset class="blue-fieldset">
                            <legend>
                                Desenvolvimento de Banco de Dados
                            </legend>
                            <p>Levantamento de Requisitos, Elaboração de Diagramas e Programação de Bancos de Dados para armazenamento e processamento de rotinas utilizando a linguagem SQL</p>
                        </fieldset>
                    </div>
                    <div class="separator-x2"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="about-block" class="block-padding page-block">
        <div class="separator-x5"></div>        
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-6 profile-photo center">
                <img src="<?= URL_BASE ?>images/logo_fundo_transparente_branco.png" class="about-photo" alt="profile-photo">
            </div>
            <div class="col-sm-12 col-md-8 col-lg-6 block-padding white-text">
                <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
            </div>
        </div>
    </div>
    <div id="portfolio-block" class="block-padding">
        <div class="separator-x2"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 center">
                <h3 class="block-title">Portfólio</h3>
            </div>
        </div>  
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="container white-background mold">                    
                </div>
            </div>
        </div>   
        <div class="separator-x2"></div>           
    </div>
    <div id="contact-block" class="block-padding page-block">
        <div class="separator-x2"></div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 center">
                <h3 class="block-title">Contato</h3>
            </div>
        </div>  
        <div class="separator-x2"></div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <form>
                    <div class="row block-padding">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="nome_completo" class="label-contact">Nome Completo:</label>
                                <br>
                                <input type="text" name="nome_completo" id="nome_completo" class="form-control input-text" required>
                            </div>
                            <div class="form-group">
                                <label for="empresa" class="label-contact">Empresa:</label>
                                <br>
                                <input type="text" name="empresa" id="empresa" class="form-control input-text">
                            </div>
                            <div class="form-group" class="label-contact">
                                <label for="email" class="label-contact">E-mail:</label>
                                <br>
                                <input type="text" name="email" id="email" class="form-control input-text">
                            </div>
                            <div class="form-group" class="label-contact">
                                <label for="telefone" class="label-contact">Telefone:</label>
                                <br>
                                <input type="text" name="telefone" id="telefone" class="form-control input-text">
                            </div>
                            <br>
                            <div class="form-group" class="label-contact">                                
                                <button type="button" id="envia_contato" class="btn btn-primary submit-button">Enviar</button>
                            </div>
                        </div>
                    </div>
                </form>
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