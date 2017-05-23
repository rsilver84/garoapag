<?php
require_once('../config.php');
require_once(DBAPI);
$users = null;
$user = null;
/**
 *  Listagem de Usuários
 */
function index() {
	global $users;
	$users = find_all('users');
}