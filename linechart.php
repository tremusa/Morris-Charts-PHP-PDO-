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
          <h3 class="page-header" ><span class = "glyphicon glyphicon-user"></span> Line Chart With Data </h3>
          <ul class="nav nav-tabs">
            <li><a href="index.php">Json Linked Charts</a></li>
            <li><a href="barchart.php">DB linked Barchart</a></li>
            <li><a href="donut.php">DB Linked Donut</a></li>
            <li class="active"><a href="linechart.php">DB Linked LineChart</a></li>
            <li><a href="area.php">DB Linked Area</a></li>
          </ul>

          <div class="container">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <?php
              // visits by day
              $PDO = Database::connect();
              $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql ="SELECT DATE_FORMAT(visitdate, '%Y-%m-%d') as daydate,count(*) as visits from totalview /*WHERE visitdate >= (CURDATE() - INTERVAL 1 MONTH)*/ GROUP by daydate ORDER BY daydate ASC";
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
                    <h3 class="panel-title"></i> PHP PDO  Mysql Morris Line Graph - Visits per day  within the last 30 days  </h3>
                  </div>
                  <div class="panel-body">
                    <div id="morris-line-chart">
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
        // Line Chart
        Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'morris-line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: jsobj,
        // The name of the data record attribute that contains x-visits.
        xkey: 'daydate',
        // A list of names of data record attributes that contain y-visits.
        ykeys: ['visits'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
        labels: ['Visits'],
        // Disables line smoothing
        smooth: false,
        resize: true
        });
        });
        </script>