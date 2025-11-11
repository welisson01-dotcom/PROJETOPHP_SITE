<?php
declare(strict_types=1);

/**
 * Classe responsável por gerenciar a conexão com o banco de dados SQLite.
 * Caso o arquivo do banco não exista, ele será criado automaticamente.
 */

class Database
{
    private static ?\PDO $instance = null;

    /**
     * Retorna a instância de conexão PDO.
     * Se não existir, cria uma nova e configura o banco.
     */
    public static function getConnection(): \PDO
    {
        if (self::$instance === null) {
            // Caminho absoluto para o banco
            $dbPath = __DIR__ . '/../database/blog.sqlite';

            // Cria a pasta 'database' se não existir
            if (!file_exists(dirname($dbPath))) {
                mkdir(dirname($dbPath), 0777, true);
            }

            // Conecta ao SQLite (cria o arquivo automaticamente se não existir)
            self::$instance = new \PDO('sqlite:' . $dbPath);
            self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            // Garante que a tabela 'posts' exista
            self::createTable();
        }

        return self::$instance;
    }

    /**
     * Cria a tabela 'posts' se ela não existir.
     * Cada post tem id, título, conteúdo e data.
     */
    private static function createTable(): void
    {
        $sql = "
            CREATE TABLE IF NOT EXISTS posts (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                titulo TEXT NOT NULL,
                conteudo TEXT NOT NULL,
                data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
            );
        ";

        self::$instance->exec($sql);
    }
}