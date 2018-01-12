
<style type="text/css">
  .atc {
    margin-left: 12px;
  }

</style>

<?php
 $string = file_get_contents("assets/json/items.json");
  $items = json_decode($string, true);
?>
<?php
  function display_title(){
    echo "Menu Page";
}

  function display_content(){
    global $items;
    $categories = array_unique(array_column($items, 'category'));
    // print_r($categories);
    // exit();
    // $filter = 'All';
    // if (isset($_GET['category'])) {
    // $filter = $_GET['category'];
    // }
    $filter = isset($_GET['category']) ? $_GET['category'] : 'All';
    ?>
    <h4 class="">Category:</h4>
    <div class="input-field col s12">
    <form>
    <select name="category">
    <?php
      echo("<option> All </option>");
    foreach ($categories as $category) {
      // if ($filter == $category){
      //   echo "<option selected>$category<option>";
      // }else {
      //   echo "<option>$category </option>";
      // }
      echo $filter == $category ? "<option selected>$category</option>" : "<option> $category </option>" ;
    }
  ?>
    </select>
    <label>Sort by:</label>
    <button class="btn"> Sort By:</button>
    </form>
  </div>


  <?php
 
    // require "items.php"; //remove file. replace by json
    echo "<div class='col s12'>";
    echo "<div class='row'>";
    echo "<div class='col s12'>";
  foreach ($items as $index => $item) {
    if($filter == 'All' || $item['category'] == $filter){
      echo "<div class='col s4'>";
      echo "<div class='card'>";
      echo "<div class='card-img'>";
      echo "<img src='".$item['img']."'><br>";
      echo "</div>";
      echo "<div class='card-content'>";
      echo "<h5 style='color:#ab47bc;'>" .$item['name']. "</h5><br>";
      echo $item['description']. "<br>";
      echo "<span style='color:#0d47a1;'> Price: </span> ₱" .$item['price'];
      echo "</div>";
      echo "</div>";
      if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
      echo "<a href='edit.php?index=$index'><button class='btn blue accent-1 atc'> Edit / Delete </button> </a>";
      }elseif (isset($_SESSION['username'])) {
      echo "<button class='btn light-green accent-3 atc'> Add to cart </button>";
      }
      echo "</div>";
    };
    };

    echo "</div>";
    echo "</div>";
    echo "</div>";

  }

  require "template.php"
?>
