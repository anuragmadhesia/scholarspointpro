<?php
session_start();
include('includes/dbconnection.php');?>
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
    <title>SCHOLAR’S POINT PRO</title>
</head>
<body>
<?php include('includes/header.php');?>
    <div class="mainbody" style="background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/wall.jpg);">
        <style>
                @media (max-width:555px){
                	.indexbox{
                        padding-top: 135px;
                    }
                    .indexbackground{
                        background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/wall.jpg);
                        background-size: auto;
                        overflow: hidden;
                    }
                    .responsivetext{
                        font-size: 15px;
                    }
                    .text-slider{
                		display: none;
                    }
                    .btn-round1{
                        position:relative;
                        top:120%;
                        left:0%;
                        height:50px;
                        min-width:150px;
                        text-align:center;
                        vertical-align:middle;
                        line-height:45px;
                        font-size:10px;
                        font-weight:300;
                        background-color:greenyellow;
                        border: 1px solid blue;
                        color:white;
                        margin-top:20px;
                        margin-right: 20px;
                        border-radius:30px;
                        transition:1s;
                    }
                    .btn-round1:hover{
                        border: 3px solid blue;
                        border-radius:20px;
                        margin-right: 20px;
                        font-weight:400;
                    }
                }
                .review-form {
                	margin: 0px;
            	}
            	.review-form p{
                	margin: 0px;
            	}
                .indexbackground{
                    background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)), url(images/wall.jpg);
                    background-size: cover;
                    padding-bottom:30px;
                }
                .text-slider-items {
                		display: none;
                    }
                .animate{
                        color:gold;
                        animation: one 4s linear infinite;
                        animation-name: example;
                    }
                @keyframes example {
                  0%   {    color:gold;}
                  20%  {    color:yellow;}
                  40%  {    color:lightgreen;}
                  60%  {    color:skyblue;}
                  80%  {    color:violet;}
                  100% {    color:gray;}
                }
        </style>
            <script src="js/typed.min.js"> </script>
            <div class="indexbackground">
            	<div class="indexbox container" id="home" style="padding-top: 200px;">
                    <div class="example">
                        <span class="mytext down responsivetext">WELCOME TO </span>
                        <span class="welcome down animate responsivetext">SCHOLAR’S POINT PRO COACHING CLASSES<br></span>
                        <span class="mytext down responsivetext">Awas Vikas Colony, Amethi(U.P.), INDIA<br></span>
                        <span class="text-slider-items">
                            We Provide Best Tutors.
                            , We make your dream come true.
                            , Modern education is our path.
                        </span>
                        <span class="mytext down text-slider"></span><br />
                    </div>
                    <a href="SRegistration.php" class="btn btn-round1" >I WANT TO HIRE A TUTOR</a>
                    <a href="TSRegistration.php" class="btn btn-round1" style="background-color:mediumpurple;">I WANT TO BE A TUTOR</a>
                </div>
            </div>
        <script>
            if ($(".text-slider").length == 1) {
                var typed_strings = $(".text-slider-items").text();
                var typed = new Typed(".text-slider", {
                    strings: typed_strings.split(", "),
                    typeSpeed: 50,
                    loop: true,
                    backDelay: 900,
                    backSpeed: 30,
                });
            }
         </script>

    <div class="servicebox example" id="services">
    <p class="text-white" style="padding-top: 20px; text-shadow: 2px 2px red; font-size: 50px; font-weight: 700;">Our Services</p>
            <div class="row" style="justify-content:center;margin:0;padding:0;">
                    <div class="col-lg-3 blk">
                        <img src="images/services/ser1.svg" style="height: 50px; width: 50px;" />
                        <h3 class="text-black mb-3">Online Learning</h3>
                        <p style="padding-top: 10px; font-family: 'Dancing Script', cursive;font-size:22px;">
                            We provide online classes for students who are unable join tutions class physically.
                        </p>
                    </div>
                    <div class="col-lg-3 blk">
                        <img src="images/services/ser2.svg" style="height:50px;width:50px;" />
                        <h3 class="text-black mb-3">Undergraduate Study</h3>
                        <p style="padding-top: 10px; font-family: 'Dancing Script', cursive;font-size:22px;">
                            We provide tutions to Undergraduate students of desired subjects.
                        </p>
                    </div>
                    <div class="col-lg-3 blk">
                        <img src="images/services/ser3.svg" style="height:50px;width:50px;" />
                        <h3 class="text-black mb-3">Admission Possibility 24*7</h3>
                        <p style ="padding-top: 10px; font-family: 'Dancing Script', cursive;font-size:18px;">
                            (Desired Colleges At Minimum Fee)<br />
                            We work as a educational consultant for Engineering, Pharmacy, B.ED, B.A, B.Sc., Highschool & Intermediate.
                        </p>
                    </div>
        </div>
</div>


<style>
    #hvr {
        background:linear-gradient(rgb(36, 201, 212),white);
        background-repeat:no-repeat;
        transition:1s;
    }
    #hvr:hover {
        background:linear-gradient(white,rgb(36, 201, 212));
        background-repeat:no-repeat;
    }
</style>
<div style="min-height:550px;">
    <p style="text-align: center; padding-top: 20px; padding-bottom: 10px; color: #fff; text-shadow: 2px 2px gold; font-size: 50px; font-weight: 700;">OUR FACULTY</p>
    <div class="container" style="margin-top:30px;">
<div class="row" style="margin: 0;padding:0;">
                    <?php $ret=mysqli_query($con,"select * from tbl_faculty");
                    $sss=0;
							  while($row=mysqli_fetch_array($ret) and $sss<3)
							  {$sss++;
                        echo'<div class="col-md-4">
                        <div class="card mb-5" id="hvr" style="min-height:350px;margin:5px;">';
                                echo'<img class="rounded-circle" src="admin/images/faculty/'.$row['ipic'].'" alt="Card image cap" width="140" height="140" />
                                <div class="card-body">
                                <h4 class="card-title">'.$row['name'];
                                echo'</h4><p class="card-text"><strong>'.$row['qualification'].'</strong> teaches <strong>'.$row['subject'].'</strong> with '.$row['experience'].' of experience.';
                                echo'<br /><strong>Contact : '.$row['contact'].'</strong></p>';
                                echo'<a href="SRegistration.php" class="btn btn-primary">Hire Him</a>
                                </div>
                            </div>
                        </div>';
                               }?>
        </div>
    </div>
    <a href="Faculty.php" class="btn btn-primary" style="margin:0 0 30px 140px;">View All Faculty >></a>
</div>
<style>
    .servicebox .abouttext{
        font-size: 16px;
        font-weight: 400;
        font-family: 'Sansita Swashed', cursive;
        text-shadow:0px 1px yellowgreen;
    }
@media (max-width:966px) {
    .servicebox .abouttext{
        font-size: 19px;
        font-weight: 500;
        font-family: 'Sansita Swashed', cursive;
        text-shadow:0px 1px red;
    }
}
@media (max-width:566px) {
    .servicebox .abouttext{
        font-size: 13px;
        font-weight: 300;
        font-family: 'Sansita Swashed', cursive;
        text-shadow:0px 1px violet;
    }
}
</style>

    <div class="servicebox example" id="aboutus">
    <p class="text-white" style="padding-top:20px;text-shadow:2px 2px red;font-size:50px;font-weight:700;">ABOUT US</p>
    <div class="row" style="justify-content:center;margin:0;padding:0;">
        <div class="col-lg-5 blk">
            <h4 class="text-black mb-3" style="padding-top:20px;color:red;text-shadow:2px 2px green;">MAKE MY TUTION CLASSES</h4>
            <p class="abouttext">
                Education Is The Most Powerful Weapon Which You Can Use To Change The World
                <br />Make My Tuition classes is an online portal to provide best and effective quality of education to student. The purpose of education is to make creative mind not just a career
                <br />We provide Seat in B.Tech(CSE/IT/ME/CE/ECE/EE/EEE)/ Pharmacy/ B.ed/ B.A/  regular Course with less Tuition Fee Per Annum in Delhi NCR Zone.
                <br /><br />
                <span style="color:black;text-shadow:2px 2px white;">Regards : Admission Possibility 24*7 Team</span>
            </p>
        </div>
        <div class="col-lg-5 blk">
            <img src="images/hcover.jpeg" style="height:100%;width:100%;padding:10px 0px 10px 0px;" />
        </div>
    </div>
</div>
        <div class="review-form indexbackground" id="reviews">
            <p style="text-align: center; padding-top: 20px; padding-bottom: 10px; color: #fff; text-shadow: 2px 2px gold; font-size: 40px; font-weight: 500;">WHAT OUR STUDENTS SAY</p>
            <div class="row" style="justify-content:center;margin:0;padding:0;">
                <div class="col-lg-9">
                    <?php $ret=mysqli_query($con,"select * from tbl_feedback");
                    $sss=0;
							  while($row=mysqli_fetch_array($ret) and $sss<3)
							  {$sss++;
                                    echo '<strong>';echo $row['name'];echo '</strong><i class="fa" style="color:skyblue;">';
                                    $st=(int)$row['rating'];
                                    for ($j = 0; $j <$st ; $j++)
                                    {
                                          echo '<span>&nbsp;&nbsp;</span><i class="fas fa-star" style="color:blue;"></i>';
                                    }
                                    echo '</i><br />';
                      echo '<i class="fa fa-quote-left" style="color:yellowgreen;">&nbsp;</i><span>';echo $row['feedback'];echo '.</span><i class="fa fa-quote-right" style="color:yellowgreen;"></i><hr />';
                    }?>
                </div>
            </div>
            <a href="Feedback.php" class="btn btn-primary" style="margin-left:183px;">View More Reviews</a>
        </div>
</div>
	<?php include('includes/footer.php');?>

</body>
</html>