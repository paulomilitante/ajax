	<nav class='deep-orange lighten-2'>
    <div class="nav-wrapper">
      <a href="home.php" class="brand-logo thisLogo"><img class='imgLogo' src="https://www.shareicon.net/data/2016/08/18/814164_interface_512x512.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
         <?php
            session_start();
            $username = "";
            if (isset($_SESSION['username'])){
              echo "<li><a href='home.php'>";
              $username = "Hello ".ucfirst($_SESSION['username'])."!";
            echo ucfirst($username).'</a></li>';
            }

          ?>
        <li><a href=<?php 

  if (isset($_SESSION['username']))
    echo '"http://localhost/Paulo/partialsPaulo/items.php">Menu';
  else
    echo '"http://localhost/Paulo/partialsPaulo/login.php">Log-in';
  ?></a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <?php 
          if (isset($_SESSION['username']))
            echo "<li><a href='http://localhost/Paulo/partialsPaulo/logout.php'>Logout</a></li>";
          ?>
      </ul>
    </div>
  </nav>