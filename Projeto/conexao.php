<?php
   define("DB_HOST", "");
   define("DB_NAME", "");
   define("DB_USER", "");
   define("DB_PASS", "");
   
   return new PDO(sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_NAME), DB_USER, DB_PASS);
?>