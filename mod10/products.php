<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | Produtos">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | Produtos'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | Produtos</title>    
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
                    <h3>Produtos</h3> 
                </div>
            </div>
        </section>
        <section class="latest_news_area">
            <div class="container">
                <div class="section_title">
                    <h2>Urnas de Remoção</h2>
                </div>
                <div class="row latest_news_inner"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="latest_n_item">
                        <div class="l_n_image" align="center">
                            <a href="smooth-urns.php">
                                <img style="width:50%" src="Images/Icons/Pages/Ballots/01.png" alt="">
                            </a>
                        </div>
                        <a href="smooth-urns.php"><h4>Urnas Lisas</h4></a><br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="latest_n_item">
                        <div class="l_n_image" align="center">
                            <a href="personalized-urns.php">
                                <img style="width:50%" src="Images/Icons/Pages/Ballots/02.png" alt="">
                            </a>
                        </div>
                        <a href="personalized-urns.php"><h4>Urnas Personalizadas</h4></a><br>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="latest_n_item">
                        <div class="l_n_image" align="center">
                            <a href="ballot-box.php">
                                <img style="width:50%" src="Images/Icons/Pages/Ballots/03.png" alt="">
                            </a>
                        </div>
                        <a href="ballot-box.php"><h4>Urnas Rabecão</h4></a><br>
                    </div>
                </div>
            </div>
        </section>
        <section class="latest_news_area">
            <div class="container">
                <div class="section_title">
                    <h2>Quiosque</h2>
                </div>
                <div class="row latest_news_inner"></div>
                <div class="col-md-12">
                    <div class="latest_n_item">
                        <div class="l_n_image" align="center">
                            <a href="kiosk.php">
                                <img src="Images/Icons/Pages/Kiosk/01.jpg" alt="">
                            </a>
                        </div>
                        <a align="center" href="kiosk.php"><h4>Quiosque</h4></a><br>
                    </div>
                </div>
            </div>
        </section>
        <?php
            include 'Include/Site/Body/WhatsApp.php';
            include 'Include/Site/Body/Chat.php';
            include 'Include/Site/Body/Footer.php';
        ?>