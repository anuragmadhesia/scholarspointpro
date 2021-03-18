<?php session_start();
include('includes/dbconnection.php');
$alrt=0;
if(isset($_POST['feedback']))
{
	$name=$_POST['txtname'];
	$email=$_POST['txtemail'];
    $rate=$_POST['txtrate'];
    $feed=$_POST['txtfeedback'];
    date_default_timezone_set('Asia/Kolkata');
    $date = date('d-m-y h:i:s');
    $msg=mysqli_query($con,"insert into tbl_feedback(name,email,rating,feedback,fdt) values('$name','$email','$rate','$feed','$date')");
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
    <script>
        window.addEventListener("hashchange", function () {
            scrollBy(0, -85)
        })
    </script>
    <title>Feedbacks</title>
</head>

<body>
    <?php include('includes/header.php');?>
    <div class="mainbody">
        <?php
    if($alrt==1){
        echo "<script>alert('Unable to Send Feedback..');</script>";
    }
    elseif($alrt==3){
        echo "<script>alert('Thanks for Feedback...');</script>";
    }
    $alrt=0;
    ;?>
        <script>
            $(document).ready(function () {
                $("#sp1").text(1);
                $("#sp2").text(2);
                $("#sp3").text(3);
                $("#sp4").text(4);
                $("#sp5").text(5);
                $("#sp1,#sp2,#sp3,#sp4,#sp5").hide();
                $("#s1").click(function () {
                    var v = $("#sp1").text();
                    $("#s1").css("color", "darkred");
                    $("#s2,#s3,#s4,#s5").css("color", "blue");
                    $("#txtrate").val(v);
                })
                $("#s2").click(function () {
                    var v = $("#sp2").text();
                    $("#s1,#s2").css("color", "darkred");
                    $("#s3,#s4,#s5").css("color", "blue");
                    $("#txtrate").val(v);
                })
                $("#s3").click(function () {
                    var v = $("#sp3").text();
                    $("#s1,#s2,#s3").css("color", "darkred");
                    $("#s4,#s5").css("color", "blue");
                    $("#txtrate").val(v);
                })
                $("#s4").click(function () {
                    var v = $("#sp4").text();
                    $("#s1,#s2,#s3,#s4").css("color", "darkred");
                    $("#s5").css("color", "blue");
                    $("#txtrate").val(v);
                })
                $("#s5").click(function () {
                    var v = $("#sp5").text();
                    $("#s1,#s2,#s3,#s4,#s5").css("color", "darkred");
                    $("#txtrate").val(v);
                })
            })
        </script>
        <div class="review-form">
            <p style="text-align:center; padding-top: 100px; padding-bottom: 10px; color: #fff; text-shadow: 2px 2px gold; font-size: 40px; font-weight: 500;">OUR FEEDBACK</p>
            <div class="row padd" style="justify-content:center;">
                <div class="col-lg-9">
                <?php $ret=mysqli_query($con,"select * from tbl_feedback");$loop=0;$rowcount=mysqli_num_rows($ret);
                    while($row=mysqli_fetch_array($ret))
                    {
                        if($loop<6){
                            echo '<strong>'.$row['name'].'</strong><i class="fa" style="color:skyblue;">';
                            $st=(int)$row['rating'];
                            for ($j = 0; $j <$st ; $j++)
                            {
                                echo '<span>&nbsp;&nbsp;</span><i class="fas fa-star" style="color:blue;"></i>';
                            }
                            echo '</i><br />';
                            echo '<i class="fa fa-quote-left" style="color:yellowgreen;">&nbsp;</i><span>';echo $row['feedback'];echo '.</span><i class="fa fa-quote-right" style="color:yellowgreen;"></i><hr />';
                        }
                        if($rowcount-1==$loop){
                            echo '<strong>'.$row['name'].'</strong><i class="fa" style="color:skyblue;">';
                            $st=(int)$row['rating'];
                            for ($j = 0; $j <$st ; $j++)
                            {
                                echo '<span>&nbsp;&nbsp;</span><i class="fas fa-star" style="color:blue;"></i>';
                            }
                            echo '</i><br />';
                            echo '<i class="fa fa-quote-left" style="color:yellowgreen;">&nbsp;</i><span>';echo $row['feedback'];echo '.</span><i class="fa fa-quote-right" style="color:yellowgreen;"></i><hr />';
  
                        }
                        $loop++;
                    }
                    ?>
                </div>
                <style>
                    @media (max-width:555px){
                        .padd{
                        padding: 15px;
                    }
                    }
                    @media (max-width: 600px) {
    .feedback-form{
      max-width: 340px;
      margin: 110px auto;
  }
}
                </style>
            </div>
            <div class="feedback-form" style="font-family:'Bell MT';color:#fff;">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h2 class="text-center" style="padding-bottom: 15px;">Give Your Own Feedback</h2>
                        <div class="form-group">
                            <input type="text" name="txtname" class="form-control" placeholder="Enter Your Name"
                                required="required" onkeypress="return checkChar(event)">
                        </div>
                        <div class="form-group">
                            <input type="email" name="txtemail" class="form-control" placeholder="Enter Your Email"
                                required="required" id="IdMail" onkeypress="EmailValid()">
                            <br />
                            <center><span id="ShowEmailMsg"></span></center>
                        </div>
                        <div class="form-group">
                            Rating
                            <br />
                            <i class="fa fa-star" id="s1" style="font-size: 45px; margin-right: 10px; margin-left:10px;"></i>
                            <i class="fa fa-star" id="s2" style="font-size: 45px; margin-right: 10px; "></i>
                            <i class="fa fa-star" id="s3" style="font-size: 45px; margin-right: 10px; "></i>
                            <i class="fa fa-star" id="s4" style="font-size: 45px; margin-right: 10px; "></i>
                            <i class="fa fa-star" id="s5" style="font-size: 45px;"></i>
                            <i class="fa fa-star" id="sp1"></i>
                            <i class="fa fa-star" id="sp2"></i>
                            <i class="fa fa-star" id="sp3"></i>
                            <i class="fa fa-star" id="sp4"></i>
                            <i class="fa fa-star" id="sp5"></i>
                            <br />
                            <input type="hidden" name="txtrate" id="txtrate" />
                        </div>
                        <div class="form-group">
                            <textarea name="txtfeedback" class="form-control" placeholder="Write Your Feedback Here..."
                                rows="3" required="required" onkeypress="return checkValid(event)"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="feedback">SEND</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
            <?php include('includes/footer.php');?>
</body>
</html>