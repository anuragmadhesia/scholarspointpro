<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['type'])){
if ($_SESSION['type']=='teacher') {
    ?>
    <!doctype html>
    <html lang="en">
    <head>
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
        <title>Teacher Profile</title>
    </head>
    <body>
    <?php include('includes/header.php');?>
        <div class="mainbody">
        <?php
        if(isset($_POST['Class']))
        {
            $name=$_POST['Name'];
            $dob=$_POST['Dob'];
            $email=$_POST['Email'];
            $mobile=$_POST['Mobile'];
            $qlf=$_POST['Qlf'];
            $exp=$_POST['Exp'];
            $city=$_POST['City'];
            $state=$_POST['State'];
            $pincode=$_POST['Pincode'];
            $addrs=$_POST['Address'];
            $msg=mysqli_query($con,"update tbl_teachers set name='".$name."',dob='".$dob."',mobile='".$mobile."',qualification='".$qlf."',experience='".$exp."',city='".$city."',state='".$state."',pincode='".$pincode."',address='".$addrs."' where email='".$email."'");
        }
        $maill=$_SESSION['login'];
        $ret=mysqli_query($con,"select * from tbl_teachers where email='$maill'");
		while($row=mysqli_fetch_array($ret))
		{?>
    <div class="container" style="font-family: 'Bell MT';color:greenyellow; font-size: 20px;">
        <center>
            <h1 style="color:blue;padding-top:130px;">Your Teacher Profile</h1>
        </center>
        <form>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    Your name
                    <input type="text" class="form-control" value="<?php echo $row['name'];?>" id="txtname" onkeypress="return checkChar(event)" />
                </div>
                <div class="col-md-6 mb-3">
                    Date of birth
                    <input type="date" class="form-control" value="<?php echo $row['dob'];?>" id="txtdob" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    Email
                    <input type="email" class="form-control" value="<?php echo $row['email'];?>" id="txtemail" />
                </div>
                <div class="col-md-6 mb-3">
                    Mobile
                    <input type="text" maxlength="10" class="form-control" value="<?php echo $row['mobile'];?>" id="txtmobile" onkeypress="return checkNum(event)" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    Qualification
                    <input type="text" class="form-control" value="<?php echo $row['qualification'];?>" id="txtqlf" onkeypress="return checkValid(event)"/>
                </div>
                <div class="col-md-6 mb-3">
                    Experience
                    <input type="text" class="form-control" value="<?php echo $row['experience'];?>" id="txtexp" onkeypress="return checkValid(event)" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-5 mb-3">
                    CIty
                    <input type="text" class="form-control" value="<?php echo $row['city'];?>" id="txtclass" onkeypress="return checkValid(event)" />
                </div>
                <div class="col-md-4 mb-3">
                    State
                    <input type="text" class="form-control" value="<?php echo $row['state'];?>" id="txtboard" onkeypress="return checkValid(event)" />
                </div>
                <div class="col-md-3 mb-3">
                    Pincode
                    <input type="text" class="form-control" value="<?php echo $row['pincode'];?>" id="txtsubject" onkeypress="return checkValid(event)" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    Address
                    <input type="text" class="form-control" value="<?php echo $row['address'];?>" id="txtaddress" onkeypress="return checkValid(event)" />
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <input type="button" class="btn btn-danger" value="Edit Profile" />
                    <input type="button" class="btn btn-info" value="Update Profile" />
                </div>
                <div class="col-md-6 mb-3">
                    <span id="lbl" style="color:black;display:none;">Profile Updated Successfully</span>
                </div>
            </div>


        </form>
    </div>
<script>
    $(document).ready(function () {
        $(".form-control").attr("ReadOnly", true);
        $(".btn-info").hide();
        $(".btn-danger").click(function () {
            $(".btn-info").show();
            $(".btn-danger").hide();
            $(".form-control").attr("ReadOnly", false);
            $("#txtemail").attr("ReadOnly", true);
        });
        $(".btn-info").click(function () {
            var name = $("#txtname").val();
            var dob = $("#txtdob").val();
            var email = $("#txtemail").val();
            var mobile = $("#txtmobile").val();
            var qlf = $("#txtqlf").val();
            var exp = $("#txtexp").val();
            var city = $("#txtcity").val();
            var state = $("#txtstate").val();
            var pincode = $("#txtpincode").val();
            var address = $("#txtaddress").val();
            $.ajax({
                type: "POST",
                url: "",
                data: { Name: name, Dob: dob, Email: email, Mobile: mobile, Qlf: qlf, Exp: exp, City: city, State: state, Pincode: pincode, Address: address },
                success: function (data) {
                     $("#lbl").show().fadeIn(3000).fadeOut(8000);
                    //  $("#lbl").html(data).fadeIn(3000).fadeOut(8000);
                    $(".btn-info").hide();
                    $(".btn-danger").show();
                    $(".form-control").attr("ReadOnly", true);
                }
            })
        })
    });
</script>
        </div>
        <?php include('includes/footer.php');?>
    </body>
    </html>
<?php
}
}
elseif($_SESSION['type']=='teacher'){
    header('location:Teacher.php');
}
elseif($_SESSION['type']=='admin'){
    header('location:admin/');
}
}
else{
    header('location:login.php');
} ?>