<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark"><!-- -->
    <a class="navbar-brand active" href="index.php">
        <img src="images/spp.png" class="img-responsive logo" alt="Responsive image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="Feedback.php">FEEDBACKS</a></li>
            <li class="nav-item"><a class="nav-link" href="SRegistration.php">HIRE A TUTOR</a></li>
            <li class="nav-item"><a class="nav-link" href="TRegistration.php">JOIN AS A TUTOR</a></li>
            <li class="nav-item"><a class="nav-link" href="Faculty.php">OUR&nbsp;FACULTY</a></li>
            <li class="nav-item"><a class="nav-link" href="Gallery.php">GALLERY</a></li>
            <li class="nav-item"><a class="nav-link" href="Contact.php">CONTACT&nbsp;US</a></li>
            <li class="nav-item icons"><a class="nav-link" target="blank" href="https://www.facebook.com/groups/280998679847480"><i class="fa fa-facebook-square"></i>&nbsp;FACEBOOK</a></li>
            <li class="nav-item icons"><a class="nav-link" target="blank" href="https://api.whatsapp.com/send?phone=+918299450641"><i class="fa fa-whatsapp"></i>&nbsp;WHATSAPP</a></li>
        </ul>
        <form class="form-inline">
            <div class="col-md-12">
            <?php
            // session_start();
            if(isset($_SESSION['type'])){
            if ($_SESSION['type']=='student') {
               echo '<a class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Welcome ';$value = $_SESSION['name']; $tokens = explode(" ", $value); echo $tokens[0];echo'</a>
                <div class="dropdown-menu" style="margin: 0;padding:0;text-align:center;">
                    <a class="dropdown-item" href="Student.php">MY STUDENT PROFILE</a>
                    <a class="dropdown-item" href="ChangePassword.php">CHANGE PASSWORD</a>
                    <a class="dropdown-item" href="logout.php" style="background-color:red;">LOGOUT</a>
                </div>';
}
elseif ($_SESSION['type']=='teacher') {
    echo '<a class="btn btn-primary dropdown-toggle mr-4" type="button" data-toggle="dropdown"
         aria-haspopup="true" aria-expanded="false">Welcome ';$value = $_SESSION['name']; $tokens = explode(" ", $value); echo $tokens[0].' ';echo'</a>
     <div class="dropdown-menu" style="margin: 0;padding:0;text-align:center;">
         <a class="dropdown-item" href="Teacher.php">MY TEACHER PROFILE</a>
         <a class="dropdown-item" href="ChangePassword.php">CHANGE PASSWORD</a>
         <a class="dropdown-item" href="logout.php" style="background-color:red;">LOGOUT</a>
     </div>';
}
elseif ($_SESSION['type']=='admin') {
    echo'<a href="admin/index.php" class="btn btn-info">ADMIN PANEL</a>';
}
            }
else echo'<a href="login.php" class="btn btn-success">LOGIN</a>';
?>
            </div>
        </form>
    </div>
</nav>
<style>
    .icons{
        margin-left: 30px;
    }
    @media (max-width: 600px) {
    .icons{
      margin-left: 0px;
    }
    }
</style>