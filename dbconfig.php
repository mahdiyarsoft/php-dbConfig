<?php
  // MAHDIYAR SAHBAEE AHMADI
  $DNS = "mysql";          //Database type.
  $HOST = "localhost";     //The host where the database is located #default: "localhost".
  $DBNAME= "###";          //The database you want to connect to #databaseName.
  $dbUSERNAME= "root";     // database userName #default: "root".
  $dbPASSWORD= "";         // database userName #default: "null".
  $con = new  PDO("$DNS:host=$HOST;dbname=$DBNAME;charset=utf8", "$dbUSERNAME", "$dbPASSWORD");
?>
