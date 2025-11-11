<?php

declare(strict_types=1);

require __DIR__ . '/../src/Config.php';
require __DIR__ . '/../src/partials/header.php';
?>
<section class="hero">
    <div class="hero-texto">
        <h1>Bem-vindo ao meu site em PHP (sem banco de dados)</h1>
        <p>Este é o primeiro passo: estrutura mínima, includes e CSS simples.</p>
        <a class="btn" href="https://placehold.co/1200x600?text=Hero+Image" target="_blank" rel="noopener">Ver imagem
            exemplo</a>
    </div>
    <div class="hero-imagem">
        <img src="https://placehold.co/600x360/png" alt="Imagem de destaque">
    </div>
</section>

<section class="duas-colunas">
    <article class="col">
        <h2>Coluna A</h2>
        <p>Conteúdo estático simples. Depois transformaremos isso em “páginas” separadas (sobre, blog, contato).</p>
    </article>
    <aside class="col">
        <h2>Coluna B</h2>
        <p>Use esta coluna para destaques rápidos, links úteis ou avisos.</p>
    </aside>
</section>
<?php require __DIR__ . '/../src/partials/footer.php'; ?>