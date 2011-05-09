<?php

// config
$admin_username = "";
$admin_password = "";

$db_file = "data.db3";
$db_encryption_key = "";

$tpl_file = "template.tpl";
// end config

/*
 * CODE BELOW SHOULD NOT BE EDITED
 */

// setup or connect
if (!file_exists($db_file))
{
	// create database file
	
}
else
{
	// load database
	$db = new SQLite3();
	if (!$db->open($db_file)) // , flags, $db_encryption_key
		die("Error loading the database");
}


// load template
$tpl = file_get_content($tpl_file);
if (!$tpl)
	die("Error loading template file");



$db->query("");

/*

Table -> Field

Field is automaticly loaded into class and put into template

*/




?>