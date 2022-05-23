<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>AirAlliance航空公司</title>
    <meta name="keywords" content="homepage, Web" />
    <meta name="description" content="Web site homepage" />
    <link href="css/default.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="wrapper">
        <?php include 'include/header.php'; ?>
        <!-- end div#header -->
        <div id="page">
            <div id="content">
                <!-- include front -->
                <?php
                $do = $_GET['do'] ?? "main";
                $file = "front/" . $do . ".php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    include "front/main.php";
                }
                ?>
            </div>
            <!-- end div#content -->
            <div id="sidebar">
                <ul>
                    <?php include 'include/nav.php'; ?>
                    <!-- end navigation -->
                    <?php include 'include/updates.php'; ?>
                    <!-- end updates -->
                </ul>
            </div>
            <!-- end div#sidebar -->
            <div style="clear: both; height: 1px"></div>
        </div>
        <?php include 'include/footer.php'; ?>
    </div>
    <!-- end div#wrapper -->
</body>

</html>