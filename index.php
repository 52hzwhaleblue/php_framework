<?php

session_start();

const BASE_PATH = __DIR__ . '/';

require "functions.php";

// require "router.php";

require "Database.php";

$config = require "config.php";

$d = new Database($config);

$id = 1;
$query = "select * from notes where id = ? ";
$notes = $d->query($query, [$id])->fetch();

dd($notes);
