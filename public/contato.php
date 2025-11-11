<?php

declare(strict_types=1);

require __DIR__ . '/../src/Config.php';
require __DIR__ . '/../src/partials/header.php';

// ---------------------
// Processamento do formulário
// ---------------------
$mensagemSucesso = '';
$mensagemErro = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Captura e valida os dados recebidos
  $nome = trim((string) filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
  $email = trim((string) filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
  $mensagem = trim((string) filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

  // Validação simples
  if ($nome && $email && $mensagem) {
    // Simula envio (por enquanto só exibe mensagem)
    $mensagemSucesso = "Obrigado, <strong>{$nome}</strong>! Sua mensagem foi enviada com sucesso.";
  } else {
    $mensagemErro = "Por favor, preencha todos os campos corretamente.";
  }
}
?>

<section class="page-header">
    <h1>Contato</h1>
    <p>Envie sua mensagem preenchendo o formulário abaixo.</p>
</section>

<section class="contato-form">
    <?php if ($mensagemSucesso): ?>
    <div class="alert sucesso"><?= $mensagemSucesso ?></div>
    <?php elseif ($mensagemErro): ?>
    <div class="alert erro"><?= $mensagemErro ?></div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

        <button type="submit" class="btn">Enviar</button>
    </form>
</section>

<?php
require __DIR__ . '/../src/partials/footer.php';