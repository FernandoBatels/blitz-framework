<?php
/*
 * Blitz Framework - Small Framework to PHP
 * Copyright (C) 2016 Fernando Batels <luisfbatels@gmail.com>
 */

\blitz\vendor\Bootstrap::$settings['app'] = [
    'name' => 'Blitz Framework',
    'author' => 'Fernando Batels',
    'author_email' => 'luisfbatels@gmail.com',
    'url' => 'http://localhost/blitz-framework'
];


\blitz\vendor\Bootstrap::$settings['use_http_encoding_gzip'] = true;
\blitz\vendor\Bootstrap::$settings['use_http_output_minify'] = true;

//Data Source Name(http://php.net/manual/pt_BR/pdo.construct.php)
\blitz\vendor\Bootstrap::$settings['db']['dns'] = 'mysql:host=localhost;dbname=testes_blitz;charset=utf8';
\blitz\vendor\Bootstrap::$settings['db']['user'] = 'root';
\blitz\vendor\Bootstrap::$settings['db']['pass'] = '12345678';
//http://php.net/manual/pt_BR/pdo.setattribute.php
\blitz\vendor\Bootstrap::$settings['db']['attributes'] = [
    //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    //PDO::ATTR_CASE => PDO::CASE_LOWER,
    //....
];

/**
 * Enable if you use specific lib
 */
//\blitz\vendor\Bootstrap::$settings['vendor_libs'][]= 'bistro';//To Sessions
\blitz\vendor\Bootstrap::$settings['vendor_libs'][] = 'database'; //To Databases
/**
 * Every library needs a infos.php file with your settings
 */
\blitz\vendor\Bootstrap::$settings['app_libs'] = [
        //'api-my-server-folder'
];
/**
 * Every helpers needs a static methods and extends from Helpers class
 */
\blitz\vendor\Bootstrap::$settings['app_helpers'] = [
        //'MyAdmin'
];



setlocale(LC_MONETARY, "pt_BR");
date_default_timezone_set('America/Sao_Paulo');

ini_set("display_errors", false);

error_reporting(E_ERROR | E_WARNING | E_PARSE);
//error_reporting(0);
