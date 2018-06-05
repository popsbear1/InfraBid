<!-- <?php
  session_start();
  if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    include 'databaseconnect.php';
        $que = mysql_query("SELECT * from users where username = '$user'") or die(mysql_error());
        $sql = mysql_fetch_array($que);
          $usertype = $sql['user_type'];

            if ($usertype == 'encoder') {
              header("location:Encoder/home.php");
            }if ($usertype == 'admin') {
              header("location:Admin/home.php");
            }
    
  }else{


?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Infrastructure Project Bidding 2017! | </title>

    <!-- Bootstrap -->
    <link href="public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/build/css/custom.min.css" rel="stylesheet"> 
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
<!--       <?php
        include 'databaseconnect.php';

        if(isset($_POST["submit"])){
              $user=mysql_real_escape_string($_POST['username']);
              $pas=mysql_real_escape_string($_POST['password']);
              $pass = sha1($pas);

              $query=mysql_query("SELECT * FROM users WHERE username='$user'");
              $numrows=mysql_num_rows($query);
              if($numrows!=0)
                {

              while($row=mysql_fetch_array($query))
                  {
                  $dbusername=$row['username'];
                  $dbpassword=$row['password'];
                  $dbtype=$row['user_type'];
                          
                  // if ($pass == $dbpassword ) {
                        $_SESSION['user']=$user;  
                          if ($dbtype == 'encoder') {
                              header("Location: Encoder/home.php");
                          }
                          if ($dbtype == 'admin') {
                              header("Location: Admin/home.php");
                          }
                  // }else{
                  //   echo "<div class='alert alert-danger'>Incorrect Password</div>";
              //}
            }
            }else{
              echo "<div class='alert alert-danger'>Username doesn't exist!</div>";
          }
        }
      }

      ?> -->

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form role="form" method="POST" action="<?php echo base_url('user/login') ?>">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="submit">Log in</button>

                <div class="clearfix"></div>
                <br /> 

                <div>
                  <h1><i class="fa fa-road"></i> InfraProj 2017!</h1>
                  <p>©2017 PGO-IT. Infrastructure Project Bidding 2017</p>
                </div>

              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
