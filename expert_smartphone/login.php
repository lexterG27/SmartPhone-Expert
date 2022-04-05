<?php 
  include 'dbcon.php';
  session_start();
  if (isset($_POST['login'])){
    $UN = $_POST['usrnm'];
    $PW = $_POST['psswrd'];

    $result = $db->query("SELECT * FROM users WHERE username='$UN' AND BINARY password=BINARY '$PW'");
    $row = $result->fetch_array(MYSQLI_ASSOC);  
    if ($row>0) {
      //$_SESSION['login_user'] = $UN;
      $_SESSION['id'] = $row['userid'];
      
      header('location: homepage.php');
    }
  }
  else{
    $_SESSION["LoginFail"] = "Yes";

  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Smartphone Expert</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="form-login">
          <div style="text-align:center">
              <img class="img img-responsive" src="images/login.png">
          </div>
          <form method="POST" class="form-horizontal" role="form">
            <div class="panel-heading">
              <h3 align="center"></h3><br>
              <h4 align="center">Login</h4>
            </div>
            <div class="form-group">
              <input type="text" name="usrnm" id="un" class="form-control animated bounceIn" required="required" placeholder="Username">
            </div>
            <div class="form-group">
              <input type="password" name="psswrd" id="pw" class="form-control animated bounceIn" required="required" placeholder="Password">
            </div>
            <div class="form-group">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-success col-lg-12" name="login" value="Login">
              <?php 
              if(!isset($_SESSION["LoginFail"])) {
                      echo "<div style='color: red;' > Wrong Username or Password. Please check your login details.</div>";
                
                     } ?>
                    

            </div>
             <br>
             <br>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>