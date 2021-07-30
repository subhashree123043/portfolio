<?php 
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['login'])){
    header("location:welcome.php");
}
include "header.php";
if (isset($_POST['submit'])) {
    include("conn.php");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $mail = mysqli_real_escape_string($con, $_POST['mail']);
    $mob = mysqli_real_escape_string($con, $_POST['mob']);
    $git = mysqli_real_escape_string($con, $_POST['git']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $obj = mysqli_real_escape_string($con, $_POST['obj']);
    $adrs = mysqli_real_escape_string($con, $_POST['adr']);


   $sql = "SELECT email FROM personal_info WHERE email='{$mail}'";

    $res = mysqli_query($con, $sql) or die("Query failed");

    if (mysqli_num_rows($res) > 0) {
        echo "<p style='color:red;text-align:center;margin:10px 0;'> User Already Exist </p>";
    } 
     else{ 
            $sql1 = "INSERT INTO personal_info(name, email, mob, git, linkedin,obj, adrs) VALUES('{$name}','$mail',{$mob},'{$git}','{$link}','{$obj}','{$adrs}')" or die("query failed");
            $res1 = mysqli_query($con, $sql1) or die("query failed");
        if ($res1) {
            echo "<script> alert('Saved')</script>";
            header("location:skill.php");
        }
    }
}
?>

<body id="register">
    <section id="Home-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <p>Port<span>Folio</span></p>
                    </a>
                        <button class="navbar-toggler menu-toggle humb" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="register.php">Personal Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="skill.php">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="qualification.php">Qualification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="project.php">Projects</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section id="info">
        <div class="container">
            <div class="row">
                <div class="info-box">
                    <h2>Personal Details</h2>
                    <form action="<?php $_SERVER['PHP_SELF']; ?> " autocomplete="off" id="form" method="POST">
                        <div class="form-box">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name" required>
                        </div>
                        <div class="form-box">
                            <label>E-Mali</label>
                            <input type="email" name="mail" value="<?php echo $_SESSION['mail'];?>"
                                placeholder="email id" required>
                        </div>
                        <div class="form-box">
                            <label>Mobile</label>
                            <input type="text" name="mob" placeholder="contact Number" required>
                        </div>
                        <div class="form-box">
                            <label>Git Hub</label>
                            <input type="text" name="git" placeholder="github profile link">
                        </div>
                        <div class="form-box">
                            <label>LinkedIn</label>
                            <input type="text" name="link" placeholder="linkedin profile link">
                        </div>
                        <div class="form-box">
                            <label>Objective</label>
                            <input type="text" name="obj" placeholder="Your goal">
                        </div>
                        <div class="form-box">
                            <label>Address</label>
                            <textarea name="" id="" cols="30" rows="3" name="adr" placeholder="address details"
                                required></textarea>
                        </div>
                        <div class="form-btn">
                            <input type="submit" name="submit" value="Next">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include "footer.php";?>