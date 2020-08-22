<?php
require 'core.php';
session_destroy();
unset($_SESSION['email_S']);
unset($_SESSION['email_SOK']);
require 'welcome.php';
