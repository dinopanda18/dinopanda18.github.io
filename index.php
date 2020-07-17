<!DOCTYPE html>
<html>
<head>
  <title>TTL</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="love-letter.png"/>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="panda.svg" id="icon" alt="User Icon" style="width: 35px; height: 35px;" />
      <img src="dino.svg" id="icon" alt="User Icon" style="width: 50px; height: 50px;" />
    </div>

    <!-- Login Form -->
     <form action="" method="post">
      <input type="text" name="username" placeholder="username">
      <input type="password" name="passwd" placeholder="password">
      <input type="submit" name="submit" value="Login">
    </form>
    <?php
    if(isset($_POST['submit'])){
      $user = $_POST['username'];
      $passwd = $_POST['passwd'];
      if($user ==  'dinopanda' && $passwd == 'iloveu1807'){
        header("Location: main.php");
        exit();
      }
      else{
        echo '<script type="text/javascript">';
        echo ' alert("Wrong username or password!!!")';  
        echo '</script>';
      }
    }
  ?>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="js/main.js"></script> -->
</body>
</html>