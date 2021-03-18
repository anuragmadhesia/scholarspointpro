<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
if ($_SESSION['type']=='admin') {
if(isset($_POST['edit']))
{
	$name=$_POST['txtname'];
	$qlf=$_POST['txtqlf'];
	$sub=$_POST['txtsub'];
	$exp=$_POST['txtexp'];
    $contact=$_POST['txtcontact'];
    $filename = $_FILES["fupicc"]["name"];
    $tempname = $_FILES["fupicc"]["tmp_name"];
    $folder = "images/faculty/".$filename;
    move_uploaded_file($tempname, $folder);
    $fid=intval($_GET['fid']);
$sql=mysqli_query($con,"update tbl_faculty set name='$name' ,qualification='$qlf' , subject='$sub',experience='$exp',contact='$contact',ipic='$filename' where fid='$fid'");
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
        echo "<script>alert('Faculty details updated...');</script>";
    }
    $alrt=0;
    ;
include('includes/header.php');
$ret=mysqli_query($con,"select * from tbl_faculty where fid='".$_GET['fid']."'");
	  while($row=mysqli_fetch_array($ret))
	  {?>
    <div class="mainbody">
    <div class="login-form" style="color: #fff; padding-top: 75px;">
    <form action="" method="post" enctype="multipart/form-data">
        <h1 style="color:greenyellow;text-align:center;">Faculty Details To Edit</h1>
        <div class="form-group">
            Edit Faculty Name
            <input type="text" name="txtname" class="form-control" value="<?php echo $row['name'];?>" required="required" onkeypress="return checkChar(event)">
            <input type="hidden" name="txtfid" class="form-control" value="<?php echo $row['fid'];?>">
        </div>
        <div class="form-group">
            Edit Qualification
            <input type="text" name="txtqlf" class="form-control" value="<?php echo $row['qualification'];?>" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Edit Subject
            <input type="text" name="txtsub" class="form-control" value="<?php echo $row['subject'];?>" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Edit Experience
            <input type="text" name="txtexp" class="form-control" value="<?php echo $row['experience'];?>" required="required" onkeypress="return checkValid(event)">
        </div>
        <div class="form-group">
            Edit Contact
            <input type="text" name="txtcontact" class="form-control" value="<?php echo $row['contact'];?>" required="required" onkeypress="return checkEValid(event)">
        </div>
        <div class="form-group">
            Enter Picture<br />
            <img src="images/faculty/<?php echo $row['ipic'];?>" style="height:95px;width:97px;" />&nbsp&nbsp&nbsp<span><?php echo $row['ipic'];?></span><br />
            <input type="file" name="fupicc" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="edit">UPDATE</button>
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