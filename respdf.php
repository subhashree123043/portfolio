<?php 

session_start();
include "conn.php";
require('vendor/autoload.php');
 $mail = $_SESSION['mail'];
$sql = "SELECT * FROM personal_info where email= '{$mail}'";
$res = mysqli_query($con, $sql) or die("query failled");
$row = mysqli_fetch_assoc($res);
// print_r($row);die("wath");
$sqlq = "SELECT * FROM qualification WHERE email='{$mail}'";
$resq = mysqli_query($con, $sqlq) or die("query failled");
$rowq = mysqli_fetch_assoc($resq);
$sqls = "SELECT * FROM skill WHERE email='{$_SESSION['mail']}'";
$ress = mysqli_query($con, $sqls) or die("query failled");
$rows = mysqli_fetch_assoc($ress);
$sqlp = "SELECT * FROM project WHERE pmail='{$_SESSION['mail']}'";
$resp = mysqli_query($con, $sqlp) or die("query failled");
$rowp = mysqli_fetch_assoc($resp);
if(mysqli_num_rows($res)>0){
  $resume='<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/resume.css">
  <div class="container">
    <div class="row">
      <div class="col-lg-offset-2 col-lg-8">
        <section class="panel panel-default">
          <div class="panel-body">
  <article class="panel-body"> 
  <figure class="text-center">
   <img src="pic/bgcha3.png" class="img-thumbnail img-circle img-responsive" alt="me">
   <figcaption>
     <h3>'.$row['name'].'</h3> 
     <br> Tel. '.$row['mob'].'<br> E-mail: '.$row['email'].'<br>Git-Hub:'.$row['git'].'
   </figcaption>
 </figure>
</article>
<br>
          <article>
            <h4>
            									  <strong>Objecties</strong>
								            </h4>
            <hr>
            <p>'.$row['obj'].'</p>
          </article>
          <article>
            <h4>
									              <strong>Edcucation</strong>
								            </h4>
            <hr>
            <dl class="dl-horizontal">
              <dt>'.$rowq['hpassing_year'].'</dt>
              <dd>'.$rowq['highest_qual'].' | '.$rowq['hclg_name'].'</dd>
            </dl>
            <dl class="dl-horizontal">
            <dt>'.$rowq['grad_passing_year'].'</dt>
            <dd>'.$rowq['grad'].' | '.$rowq['grad_clg'].'</dd>
          </dl>
          </article>
          <article>
            <h4>
									              <strong>Skills</strong>
								            </h4>
            <hr>
            <dl class="dl-horizontal">
              <dt>Languages:</dt>
              <dd>'.$rows['skill'].' , '.$rows['skil2'].' , '.$rows['skil3'].' , '.$rows['skil4'].'  and  '.$rows['skil5'].'</dd>
              <dt>Framework:</dt>
              <dd>jQuery, Bootstrap, NW.js</dd>
            </dl>
          </article>
          <article>
            <h4>
									         <strong>Projects</strong>
								          </h4>
            <dl class="dl-horizontal">
              <dt>'.$rowp['pname'].'</dt>
              <dd>'.$rowp['pdesc'].'</dd>
            </dl>
            <hr>
          </article>
        </div>';
}
else{
    $resume="not found";
}
//$resume.=file_get_contents("http://localhost/task3/check.php");

$mpdf = new \Mpdf\Mpdf();
// print_r($row);die("wath");
$mpdf->WriteHTML($resume);
$mpdf->Output();

?>