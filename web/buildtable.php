<?php
	ini_set('display_errors', 1);
   require_once('config/DBHandler.php');

   $db = new DBHandler();
   $db->connect();
   $db->buildTables();
   $db->buildRaffleTables();