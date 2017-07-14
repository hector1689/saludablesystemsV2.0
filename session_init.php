<?php 

require 'class/database.php';
require 'class/sessions.php';


require 'class/users.php';

$objuser = new Users();

$objuser->login_in();