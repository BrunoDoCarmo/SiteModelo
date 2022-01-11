<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | FAC">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | FAC'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | FAC</title>
    </head>
    <body>
        <?php 
            include 'Include/Site/Body/GoogleTagManagerBody.php';
            include 'Include/Site/Body/CompanyPhrase.php';
            include 'Include/Site/Body/Menu.php';
        ?>
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3>FAC</h3> 
                </div>
            </div>
        </section><section class="carrers_area">
            <div class="container">
                <div class="row">
                <!--    <div class="col-md-3">
                        <div class="carrers_left">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="abrir-meu-negocio.php">Abrir meu negócio</a></li>							
                                <li role="presentation"><a href="estrategia-e-negocios.php">Estratégia & Negócios</a></li>
                                <li role="presentation"><a href="financas.php">Finanças</a></li>
                                <li role="presentation"><a href="marketing.php">Marketing</a></li>
                                <li role="presentation"><a href="gestao-de-processos.php">Gestão de Processos</a></li>
                                <li role="presentation"><a href="recursos-humanos.php">Recursos Humanos</a></li>
                            </ul>
                            <div class="contact_info">
                                <h2>Informações para contato</h2>
                                <p>Rua Major Sertório, 733, Vila Buarque - SP </p>
                                <h5>Telefone: (11) 3154-5114</h5>
                                <h5>Email: comercial@jrmack.com.br</h5>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-md-12">
                        <div class="carrers_right_content">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="carrers1">
                                    <div class="open_position">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item1">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items1" aria-expanded="false" aria-controls="items1">
                                                            Qual o valor do frete?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item1">
                                                    <div class="panel-body">
                                                        <p style="font-size:16px;">Para sabermos o valor do frete, há necessidade de estar passando o <strong>C.E.P</strong> da sua cidade para estarmos realizando uma cotação.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item2">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items2" aria-expanded="false" aria-controls="items2">
                                                            Vocês enviam para todo o Brasil?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item2">
                                                    <div class="panel-body">
                                                        <p>Sim! Enviamos para todo o territorio nacional.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item3">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items3" aria-expanded="false" aria-controls="items3">
                                                            Quais são os modelos de urnas?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item3">
                                                    <div class="panel-body">
                                                        <p>Os modelos de urnas que trabalhamos são as urnas de remoção estilo tradicional com tampa, e o modelo rabecão sem tampa.</p>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item4">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items4" aria-expanded="false" aria-controls="items4">
                                                            Qual é o prazo de entrega?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item4">
                                                    <div class="panel-body">
                                                        <p>O nosso prazo para produzir o produto e a transportadora coleta- lo é de 15 dias uteis, posteriormente terá o prazo da transportadora para o envio do produto.</p>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item5">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items5" aria-expanded="false" aria-controls="items5">
                                                            Tem a opção de estar colocando a logo da minha empresa na urna?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item5">
                                                    <div class="panel-body">
                                                        <p>Sim! O modelo de urna tradicional, temos a opção do cliente estar colocando a logo da sua empresa.</p>
                                                    </div>
                                                </div>
                                            </div>	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item6">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items6" aria-expanded="false" aria-controls="items6">
                                                            Quais são as medidas da urna?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item6">
                                                    <div class="panel-body">
                                                        <div class="col-md-6">
                                                            <table class="table table-bordered table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2" align="center">
                                                                            <strong>URNAS LISAS & PERSONALIZADAS</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Comprimento:</strong></td>
                                                                        <td align="center">2 metros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Largura:</strong></td>
                                                                        <td align="center">72 centimetros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Altura:</strong></td>
                                                                        <td align="center">38 centimetros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Peso:</strong></td>
                                                                        <td align="center">20 Kilograma</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <table class="table table-bordered table-striped">
                                                                <tbody>
                                                                    <tr>
                                                                        <td colspan="2" align="center">
                                                                            <strong>URNAS RABECÃO</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Comprimento:</strong></td>
                                                                        <td align="center">2 metros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Largura:</strong></td>
                                                                        <td align="center">62 centimetros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Altura:</strong></td>
                                                                        <td align="center">20 centimetros</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td><strong>Peso:</strong></td>
                                                                        <td align="center">15 Kilograma</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>	                                            	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item7">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items7" aria-expanded="false" aria-controls="items7">
                                                            Qual seria o valor da urna?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item7">
                                                    <div class="panel-body">
                                                        <p><a href="<?php include 'Include/SocialNetwork/WhatsApp.php'?>" target="_blank"><img src="Images/Icons/SocialNetwork/Original/WhatsApp.png" alt="WhatsApp Logo" height="40"></a> Envie-nós uma mensagem através do WhatsApp, para maiores Informações.</p>
                                                    </div>
                                                </div>
                                            </div>			                                            	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item8">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items8" aria-expanded="false" aria-controls="items8">
                                                            Quais as cores disponíveis?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item8">
                                                    <div class="panel-body">
                                                        <p>Para as urnas lisas <strong>(GEOLIZADAS)</strong>: Branca; Cinza; Preta;<br/><br/>Também temos a opção da urna personalizada, onde o cliente escolhe a cor desejada.</p>
                                                    </div>
                                                </div>
                                            </div>			                                            	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item9">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items9" aria-expanded="false" aria-controls="items9">
                                                            Qual é a forma de pagamento?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item9">
                                                    <div class="panel-body">
                                                        <p>Mediante negociação.</p>
                                                    </div>
                                                </div>
                                            </div>		                                            	
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="item10">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#items10" aria-expanded="false" aria-controls="items10">
                                                            Urna Rabecão possui tampa?
                                                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="items10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="item10">
                                                    <div class="panel-body">
                                                        <p>A urna rabecão não possui tampa.</p>
                                                    </div>
                                                </div>
                                            </div>	

                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>						
                </div>
            </div>
        </section>
        <!-- <section class="testimonials_area">
            <div class="container">
                <div class="testimonials_slider owl-carousel">
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="Images/Home/Background.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="Images/Home/Background.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="media">
                            <div class="media-left">
                                <img src="Images/Home/Background.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <?php
            include 'Include/Site/Body/WhatsApp.php';
            include 'Include/Site/Body/Chat.php';
            include 'Include/Site/Body/Footer.php';
        ?>