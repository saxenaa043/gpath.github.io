<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Gpath</title>

  <!-- CSS  -->
  
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="cyan loaded" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="image/imageedit_6_2240535024.png" style="height: 120px;width: 250px;margin-top: -15px"></a>
      <ul class="right hide-on-med-and-down">
          <li class="<?php echo ($page == "index" ? "active" : "")?>"><a href="index.php">Home</a></li>
          <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="About.php">About Us</a></li>
          <li><a href="#">Project</a></li>
          <li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="Contact.php">Contact Us</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
       <li><a href="index.php">Home</a></li>
          <li><a href="About.php">About Us</a></li>
          <li><a href="#">Project</a></li>
          <li><a href="Contact.php">Contact Us</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>