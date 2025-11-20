<?php

class Router
{
    public function run()
    {
        $url = $_GET['url'] ?? '';


        switch ($url) {


            //pagina inicial
            case'':
            case'home':
            require_once __DIR__ . '/../Controllers/HomeController.php';
            (new HomeController())->index();
            break;

            //blog público
            case 'blog':
                require_once __DIR__ . '/../Controllers/BlogContoller.php';
                (new BlogController())->index();
                break;
            
            //página individual do post
            case 'post':
                require_once __DIR__ . '/../Controllers/BlogContoller.php';
                (new BlogController())->ver();
                break;

            // Administração de posts
            case 'posts':
                require_once __DIR__ . '/../Controllers/AdminPOstContoller.php';
                (new AdminPOstContoller())->listar();
                break;

            case 'post-novo':
                require_once __DIR__ . '/../Controllers/AdminPOstContoller.php';
                (new AdminPOstContoller())->novoFormulário();
                break;

            case 'post-salvar':
                require_once __DIR__ . '/../Controllers/AdminPOstContoller.php';
                (new AdminPOstContoller())->salvar();
                break;


            
            
        }   
    }
}