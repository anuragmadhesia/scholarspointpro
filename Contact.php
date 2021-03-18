<?php session_start();
include('includes/dbconnection.php');
$alrt=0;
//Code for Registration
if(isset($_POST['signup']))
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
    $mobile=$_POST['txtmobile'];
    $msg=$_POST['txtmsg'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $msg=mysqli_query($con,"insert into tbl_contact(name,email,phone,msg,cdt) values('$name','$email','$mobile','$msg','$date')");
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
    <title>Contacts  US</title>
</head>
<body>
<?php include('includes/header.php');?>
    <div class="mainbody">
    <?php
    if($alrt==1){
        echo "<script>alert('Unable to Contact..');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Thanks for Contact...');</script>";
    }
    $alrt=0;
    ;?>
    <div class="login-form" style="font-family:'Bell MT';color:#fff;">
    <form action="" method="post" enctype="multipart/form-data">
        <h2 class=" text-center" style="color:greenyellow;">
            CONTACT US
        </h2>
        <div class="form-group">
            <input type="text" name="txtname" class="form-control" placeholder="Your Name" required="required" onkeypress="return checkChar(event)">
        </div>
        <div class="form-group">
            <input type="email" name="txtemail" class="form-control" placeholder="Your Email" required="required" id="IdMail" onkeyup="EmailValid()"><br /><center><span id="ShowEmailMsg"></span></center>
        </div>
        <div class="form-group">
            <input type="text" name="txtmobile" class="form-control" placeholder="Your Contact" required="required" onkeypress="return checkNum(event)">
        </div>
        <div class="form-group">
            <textarea name="txtmsg" class="form-control" placeholder="Write Your Message Here..." rows="3" required="required" onkeypress="return checkValid(event)"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="signup">SEND</button>
        </div>
    </form>
    </div>
    </div>

    <?php include('includes/footer.php');?>

</body>
</html>