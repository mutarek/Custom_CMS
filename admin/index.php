<?php
session_start();
if(isset($_SESSION ['username']))
{
    header("Location: http://localhost/cms/admin/layouts/");
}
else
{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
                       <div style="text-align:center">
                           <h1 style="text-align:center">Admin Login</h1>
                           <img  src="https://i0.wp.com/dhakacity.com.bd/wp-content/uploads/2022/03/cropped-logo-of-dhakacity.png?w=561&ssl=1" alt="" height="200px" width="200px">
                       </div>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

                            <div class="container">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="uname" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <button name="login" name="submit" type="submit">Login</button>
                                <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                            </div>

                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                        </form>
                        <!-- /Form  End -->
                        <?php
                     if(isset($_POST['login'])){
                      require "database/dbcon.php";
                      $db = new newdatabase();
                      $username = $_POST['uname'];
                      $password = $_POST['psw'];
                      $query = "SELECT * FROM user WHERE username = '$username' AND userpass = '$password' ";
                      $result = $db->fetch_query($query);

                      if(mysqli_num_rows($result)>0){
                        $data = mysqli_fetch_assoc($result);
                        $username = $data['username'];
                        $password = $data['userpass'];
                        $userid = $data['user_id'];
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["password"] = $password;
                        $_SESSION["userid"] = $userid;
                        header("Location: http://localhost/cms/admin/layouts/");
                      }
                      else{
                          echo "Your Crediantial Is Wrong";
                      }
                  }
                  ?>

</body>
</html>
<?php } ?>