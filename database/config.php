<?php

// Configuration for database connection

$host       = getenv('AZURE_MYSQL_HOST');
$username   = getenv('AZURE_MYSQL_USERNAME');
$password   = getenv('AZURE_MYSQL_PASSWORD');
$db_name     = getenv('DB_DATABASE');
$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem";
