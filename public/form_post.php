<?php

declare(strict_types=1); // ativa tipagem forte

session_start();

require_once __DIR__ . '/../src/Config.php';
require_once __DIR__ . '/../src/Models/Post.php';
require_once __DIR__ . '/../src/partials/header.php';
require_once __DIR__ . '/../src/partials/menu.php';

// Gera token CSRF se não existir
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(16));
}

$errors = [];
$old = ['titulo' => '', 'conteudo' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1) CSRF
    $token = $_POST['csrf_token'] ?? '';
    if (!hash_equals($_SESSION['csrf_token'] ?? '', $token)) {
        $errors[] = 'Sessão expirada. Atualize a página e tente novamente.';
    }

    // 2) Dados
    $titulo = trim($_POST['titulo'] ?? '');
    $conteudo = trim($_POST['conteudo'] ?? '');
    $old = ['titulo' => $titulo, 'conteudo' => $conteudo];

    // 3) Validação simples
    if ($titulo === '' || mb_strlen($titulo) < 3) {
        $errors[] = 'Título é obrigatório (mín. 3 caracteres).';
    }
    if ($conteudo === '' || mb_strlen($conteudo) < 10) {
        $errors[] = 'Conteúdo é obrigatório (mín. 10 caracteres).';
    }

    // 4) Persistência
    if (!$errors) {
        Post::create($titulo, $conteudo);
        // Evita reenvio no refresh
        header('Location: /blog.php?msg=' . urlencode('Post criado com sucesso!'));
        exit;
    }
}
?>

<section class="conteudo">
    <h1>Criar novo post</h1>

    <?php if ($errors): ?>
        <div class="alert alert-erro">
            <ul>
                <?php foreach ($errors as $e): ?>
                    <li><?= htmlspecialchars($e) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="post" class="form">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token']) ?>">

        <div class="form-grupo">
            <label for="titulo">Título</label>
            <input type="text" id="titulo" name="titulo" required minlength="3"
                value="<?= htmlspecialchars($old['titulo']) ?>" placeholder="Ex.: Meu primeiro post">
        </div>

        <div class="form-grupo">
            <label for="conteudo">Conteúdo</label>
            <textarea id="conteudo" name="conteudo" rows="8" required minlength="10"
                placeholder="Escreva o conteúdo do post..."><?= htmlspecialchars($old['conteudo']) ?></textarea>
        </div>

        <div class="form-acoes">
            <button type="submit">Publicar</button>
            <a class="btn-secundario" href="<?= $baseUrl ?>blog.php">Cancelar</a>
        </div>
    </form>
</section>
</main>

<?php require_once __DIR__ . '/../src/partials/footer.php'; ?>