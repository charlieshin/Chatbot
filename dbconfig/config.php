<?php
declare(strict_types=1);

define("HOST", "127.0.0.1");
define("DB_NAME", "chatbot");
define("DB_USER", "charlie");
define("PASS", "bpg-fcv3RNK*gfx0krm");

$host = HOST;
$db_name = DB_NAME;

$dsn = "mysql:host=$host;dbname=$db_name";

try {
	$db = new PDO ($dsn, DB_USER, PASS);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	throw new PDOException($e->getMessage());
}