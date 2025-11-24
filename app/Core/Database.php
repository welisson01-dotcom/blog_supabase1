<?php
// A classe database faz a conexão com o banco de dados.//
class Database
{
    private string $url; //guarda o caminho da app rast
    private string $key; //

    public function __construct()
    {
        $config = require __DIR__ . '/../../config/config.php';
        $this->url = $config['supabase_url']; //this é um método para repassar url com novo elemento para buscar informação.
        $this->key = $config['supabase_key'];
    }

    // Método para SELECT. o ato de você selecionar coisas
    public function select(string $tabela)
    {
        $endpoint = $this->url . '/rest/v1/' . $tabela;

        $ch = curl_init($endpoint);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'apikey: ' . $this->key,
            'Authorization: Bearer ' . $this->key,
            'Content-Type: application/json'
        ]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($ch);
        curl_close($ch);

        return json_decode($resposta, true);
    }

    // NOVO — Método para INSERT
    public function insert(string $tabela, array $dados)
    {
        $endpoint = $this->url . '/rest/v1/' . $tabela;

        $ch = curl_init($endpoint);

        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'apikey: ' . $this->key,
            'Authorization: Bearer ' . $this->key,
            'Content-Type: application/json',
            'Prefer: return=representation'
        ]);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dados));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $resposta = curl_exec($ch);
        curl_close($ch);

        return json_decode($resposta, true);
    }
}