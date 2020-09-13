<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';      // 'pgsql', 'mariadb', 'mysqli', 'sqlsrv'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost    = 'db';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname    = 'myDb';     // database name, eg totara
$CFG->dbuser    = 'user';   // your database username
$CFG->dbpass    = 'test';   // your database password
$CFG->prefix    = 'mdl_';       // prefix to use for all table names
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',        
    'dbhandlesoptions' => false,                    
);

$CFG->wwwroot   = 'http://127.0.0.1:8000';
$CFG->dataroot  = '/var/www/sitedata';
$CFG->directorypermissions = 02777;

require_once(__DIR__ . '/lib/setup.php'); // Do not edit

