<?php
session_start();
$alrt=0;
include('includes/dbconnection.php');
if(isset($_SESSION['login']))
{
if ($_SESSION['type']=='admin') {
    if(isset($_GET['del']))
    {
    $adminid=$_GET['del'];
    $msgg=mysqli_query($con,"select * from tbl_students where rid='$adminid'");
    $row=mysqli_fetch_array($msgg);
    $mail=$row['email'];
    $delete=mysqli_query($con,"delete from tbl_login where email='$mail'");
    $msg=mysqli_query($con,"delete from tbl_students where rid='$adminid'");
    if($msg)
    {
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
    <script src="js/alert.js"></script>
    <script src="js/aman.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>window.addEventListener("hashchange", function () { scrollBy(0, -85) })</script>
    <title>Admin | Students</title>
</head>
<body>
<?php include('includes/header.php');?>
<div class="mainbody">
    <link rel="stylesheet" href="css/alert.css">
    <link rel="stylesheet" href="css/aakash.css">
    <script src="js/akash.js"></script>
    <script>
    $(document).ready(function () {
        $("#example").DataTable();
    })
   </script>
<center><h1 style="color:greenyellow;padding-top:11px;">Students details</h1></center>
        <center style="overflow-x:auto;">
            <table class="table" id="example">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="pd">Id No.</th>
                        <th scope="col">Name</th>
                        <th scope="col">D.O.B.</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Class / Board </th>
                        <th scope="col">Subject</th>
                        <th scope="col" class="pd">Address</th>
                        <th scope="col" class="pd">Edit</th>
                        <th scope="col" class="pd">Delete</th>
                    </tr>
                </thead>
                <tbody style="color:green;">
                <?php $ret=mysqli_query($con,"select * from tbl_students");
							  while($row=mysqli_fetch_array($ret))
							  {?>
                        <tr>
                            <td class="pd"><?php echo $row['rid'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['mobile'];?></td>
                            <td><?php echo $row['class'].' / '.$row['board'];?></td>
                            <td><?php echo $row['subject'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td class="pd"><a href="Student_edit.php?up=<?php echo $row['rid'];?>"><center><span class="fa fa-edit btn btn-primary"></span></center></a></td>
                            <td class="pd"><a href="Students.php?del=<?php echo $row['rid'];?>"><center><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash-o "></i></button></center></a></td>
                        </tr>
                        <?php }?>
                </tbody>
            </table>
        </center>
    </div>
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