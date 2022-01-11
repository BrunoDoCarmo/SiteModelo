<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | Contato">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | Contato'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | Contato</title>    
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
                    <h3>Contato</h3> 
                </div>
            </div>
        </section>
        <section class="contact_us_area">
            <div class="container">
                <div class="contact_us_inner">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <form class="contact_us_form" action="send-email.php" method="post"  novalidate="novalidate">
                                    <input type="hidden" name="subjectEmail" value="/contact.php"/>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone">
                                    </div>
                                    <!-- <div class="form-group col-md-12">
                                        <h3></h3>
                                        <select id="horario" name="horario" class="form-control">
                                            <option value="h0">Selecione abaixo o melhor horário para contato</option> 
                                            <option value="h1">9h - 11h</option> 
                                            <option value="h2" >11h – 13h</option>
                                            <option value="h3">13h – 15h</option>
                                            <option value="h4" >15h – 17h</option>
                                            <option value="h5">17h – 18h</option>  
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h3></h3>
                                        <select id="conheceu" name="conheceu" class="form-control">
                                            <option value="i0">Selecione abaixo como nos conheceu</option> 
                                            <option value="i1">Busca online</option> 
                                            <option value="i2" >Facebook</option>
                                            <option value="i3">LinkedIn</option>
                                            <option value="i4" >Instagram</option>
                                            <option value="i5">Indicação de Professor</option>  
                                            <option value="i6" >Indicação de Ex-Associado</option>
                                            <option value="i7">Feiras/Eventos</option>   
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-12">
                                        <textarea  class="form-control" id="mensagem" name="mensagem" placeholder="Mensagem"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <input type="submit" value="enviar" class="btn green_submit_btn form-control"/>
                                    </div>
                                </form>                            
                            </div>
                        </div>
                        <div class="col-md-4">
                            <section class="map_area"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.2150426652634!2d-51.79447568502355!3d-23.488762684719013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecc473bc9ca5d5%3A0x1e96b7af07881f97!2sAv.%20Crist%C3%B3v%C3%A3o%20Colombo%2C%20766%20-%20Jardim%20Jaguaruna%2C%20Marialva%20-%20PR%2C%2086990-000!5e0!3m2!1spt-BR!2sbr!4v1604599368928!5m2!1spt-BR!2sbr" 
                            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="contact_us_details">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="<?php include 'Include/SocialNetwork/Maps.php'?>" target="_blank"><p>Av. Cristóvão Colombo, 766 - Marialva-Pr</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="<?php include 'Include/SocialNetwork/Email.php'?>">acteixeira.ltda@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="c_details_item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="<?php include 'Include/SocialNetwork/Telephone.php'?>">(44) 99923-6142</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include 'Include/Site/Body/WhatsApp.php';
            include 'Include/Site/Body/Chat.php';
            include 'Include/Site/Body/Footer.php';
        ?>