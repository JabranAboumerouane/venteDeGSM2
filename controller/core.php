<?php
session_start();
require_once '../controller/Control_util.php';
require_once '../model/Model.php';
require_once '../controller/Form.php';


if(!isset($_SESSION['email_S']) && !strpos($_SERVER['REQUEST_URI'], '/controller/login.php')/*empeche http */ )
{
   header('Location: login.php');
}
