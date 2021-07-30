<?php
include "conn.php";
if (!isset($_SESSION)) {
    session_start();
}
if (!isset($_SESSION['login'])) {
    header("location:welcome.php");
}
// if (isset($_POST['submit'])) {
//     include("con.php");
//     if (isset($_FILES['pimg'])) {
//         $error = array();
//         $file_name = $_FILES['pimg']['name'];
//         $file_size = $_FILES['pimg']['size'];
//         $file_type = $_FILES['pimg']['type'];
//         $file_tmp_name = $_FILES['pimg']['tmp_name'];
//         $file_ext = end(explode('.', $file_name));
//         $ext = array("jpeg", "jpg", "png");

//         if (in_array($file_ext, $ext) === false) {
//             $error[] = "These extensions are not alowed,please choose a JPG or PNG file";
//         }
//         if ($file_size > 2097152) {
//             $error[] = "File size too much , please enter 2mb or lower";
//         }
//         if (empty($error) == true) {
//             $dest = 'upload/' . $file_name;
//             move_uploaded_file($file_tmp_name, $dest);
//         }
//     }
//     $mail = mysqli_real_escape_string($con, $_SESSION['mail']);
//     $name = mysqli_real_escape_string($con, $_POST['pname']);
//     $desc = mysqli_real_escape_string($con, $_POST['pdesc']);

//     $sql1 = "INSERT INTO project(pmail, pname, pdesc, pimg) VALUES('{$mail}','{$name}','{$desc}','{$file_name}')";

//     $res1 = mysqli_query($con, $sql1) or die("query failed");

//     if ($res1) {
//         echo "<script> alert('Saved')</script>";
//         header("location:index.php");
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio,register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.theme.green.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/res.css">
    <link rel="stylesheet" href="css/register.css">
</head>
<body id="register">
    <section id="Home-header">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <p>Port<span>Folio</span></p>
                    </a>
                        <button class="navbar-toggler menu-toggle humb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="register.php">Personal Info</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="skill.php">Skills</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="qualification.php">Qualification</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  active" href="project.php">Projects</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </section>
    <section id="project">
        <div class="container">
            <div class="row prjhead">
                <h1>Projects</h1>
            </div>
            <a id="downbtn" class="btn" href="addprj.php">Add</a>
            <div class="row" id="project_slider">
                <div class="owl-carousel owl-theme">
                <?php
                    $sqlp = "SELECT * FROM project WHERE pmail='{$_SESSION['mail']}'";
                    $resp = mysqli_query($con, $sqlp) or die("query failled");
                    if(mysqli_num_rows($resp)>0){
                        while($rowp=mysqli_fetch_assoc($resp)){

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
                    }else{
                        echo "<h1>Not Found</h2>";
                    }
                    ?>
                    
                </div>
            </div>
            <a id="demobtn" href="index.php">Go To Home</a>
        </div>
    </section>


    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>