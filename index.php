<?php require("config/config.php") ?>
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Editorial by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                    <?php 
                        require("components/header.php");
                    ?>

                <!-- Banner -->
                    <?php
                        require("components/banner.php");
                    ?>

                <!-- Section DESTAQUES-->
                <?php
                    require("components/destaques.php");
                ?>

                <!-- Section NOTICIAS -->
                <?php 
                    require("components/posts.php");
                ?>
            </div>
        </div>

        <!-- Sidebar -->
        <?php 
            require("components/sidebar.php");
        ?>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>