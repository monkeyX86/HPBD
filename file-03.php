<?php header("Access-Control-Allow-Origin:*")?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <?php
//GET - POST
echo "Nhan du lieu bang phuong thuc GET";
echo "<br>==============================";
echo "<pre>";
echo print_r($_GET);
echo "</pre>";
echo "Nhan du lieu bang phuong thuc POST";
echo "<br>==============================";
echo "<pre>";
echo print_r($_POST);
echo "</pre>";
?>