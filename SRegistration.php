<?php
define('SALT', 'd#f453dd');
session_start();
include('includes/dbconnection.php');
$alrt=0;
//Code for Registration
if(isset($_POST['signup']))
{
	$name=$_POST['txtname'];
	$dob=$_POST['txtdob'];
	$email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $cppassword=$_POST['txtcppassword'];
    $mobile=$_POST['txtmobile'];
    $classs=$_POST['ddlclass'];
    $board=$_POST['ddlboard'];
    $subject=$_POST['ddlsubj'];
    $address=$_POST['txtaddress'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $enc_password=md5(SALT.$_POST['txtpassword']);
    if($password==$cppassword){
        $sql=mysqli_query($con,"select * from tbl_login where email='$email'");
        $row=mysqli_num_rows($sql);
        if($row>0)
        {
            $alrt=1;
        } else{
            $msg=mysqli_query($con,"insert into tbl_login(email,password,type,ldt) values('$email','$enc_password','student','$date')");
            $msg1=mysqli_query($con,"insert into tbl_students(name,dob,email,password,mobile,class,board,subject,address,rdt) values('$name','$dob','$email','$enc_password','$mobile','$classs','$board','$subject','$address','$date')");
        if($msg)
        {
            $alrt=3;
        }
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
    <link rel="icon" href="images/spp.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/my.css">
    <link rel="stylesheet" href="css/alert.css">
    <script src="js/aman.js"></script>
    <script src="js/alert.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>window.addEventListener("hashchange", function () { scrollBy(0, -85) })</script>
    <title>Student Registration</title>
</head>
<body onload="BtnDisable()">
<?php include('includes/header.php');?>
    <div class="mainbody">
    <?php
    if($alrt==1){
        echo "<script>alert('User Already Exist With this Email...');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Student Registration Successful...');</script>";
    }
    elseif($alrt==4){
        echo "<script>alert('Password and Confirm Password Not Matched...');</script>";
    }
    $alrt=0;
    ;?>
    <style>
    @media (max-width: 600px) {
    .register-form{
      max-width: 340px;
      margin: 110px auto;
  }
}
    </style>
    <div class="register-form" style="color:yellowgreen">
    <form action="" method="post" enctype="multipart/form-data">
        <h2 class="text-center" style="color:greenyellow;">Students Register Here</h2>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                Your name
                <input type="text" name="txtname" class="form-control" placeholder="Your name" required="required" onkeypress="return checkChar(event)">
            </div>
            <div class="col-md-6 mb-3">
                Date of Birth
                <input type="date" name="txtdob" class="form-control" placeholder="Date of birth" required="required">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <span id="ShowEmailMsg">Enter Email</span>
                <input type="email" name="txtemail" class="form-control" placeholder="Enter Email" required="required" id="IdMail" onkeyup="EmailValid()">
            </div>
            <div class="col-md-6 mb-3">
                <span id="ShowMobileMsg">Mobile Number</span>
                <input type="text" name="txtmobile" maxlength="10" class="form-control" placeholder="Mobile Number" required="required" id="IdMobile" onkeypress="return checkNum(event)" onkeyup="mobValid()">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    Choose Class
                    <select class="custom-select mr-sm-2" name="ddlclass" required="required">
                        <option selected>Classes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="B.Tech">B.Tech</option>
                        <option value="Polytechnic">Polytechnic</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    Choose Board
                    <select class="custom-select mr-sm-2" name="ddlboard" required="required">
                        <option selected>Boards</option>
                        <option value="C.B.S.E.">C.B.S.E.</option>
                        <option value="I.C.S.C.">I.C.S.C.</option>
                        <option value="U.P. Board">U.P. Board</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                    Choose Subjects
                    <select class="custom-select mr-sm-2" name="ddlsubj" required="required">
                        <option selected>Subjects</option>
                        <option value="Physics">Physics</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Math's'">Math's</option>
                        <option value="Computer">Computer</option>
                        <option value="All">All</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-12 mb-3">
                Enter Complete Address
                <textarea name="txtaddress" class="form-control" placeholder="Your Complete Address..." rows="3" required="required" onkeypress="return checkValid(event)"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5 mb-3">
                <span id="ShowMsgPassword">Enter password</span><br />
                <input type="password" name="txtpassword" id="idPassword" maxlength="14" placeholder="Enter Password" class="form-control" onkeyup="PassValid()" required="required" />
            </div>
            <div class="col-md-5 mb-3">
                Confirm Password<br />
                <input type="password" name="txtcppassword" id="idCPassword" maxlength="14" class="form-control" placeholder="Confirm Password" required="required" onkeyup="CPassValid()">
            </div>
            <div class="col-md-2 mb-3">
                <button class="btn btn-default" type="button" onclick="BtnShow()" style="background-color: #c1e3e0;margin-top:23px;margin-left:20px;">
                    <i class="fa fa-eye" style="font-size: 20px;" id="idBtnOpen"></i>
                    <i class="fa fa-eye-slash" style="font-size: 20px;" id="idBtnClose"></i>
                </button>
            </div>
        </div>

        <!-- <div class="form-row">
            <div class="col-md-4 mb-3">
                Captcha Code
                <input type="text" name="txtcaptha" readonly value="@ViewBag.cph" id="rrr" class="form-control" style="color:orangered;">
            </div>
            <div class="col-md-2 mb-3" style="margin-top:23px;">
                <button class="btn btn-primary" type="button"><i class="fa fa-refresh" style="font-size:20px;color:#fff;"></i></button>
            </div>
            <div class="col-md-6 mb-3">
                Enter Captcha
                <input type="text" name="txtinputcaptha" maxlength="5" class="form-control" placeholder="Enter Captha" required="required" onkeypress="return checkValid(event)">
            </div>
        </div> -->
        <button class="btn btn-primary" type="submit" name="signup">Submit</button>
    </form>
</div>

<script type="text/jscript">
    $('.btn-primary').click(function () {
        var url = "/Home/capthad";
        $.get(url, null, function (data) {
            $("#rrr").val(data);
        });
    })
</script>
    </div>

    <?php include('includes/footer.php');?>

</body>
</html>