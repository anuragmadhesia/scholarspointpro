<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
if ($_SESSION['type']=='admin') {
if(isset($_POST['edit']))
{
    $fid=intval($_GET['up']);
	$name=$_POST['txtname'];
	$rating=$_POST['ddlrating'];
    $feed=$_POST['txtfeedback'];
    $sql=mysqli_query($con,"update tbl_feedback set name='$name',rating='$rating',feedback='$feed' where fno='$fid'");
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
        echo "<script>alert('Feedback updated...');</script>";
    }
    $alrt=0;
    ;
include('includes/header.php');
$ret=mysqli_query($con,"select * from tbl_feedback where fno='".$_GET['up']."'");
	  while($row=mysqli_fetch_array($ret))
	  {?>
    <div class="mainbody">
    <div class="login-form" style="color:#fff;padding-top:11px;">
    <form action="" method="post" enctype="multipart/form-data">
        <h2 class=" text-center">
            Improve Feedback
        </h2>
        <input type="hidden" name="txtfno" value="<?php echo $row['fno'];?>">
        <div class="form-group">
            <input type="text" name="txtname" class="form-control" value="<?php echo $row['name'];?>" required="required" onkeypress="return checkChar(event)">
        </div>
        <div class="form-group">
            <input type="email" name="txtemail" class="form-control" value="<?php echo $row['email'];?>" readonly>
        </div>
        <div class="form-group">
            <select class="custom-select mr-sm-2" name="ddlrating" required="required">
                <option selected><?php echo $row['rating'];?></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="txtfeedback" class="form-control" rows="3" required="required" onkeypress="return checkValid(event)"><?php echo $row['feedback'];?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="edit">Update</button>
        </div>
    </form>
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