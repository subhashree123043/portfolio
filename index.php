<?php
include("conn.php");
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header("location:welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/res.css">
</head>

<body>
    <section class="header" id="home">
        <div class="container">
            <nav class="navbar navbar-expand-xl ">
                <div class="container">
                    <a class="navbar-brand" href="#home">
                        <p>Port<span>Folio</span></p>
                    </a>
                    <button class="navbar-toggler menu-toggle humb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto ms-auto  mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#skill">Skills</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#project">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Contact">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-primary" href="signup.php">Sign Up</a>
                            </li>
                            <div id="toggle">
                                <i class="indicate"></i>
                            </div>
                        </ul>

                    </div>
                </div>
            </nav>
            <?php

            $mail = $_SESSION['mail'];
            $sql = "SELECT * FROM personal_info WHERE email='$mail'";
            $res = mysqli_query($con, $sql) or die("query failled");
            $row = mysqli_fetch_assoc($res);
            if (mysqli_num_rows($res) > 0) {

            ?>
                <div class="baner-cont">
                    <p>Hello, I am</p>
                    <h3><?php echo "{$row['name']}"; ?><span>&#128522;</span></h3>
                    <p>I am Front End Developer </p>
                    <button class="baner-btn">Hire Me</button>
                </div>
            <?php } else {
            ?>
                <div class="baner-cont">
                    <p>Hello, I am</p>
                    <h3>XXXXXXXXXXXXX<span>&#128522;</span></h3>
                    <p>I am Front End Developer </p>
                    <button class="baner-btn">Hire Me</button>
                    <p>Click Here to Register for yourself</p>
                    <a href="register.php" id="regst" class="baner-btn">Register</a>
                </div>
            <?php die();
            } ?>
        </div>
    </section>
    <!-- Header End -->
    <!-- About start -->
    <section id="about">
        <div class="container">
            <div class="row abouth">
                <h2>
                    About Me
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="image">
                        <img src="pic/b.jpg" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 abtbox">
                    <div class="btcont">
                        <h4>Hello, <?php echo "{$row['name']}"; ?></h4>
                        <p>
                            <?php echo "{$row['obj']}"; ?>
                        </p>
                        <a href="respdf.php" target="_blanck" class="btn m-btn">Download CV</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="skill">
        <div class="row abouth">
            <h2>
                My Skills & Qualification
            </h2>
        </div>
        <div class="container">

            <div class="row">
                <?php

                $sqlq = "SELECT * FROM qualification WHERE email='{$_SESSION['mail']}'";
                $resq = mysqli_query($con, $sqlq) or die("query failled");
                $rowq = mysqli_fetch_assoc($resq);
                ?>
                <div class="col-lg-6 col-md-6 qual">
                    <h2>Qualification</h2>
                    <h4>
                        Professional:
                    </h4>

                    <p>
                        -Done <?php echo "{$rowq['highest_qual']}"; ?> from <?php echo "{$rowq['hclg_name']}"; ?> with an aggregate of <?php echo "{$rowq['hmark']}%"; ?>( <?php echo "{$rowq['hpassing_year']}"; ?>). <br>
                        - <?php echo "{$rowq['grad']}"; ?> from <?php echo "{$rowq['grad_clg']}"; ?> with an aggregate of <?php echo "{$rowq['grad_mark']}%"; ?>( <?php echo "{$rowq['grad_passing_year']}"; ?>).

                    </p>
                    <h4>
                        Academics:
                    </h4>
                    <p>

                        -12th from <?php echo "{$rowq['xii_clg']}"; ?> with an aggregate of <?php echo "{$rowq['xii_mark']}%"; ?> (<?php echo "{$rowq['xii_passing_year']}"; ?> ). <br>
                        -10th from <?php echo "{$rowq['x_school']}"; ?> with an aggregate of <?php echo "{$rowq['x_mark']}"; ?> (<?php echo "{$rowq['x_passing_year']}"; ?> ).

                    </p>

                </div>
                <div class="col-lg-6 col-md-6 skillbar">
                    <?php

                    $sqls = "SELECT * FROM skill WHERE email='{$_SESSION['mail']}'";
                    $ress = mysqli_query($con, $sqls) or die("query failled");
                    $rows = mysqli_fetch_assoc($ress);
                    ?>
                    <h2>Skills</h2>
                    <div class="skillv">
                        <label><?php echo "{$rows['skill']}"; ?></label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo "{$rows['skillrate']}%"; ?>;" aria-valuemax="100">
                                <p><?php echo "{$rows['skillrate']}%"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="skillv">
                        <label><?php echo "{$rows['skil2']}"; ?></label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo "{$rows['sklrt2']}%"; ?>" aria-valuemax="100">
                                <p><?php echo "{$rows['sklrt2']}%"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="skillv">
                        <label><?php echo "{$rows['skil3']}"; ?></label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo "{$rows['sklrt3']}%"; ?>" aria-valuemax="100">
                                <p><?php echo "{$rows['sklrt3']}%"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="skillv">
                        <label><?php echo "{$rows['skil4']}"; ?></label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo "{$rows['sklrt4']}%"; ?>" aria-valuemax="100">
                                <p><?php echo "{$rows['sklrt4']}%"; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="skillv">
                        <label><?php echo "{$rows['skil5']}"; ?></label>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: <?php echo "{$rows['sklrt5']}%"; ?>" aria-valuemax="100">
                                <p><?php echo "{$rows['sklrt5']}%"; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <div class="row prjhead">
                <h1>Projects</h1>
            </div>
            <a id="downbtn" class="btn" href="project.php">Add</a>
            <div class="row" id="project_slider">
                <div class="owl-carousel owl-theme">
                    <?php
                    $sqlp = "SELECT * FROM project WHERE pmail='{$_SESSION['mail']}'";
                    $resp = mysqli_query($con, $sqlp) or die("query failled");
                    if (mysqli_num_rows($resp) > 0) {
                        while ($rowp = mysqli_fetch_assoc($resp)) {

                    ?>
                            <div class="project-content">
                                <div class="crd-img">
                                    <img src="upload/<?php echo $rowp['pimg']; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="crd-title">
                                    <p><?php echo $rowp['pname']; ?></p>
                                </div>
                                <div class="desc">
                                    <?php echo $rowp['pdesc']; ?>
                                </div>
                                <div class="crd-footer">
                                    <a id="demobtn" href="#">Demo</a>
                                    <a id="downbtn" href="#">Download</a>
                                </div>
                            </div>
                    <?php }
                    } else {
                        echo "<h1>Not Found</h2>";
                    }
                    ?>

                </div>
            </div>

        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                    <div class="wrapper">
                        <div class="row no-gutters">
                            <div class="col-md-7 d-flex align-items-stretch">
                                <div class="contact-wrap">
                                    <h3>Get in touch</h3>
                                    <form method="POST" id="contactForm" name="contactForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" id="message" cols="30" rows="7" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Send Message" class="btn send">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-stretch">
                                <div class="info-wrap">
                                    <h3 class="mb-4 mt-md-4">Contact Me</h3>
                                    <div class="dbox w-100 d-flex align-items-start">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Address :</span><span id="addr"> <?php echo
                                                                                        "{$row['adrs']}"; ?></span></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Phone :</span> <a href="tel://1234567920"><?php echo "{$row['mob']}"; ?></a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-paper-plane"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>Email:</span> <a href="mailto:info@yoursite.com"><?php echo "{$row['email']}"; ?></a></p>
                                        </div>
                                    </div>
                                    <div class="dbox w-100 d-flex align-items-center">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-github"></span>
                                        </div>
                                        <div class="text pl-3">
                                            <p><span>GitHub :</span> <a href="#"><?php echo "{$row['git']}"; ?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="foter">
        <div class="container">
            <div class="row">
                <div class="footer">
                    <div class="row fbox">
                        <div class="col-lg-4 col-sm-12">
                            <p>@2021 <b> PortFolio </b>all rights are reserved</p>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="mail">
                                <i class="fa fa-envelope"></i>
                                <p>spectum@123gmail.com</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 social">
                            <a href=""> <i class="fa fa-github"></i> </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>