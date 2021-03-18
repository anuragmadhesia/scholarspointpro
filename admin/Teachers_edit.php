<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
if ($_SESSION['type']=='admin') {
if(isset($_POST['edit']))
{
    $tid=intval($_GET['up']);
	$name=$_POST['txtname'];
	$dob=$_POST['txtdob'];
	$mob=$_POST['txtmobile'];
	$qlf=$_POST['txtqlf'];
	$exp=$_POST['txtexp'];
    $city=$_POST['txtcity'];
    $state=$_POST['txtstate'];
    $pin=$_POST['txtpincode'];
    $adrs=$_POST['txtaddress'];
    $sql=mysqli_query($con,"update tbl_teachers set name='$name' ,dob='$dob',mobile='$mob',qualification='$qlf',experience='$exp',city='$city',state='$state',pincode='$pin',address='$adrs' where tno='$tid'");
if($sql)
{
$alrt=3;
}
else
{
$alrt=1;
}}?>
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
    <link rel="stylesheet" href="css/alert.css">
    <link rel="stylesheet" href="css/adminsidbar.css">
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
<?php
    if($alrt==1){
        echo "<script>alert('Unable to Update data..');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Teachers details updated...');</script>";
    }
    $alrt=0;
    ;
include('includes/header.php');
$ret=mysqli_query($con,"select * from tbl_teachers where tno='".$_GET['up']."'");
	  while($row=mysqli_fetch_array($ret))
	  {?>
    <div class="mainbody">
    <div class="container" style="padding-top : 10px;margin-bottom:30px;font-family: 'Bell MT'; font-size: 20px;color:#fff;">
    <span style="text-align:center;color:greenyellow;font-size:40px;"><?php echo $row['name'];?> Information</span>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-6 mb-3">
                Name<input type="text" class="form-control" value="<?php echo $row['name'];?>" name="txtname" onkeypress="return checkChar(event)" />
            </div>
            <div class="col-md-6 mb-3">
                Date of birth<input type="date" class="form-control" value="<?php echo $row['dob'];?>" name="txtdob" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                Email<input type="email" class="form-control" value="<?php echo $row['email'];?>" name="txtemail" readonly />
            </div>
            <div class="col-md-6 mb-3">
                Mobile<input type="text" class="form-control" value="<?php echo $row['mobile'];?>" name="txtmobile" onkeypress="return checkNum(event)" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                Qualification<input type="text" class="form-control" value="<?php echo $row['qualification'];?>" name="txtqlf" onkeypress="return checkValid(event)" />
            </div>
            <div class="col-md-6 mb-3">
                Experience<input type="text" class="form-control" value="<?php echo $row['experience'];?>" name="txtexp" onkeypress="return checkValid(event)" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-5 mb-3">
                City<input type="text" class="form-control" value="<?php echo $row['city'];?>" name="txtcity" onkeypress="return checkValid(event)" />
            </div>
            <div class="col-md-4 mb-3">
                State<input type="text" class="form-control" value="<?php echo $row['state'];?>" name="txtstate" onkeypress="return checkValid(event)" />
            </div>
            <div class="col-md-3 mb-3">
                Pincode<input type="text" class="form-control" value="<?php echo $row['pincode'];?>" name="txtpincode" onkeypress="return checkNum(event)" />
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                Address<input type="text" class="form-control" value="<?php echo $row['address'];?>" name="txtaddress" onkeypress="return checkValid(event)" />
            </div>
        </div>
        <a href="Students.php"><input type="button" class="btn btn-info" value="<< Back" /></a>
        <input type="submit" class="btn btn-success" name="edit" value="Update" />
    </form>
</div>
    </div>
    </div>
      <?php }?>

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