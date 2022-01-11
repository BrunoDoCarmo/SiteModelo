<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | Sobre">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | Sobre'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | Sobre</title>
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
                    <h3>Sobre</h3> 
                </div>
            </div>
        </section>
        <section class="carrers_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carrers_right_content">
                            <div class="market_option">
                                <div class="col-md-12">
                                    <a href="who-we-are.php">
                                        <div class="col-sm-6">
                                            <div class="market_option_item">
                                                <img style="width:40%" src="Images/Icons/Pages/About/WhoWeAre.svg" alt="">
                                                <h4>Quem Somos</h4>
                                                <p></p>
                                           </div>
                                        </div> 
                                    </a>
                                    <a href="mission-vision-values.php">
                                        <div class="col-sm-6">
                                            <div class="market_option_item">
                                                <img style="width:40%" src="Images/Icons/Pages/About/Mission-Vision-Values.svg" alt="">
                                                <h4>Missão, Visão e Valores</h4>
                                                <p></p>
                                            </div>
                                        </div> 
                                    </a>
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