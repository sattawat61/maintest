<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=dbmember2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Wearing Mask</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    body {
    background-color: rgb(245,247,255);
    }
    </style>
</head>
<body>

    <!-- RGB (245,247,255) -->
    <div class="container" >
        <h4 class="mt-4">ตารางข้อมูล</h4>
        <hr>
        <table id="myTable" class="table table-dark table-hover">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Usertime</th>
                <th>Userstatus</th>
                <th>Statusmask</th>
                <th>Picture</th>
            </thead>
            <tbody>
        <?php
            $stmt  = $conn->query("SELECT * FROM tb_member");
            $stmt->execute(); # ประมวลผลข้อมูล
            $users = $stmt->fetchAll(); # ดึงข้อมูลทั้งหมด
            foreach($users as $user){
        ?>
            <tr>
                <td><?php echo $user['usr_id'] ?></td>
                <td><?php echo $user['usr_name'] ?></td>
                <td><?php echo $user['usr_date'] ?></td>
                <td><?php echo $user['usr_time'] ?></td>
                <td><?php echo $user['usr_status'] ?></td>
                <td><?php echo $user['usr_statusmask'] ?></td>
                <td><img src="<?php echo $user['usr_pic'] ?>" width="150px" height="100px"></td>
            </tr>
        <?php
            }
        ?>
            </tbody>
        </table>

        <a class="btn btn-danger" href="../../index.php" role="button">Back</a>
    </div>

    <!-- jquery จำเป็นต้องมี -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <script>
        // เรียกใช้ data table โดยกำหนด id
        $(document).ready( function () {
            $('#myTable').DataTable(); 
        } );
    </script>
</body>
</html>