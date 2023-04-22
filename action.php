<?php
  require_once 'config.php';


  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT * FROM producttb WHERE product_name LIKE :product';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['product' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a href="'. $row['product_link'] .'" class="list-group-item list-group-item-action border-1">' . $row['product_name'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Result Found</p>';
    }
  }


?>