<?php

class Controller
{
    protected function view(string $nomeDaView, array $dados = [])
    {
        extract($dados);
        require_once __DIR__ . '/../Views/' . $nomeDaView . '.php';
    }
}