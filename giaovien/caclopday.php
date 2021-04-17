<?php
    session_start();
    include '../connect.php';
    if(isset($_SESSION['lv'])){
        if($_SESSION['lv'] == 2){
        }
        else {
            header("Location: ../login.php");
            exit();
        }
    }
    else{
        header("Location: ../login.php"); 
    }

    $maso = $_SESSION['maso'];

    $sql = "SELECT * FROM thongtingiaovien WHERE maso='$maso'";
    $query = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($query); 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style.css">
    <title>Các lớp dạy </title>
    <style>
        .framedivsv{
            background-color: #4B088A;
        }
        .framedivsv:hover{
            background-color: #9A2EFE;
        }
    </style>
</head>
<body>
<br>
    <div class="container" style="display:flex">
        <a class="buttonback" href="./index.php"><i class="fas fa-arrow-circle-left"></i></a>&emsp;&emsp;&emsp;
        <span class="word">Quản lí các lớp dạy</span>
    </div>
    
    <br>
    <div class="container">
        <div class="row rowsindexsv">
            <div class="col-sm-6 col-lg-3">
                <form  action="./lopchunhiem.php">
                    <button class="framedivsv" type="submit">
                        <img  class="anhthongbbao1"  src="../image/lopchunhiem.svg">  
                        <p class="link">Quản lí Lớp chủ nhiệm</p>
                    </button>
                </form>
            </div>
            
        </div>
    </div>

</body>
</html>