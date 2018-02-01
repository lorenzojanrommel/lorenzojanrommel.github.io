<?php 
	function display_title(){
		echo "Your Profile";
	}
	function display_content(){
		?>
		<div class="col s12">
		<div class="profile-container">
			<?php
			require 'connectdb.php';
			$user = $_SESSION['username'];
			$sql = "SELECT * FROM users WHERE username = '$user'";
			$results = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($results);
			extract($row);
			?>
			<div class='col s4 user-img'>
			<img class='responsive-img user_img' src='assets/img/no-img.jpg'>
			</div>
			<div class='col s4'>
				<input type="button" class="btn green modal-trigger profile-modal" id="profile" value="Edit Your Profile" href="#user-profile-modal" data-id=<?php echo $id; ?>>
			</div>
			<div class='clearfix user-name'>
			<strong>Name: </strong><?php echo $first_name ." ". $last_name; ?>
			</div>
			<div class='user-email'>
			<strong class='user-email'> Email: </strong> <?php echo $email; ?>
			</div>
			<div class='user-mobile'>
			<strong> Mobile: </strong> <?php echo $mobile_number; ?>
			</div>
			<div class='user-address'>
			<strong> Address: </strong> <?php echo $address; ?>
			</div>
		</div>
		</div>
		<div class="col s12">
			<div class="profile-divider">
				
			</div>
		</div>
	<!-- User Profile modal -->
      <!-- Modal Structure -->
      <div id="user-profile-modal" class="modal profile-modal update">
        <div class="modal-content">
          <h4 class="modal-title center">Update your profile</h4>
          <div class="user-profile-body" id="user-profile-modal-body">
            
          </div>
        </div>
      </div>
		<?php
		if (isset($_SESSION['username']) && $_SESSION['user_level'] == 2) {
			echo "<div class='col s12'>
			<div class='order-details-container'>
				<h4>Orders</h4>
			</div>
		</div>";
		}else{
		?>
		<div class="col s12">
			<div class="order-details-container">
				<h4>Order Details:</h4>
				<?php 
				$user = $_SESSION['username'];
				$sql = "SELECT * FROM orders WHERE user_id = (SELECT id FROM users WHERE username = '$user')";
					$results = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($results)) {
						extract($row);
					// foreach ($row as $key => $value) {
					// 	echo $value."<br>";
					// }
						$sql1 = "SELECT * FROM products JOIN order_details ON 
							(products.id = order_details.product_id) JOIN orders ON
							(order_details.order_id = orders.id) JOIN users ON (orders.user_id = users.id) 
							WHERE order_id = '$id'";
						$resultss = mysqli_query($conn, $sql1);
						$row2 = mysqli_fetch_assoc($resultss); 
						extract($row2);
						$total = 0;
						$subtotal = $price * $quantity;
						$total += $subtotal;
						?>
						<table>
							<thead>
								<tr>
								<th><?php echo $order_id; ?></th>									
								</tr>
								<tr>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Subtotal</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo $name; ?></td>
									<td><?php echo $quantity; ?></td>
									<td><?php echo $price; ?></td>
									<td><?php echo $subtotal; ?></td>
								</tr>
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td><?php echo $total; ?></td>
								</tr>
							</tbody>
						</table>
						<?php
					}

				?>
			</div>
		</div>
		<?php
		}
	}
	require 'template.php';
 ?>
 <script type="text/javascript">
 		//user profile modal
      $("#profile").click(function(){
      var id = $(this).data('id');
        $.ajax({
          method : 'post',
          url: 'user_profile_update.php',
          data: {
            edit : true,
            id : id
          },
          success: function(data){
          	// console.log(data);
            $('#user-profile-modal-body').html(data);
          }
        });
      });
 </script>