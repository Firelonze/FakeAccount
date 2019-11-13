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
        if ($_POST["username"] == "henk" && $_POST["password"] == "BetyLoveYou"){
          $username = "Welcome " . test_input($_POST["username"]);
          $username = "";
          $nameError = $passError = "";
          header("Location: successhenk.html"); 
     
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
    <!-- Tips om wachtwoorden te raden: de naam van de gebruiker de namen van iemands broers en zussen. de naam van iemands huidige of favoriete (huis)dier. iemand zijn/haar geboorte datum. het adres kan voor komen als wachtwoord van een gebruiker. meestal begint het wachtwoord met een hoofdletter, let goed op wat de gebruiker heeft gezegd/gepost -->
    <p>username: henk </p>  
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
    <br>
    <input type="submit" name="submit" value="submit">
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <a href="#" data-toggle="popover" title="hint" data-content="Hier komt de hint">hint nodig?</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
</body>
</html>