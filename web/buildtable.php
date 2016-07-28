<?php
   require_once('config/DBHandler.php');

   $db = new DBHandler();
   $db->connect();
   $db->buildTables();