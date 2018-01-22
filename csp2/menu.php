
<style type="text/css">
  .qttyItem {
    width: 134px;
    text-align: right;
}
</style>

<?php
 // $string = file_get_contents("assets/json/items.json");
 //  $items = json_decode($string, true);
?>
<?php
  function display_title(){
    echo "Menu Page";
}

  function display_content(){
    // global $items;
    // $categories = array_unique(array_column($items, 'category'));
    // print_r($categories);
    // exit();
    $filter = 'All';
    // if (isset($_GET['category'])) {
    // $filter = $_GET['category'];
    // }
    $filter = isset($_GET['category']) ? $_GET['category'] : 'All';
    require 'connectiondb.php'; //
    ?>
    <h4 class="">Category:</h4>
    <div class="input-field col s12">
    <form>
    <select name="category">
    <?php
      echo("<option> All </option>");
      $sql = "SELECT * FROM categories";
      $results = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($results)) {
        $id = $row['id'];
        $category = $row['name'];
      
    // foreach ($categories as $category) {
    //   // if ($filter == $category){
    //   //   echo "<option selected>$category<option>";
    //   // }else {
        // echo "<option>$category</option>";
        // echo "<option value='$id'>$category </option>";
    //   // }
      echo $filter == $id ? "<option selected value='$id'>$category</option>" : "<option value='$id'> $category </option>" ;
    // }
    };
  ?>
    </select>
    <label>Sort by:</label>
    <button class="btn"> Sort By:</button>
    </form>
  </div>
  <a href=""></a>

  <?php
    $sql = "SELECT * FROM items";
    $results = mysqli_query($conn, $sql);
 
    // require "items.php"; //remove file. replace by json
    echo "<div class='col s12'>";
    echo "<div class='row'>";
    echo "<div class='col s12'>";
    while ($item = mysqli_fetch_assoc($results)) {
      $index = $item['id'];
  // foreach ($items as $index => $item) {
    if($filter == 'All' || $item['category_id'] == $filter){
      echo "<div class='col s4'>";
      echo "<div class='card'>";
      echo "<div class='card-img'>";
      echo "<img src='".$item['image']."'><br>";
      echo "</div>";
      echo "<div class='card-content'>";
      echo "<h5 style='color:#ab47bc;'>" .$item['name']. "</h5><br>";
      echo $item['description']. "<br>";
      echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$item['price'];
      echo "</div>";
      echo "</div>";
      if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {
      echo "<button class='btn blue accent-1 atc modal-trigger render_modal' href='#modal1' data-index='$index'> Edit</button>"; 
      echo "<button class='btn red atc modal-trigger delete_render_modal' href='#delete_modal' data-index='$index'> Delete </button>";
      }elseif (isset($_SESSION['username'])) {
      echo "<form method='post' action='cart_item_endpoint.php?index=$index'>";
      echo "QTTY: <input type='number' min='o' class='qttyItem' name='item_qtty'>";
      echo "<button class='btn light-green accent-3 atc'> Add to cart </button>";
      echo "</form>";
      }
      echo "</div>";
    };
    };
    ?>
    <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Modal Header</h4>
          <div class="modal-body" id="modal-body">
            
          </div>
        </div>
      </div>

      <!-- delete modal -->
      <!-- Modal Structure -->
      <div id="delete_modal" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Are you sure you want to delete this item?</h4>
          <div class="delete-modal-body" id="delete-modal-body">
            
          </div>
        </div>
      </div>
      <?php
    echo "</div>";
    echo "</div>";
    echo "</div>";

  }

  require "template.php"
?>

<script type="text/javascript">
    $(".render_modal").click(function(){
      var index = $(this).data('index');
      // $.post('render_modal_body_endpoint.php', //url api
      //   {  index : index }, //variable (key-value pairs to be passed)
      //   function(data){ //callback function 
      //     $('#modal-body').html(data);

      //   });

        $.ajax({
          method : 'post',
          url: 'render_modal_body_endpoint.php',
          data: {
            index : index
          },
          success: function(data){
            $('#modal-body').html(data);
          }
        });
      });

      //delete modal
      $(".delete_render_modal").click(function(){
      var index = $(this).data('index');
      // $.post('render_modal_body_endpoint.php', //url api
      //   {  index : index }, //variable (key-value pairs to be passed)
      //   function(data){ //callback function 
      //     $('#modal-body').html(data);

      //   });

        $.ajax({
          method : 'post',
          url: 'delete_modal_body_endpoint.php',
          data: {
            index : index
          },
          success: function(data){
            $('#delete-modal-body').html(data);
          }
        });
      });
</script>
