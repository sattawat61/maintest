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
  <link rel="stylesheet" href="../../vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
</head>

<body>
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
                <li class="nav-item"> <a class="nav-link" href="../charts/chartjs.php">DataChart</a></li>
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
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">save</h4>
                  <p class="card-description">
                    save
                  </p>
                  <form action="basic_elements.php" class="forms-sample" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Firstname and Lastname</label>
                      <input type="text" class="form-control" name="Name1" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label>File upload</label>
                      <input type="file" name="file" class="file-upload-default">
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div>
                    <button type="submit" value="upload" name="btsave" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                  <?php
                  if (isset($_POST['btsave'])) {
                  $first_name =  $_POST['Name1'];
                  $Dir = "../../../data/";
                  // echo '<pre>';
                  // print_r($_FILES);
                  // echo '<pre>';
                  $fileImage = $Dir . basename($_FILES["file"]["name"]);
                  // echo $fileImage;
                  if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)) {
                    $result = "INSERT INTO tb_member2 (usr_name,usr_pic) VALUES ('$first_name','$fileImage') ";
                    $query = mysqli_query($conn, $result);
                    mysqli_close($conn);
                    // echo "fileคือ = " . basename($_FILES["file"]["name"]);
                  }
                }
                  // $picture = $dir . basename($_FILES["file"]["name"]);
                  // echo '<pre>';
                  // print_r($_FILES);
                  // echo '<pre>';
                  // echo $picture;
                  // if (isset($_POST['submit'])) {
                  //     if (!empty($_FILES["file"]["name"])){
                  //         $filename = basename($_FILES["file"]["name"]);
                  //         $targetDirPath =  $targetDir.$filename;
                  //         $filetype = pathinfo($targetDirPath,PATHINFO_EXTENSION);

                  //         $allowTypes = array('jpg','png');
                  //         if(in_array($filetype,$filetype)){
                  //           if(move_uploaded_file($_FILES['file']['tmp_name'],$targetDirPath))
                  //           $result = "INSERT INTO tb_member2 (usr_name,usr_pic) VALUES ('$first_name','$picture') ";
                  //           $query = mysqli_query($conn, $result);
                  //           mysqli_close($conn);
                  //         }
                  //     }
                  // }
                  // $result = "INSERT INTO tb_member2 (usr_name,usr_pic) VALUES ('$first_name','$picture') ";
                  // $query = mysqli_query($conn, $result);
                  // mysqli_close($conn);
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>