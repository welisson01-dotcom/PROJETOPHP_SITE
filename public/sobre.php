<?php

declare(strict_types=1);

require __DIR__ . '/../src/Config.php';
require __DIR__ . '/../src/partials/header.php';
?>
<section class="page-header">
    <h1>Sobre nós</h1>
    <p>Conheça a proposta e o propósito deste site PHP</p>
</section>

<section class="duas-colunas">
    <article class="col">
        <h2>Nossa História</h2>
        <p>Este projeto nasceu com o objetivo de ensinar os fundamentos do PHP de forma simples e prática.
            Tudo é construído passo a passo, sem frameworks e sem banco de dados no início — apenas HTML, CSS e PHP
            puro.</p>
        <p>Ao longo do curso, você aprenderá a evoluir este mesmo site para um blog completo, com banco de dados e
            painéis administrativos.</p>
    </article>
    <aside class="col">
        <h2>O que você vai aprender</h2>
        <ul>
            <li>Estrutura de diretórios organizada</li>
            <li>Includes e separação de layout</li>
            <li>Boas práticas com PHP moderno (8.4+)</li>
            <li>Criação de páginas dinâmicas</li>
            <li>Integração futura com MySQL</li>
        </ul>
    </aside>

</section>

<?php require __DIR__ . '/../src/partials/footer.php'; ?>