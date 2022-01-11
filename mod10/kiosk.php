<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include 'Include/Site/Head/Head.php';?>
        
        <meta name="title" content="<?php include 'Include/Site/Head/Title.php';?> | Quiosque">
        <meta property='og:title' content='<?php include 'Include/Site/Head/Title.php';?> | Quiosque'/>
        <title><?php include 'Include/Site/Head/Title.php';?> | Quiosque</title>    
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
                    <h3>Quiosque</h3> 
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
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/01.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/02.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/03.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/04.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/06.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/07.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="market_option_item">
                                            <img style="width:100vw;" src="Images/Products/Kiosk/08.png" alt="" onclick="myFunction(this);">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container1" align="center">
                    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                    <img id="expandedImg" style="width:50%">
                    <div id="imgtext"></div>
                </div>
                <script>
                    function myFunction(imgs) {
                        var expandImg = document.getElementById("expandedImg");
                        var imgText = document.getElementById("imgtext");
                        expandImg.src = imgs.src;
                        imgText.innerHTML = imgs.alt;
                        expandImg.parentElement.style.display = "block";
                    }
                </script>
            </div>
        </section>
        <?php
            include 'Include/Site/Body/WhatsApp.php';
            include 'Include/Site/Body/Chat.php';
            include 'Include/Site/Body/Footer.php';
        ?>