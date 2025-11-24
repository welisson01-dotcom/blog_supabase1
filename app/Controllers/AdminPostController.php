<?php
require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Core/Auth.php';
require_once __DIR__ . '/../Models/PostModel.php';

class AdminPostController extends Controller
{
    // Exibir formulário de criação
    public function novoFormulario()
    {
        Auth::verificar();
        $this->view('post_novo');
    }

    // Salvar novo post
    public function salvar()
    {
        Auth::verificar();

        $titulo = $_POST['titulo'] ?? '';
        $conteudo = $_POST['conteudo'] ?? '';

        // Upload da capa
        $arquivo = $_FILES['capa'] ?? null;

        if ($arquivo === null || $arquivo['error'] !== UPLOAD_ERR_OK) {
            echo "Erro ao enviar imagem.";
            return;
        }

        $nomeArquivo = time() . '_' . $arquivo['name'];
        $caminhoRelativo = '/uploads/posts/' . $nomeArquivo;
        $caminhoFisico = __DIR__ . '/../../public' . $caminhoRelativo;

        // Cria pasta se não existir
        $pasta = __DIR__ . '/../../public/uploads/posts';
        if (!is_dir($pasta)) {
            mkdir($pasta, 0777, true);
        }

        move_uploaded_file($arquivo['tmp_name'], $caminhoFisico);

        // Salvar no Supabase
        $model = new PostModel();
        $model->criar($titulo, $conteudo, $caminhoRelativo);

        echo "Post criado com sucesso!";
    }
}
