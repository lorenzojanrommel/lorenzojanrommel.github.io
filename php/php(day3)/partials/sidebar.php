	<div class="sidebar">
    <?php
        if(isset($_SESSION['username'])){
            echo "Hello: ".$_SESSION['username'];
        }else { 
    ?>
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
	  <button type="submit" class="btn waves-effect green accent-2">Submit</button>
  	</div>
	</form>
<?php } ?>
</div>
