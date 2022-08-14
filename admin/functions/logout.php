<?php
include_once 'connection.php';
include_once 'global.php';

unset($_SESSION['user']);
redirectTo('/admin/login.php');
