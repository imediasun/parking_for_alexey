<?php
/*
 *
 *    Скрипт комментариев.
 *    Версия: 1.0 (beta)
 *    Дата: 10.02.2012
 *    Автор: Чернышов Роман
 *    Сайт: http://rche.ru
 *    Эл.почта: houseprog@ya.ru
 *
 */


define( '_RCHE', 1 );


$AdminPass = '12345';

// Настройки БД
$settings = array(
  'dbName' => '',
  'dbUser' => '',
  'dbPass' => '',
  'dbHost' => 'localhost'
 );


// Пути
$paths['capcha'] = 'capcha.php'; // вариант: /comments/capcha.php


error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once('class.registry.php');
require_once('class.dbsql.php');
require_once('class.controller.php');
require_once('class.comments.php');
require_once('functions.php');
require_once('markhtml.php');

session_start();

$DB=new DB_Engine('mysql', $settings['dbHost'], $settings['dbUser'], $settings['dbPass'], $settings['dbName']);
$registry = new Registry;

$registry->set('DB',$DB);

$comments = new Comments($registry);
$comments->admin=@($_GET['pass']==$AdminPass)?true:false;
$comments->login=false;
$comments->user=array();
$comments->gravatar=true;
$comments->paths=$paths;
$comments->capcha=true;
$comments->index();

