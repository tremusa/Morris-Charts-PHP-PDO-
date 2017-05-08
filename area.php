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
    <title>  </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/morris.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="row">
          <h3 class="page-header" ><span class = "glyphicon glyphicon-user"></span> Area chart With Data </h3>
          <ul class="nav nav-tabs">
            <li><a href="index.php">Json Linked Charts</a></li>
            <li><a href="barchart.php">DB linked Barchart</a></li>
            <li><a href="donut.php">DB Linked Donut</a></li>
            <li><a href="linechart.php">DB Linked LineChart</a></li>
            <li class="active"><a href="area.php">DB Linked Area</a></li>
          </ul>
          <div class="container">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <?php
              // visits by day
              $PDO = Database::connect();
              $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql ="SELECT  DATE_FORMAT(visitdate, '%Y-%m-%d') AS daydate, COUNT(pagefrom) AS pagefrom ,COUNT(ip) as ip,COUNT(pageno) AS totalpages FROM totalview /*WHERE visitdate >= (CURDATE() - INTERVAL 1 MONTH) */GROUP by pagefrom,ip,pageno  ORDER BY daydate ASC";
              $stmt = $PDO->prepare($sql);
              $stmt ->execute();
              $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
              $phpobj =json_encode($data);
              echo '<h4> Json Data </h4>';
              echo json_encode($data);
              Database::disconnect();
              ?>
              <hr>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title"></i> PHP PDO  Mysql Morris Line Graph - Visits by ip, pages,page-from per day within the last 30 days</h3>
                  </div>
                  <div class="panel-body">
                    <div id="morris-area-chart">
                    </div>
                  </div>
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
        <script src="js/raphael.min.js"></script>
        <script language="JavaScript" type="text/javascript">
        $(function() {
        var jsobj = <?php echo $phpobj; ?>;
        // Area Chart
        Morris.Area({
        element: 'morris-area-chart',
        data: jsobj,
        xkey: 'daydate',
        ykeys: ['pagefrom', 'ip', 'totalpages'],
        labels: ['No Pages From', 'No of IP', 'Total Pages Visited'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
        });
        });
        </script>