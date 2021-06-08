<?php
 //This file is the base for all pages in the site. When creating a new page, we just open this one, then save a copy as the new page.
include("dbconnect.php");
?>
<html>

<head>
    <title>CORRONA VACCINE REGISTRATION</title>

    <link href="css/styles.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" media="screen" href="css/slideshow.css">
    <script src="js/slideshow.js"></script>


</head>

<body>



    <div class="container">
        <?php
        include("header.php");
        // check to see if user is visiting a page other than the home page
        if (!isset($_GET['page'])) {
          ?>
        <div id="slideshow">
    

</html>        <!-- <div id="overlay"> -->
            <div id="prev"></div>
            <div id="next"></div>
            <!-- </div> -->
        </div>

        <?php 
      }
00
      ?>
        <div class="maincontent">
            <!-- main content goes here-->
            <?php 
            if (!isset($_GET['page'])) {
            
            } else {
              $page = $_GET['page'];
              include("$page.php");
            }

            ?>
        </div>
        <?php
        include("seccontent.php");
        ?>

        <div class="footer"></div>
    </div><!-- Container ends here-->

    <footer  class="footer">
        <div id="social">
            <a href="https://www.facebook.com/WHO/" title="facebook" target="_blank">
                <img class="facebook" src="img/fb1.png"/> 

            <a href="https://twitter.com/who?lang=en" title="twiter" target="_blank">
                <img src="img/twiter1.png" alt="tw" title="tw"></a>


            <a href="http://linkedin.com" title="linkedin" target="_blank">
                <img src="img/lin2.png" alt="ln" title="ln"></a>
                <a href="https://www.instagram.com/who/?hl=en" title="instagram" target="_blank">
                <img src="img/insta2.jpg" alt="insta" title="insta"></a>
        </div>

        <div id="rights">
          <img src="img/WORLD2.png">World Health Organization 
        </div>
    </footer>
</body> 