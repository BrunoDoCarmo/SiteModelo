<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | Quem Somos">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | Quem Somos'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | Quem Somos</title>
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
                    <h3>Quem Somos</h3> 
                </div>
            </div>
        </section>
        <section class="carrers_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="carrers_right_content">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="carrers1">
                                    <div class="about_company">
                                        <p>Fundada no ano de 2020, a AC Teixeira é uma empresa voltada para a fabricação de urnas de remoção e transformação veicular, usando como matéria-prima a fibra de vidro.</p>
                                        <p>Temos uma vasta experiência em transformação veicular e de urnas de remoção.</p>
                                        <br/>
                                        <p>Sempre procuramos ter uma forma especial para cada cliente, no qual visamos atender suas necessidades.</p>
                                        <p>Atendemos todo o território nacional.</p>
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