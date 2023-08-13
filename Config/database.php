<?php
//
// Database Configuration File created by baserCMS Installation
//
class DATABASE_CONFIG {
public $default = array(
	'datasource' => 'Database/BcMysql',
	'persistent' => false,
	'host' => 'localhost',
	'port' => '3306',
	'login' => 'basercms_user',
	'password' => 'd4skMW5bq',
	'database' => 'basercms_db',
	'schema' => '',
	'prefix' => 'mysite_',
	'encoding' => 'utf8'
);
public $test = array(
	'datasource' => 'Database/BcMysql',
	'persistent' => false,
	'host' => 'localhost',
	'port' => '3306',
	'login' => 'basercms_user',
	'password' => 'd4skMW5bq',
	'database' => 'basercms_db',
	'schema' => '',
	'prefix' => 'mysite_test_',
	'encoding' => 'utf8'
);
}
