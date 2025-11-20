<?php

require_once __DIR__ . '/../Core/Controller.php';
require_once __DIR__ . '/../Models/POstModel.php';
require_once __DIR__ . '/../Models/GaleriaModel.php';
require_once __DIR__ . '/../Models/ProdutoModel.php';

class HomeController extends Controller
{


public function index()

    {
        //Buscar posts
$postModel = new PostMOdel();
$posts = $postModel ->listar();

    }





}
