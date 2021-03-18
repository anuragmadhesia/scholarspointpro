<?php
define('SALT', 'd#f453dd');
session_start();
if(isset($_SESSION['type']))
{
    if($_SESSION['type']=='student'){
        header('location:Student.php');
    }
    elseif($_SESSION['type']=='teacher'){
        header('location:Teacher.php');
    }
    elseif($_SESSION['type']=='admin'){
        header('location:admin/');
    }
}
else
{
    $alrt=0;
    include('includes/dbconnection.php');
    // Code for login
    if(isset($_POST['login']))
    {
        $dec_password=md5(SALT.$_POST['txtpassword']);
        $useremail=$_POST['txtuserid'];
        $ret= mysqli_query($con,"SELECT * FROM tbl_login WHERE email='$useremail' and password='$dec_password'");
        $num=mysqli_fetch_array($ret);
        if($num>0)
        {
            $_SESSION['login']=$_POST['txtuserid'];
            $_SESSION['type']=$num['type'];
            if($_SESSION['type']=='student')
            {
                $forname= mysqli_query($con,"SELECT * FROM tbl_students WHERE email='$useremail'");
                $numm=mysqli_fetch_array($forname);
                $_SESSION['name']=$numm['name'];
                $extra="Student.php";
            }
            elseif($_SESSION['type']=='teacher')
            {
                $forname= mysqli_query($con,"SELECT * FROM tbl_teachers WHERE email='$useremail'");
                $numm=mysqli_fetch_array($forname);
                $_SESSION['name']=$numm['name'];
                $extra="Teacher.php";
            }
            elseif($_SESSION['type']=='admin')
            {
                $_SESSION['name']="Scholar'sPointPro";
                $extra="admin/";
            }
            $host=$_SERVER['HTTP_HOST'];
            $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
            header("location:http://$host$uri/$extra");
            exit();
        }
        else
        {
            $alrt=1;
        }
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/spp.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/alert.css">
    <script src="js/alert.js"></script>
    <script src="js/aman.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>window.addEventListener("hashchange", function () { scrollBy(0, -85) })</script>
    <title>Login</title>
</head>
<body onload="BtnDisable()">
<?php include('includes/header.php');?>
    <div class="mainbody">
    <?php
    if($alrt==1){
        echo "<script>alert('Invalid userid or password');</script>";
    }
    $alrt=0;
    ;?>
    <div class="login-form" style="color:#fff">
    <form action="" method="post" enctype="multipart/form-data">
        <p class="text-center" style="color:greenyellow;font-size:40px;font-weight:600;">Log in</p>
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Email" required="required" name="txtuserid">
        </div>
        <div class="input-group">
            <input type="password" name="txtpassword" id="idPassword" placeholder="Password" class="form-control" />
            <div class="input-group-btn">
                <button class="btn btn-default" type="button" id="passswd" onclick="BtnShow()" style="background-color: #c1e3e0;">
                    <i class="fa fa-eye" style="font-size: 20px;" id="idBtnOpen"></i>
                    <i class="fa fa-eye-slash" style="font-size: 20px;" id="idBtnClose"></i>
                </button>
            </div>
        </div>
        <br />
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="login">Log in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
        <p class="text-center"><a href="SRegistration.php">Create an User Account</a></p>
    </form>
</div>

    </div>

    <?php include('includes/footer.php');?>
</body>
</html>
<?php
}
?>