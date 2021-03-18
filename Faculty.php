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
    <title>Faculty</title>
</head>
<body>
<?php include('includes/header.php');include('includes/dbconnection.php');?>
    <div class="mainbody">
<style>
    #hvr {
        background:linear-gradient(white,rgba(36, 524, 958, 0.7));
        background-repeat:no-repeat;
        transition:1s;
    }
    #hvr:hover {
        background:linear-gradient(rgb(36, 201, 212),white);
        background-repeat:no-repeat;
    }
</style>
<div id="faculty" style="min-height: 550px; padding-top: 100px;">
    <p style="text-align: center;  padding-bottom: 10px; color: #fff; text-shadow: 2px 2px gold; font-size: 50px; font-weight: 700;">OUR FACULTY</p>
    <div class="container" style="margin-top:30px;">
        <div class="row">
        <?php $ret=mysqli_query($con,"select * from tbl_faculty");
							  while($row=mysqli_fetch_array($ret))
							  {
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
</div>
    </div>

    <?php include('includes/footer.php');?>

</body>
</html>