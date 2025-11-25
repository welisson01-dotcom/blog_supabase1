<?php
require_once __DIR__ . '/../Core/Database.php';

class AdminModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Buscar usuário pelo email
    public function buscarPorEmail(string $email)
    {
        return $this->db->select(
            'usuarios_admin',
            '?email=eq.' . urlencode($email)
        );
    }
}