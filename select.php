<?php
  $conn = mysqli_connect(
    'ekd-db.cluster-ro-cemsmueqtaqw.ap-northeast-2.rds.amazonaws.com',
    'admin',
    'admin123',
    'testdb');
  $sql = "SELECT filename,title,info FROM testinfo ORDER BY time DESC LIMIT 0,8";
  $result = mysqli_query($conn, $sql);
  $fname = array();
  $title = array();
  $info = array();

  while($r = mysqli_fetch_assoc($result)){
          $fname[] = $r['filename'];
          $title[] = $r['title'];
          $info[] = $r['info'];
  }
?>
