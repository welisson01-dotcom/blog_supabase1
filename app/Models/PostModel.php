<?php

require_once __DIR__ . '/../Core/Database.php';

class PostModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database(); //estanciando novo objeto database(criar um novo objeto)
    }

    // Criar um novo post
    public function criar(string $titulo, string $conteudo, string $capa)
    {
        $dados = [
            'title' => $titulo,
            'content' => $conteudo,
            'cover' => $capa
        ];

        return $this->db->insert('posts', $dados);
    }

    // Listar todos os posts
    public function listar()
    {
        return $this->db->select('posts');
    }

    // Buscar um post pelo ID
    public function buscarPorId(string $id)
    {
        return $this->db->select('posts', '?id=eq.' . $id);
    }
}