<!doctype html>
<?php include 'connect.php' ?>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Report Wearing Mask</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
</head>
<body>
<?php 
    $result0 = "SELECT * FROM tb_member";
    $query0 = mysqli_query($conn, $result0);
    $rows0 = mysqli_fetch_all($query0, MYSQLI_ASSOC);
    $total = [];
    foreach ($rows0 as $value) {
    array_push($total, $value['usr_id']);
}  
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
    $result3 = "SELECT * FROM tb_member WHERE usr_status = 'in' ";
    $query3 = mysqli_query($conn, $result3);
    $rows3 = mysqli_fetch_all($query3, MYSQLI_ASSOC);
    $totalin = [];
    foreach ($rows3 as $value3) {
    array_push($totalin, $value3['usr_id']);
}  
    $result4 = "SELECT * FROM tb_member WHERE usr_status = 'out' ";
    $query4 = mysqli_query($conn, $result4);
    $rows4 = mysqli_fetch_all($query4, MYSQLI_ASSOC);
    $totalout = [];
    foreach ($rows4 as $value4) {
    array_push($totalout, $value4['usr_id']);
}
    $result5 = "SELECT * FROM tb_member";
    $query5 = mysqli_query($conn, $result5);
    $rows5 = mysqli_fetch_all($query5, MYSQLI_ASSOC);
    $total = [];
    foreach ($rows5 as $value5) {
    array_push($total, $value5['usr_id']);
}
    $result6 = "SELECT * FROM tb_member WHERE usr_name = 'unknow' ";
    $query6 = mysqli_query($conn, $result6);
    $rows6 = mysqli_fetch_all($query6, MYSQLI_ASSOC);
    $totalunknow = [];
    foreach ($rows5 as $value5) {
    array_push($totalunknow, $value5['usr_id']);
}
    $result7 = "SELECT * FROM tb_member WHERE usr_name != 'unknow' ";
    $query7 = mysqli_query($conn, $result7);
    $rows7 = mysqli_fetch_all($query7, MYSQLI_ASSOC);
    $totalknow = [];
    foreach ($rows7 as $value7) {
    array_push($totalknow, $value7['usr_id']);
}
//SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '12:00:00' AND '18:00:00';

    $countnomask1 = count($totalnomask)/count($totalin);
    $countnomask2 = $countnomask1*100;
    $pertotalnomask = number_format($countnomask2,0);

    $countmask1 = count($totalmask)/count($totalin);
    $countmask2 = $countmask1*100;
    $pertotalmask = number_format($countmask2,0);

    $counttotal = count($total)/count($total);
    $counttotal = $counttotal*100;
    $pertotal = number_format($counttotal,0);

    $counttotalin = count($totalin)/count($total);
    $counttotalin = $counttotalin*100;
    $pertotalin = number_format($counttotalin,0);

    $counttotalout = count($totalout)/count($total);
    $counttotalout = $counttotalout*100;
    $pertotalout = number_format($counttotalout,0);

    $nubnomask = count($totalnomask);
    $nubmask = count($totalmask);

    $result8 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '08:00:00' AND '10:00:00'AND usr_status = 'in'";
    $query8 = mysqli_query($conn, $result8);
    $rows8 = mysqli_fetch_all($query8, MYSQLI_ASSOC);
    $total8_10 = [];
    foreach ($rows8 as $value8) {
    array_push($total8_10, $value8['usr_id']);
}
    $nub8_10 = count($total8_10);

    $result9 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '10:00:00' AND '12:00:00'AND usr_status = 'in'";
    $query9 = mysqli_query($conn, $result9);
    $rows9 = mysqli_fetch_all($query9, MYSQLI_ASSOC);
    $total10_12 = [];
    foreach ($rows9 as $value9) {
    array_push($total10_12, $value9['usr_id']);
}
    $nub10_12 = count($total10_12);

    $result10 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '12:00:00' AND '14:00:00'AND usr_status = 'in'";
    $query10 = mysqli_query($conn, $result10);
    $rows10 = mysqli_fetch_all($query10, MYSQLI_ASSOC);
    $total12_14 = [];
    foreach ($rows10 as $value10) {
    array_push($total12_14, $value10['usr_id']);
}
    $nub12_14 = count($total12_14);

    $result11 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '14:00:00' AND '16:00:00' AND usr_status = 'in'";
    $query11 = mysqli_query($conn, $result11);
    $rows11 = mysqli_fetch_all($query11, MYSQLI_ASSOC);
    $total14_16 = [];
    foreach ($rows11 as $value11) {
    array_push($total14_16, $value11['usr_id']);
}
    $nub14_16 = count($total14_16);

    $result12 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '16:00:00' AND '18:00:00'AND usr_status = 'in'";
    $query12 = mysqli_query($conn, $result12);
    $rows12 = mysqli_fetch_all($query12, MYSQLI_ASSOC);
    $total16_18 = [];
    foreach ($rows12 as $value12) {
    array_push($total16_18, $value12['usr_id']);
}
    $nub16_18 = count($total16_18);

    $result13 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '18:00:00' AND '20:00:00'AND usr_status = 'in'";
    $query13 = mysqli_query($conn, $result13);
    $rows13 = mysqli_fetch_all($query13, MYSQLI_ASSOC);
    $total18_20 = [];
    foreach ($rows13 as $value13) {
    array_push($total18_20, $value13['usr_id']);
}
    $nub18_20 = count($total18_20);

    $result14 = "SELECT *,DATE_FORMAT(usr_date, '%Y-%m-%d')FROM tb_member WHERE DATE(usr_date) = CURDATE() AND usr_time BETWEEN '20:00:00' AND '22:00:00'AND usr_status = 'in'";
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
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper" style="padding-top:0" >
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
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
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.php">DataChart</a></li>
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
                <li class="nav-item"> <a class="nav-link" href="./pages/tables/demotable.php">Basic table</a></li>
              </ul>
              <li class="nav-item">
            <a class="nav-link" href="pages/forms/form.php">
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
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome</h3>
                  <h6 class="font-weight-normal mb-0">Access statistics</h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card tale-bg" >
                <div class="card-people" style="padding:0">
                  <img src="images/dashboard/bg1.jpeg" alt="people">
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Total Entrie</p>
                      <p class="fs-30 mb-2"><?php print count($totalin) ?></p>
                      <p><?php print $pertotalin ?>%</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Total Exit</p>
                      <p class="fs-30 mb-2"><?php print count($totalout) ?></p>
                      <p><?php print $pertotalout ?>%</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Total people don't wearing masks</p>
                      <p class="fs-30 mb-2"><?php print count($totalnomask) ?></p>
                      <p><?php print $pertotalnomask ?>%</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Total people wearing masks</p>
                      <p class="fs-30 mb-2"><?php print count($totalmask) ?></p>
                      <p><?php print $pertotalmask ?>%</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body" style="width:70%; margin: 0rem auto">
                  <h4 class="card-title">Pie chart(Today)</h4>
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Multi Axis Line Chart(Today)</h4>
                  <canvas id="myChart2"></canvas>
                </div>
              </div>
            </div>
          </div>    
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  
    </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      backgroundColor:['rgb(25, 205, 86 )','rgb(255, 25, 25 )'],
      borderColor: 'rgb(29, 25, 255 )',
      data: [totalmask1,totalnomask1]
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



  <!-- End custom js for this page-->
</body>

</html>
