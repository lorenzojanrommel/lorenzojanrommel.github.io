	<div class="sidebar">
 <?php
    if (isset($_SESSION['username']) 
       && ($_SESSION['user_level'] == 1) 
      && $_SESSION['user_status'] == 1) {
       echo "Hello: ".$_SESSION['username'];
      }elseif (isset($_SESSION['username']) 
              && ($_SESSION['user_level'] == 2)
              && $_SESSION['user_status'] == 1){
        echo "Hello: ".$_SESSION['username'];
      } elseif (isset($_SESSION['username']) 
              && $_SESSION['user_level'] == 3
              && $_SESSION['user_status'] == 1){
        echo "Hello: ".$_SESSION['username'];
        echo "<br><a href='cart_item.php'><button class='btn green accent-3 atc'> Shop Cart </button> </a>";

      }elseif(isset($_SESSION['username']) && $_SESSION['user_status'] == 2) {
    ?>
  <form action="authenticate.php" method="POST">
      <div class="disabled-message ">
      <p class="disable-message center">Account has been disabled</p>
      </div>
        <div class="input-field col s12">
          <input id="text" name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
  	 <div class="input-field col s12">
	  <input type="submit" name='login' class="btn waves-effect blue accent-4" value='Login'>
  	</div>
	</form>
<?php }else{ ?>
  <form action="authenticate.php" method="POST">
        <div class="input-field col s12">
          <input id="text" name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
        <div class="input-field col s12">
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
    <input type="checkbox" id="test5" />
      <label for="test5">Red</label>
     <div class="input-field col s12">
    <input type="submit" name='login' class="btn waves-effect blue accent-2" value='Login'>
    </div>
  </form>
<?php } ?>
</div>
