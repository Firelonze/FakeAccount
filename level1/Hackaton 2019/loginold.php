<!DOCTYPE html>
<html lang="nl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>login</title>
  </head>
  <?php
  $username = "";
  $nameError = $passError = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if ($_POST["username"] == "annemarie" && $_POST["password"] == "wcpot123"){
      $username = "Welcome " . test_input($_POST["username"]);
      $username = "";
      $nameError = $passError = "";
      header("Location: index.html"); 
 
    }else {
      $nameError = "Dit is een foute naam";
      $passError = "Dit is een foute password";
    }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
      if ($_POST["username"] == "jasmine" && $_POST["password"] == "Jasmine1998"){
        $username = "Welcome " . test_input($_POST["username"]);
        $username = "";
        $nameError = $passError = "";
        echo "sup biatch";
   
      }else {
        $nameError = "Dit is een foute naam";
        $passError = "Dit is een foute password";
      }
      }
      if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if ($_POST["username"] == "henk" && $_POST["password"] == "BetyLoveYou"){
          $username = "Welcome " . test_input($_POST["username"]);
          $username = "";
          $nameError = $passError = "";
          header("Location: index.html"); 
     
        }else {
          $nameError = "Dit is een foute naam";
          $passError = "Dit is een foute password";
        }
        }
  function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <body>
    <div class="container">
    <form class="???" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p>username:</p>  
    <input type="text" name="username" id="username" autocomplete="off"><?php echo $nameError ?><br>
    <p>password:</p>    
    <input type="password" name="password" id="password" autocomplete="off"><?php echo $passError ?><br>
    <input type="submit" name="submit" value="submit">
    </form>
    </div>
    <div class="sidebar">
              <a href="index.html"><i class="fa fa-fw fa-home"></i></a>
              <a href="friends.html"><i class="fa fa-fw fa-user"></i> </a>
              <a href="login.php"><i class="fa fa-fw fa-envelope"></i></a>
    </div>
  </body>
</html>
<?php
echo $username;
?>