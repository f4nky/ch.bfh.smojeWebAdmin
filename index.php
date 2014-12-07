<?php

if((!isset($_GET['page'])) || ($_GET['page'] == 'home')) {
	require_once('home.php');
} else {
	require_once($_GET['page'] .'.php');
}