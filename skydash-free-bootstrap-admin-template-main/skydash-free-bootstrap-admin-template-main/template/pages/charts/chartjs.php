<!DOCTYPE html>
<?php include '../../connect.php' ?>
<html lang="en">

<head>
  
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Report Wearing Mask</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
</head>


<body>
  <?php
  // $sql = "SELECT usr_id,usr_name,usr_date,usr_time,usr_statusmask,usr_pic FROM tb_member";
  // $result = mysqli_query($conn, $sql);
  // $result = "SELECT usr_id,usr_name,usr_date,usr_time,usr_statusmask,usr_pic FROM tb_member";
  // $query = mysqli_query($conn, $result);
  // $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);


  $D_Post = date('Y-m-d');
  if (!empty($_GET)) {
    $D_Post =  $_GET['value'];
  }



  // $result = $mysqli->query($sql);
  ?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper" style="padding-top:0">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="././chartjs.php">DataChart</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../tables/demotable.php">Basic table</a></li>
              </ul>
              <li class="nav-item">
            <a class="nav-link" href="../forms/form.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Register</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Date :</h4>
                  <!-- <input type="datetime-local" id="Test_DatetimeLocal" name='dtstart' required></h4>
                <input type="datetime-local" id="Test_DatetimeLocal" name='dtend' required></h4> -->
                  <form action="chartjs.php" method="get" id="form1">
                    <input type="date" class="Test_DatetimeLocal" placeholder="Start" name="value" value="<?php echo $D_Post ?>">
                    <!-- <button type="button" class="submit" name="search" >Info</button> -->
                    <button type="submit" form="form1" class="btn btn-success">Submit</button>
                  </form>
                  <?php
                  $result8 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '08:00:00' AND '10:00:00'AND usr_status = 'in'";
                  $query8 = mysqli_query($conn, $result8);
                  $rows8 = mysqli_fetch_all($query8, MYSQLI_ASSOC);
                  $total8_10 = [];
                  foreach ($rows8 as $value8) {
                    array_push($total8_10, $value8['usr_id']);
                  }
                  $nub8_10 = count($total8_10);


                  $result9 = "SELECT * FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '10:00:00' AND '12:00:00'AND usr_status = 'in'";
                  $query9 = mysqli_query($conn, $result9);
                  $rows9 = mysqli_fetch_all($query9, MYSQLI_ASSOC);
                  $total10_12 = [];
                  foreach ($rows9 as $value9) {
                    array_push($total10_12, $value9['usr_id']);
                  }
                  $nub10_12 = count($total10_12);
                  // echo "<pre>";
                  // print_R($result9);
                  // echo "</pre>";


                  $result10 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '12:00:00' AND '14:00:00'AND usr_status = 'in'";
                  $query10 = mysqli_query($conn, $result10);
                  $rows10 = mysqli_fetch_all($query10, MYSQLI_ASSOC);
                  $total12_14 = [];
                  foreach ($rows10 as $value10) {
                    array_push($total12_14, $value10['usr_id']);
                  }
                  $nub12_14 = count($total12_14);

                  $result11 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '14:00:00' AND '16:00:00' AND usr_status = 'in'";
                  $query11 = mysqli_query($conn, $result11);
                  $rows11 = mysqli_fetch_all($query11, MYSQLI_ASSOC);
                  $total14_16 = [];
                  foreach ($rows11 as $value11) {
                    array_push($total14_16, $value11['usr_id']);
                  }
                  $nub14_16 = count($total14_16);

                  $result12 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '16:00:00' AND '18:00:00'AND usr_status = 'in'";
                  $query12 = mysqli_query($conn, $result12);
                  $rows12 = mysqli_fetch_all($query12, MYSQLI_ASSOC);
                  $total16_18 = [];
                  foreach ($rows12 as $value12) {
                    array_push($total16_18, $value12['usr_id']);
                  }
                  $nub16_18 = count($total16_18);

                  $result13 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '18:00:00' AND '20:00:00'AND usr_status = 'in'";
                  $query13 = mysqli_query($conn, $result13);
                  $rows13 = mysqli_fetch_all($query13, MYSQLI_ASSOC);
                  $total18_20 = [];
                  foreach ($rows13 as $value13) {
                    array_push($total18_20, $value13['usr_id']);
                  }
                  $nub18_20 = count($total18_20);

                  $result14 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE usr_date = '$D_Post' AND usr_time BETWEEN '20:00:00' AND '22:00:00'AND usr_status = 'in'";
                  $query14 = mysqli_query($conn, $result14);
                  $rows14 = mysqli_fetch_all($query14, MYSQLI_ASSOC);
                  $total20_22 = [];
                  foreach ($rows14 as $value14) {
                    array_push($total20_22, $value14['usr_id']);
                  }
                  $nub20_22 = count($total20_22);

                  // echo "<pre>";
                  // // print_R($totalnomask);
                  // echo($nubmask);
                  // echo "</pre>";
                  ?>
                  <h4 class="card-title">bar</h4>
                  <canvas id="myChart2"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Date :</h4>
                  <!-- <input type="datetime-local" id="Test_DatetimeLocal" name='dtstart' required></h4>
                <input type="datetime-local" id="Test_DatetimeLocal" name='dtend' required></h4> -->
                  <form action="chartjs.php" method="get" id="form1">
                    <input type="date" class="Test_DatetimeLocal" placeholder="Start" name="value" value="<?php echo $D_Post ?>">
                    <!-- <button type="button" class="submit" name="search" >Info</button> -->
                    <button type="submit" form="form1" class="btn btn-success">Submit</button>
                  </form>
                  <h4 class="card-title">Doughnut chart</h4>
                  <canvas id="myChart"></canvas>
                  <?php
                  $totalnomask = [];
                  $result1 = "SELECT usr_statusmask FROM tb_member WHERE usr_statusmask = 'nomask' AND usr_status = 'in' ";
                  $query1 = mysqli_query($conn, $result1);
                  $rows1 = mysqli_fetch_all($query1, MYSQLI_ASSOC);
                  foreach ($rows1 as $value1) {
                    array_push($totalnomask, $value1['usr_statusmask']);
                  }
                  $totalmask = [];
                  $result2 = "SELECT usr_statusmask FROM tb_member WHERE usr_statusmask = 'mask' AND usr_status = 'in' ";
                  $query2 = mysqli_query($conn, $result2);
                  $rows2 = mysqli_fetch_all($query2, MYSQLI_ASSOC);
                  $totalmask = [];
                  foreach ($rows2 as $value2) {
                    array_push($totalmask, $value2['usr_statusmask']);
                  }
                  $nubnomask = count($totalnomask);
                  $nubmask = count($totalmask);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/chart.js"></script>
  <script>
    const total8_10 = <?php echo json_encode($nub8_10); ?>;
    const total10_12 = <?php echo json_encode($nub10_12); ?>;
    const total12_14 = <?php echo json_encode($nub12_14); ?>;
    const total14_16 = <?php echo json_encode($nub14_16); ?>;
    const total16_18 = <?php echo json_encode($nub16_18); ?>;
    const total18_20 = <?php echo json_encode($nub18_20); ?>;
    const total20_22 = <?php echo json_encode($nub20_22); ?>;

    //data
    const labels2 = [
      '08.00-10.00',
      '10.00-12.00',
      '12.00-14.00',
      '14.00-16.00',
      '16.00-18.00',
      '18.00-20.00',
      '20.00-22.00'
    ];
    const data2 = {
      labels: labels2,
      datasets: [{
        label: 'User Entrie',
        data: [total8_10, total10_12, total12_14, total14_16, total16_18, total18_20, total20_22],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ],
        borderWidth: 1
      }]
    };
    //con
    const config2 = {
      type: 'bar',
      data: data2,
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      },
    };
    //re
    const myChart2 = new Chart(
      document.getElementById('myChart2'),
      config2
    );
  </script>
  <script>
    const totalnomask1 = <?php echo json_encode($nubnomask); ?>;
    const totalmask1 = <?php echo json_encode($nubmask); ?>;
    console.log(totalnomask1);
    const labels = [
      'mask',
      'nomask'
    ];

    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: ['rgb(25, 205, 86 )', 'rgb(255, 25, 25 )'],
        borderColor: 'rgb(29, 25, 255 )',
        data: [totalmask1, totalnomask1]
      }]
    };

    const config = {
      type: 'doughnut',
      data: data,
      options: {}
    };
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
  <!-- End custom js for this page-->
</body>

</html>