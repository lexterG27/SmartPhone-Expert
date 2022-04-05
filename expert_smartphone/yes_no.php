<?php  
session_start();
      //INFERENCE ENGINE

      include ("dbcon.php");
	  $idx = $_GET['idt'];
	  
	  //-----------------------------------
	  
	  $se ="select * from yesno where num='$idx'";
	  $d= $db->query($se);
	  //$no = mysqli_num_rows($d);
	 $rows = mysqli_fetch_assoc($d);
	 $_SESSION['id'] = $idx;

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
    <p>&nbsp;</p>
   <div class="jumbotron" style="background-color:yellowgreen;"> <h2>Troubleshooting</h2></div>
    <table class="table table-striped">
      <tr>
         <?php
		
		if(isset($_POST['next'])){
			
			
			@$checkbox_yes = $_POST['checkbox_yes'];      //error control
	@$checkbox_no = $_POST['checkbox_no'];
	
	 if(!$checkbox_yes and !$checkbox_no){           //if none is selected
		?>
        <script>   alert("Please make Selection!") ;</script>
        
        <?php
	 }
	else{

			
			header("location:yes_no2.php"); }
			
		}
		
		?>
        
        
        <td width="105">Question : </td>
        <td width="234"><?php echo $rows['q1'];    ?></td>
        <td width="79"><p>Yes
          </p>
          <p>
            <input type="checkbox" name="checkbox_yes" id="checkbox" />
          </p></td>
        <td width="100"><p> No
          </p>
          <p>
            <input type="checkbox" name="checkbox_no" id="checkbox2" />
           
          </p></td>
        </tr>
      <tr>
        <td>Answer:   </td>
        <td colspan="3"><input type="submit" name="next" id="next" value="Next &gt;&gt;" class="btn btn-primary btn-block btn-lg"/></td>
        </tr>
      
    </table>
  </div>
  </form>

</div>
</body>
</html>