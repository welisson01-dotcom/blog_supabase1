<?php

class Router
{
    public function run()
    {
        // Obtém o parâmetro "url" da requisição
        $url = $_GET['url'] ?? '';

        // Roteamento simples baseado em switch-case
        switch ($url) {

            // Página inicial
            case '':
            case 'home':
                require_once __DIR__ . '/../Controllers/HomeController.php';
                (new HomeController())->index();
                break;

            // Blog público
            case 'blog':
                require_once __DIR__ . '/../Controllers/BlogController.php';
                (new BlogController())->index();
                break;

            // Página individual do post
            case 'post':
                require_once __DIR__ . '/../Controllers/BlogController.php';
                (new BlogController())->ver();
                break;

            // Administração de posts
            case 'posts':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->listar();
                break;

            case 'post-novo':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->novoFormulario();
                break;

            case 'post-salvar':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->salvar();
                break;

            case 'post-editar':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->editarFormulario();
                break;

            case 'post-atualizar':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->atualizarPost();
                break;

            case 'post-excluir':
                require_once __DIR__ . '/../Controllers/AdminPostController.php';
                (new AdminPostController())->excluir();
                break;

            // Galeria
            case 'galeria':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->listar();
                break;

            case 'galeria-nova':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->criarFormulario();
                break;

            case 'galeria-salvar':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->salvar();
                break;

            case 'galeria-editar':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->editarFormulario();
                break;

            case 'galeria-atualizar':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->atualizar();
                break;

            case 'galeria-excluir':
                require_once __DIR__ . '/../Controllers/GaleriaController.php';
                (new GaleriaController())->excluir();
                break;

            // Produtos
            case 'produtos':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->listar();
                break;

            case 'produto-novo':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->novoFormulario();
                break;

            case 'produto-salvar':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->salvar();
                break;

            case 'produto-editar':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->editarFormulario();
                break;

            case 'produto-atualizar':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->atualizar();
                break;

            case 'produto-excluir':
                require_once __DIR__ . '/../Controllers/ProdutoController.php';
                (new ProdutoController())->excluir();
                break;

            // Página não encontrada
            default:
                echo "<h1>Página não encontrada</h1>";
                break;
        }
    }
}
