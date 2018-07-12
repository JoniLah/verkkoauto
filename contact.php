<?php
    include("includes/head.html");
    include("includes/banner.php");
?>

<div class="main-content">
    <div class="container-box">
        <div class="center flex-container">
            <div id="map"></div>
            <div class="flex-item-column animated slideInRight">
                <h1>Verkkoauto Oy</h1>
                <p>
                    Sahaajankatu 29<br/>
                    00880 Helsinki
                </p>
                <h1>Aukioloajat</h1>
                <p>
                    Ma - Pe 9-18<br/>
                    La 10-15
                </p>
                <h1>Myyjät</h1>
                <p>
                    <strong>Kari Pitkänen</strong><br/>
                    0400 - 555370<br/>
                    <a href="mailto:verkkoauto@gmail.com" target="_top">verkkoauto@gmail.com</a></br>
                    <br/>
                </p>
            </div>
            </div>
        </div>
    </div>
</div>

<script src="js/map.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9I9u_nJiTHtJ1KUc4qWq4olDyTcudUTc&callback=initMap"></script>

<?php require("includes/footer.html"); ?>