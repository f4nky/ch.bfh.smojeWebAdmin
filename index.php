<?php

if((!isset($_GET['page'])) || ($_GET['page'] == 'home')) {
	include_once('home.php');
} else {
	include_once($_GET['page'] .'.php');
}