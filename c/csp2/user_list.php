<?php
	function display_title(){
		echo "User List || Bacabac Farmers Producer Cooperative";
	}
	function display_content(){
	require 'connectdb.php';
	?>
	<table class="bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Status</th>
				<th>Level</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
	<?php
	$sql = "SELECT * FROM users";
	$results = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($results)) {
		extract($row)
		?>
		<tbody>
		<tr>
			<td><?php echo "$first_name $last_name";?></td>
			<td><?php if (isset($user_status) && $user_status == 1) {
					echo "Active";
			}else{
				echo "Deactivate";
			} ?></td>
			<td><?php if (isset($user_level) && $user_level == 1) {
				echo "Admin";
			}elseif ($user_level == 2) {
				echo "Seller";
			}elseif ($user_level == 3) {
				echo "Customer";
			}
			?></td>
			<td><?php echo "<input type='button' class='btn amber accent-4 modal-trigger update_user_modal' href='#update_user_modal' data-id='$id' value='Update'>" ?> </td>
			<td><?php echo "<input type='button' class='btn red accent-4 modal-trigger delete_user_modal render_modal' href='#delete_user_modal' data-id='$id' value='Delete'>" ?> </td>
		</tr>
		</tbody>
		<?php
	};
	?>
	</table>
	  <!-- Update user modal -->
      <!-- Modal Structure -->
      <div id="update_user_modal" class="modal user-modal update">
        <div class="modal-content">
          <h4 class="modal-title center">Update User</h4>
          <div class="update_user-modal-body" id="update-user-modal-body">
            
          </div>
        </div>
      </div>

	  <!-- delete user modal -->
      <!-- Modal Structure -->
      <div id="delete_user_modal" class="modal user-modal">
        <div class="modal-content">
          <h4 class="modal-title">Are you sure you want to delete this user?</h4>
          <div class="delete_user-modal-body" id="delete-user-modal-body">
            
          </div>
        </div>
      </div>
	<?php
	}
	require 'template.php';
?>
<!-- <script type="text/javascript" src="customjs.js"></script> -->
<script type="text/javascript">
	
	//update user modal
      $(".update_user_modal").click(function(){
      var id = $(this).data('id');
        $.ajax({
          method : 'post',
          url: 'users_update.php',
          data: {
            edit : true,
            id : id
          },
          success: function(data){
          	// console.log(data);
            $('#update-user-modal-body').html(data);
          }
        });
      });
	  //delete user modal
      $(".delete_user_modal").click(function(){
      var id = $(this).data('id');
        $.ajax({
          method : 'post',
          url: 'delete_user_modal.php',
          data: {
            edit : true,
            id : id
          },
          success: function(data){
          	// console.log(data);
            $('#delete-user-modal-body').html(data);
          }
        });
      });
</script>