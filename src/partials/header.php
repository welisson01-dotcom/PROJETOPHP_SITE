<?php

declare(strict_types=1); ?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($siteTitle) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site em PHP do zero, sem banco de dados, com layout simples.">
    <link rel="stylesheet" href="<?= $baseUrl ?>assets/css/style.css">

</head>

<body>
    <header class="site-header">
        <div class="brand">
            <a href="<?= $baseUrl ?>" class="brand-link"><?= htmlspecialchars($siteTitle) ?></a>
        </div>
        <?php require __DIR__ . '/menu.php'; ?>
    </header>
    <main class="container">