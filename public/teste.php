<?php
require_once __DIR__ . '/../src/Database.php';

$db = Database::getConnection();

echo "Banco de dados conectado com sucesso!";
