<?php
declare(strict_types=1);

require __DIR__ . '/../src/Config.php';
require __DIR__ . '/../src/partials/header.php';

// Simulação de postagens estáticas (array simples)
$posts = [
  [
    'titulo' => 'Primeiros Passos com PHP',
    'data' => '2025-11-05',
    'conteudo' => 'Aprenda a estruturar seu primeiro projeto PHP com includes e boas práticas.'
  ],
  [
    'titulo' => 'Como Funciona o require() no PHP',
    'data' => '2025-11-06',
    'conteudo' => 'Entenda como dividir seu código em partes e reutilizar o mesmo cabeçalho, menu e rodapé.'
  ],
  [
    'titulo' => 'O que é declare(strict_types=1)',
    'data' => '2025-11-07',
    'conteudo' => 'Veja por que a tipagem estrita ajuda a evitar erros e deixar seu código mais profissional.'
  ],
];
?>

<section class="page-header">
    <h1>Blog</h1>
    <p>Artigos e tutoriais sobre PHP, boas práticas e desenvolvimento web.</p>
</section>

<section class="posts">
    <?php foreach ($posts as $post): ?>
    <article class="post">
        <h2><?= htmlspecialchars($post['titulo']) ?></h2>
        <p class="data"><?= date('d/m/Y', strtotime($post['data'])) ?></p>
        <p><?= htmlspecialchars($post['conteudo']) ?></p>
        <a class="btn" href="#">Ler mais</a>
    </article>
    <?php endforeach; ?>
</section>

<?php
require __DIR__ . '/../src/partials/footer.php';