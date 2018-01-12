<?php session_start(); 
// $username = "";
// if(isset($_SESSION['username'])){
//   $username = $_SESSION['username'];
// };
//ternary examples
$username = isset($_SESSION['username']) ? //if
            $_SESSION['username']           //true
            : "";                            //false
// $num = 5;
// $output = ($num%2==0) ? "even" : "odd";
// echo $output;
?>


  <nav>
    <div class="nav-wrapper purple lighten-4">
      <div class="container">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="about.php">About</a></li>
        <?php 
          if(isset($_SESSION['username'])){
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
        ?>
      </ul>
      <ul class="side-nav" id="About-demo">
        <li><a href="home.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php 
          if(isset($_SESSION['username'])){
            echo "<li><a href='logout.php'>Log Out</a></li>";
          }
        ?>
      </ul>

    </div>
  </nav>


          