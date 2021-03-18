<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
    if ($_SESSION['type']=='admin') {?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/spp.jpeg" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/adminsidbar.css">
    <link rel="stylesheet" href="css/alert.css">
    <link rel="stylesheet" href="css/aakash.css">
    <script src="js/akash.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/aman.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>window.addEventListener("hashchange", function () { scrollBy(0, -85) })</script>
    <title>ADMIN</title>
</head>
<body onload="BtnDisable()">
<?php include('includes/header.php');?>
        <div class="mainbody">
        <center style="margin-top:0px;color:greenyellow;" class="imhover">
    <div class="row no-gutters">
        <div class="col-lg-4">
            <a href="Faculty.php"><img src="images/adminindex/teacher.svg" height="70" width="70" /></a>
            <p>Faculty</p>
        </div>
        <div class="col-lg-4">
            <a href="Students.php" ><img src="images/adminindex/students.svg" height="70" width="70" /></a>
            <p>STUDENTS</p>
        </div>
        <div class="col-lg-4">
            <a href="Teachers.php"><img src="images/adminindex/teacher.svg" height="70" width="70" /></a>
            <p>TEACHERS</p>
        </div>
    </div>
    <div class="row no-gutters">
        <div class="col-lg-4">
            <a href="Gallery.php"><img src="images/adminindex/comment.svg" height="70" width="70" /></a>
            <p>GALLERY</p>
        </div>
        <div class="col-lg-4">
            <a href="Contacts.php"><img src="images/adminindex/contract.svg" height="70" width="70" /></a>
            <p>CONTACTS</p>
        </div>
        <div class="col-lg-4">
            <a href="Feedbacks.php"><img src="images/adminindex/comment.svg" height="70" width="70" /></a>
            <p>FEEDBACKS</p>
        </div>
    </div>
    <div class="row no-gutters" style="justify-content: center;">
        <div class="col-lg-4">
            <a href="ChangePassword.php"><img src="images/adminindex/key.svg" height="70" width="70" /></a>
            <p>CHANGE PASSWORD</p>
        </div>
        <div class="col-lg-4">
            <a href="logout.php"><img src="images/adminindex/lock.svg" height="70" width="70" /></a>
            <p>LOG OUT</p>
        </div>
    </div>
</center>
</div>
<?php include('includes/footer.php');?>
    </section>
</body>
</html>
<?php    }
    elseif($_SESSION['type']=='teacher'){
        header('location:../Teacher.php');
    }
    elseif($_SESSION['type']=='student'){
        header('location:../Student.php');
    }
    else{
    }
}
else
{
    header('location:../login.php');
}
?>