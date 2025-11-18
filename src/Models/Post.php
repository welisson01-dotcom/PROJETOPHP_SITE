<?php
declare(strict_types=1);
require_once __DIR__ . '/../Database.php';

/**
 * Classe Post — representa um artigo/post do blog.
 * Responsável por inserir e buscar posts no banco SQLite.
 */
class Post
{
    public int $id;
    public string $titulo;
    public string $conteudo;
    public string $data_criacao;

    /**
     * Retorna todos os posts do banco.
     * @return array
     */
    public static function all(): array
    {
        $pdo = Database::getConnection();

        $sql = "SELECT * FROM posts ORDER BY data_criacao DESC";
        $stmt = $pdo->query($sql);

        // Retorna todos os registros como array associativo
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Insere um novo post no banco.
     * @param string $titulo
     * @param string $conteudo
     */
    public static function create(string $titulo, string $conteudo): void
    {
        $pdo = Database::getConnection();

        $sql = "INSERT INTO posts (titulo, conteudo) VALUES (:titulo, :conteudo)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':titulo' => $titulo,
            ':conteudo' => $conteudo
        ]);
    }
}