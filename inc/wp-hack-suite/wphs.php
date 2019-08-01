<?php
  $url=$_GET["url"];
  // $show=$_GET["show"];
    echo "<center>";
    echo "<h1 class=\"head\">WORDPRESS HACKING POCs</h1>";

    echo "TARGET => http://".$url."/";
    echo "<form action=\"\" method=\"get\">";
        echo "<input type=\"text\" name=\"url\" value=\"\" />&nbsp;&nbsp;";
        echo "<input type=\"hidden\" name=\"page\" value=\"wphs\">";
        echo "<input type=\"submit\" value=\"NEW TARGET\" />";
    echo "</form><br>";

    echo "<form action = \"?page=wphs&url=".$url."\" method = \"post\">";
    echo "<input type=\"submit\" name=\"t\" value=\"sqli\"/> &nbsp;&nbsp;";
    echo "<input type=\"submit\" name=\"t\" value=\"xss\"  />&nbsp;&nbsp;";
    echo "<input type=\"submit\" name=\"t\" value=\"rce\"  />&nbsp;&nbsp;";
    echo "<input type=\"submit\" name=\"t\" value=\"file_upload\"  />&nbsp;&nbsp;";
    echo "<input type=\"submit\" name=\"t\" value=\"leak\"  />";
    echo "</form>";

    $sql = "SELECT id FROM wp_vulns ORDER BY need;";

    if (isset($_POST["t"])) {
      // code...
      $sql = "SELECT id FROM wp_vulns WHERE type=? ORDER BY need;";
      $v=$_POST["t"];
    }
    if (isset($_POST["s"])) {
      // code...
      $sql = "SELECT id FROM wp_vulns WHERE name like '?' ORDER BY need;";
      $v=$_POST["s"];

    }

    include 'dbconnect.php';

    echo "caca";
    $stmt = $dbCon->prepare($sql);
    $stmt->bindParam('1', $v, PDO::PARAM_STR);
    $stmt->execute();
    $n = $stmt->rowCount();
    // echo "<pre>";
    // echo "<code>";
    while ($row = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)){
      echo "<hr>";
          include "hacks/".$row[0].".php";
      echo "<hr>";
    }
    // echo "</code>";
    // echo "</pre>";


 ?>
</center>
