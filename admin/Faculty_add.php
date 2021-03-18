<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
if ($_SESSION['type']=='admin') {
//Code for Registration
if(isset($_POST['upload']))
{
	$name=$_POST['txtname'];
	$qlf=$_POST['txtqlf'];
    $sub=$_POST['txtsub'];
    $exp=$_POST['txtexp'];
    $contact=$_POST['txtcontact'];
    $filename = $_FILES["fupic"]["name"];
    $tempname = $_FILES["fupic"]["tmp_name"];
    $folder = "images/faculty/".$filename;
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $msg=mysqli_query($con,"insert into tbl_faculty(name,qualification,subject,experience,contact,ipic,date) values('$name','$qlf','$sub','$exp','$contact','$filename','$date')");
    move_uploaded_file($tempname, $folder);
if($msg)
{
	$alrt=3;
}
else{
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
    <title>Admin | Faculty Add</title>
</head>
<body onload="BtnDisable()">
<?php include('includes/header.php');?>
    <div class="mainbody">
    <?php
    if($alrt==1){
        echo "<script>alert('Unable to Add Faculty..');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Faculty Added...');</script>";
    }
    $alrt=0;
    ;?>
<div class="login-form" style="color: #fff;padding-top:10px;">
    <form action="" method="post" enctype="multipart/form-data">
        <h1 style="color:greenyellow;text-align:center;">ADD FACULTY</h1>
        <div class="form-group">
            Enter Faculty Name
            <input type="text" name="txtname" class="form-control" required="required" onkeypress="return checkChar(event)">
        </div>
        <div class="form-group">
            Enter Qualifications
            <input type="text" name="txtqlf" class="form-control" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Enter Subjects
            <input type="text" name="txtsub" class="form-control" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Enter Experience
            <input type="text" name="txtexp" class="form-control" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Enter Contact
            <input type="text" name="txtcontact" class="form-control" required="required" onkeypress="return checkEValid(event)">
        </div>
        <div class="form-group">
            Picture
            <input type="file" name="fupic" required="required"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="upload">ADD</button>
        </div>
    </form>
</div>
    </div>

    <?php include('includes/footer.php');?>

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