<?php

declare(strict_types=1);
require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Models/Post.php';
require_once __DIR__ . '/../src/partials/header.php';
require_once __DIR__ . '/../src/partials/menu.php';

$posts = Post::all();
$msg = isset($_GET['msg']) ? trim($_GET['msg']) : '';
?>


<section class="principal">
    <div class="titulo-linha">
        <h1>📰 Blog de Aprendizado PHP</h1>
        <a class="btn-primario" href="/form_post.php">+ Novo Post</a>
    </div>

    <?php if ($msg): ?>
    <div class="alert alert-sucesso"><?= htmlspecialchars($msg) ?></div>
    <?php endif; ?>

    <?php if (empty($posts)): ?>
    <p>Nenhum post encontrado. <a href="/form_post.php">Adicionar primeiro post</a>.</p>
    <?php else: ?>
    <?php foreach ($posts as $post): ?>
    <article class="post">
        <h2><?= htmlspecialchars($post['titulo']) ?></h2>
        <p><?= nl2br(htmlspecialchars($post['conteudo'])) ?></p>
        <small>📅 Publicado em: <?= $post['data_criacao'] ?></small>
        <hr>
    </article>
    <?php endforeach; ?>
    <?php endif; ?>
</section>
</main>

<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>