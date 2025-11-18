<?php

declare(strict_types=1);

// Configurações simples para o site (sem banco de dados)
$siteTitle = 'Meu Website PHP com Blog (SQLite)';
$baseUrl   = '/'; // ajuste se publicar em subpasta

$menuItems = [
    ['label' => 'Início',     'href' => $baseUrl . 'index.php'],
    ['label' => 'Sobre',      'href' => $baseUrl . 'sobre.php'],
    ['label' => 'Blog',       'href' => $baseUrl . 'blog.php'],
    ['label' => 'Criar Post', 'href' => $baseUrl . 'form_post.php'],
    ['label' => 'Contato',    'href' => $baseUrl . 'contato.php']
];
