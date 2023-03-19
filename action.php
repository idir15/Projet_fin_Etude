<?php
  require_once 'config.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT nom_wilaya FROM wilaya WHERE nom_wilaya LIKE :wilaya';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['wilaya' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        echo '<a class="list-group-item list-group-item-action border-1 " >' . $row['nom_wilaya'] . '</a>';
      }
    } else {
      echo '<p class="list-group-item border-1">No Record</p>';
    }
  }
?>