<?php

// This file contains the database access information
// This file establishes a connection to MySQL and selects the database
// This file defines a function for making data safe to use in queries
// This file defines a function for hashing passwords

// Set the database access information as constants
DEFINE ('DB_USER', 'pw99db');
DEFINE ('DB_PASSWORD', 'pw99dbpassword');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'pw99db');

// Make the connection & character set
$dbc = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbc, 'utf8');


// Home URL base
DEFINE ('PW99_HOME', 'https://write.pink/99');
