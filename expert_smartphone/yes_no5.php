<?php  
session_start();

$_SESSION['checkbox_yes'];
		$_SESSION['checkbox_no'] ;
      include ("dbcon.php");
	 // $idx = $_GET['idt'];
	  
	  //-----------------------------------
	  @$_SESSION['id'];
	  $se ="select * from yesno where num='".$_SESSION['id']."'";
	  $d= $db->query($se);
	  //$no = mysqli_num_rows($d);
	  $rows = mysqli_fetch_assoc($d);
	

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Smartphone Expert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">


<form action="" method="post">
  <div align="center">
    <div class="jumbotron" style="background-color:yellowgreen;"> <h2>Troubleshooting</h2></div>
  
    
    <table class="table table-striped">
      <tr>
        <td width="105">SOLUTION: </td>
        <td width="413"><p><?php    if ($_SESSION['checkbox_yes']){
			
			
			
			
			  echo $rows['ans']; } elseif ($_SESSION['checkbox_no']) {   echo $rows['q5'];    } ?></p>
          <p>&nbsp;</p></td>
      </tr>
      <tr>
        <td height="66">&nbsp;</td>
        <td><p>
          <a href="consult.php" class="btn btn-primary btn-block btn-lg" role="button">Home>></a>
        </p></td>
        </tr>
      
    </table>
  </div>
  </form>
</div>
</body>
</html>