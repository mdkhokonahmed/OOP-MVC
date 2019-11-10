<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo baseurl;?>/public/css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
</br></br></br></br></br>
<div class="container">
   <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                        <div style="color: red">
                          <?php
                            
                              
                            if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                             }
                             ?>
                   

                        </div>
                    </div>

                      <div class="panel-body">
                        <form role="form" action="<?php echo baseurl;?>/Admin/check_login" method="POST">
                       
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>
                               
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="btn" value="Login">
                                </div>
                           
                        </form>
                    </div>
                       </div>
                           </div>
                       </div>
                </div>


</body>
</html>
