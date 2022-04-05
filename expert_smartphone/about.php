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

<nav class="navbar navbar-light bg-info">
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
  <img src="images/smartphone.jpg" width="100%"/><br>
  <div class="panel panel-default">
    <h3>What’s Inside My Smartphone? — An In-Depth Look At Different Components Of A Smartphone</h3>
    <div class="panel-body">
    <p>There are a lot of factors to keep in mind when buying a smartphone like Display, Battery Life, Fast Charging, Speakers, Cameras, and Design. However, picking the right smartphone has become more complex than ever due to the saturated market. However, apart from the outer beauty, the inner components also matter and may help you make a better purchase decision. You may have to deal with far fewer annoyances down the road if something goes wrong with your phone. Today we shall be exploring the inner beauty of what’s become one of the essential devices of today’s computing age. Are you ready to find out more about what’s inside a smartphone? Then let’s begin.</p><br><br>
    <center><img src="images/parts.png" width="80%"/><br></center>
    <h4>Refer to Attached File</h4>

    <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Mobile Hardware</button>
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="document">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Mobile Hardware</h4>
                    </div>
                    <div class="modal-body">

                        <embed src="files/mobile_hardware.pdf"
                               frameborder="0" width="100%" height="400px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


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