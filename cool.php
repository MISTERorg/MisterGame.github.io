<?php
  require_once('./phpfolder/component.php');

  $connect = mysqli_connect('localhost', 'root', '', 'Productdb');
  $sql = "SELECT * FROM `producttb`";
  $result = mysqli_query($connect, $sql);

  if ($result){
    if(mysqli_num_rows($result)>0){
      while($row = mysqli_fetch_assoc($result)){
        if($row['id'] ==1 ){
          cartDescription($row['product_image'], $row['product_name'], $row['product_price'], $row['id']);
        }
      }
    }
  }
?>