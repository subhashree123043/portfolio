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
    $mail = mysqli_real_escape_string($con,$_SESSION['mail']);
    $rate = mysqli_real_escape_string($con, $_POST['txt']);
    $skill= mysqli_real_escape_string($con, $_POST['Skills']);
    $rate2 = mysqli_real_escape_string($con, $_POST['txt2']);
    $skill2= mysqli_real_escape_string($con, $_POST['Skills2']);
    $rate3 = mysqli_real_escape_string($con, $_POST['txt3']);
    $skill3= mysqli_real_escape_string($con, $_POST['Skills3']);
    $rate4 = mysqli_real_escape_string($con, $_POST['txt4']);
    $skill4= mysqli_real_escape_string($con, $_POST['Skills4']);
    $rate5 = mysqli_real_escape_string($con, $_POST['txt5']);
    $skill5= mysqli_real_escape_string($con, $_POST['Skills5']);
           
   $sql1 ="INSERT INTO skill(email, skill, skillrate, skil2, sklrt2, skil3, sklrt3, skil4, sklrt4, skil5, sklrt5) VALUES('{$mail}','{$skill}',{$rate},'{$skill2}',{$rate2},'{$skill3}',{$rate3},'{$skill4}',{$rate4},'{$skill5}',{$rate5})";
           
    $res1 = mysqli_query($con, $sql1) or die("query failed");
        
    if ($res1) {
            echo "<script> alert('Saved')</script>";
            header("location:qualification.php");
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
                                <a class="nav-link" aria-current="page" href="register.php">Personal Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  active" href="skill.php">Skills</a>
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
    <section id="skl">
        <div class="container">
            <div class="row">
                <div class="info-box">
                    <h2>Skill Details</h2>
                    <form action="<?php $_SERVER['PHP_SELF']; ?> " autocomplete="off" id="form" method="POST">
                    <p class="skl-text">Highlight your top 5 programming language skills</p>
                        <TABLE id="dataTable" width="350px" border="1">
                            <TR>
                                <TD><INPUT class="skin" type="text" name="txt"placeholder="Rate your skill in percentage @ 30,80,75..." /></TD>
                                <TD>
                                    <SELECT class="skselect" name="Skills">
                                    <OPTION value="html">HTML</OPTION>
                                        <OPTION value="css">CSS</OPTION>
                                        <OPTION value="javascript">javascript</OPTION>
                                        <OPTION value="Python">Python</OPTION>
                                        <OPTION value="Java">Java</OPTION>
                                        <option value="c">C</option>
                                        <option value="c++">c++</option>
                                        <option value="mySQL">mySQL</option>
                                        <option value="Algorithem">Algorithem</option>
                                        <option value="Android">Android</option>
                                    </SELECT>
                                </TD>
                            </TR>
                            <TR>
                                <TD><INPUT class="skin" type="text" name="txt2"placeholder="Rate your skill in percentage @ 30,80,75..." /></TD>
                                <TD>
                                    <SELECT class="skselect" name="Skills2">
                                        <OPTION value="html">HTML</OPTION>
                                        <OPTION value="css">CSS</OPTION>
                                        <OPTION value="javascript">javascript</OPTION>
                                        <OPTION value="Python">Python</OPTION>
                                        <OPTION value="Java">Java</OPTION>
                                        <option value="c">C</option>
                                        <option value="c++">c++</option>
                                        <option value="mySQL">mySQL</option>
                                        <option value="Algorithem">Algorithem</option>
                                        <option value="Android">Android</option>
                                    </SELECT>
                                </TD>
                            </TR>
                            <TR>
                                <TD><INPUT class="skin" type="text" name="txt3"placeholder="Rate your skill in percentage @ 30,80,75..." /></TD>
                                <TD>
                                    <SELECT class="skselect" name="Skills3">
                                    <OPTION value="html">HTML</OPTION>
                                        <OPTION value="css">CSS</OPTION>
                                        <OPTION value="javascript">javascript</OPTION>
                                        <OPTION value="Python">Python</OPTION>
                                        <OPTION value="Java">Java</OPTION>
                                        <option value="c">C</option>
                                        <option value="c++">c++</option>
                                        <option value="mySQL">mySQL</option>
                                        <option value="Algorithem">Algorithem</option>
                                        <option value="Android">Android</option>
                                    </SELECT>
                                </TD>
                            </TR>
                            <TR>
                                <TD><INPUT class="skin" type="text" name="txt4"placeholder="Rate your skill in percentage @ 30,80,74..." /></TD>
                                <TD>
                                    <SELECT class="skselect" name="Skills4">
                                    <OPTION value="html">HTML</OPTION>
                                        <OPTION value="css">CSS</OPTION>
                                        <OPTION value="javascript">javascript</OPTION>
                                        <OPTION value="Python">Python</OPTION>
                                        <OPTION value="Java">Java</OPTION>
                                        <option value="c">C</option>
                                        <option value="c++">c++</option>
                                        <option value="mySQL">mySQL</option>
                                        <option value="Algorithem">Algorithem</option>
                                        <option value="Android">Android</option>
                                    </SELECT>
                                </TD>
                            </TR>
                            <TR>
                                <TD><INPUT class="skin" type="text" name="txt5"placeholder="Rate your skill in percentage @ 30,80,75..." /></TD>
                                <TD> <SELECT class="skselect" name="Skills5">
                                <OPTION value="html">HTML</OPTION>
                                        <OPTION value="css">CSS</OPTION>
                                        <OPTION value="javascript">javascript</OPTION>
                                        <OPTION value="Python">Python</OPTION>
                                        <OPTION value="Java">Java</OPTION>
                                        <option value="c">C</option>
                                        <option value="c++">c++</option>
                                        <option value="mySQL">mySQL</option>
                                        <option value="Algorithem">Algorithem</option>
                                        <option value="Android">Android</option>
                                    </SELECT>
                                </TD>
                            </TR>
                        </TABLE>
                        <div class="form-btn">
                            <input type="submit" name="submit">
                        </div>
                    </form>
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