<?php

declare(strict_types=1);

// Configurações simples para o site (sem banco de dados)
$siteTitle = 'Meu Website PHP (sem DB)';
$baseUrl   = '/'; // ajuste se publicar em subpasta

$menuItems = [
    ['label' => 'Início', 'href' => $baseUrl],
    ['label' => 'Sobre', 'href' => $baseUrl . 'sobre.php'],
    ['label' => 'Blog',  'href' => $baseUrl . 'blog.php'],
    ['label' => 'Contato', 'href' => $baseUrl . 'contato.php']
];
