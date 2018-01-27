<?php
	function display_title(){
		echo "User List || Bacabac Farmers Producer Cooperative";
	}
	function display_content(){
	require 'connectdb.php';
	?>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Status</th>
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
			<td><?php echo "<select>
					<option>Active</option>
					<option>Deactivate</option>
					</select>";?></td>

		</tr>
		</tbody>
		<?php
	};
	?>
	</table>
	<?php
	}
	require 'template.php';
?>