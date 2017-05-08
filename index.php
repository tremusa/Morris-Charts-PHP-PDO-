<?php
include_once  'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Chromelink Solutions">
        <meta name="Chromelink Solutions" content="">
        <title> PDO-PHP Linking MySQL Database  </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/morris.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <h3 class="page-header" ><span class = "glyphicon glyphicon-user"></span> Morris Charts </h3>
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="index.php">Json Linked Charts</a></li>
                        <li><a href="barchart.php">DB linked Barchart</a></li>
                        <li><a href="donut.php">DB Linked Donut</a></li>
                        <li><a href="linechart.php">DB Linked LineChart</a></li>
                        <li ><a href="area.php">DB Linked Area</a></li>
                    </ul>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Area Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-area-chart">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Donut Chart</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-donut-chart">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Line Graph Example with Tooltips</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-line-chart">
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="fa fa-long-arrow-right"></i> Bar Graph Example</h3>
                                </div>
                                <div class="panel-body">
                                    <div id="morris-bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </body>
                <!-- jQuery -->
                <script src="js/jquery.js"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src="js/bootstrap.min.js"></script>
                <script src="js/morris.min.js"></script>
                <script src="js/morris-data.js"></script>
                <script src="js/raphael.min.js"></script>
                <!-- CUSTOM SCRIPTS -->
                <!-- <script src="assets/js/custom.js"></script>-->