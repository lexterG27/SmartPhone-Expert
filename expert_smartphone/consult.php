<?php 
include("dbcon.php");
$select ="select * from issue";
$d = $db->query($select);
$no = mysqli_num_rows($d);
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

<nav class="navbar navbar-fixed-top navbar-light bg-info">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="homepage.php">SmartphoneFix</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="homepage.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li class="active"><a href="about.php"><span class="glyphicon glyphicon-phone"></span> About Smartphone</a></li>
        <li class="active"><a href="consult.php"><span class="glyphicon glyphicon-compressed"></span>Troubleshoot</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="modal" data-target="#myModalLogout"><i class="fa  fa-share-square-o fa-fw"></i><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
  </nav>

<div class="container">
  <img src="images/smartphone.jpg" width="100%" class="img img-responsive"/><br>
  <div align="center">
    <table class="table table-striped">
      <tr class="success">
        <th width="57" bgcolor="#0066FF">Issue No.</td>
        <th width="457" bgcolor="#0066FF">Issues</td>
        <th width="213" bgcolor="#0066FF">How To?</td>
      </tr>
      <tr>
      <?php  
		
		for($i=1; $i<=$no; $i++){
			$rows = mysqli_fetch_assoc($d); ?>
        <td>
			
			<?php
		
		echo $i;
		
		
		?></td>
        <td><?php echo  $rows['issue']; ?></td>
        <td>| <a href="yes_no.php?idt=<?php echo $rows['nom']; ?>">Troubleshoot with Yes / No</a></td>
      </tr>
      <?php  } ?>
    </table>
  </div>

</div>


</div>


<!--modal for logout-->
<div id="myModalLogout" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> &times;</button>
                <h4>Logout?</h4>
            </div>
            <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                   <form class="form-inline" method="post" action="login.php" id="validation_form">
                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button> 
                    <input type="submit" name="submit" class="btn btn-success success btn-md" value="Yes" id="button1">
                     
               
                    </form>
            </div>
<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
</div>
</body>
</html>