<?php
define('SALT', 'd#f453dd');
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
    if ($_SESSION['type']=='admin') {
if(isset($_POST['Submit']))
{
$olddec_password=md5(SALT.$_POST['oldpass']);
$newpass=$_POST['newpass'];
$cppass=$_POST['confirmpassword'];
$newdec_password=md5(SALT.$_POST['newpass']);
if($cppass==$newpass){
    $emaill=$_SESSION['login'];
    $sql=mysqli_query($con,"SELECT * FROM tbl_login where email='$emaill' and password='$olddec_password'");
    $num=mysqli_fetch_array($sql);
    if($num>0)
    {
    $ret=mysqli_query($con,"update tbl_login set password='$newdec_password' where email='$emaill'");
    $alrt=3;
    }
    else
    {
    $alrt=1;
    }
}
else{
    $alrt=4;
}
}
?>
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
    <title>Admin | ChangePassword</title>
</head>
<body onload="BtnDisable()">
<?php include('includes/header.php');?>
        <div class="mainbody">
        <?php
    if($alrt==1){
        echo "<script>alert('Old Password Not Match...');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Password Change Succesfully...');</script>";
    }
    elseif($alrt==4){
        echo "<script>alert('Password and Confirm Password Not Matched...');</script>";
    }
    $alrt=0;
    ;?>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center" style="color:darkblue;">Change Password</h2>
        <div class="form-group">
            <input type="password" class="form-control" maxlength="14" placeholder="Old password" name="oldpass" required="required" />
        </div>
        <div class="form-group">
            <input type="password" class="form-control" maxlength="14" placeholder="New Password" name="newpass" required="required" id="idPassword" onkeyup="PassValid()" />
            <center><span id="ShowMsgPassword"></span></center>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" maxlength="14" placeholder="Confirm Password" name="confirmpassword" required="required" />
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block" name="Submit">SAVE</button>
        </div>
        <div class="clearfix">
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>
    </form>
</div>
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